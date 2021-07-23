<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
//var_dump($putanja);
$direktorij = dirname(getcwd());
$naslov = "Registracija";
include '../zaglavlje.php';
include '../meni.php';

$greske = array();
$provjeraLozinke = "";
$ispravanUnos = false;
if (!empty($_POST)) {
    foreach ($_POST as $k => $v) {
        if (empty($v) && $k !== "grad" && $k !== "tel" && $k !== "g-recaptcha-response") {
            $greske[] = $k;
        }
    }
    if(!isset($_POST['uvjeti'])){
                $greske[] = "nisu prihvaćeni uvjeti!";
            }
            if(strlen($_POST['g-recaptcha-response']) === 0){
                $greske[] = "CAPTCHA";
            }
    if ($_POST["lozinka"] !== $_POST["ponLozinka"]) {
        $provjeraLozinke = "Lozinka i potvrda lozinke nisu iste!";
        $ispravanUnos = false;
    } else {
        if (empty($greske)) {
            $ispravanUnos = true;
        }
    }

    if ($ispravanUnos) {
        $url = "http://";
        $url.= $_SERVER['HTTP_HOST'];   
        $url.= dirname($_SERVER['REQUEST_URI'], 2);
        $kriptiranaLozinkaSHA1 = hash('sha1', $_POST['lozinka']);
        $kriptiranaLozinkaSHA256 = hash('sha256', $_POST['lozinka']);
        $kljuc = hash('sha256', rand());
        $trajanjeKljuca = date("Y-m-d H:i:s", strtotime("+14 hours"));
        $veza = new Baza();
        $veza->spojiDB();
        $upit = "INSERT INTO `korisnici` (uloge_id, korisnici_ime, korisnici_prezime, korisnici_email, korisnici_korisnickoIme, korisnici_lozinka, korisnici_lozinkaSHA1, korisnici_lozinkaSHA256,"
                . " korisnici_grad, korisnici_telefon, korisnici_uvjeti, korisnici_status, korisnici_blokiran, korisnici_brojNeuspjesnihPrijava, korisnici_datumRegistracije, korisnici_aktivacijskiKljuc, korisnici_trajanjeKljuca)"
                . "VALUES ('2', '{$_POST['ime']}', '{$_POST['prez']}', '{$_POST['email']}', '{$_POST['korIme']}', '{$_POST['lozinka']}', '{$kriptiranaLozinkaSHA1}', '{$kriptiranaLozinkaSHA256}',"
                . "'{$_POST['grad']}', '{$_POST['tel']}', now(), '0', '0', '0', now(), '{$kljuc}', '{$trajanjeKljuca}')";
        setcookie("autenticiran", $_POST['korIme'], false, '/', false);
        Sesija::kreirajKorisnika($_POST['korIme'], 2);

        $mail_to = $_POST['email'];
        $mail_subject = '[WebDiP] Email aktivacija';
        $mail_body = 'Kliknite <a href="'.$url.'/emailAktivacija.php?kljuc='.$kljuc.'">ovdje</a> za aktivaciju svog računa!';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: noreply@barka.foi.hr';

        if (mail($mail_to, $mail_subject, $mail_body, implode("\r\n", $headers))) {
            echo("Poslana poruka za: '$mail_to'!");
        } else {
            echo("Problem kod poruke za: '$mail_to'!");
        }

        $rezultat = $veza->updateDB($upit);
        $veza->zatvoriDB();
    }
}

$smarty->assign("greske", $greske);
$smarty->assign("provjeraLozinke", $provjeraLozinke);
$smarty->display('registracija.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
