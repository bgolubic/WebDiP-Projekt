<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Ažuriranje grupe";
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

$grupaId = $_GET['id'];

$neuspjeh = "";

$veza = new Baza();
$veza->spojiDB();

$upitPodaci = "SELECT * FROM `grupa` WHERE grupa_id = '{$grupaId}'";
$rezultat = $veza->selectDB($upitPodaci);
    
while($red = mysqli_fetch_array($rezultat)){
    $naziv = $red[1];
}

if(isset($_POST['submitGrupa'])){
    if(provjeraIspravnosti()){

    $upit = "UPDATE `grupa` SET grupa_naziv = '{$_POST['naziv']}' WHERE grupa_id = {$grupaId}";
    $rezultat = $veza->updateDB($upit);
    header("Location: ../popisGrupa.php");
    
    }
    else{
        $neuspjeh = "Unesite naziv!";
    }
}
$veza->zatvoriDB();
$smarty->assign('naziv', $naziv);
$smarty->assign('neuspjeh', $neuspjeh);
$smarty->display('azuriranjeGrupe.tpl');
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