<?php
ob_start();
require './baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upitKorisnik = "SELECT * FROM `korisnici` WHERE korisnici_aktivacijskiKljuc = '{$_GET['kljuc']}'";
$rezultatKorisnik = $veza->selectDB($upitKorisnik);
while ($red = mysqli_fetch_array($rezultatKorisnik)) {
    $email = $red["korisnici_email"];
    $status = $red["korisnici_status"];
    $trajanjeKljuca = $red["korisnici_trajanjeKljuca"];
}
if ($status === '1') {
    $veza->zatvoriDB();
    header("Location: ./obrasci/prijava.php?aktivacija=0");
} else {
    if (date("Y-m-d H:i:s") < $trajanjeKljuca) {
        $upitAktivacija = "UPDATE korisnici SET korisnici_status = 1 WHERE korisnici_aktivacijskiKljuc = '{$_GET['kljuc']}'";
        $rezultatAktivacija = $veza->updateDB($upitAktivacija);
        $veza->zatvoriDB();
        header("Location: ./obrasci/prijava.php?aktivacija=1");
    } else {
        $kljuc = hash('sha256', rand());
        $trajanjeKljuca = date("Y-m-d H:i:s", strtotime("+14 hours"));
        $url = "http://";
        $url .= $_SERVER['HTTP_HOST'];
        $url .= dirname($_SERVER['REQUEST_URI'], 1);
        
        $upitKljuc = "UPDATE korisnici SET korisnici_aktivacijskiKljuc = '{$kljuc}', korisnici_trajanjeKljuca = '{$trajanjeKljuca}' WHERE korisnici_email = '{$email}'";
        
        $mail_to = $email;
        $mail_subject = '[WebDiP] Email aktivacija';
        $mail_body = 'Kliknite <a href="' . $url . '/emailAktivacija.php?kljuc=' . $kljuc . '">ovdje</a> za aktivaciju svog računa!';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: noreply@barka.foi.hr';

        if (mail($mail_to, $mail_subject, $mail_body, implode("\r\n", $headers))) {
            echo("Poslana poruka za: '$mail_to'!");
        } else {
            echo("Problem kod poruke za: '$mail_to'!");
        }
        $rezultatKljuc = $veza->updateDB($upitKljuc);
        $veza->zatvoriDB();
        header("Location: ./obrasci/prijava.php?aktivacija=2");
    }
}
ob_end_flush();
?>