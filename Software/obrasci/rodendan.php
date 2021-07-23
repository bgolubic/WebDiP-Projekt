<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Kreiranje rođendana";
include '../zaglavlje.php';
include '../meni.php';
include '../dohvacanje_podataka/dohvatPomaka.php';

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 3) {
    header("Location: index.php");
    exit();
}

$rezervacijaId = $_GET['id'];
$korisnikId = $_COOKIE['korisnikId'];

$neuspjeh = "";
if(isset($_POST['submitRodendan'])){
    if(provjeraIspravnosti()){
        $veza = new Baza();
    $veza->spojiDB();

    $upit = "INSERT INTO `rodendan` (korisnici_id, rezervacija_id, rodendan_naziv, rodendan_opis) VALUES ('{$korisnikId}', '{$rezervacijaId}', '{$_POST['naziv']}', '{$_POST['opis']}')";
    $rezultat = $veza->updateDB($upit);
    header("Location: ../popisRodendana.php");
    $veza->zatvoriDB();
    }
    else{
        $neuspjeh = "Unesite sve podatke!";
    }
}

$smarty->assign('neuspjeh', $neuspjeh);
$smarty->display('rodendan.tpl');
$smarty->display('podnozje.tpl');

function provjeraIspravnosti(){
    if(empty($_POST['naziv']) || empty($_POST['opis'])){
        return false;
    }
    else{
        return true;
    }
}
ob_end_flush();
?>
