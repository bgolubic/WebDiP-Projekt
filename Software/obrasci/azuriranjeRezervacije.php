<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Ažuriranje rezervacije";
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

$neuspjeh = "";

$veza = new Baza();
$veza->spojiDB();

$upitPodaci = "SELECT * FROM `rezervacija` WHERE rezervacija_id = '{$rezervacijaId}'";
$rezultat = $veza->selectDB($upitPodaci);
    
while($red = mysqli_fetch_array($rezultat)){
    $datum = $red[3];
    $vrijeme = $red[4];
    $brojDjece = $red[5];
    $sudionici = $red[6];
    $upute = $red[7];
}

if(isset($_POST['submitRezervacija'])){
    if(provjeraIspravnosti()){

    $upit = "UPDATE `rezervacija` SET rezervacija_datumRodendana = '{$_POST['datum']}', rezervacija_vrijemeRodendana = '{$_POST['vrijeme']}', "
    . "rezervacija_brojDjece =  '{$_POST['brojDjece']}', rezervacija_uputa = '{$_POST['upute']}' WHERE rezervacija_id = {$rezervacijaId}";
    $rezultat = $veza->updateDB($upit);
    header("Location: rezervacija.php");
    
    }
    else{
        $neuspjeh = "Unesite sve podatke!";
    }
}
$veza->zatvoriDB();
$smarty->assign('datum', $datum);
$smarty->assign('vrijeme', $vrijeme);
$smarty->assign('brojDjece', $brojDjece);
$smarty->assign('sudionici', $sudionici);
$smarty->assign('upute', $upute);
$smarty->assign('neuspjeh', $neuspjeh);
$smarty->display('azuriranjeRezervacije.tpl');
$smarty->display('podnozje.tpl');

function provjeraIspravnosti(){
    if(empty($_POST['datum']) || empty($_POST['vrijeme']) || empty($_POST['brojDjece'])){
        return false;
    }
    else{
        return true;
    }
}
ob_end_flush();
?>