<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();
$naslov = "Popis rođendana";
include './zaglavlje.php';
include './meni.php';
$podaci = array();

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 3) {
    header("Location: index.php");
    exit();
}


$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT r.rodendan_id, r.korisnici_id, r.rezervacija_id, r.rodendan_naziv, r.rodendan_opis, r.rodendan_zamjenskiTermin, re.rezervacija_datumRodendana FROM rodendan r, rezervacija re WHERE r.rezervacija_id = re.rezervacija_id";
$rezultat = $veza->selectDB($upit);
    
while($red = mysqli_fetch_array($rezultat)){
    $podaci[] = $red;
}
$veza->zatvoriDB();

$smarty->assign("podaci", $podaci);
$smarty->display('popisRodendana.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
            
