<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Kreiranje grupe";
include '../zaglavlje.php';
include '../meni.php';
include '../dohvacanje_podataka/dohvatPomaka.php';

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 4) {
    header("Location: index.php");
    exit();
}

$neuspjeh = "";

$veza = new Baza();
$veza->spojiDB();

if(isset($_POST['submitGrupa'])){
    if(provjeraIspravnosti()){

    $upit = "INSERT INTO grupa (grupa_naziv, korisnici_id) VALUES ('{$_POST['naziv']}', '{$_COOKIE['korisnikId']}')";
    $rezultat = $veza->updateDB($upit);
    header("Location: ../popisGrupa.php");
    
    }
    else{
        $neuspjeh = "Unesite naziv grupe!";
    }
}
$veza->zatvoriDB();

$smarty->assign('neuspjeh', $neuspjeh);
$smarty->display('kreiranjeGrupe.tpl');
$smarty->display('podnozje.tpl');

function provjeraIspravnosti(){
    if(empty($_POST['naziv'])){
        return false;
    }
    else{
        return true;
    }
}
ob_end_flush();
?>