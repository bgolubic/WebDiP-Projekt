<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Zaboravljena lozinka";
include '../zaglavlje.php';
include '../meni.php';

if (isset($_POST['submit']) && !empty($_POST['email'])) {

    $abeceda = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $mix = str_shuffle($abeceda);
    $lozinka = substr($mix, 0, 8);
    $lozinkaSHA1 = hash('sha1', $lozinka);
    $lozinkaSHA256 = hash('sha256', $lozinka);

    $veza = new Baza();
    $veza->spojiDB();
    
    $uspjesno = false;
    $upitKorisnik = "SELECT * FROM korisnici WHERE korisnici_email = '{$_POST['email']}'";
    $rezultatKorisnik = $veza->selectDB($upitKorisnik);
    while ($red = mysqli_fetch_array($rezultatKorisnik)) {
        if($red){
            $uspjesno = true;
        }
    }
    if($uspjesno){
        $upitLozinka = "UPDATE korisnici SET korisnici_lozinka = '{$lozinka}', korisnici_lozinkaSHA1 = '{$lozinkaSHA1}', korisnici_lozinkaSHA256 = '{$lozinkaSHA256}' WHERE korisnici_email = '{$_POST['email']}'";
        $rezultatLozinka = $veza->updateDB($upitLozinka);
        
        $mail_to = $_POST['email'];
        $mail_subject = '[WebDiP] Resetiranje lozinke';
        $mail_body = 'Vaša nova lozinka je: ' . $lozinka;
        $headers[] = 'From: noreply@barka.foi.hr';
        
        mail($mail_to, $mail_subject, $mail_body, implode("\r\n", $headers));
    }
    
    echo "Nova lozinka vam je poslana na vaš e-mail ako ste ga ispravno unesli!";
    
    $veza->zatvoriDB();
}

$smarty->display('zaboravljenaLozinka.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>