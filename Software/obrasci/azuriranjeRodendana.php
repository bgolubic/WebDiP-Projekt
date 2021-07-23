<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Ažuriranje rođendana";
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

$rodendanId = $_GET['id'];

$neuspjeh = "";


$veza = new Baza();
$veza->spojiDB();

$upitPodaci = "SELECT * FROM `rodendan` WHERE rodendan_id = '{$rodendanId}'";
$rezultat = $veza->selectDB($upitPodaci);
    
while($red = mysqli_fetch_array($rezultat)){
    $naziv = $red[3];
    $opis = $red[4];
}

if(isset($_POST['submitRodendan'])){
    if(provjeraIspravnosti()){

    $upit = "UPDATE `rodendan` SET rodendan_naziv = '{$_POST['naziv']}', rodendan_opis = '{$_POST['opis']}' WHERE rodendan_id = {$rodendanId}";
    $rezultat = $veza->updateDB($upit);
    header("Location: ../popisRodendana.php");
    
    }
    else{
        $neuspjeh = "Unesite sve podatke!";
    }
}
$veza->zatvoriDB();
$smarty->assign('naziv', $naziv);
$smarty->assign('opis', $opis);
$smarty->assign('neuspjeh', $neuspjeh);
$smarty->display('azuriranjeRodendana.tpl');
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
