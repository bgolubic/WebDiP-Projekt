<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();
$naslov = "Početna stranica";
include './zaglavlje.php';
include './meni.php';


if (!strpos($_SERVER["REQUEST_URI"], 'index.php') !== false) {
    header("Location: index.php");
    exit();
}

$podaci = array();

$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT g.grupa_naziv, COUNT(ro.rodendan_id) AS grupa_brojRodendana FROM grupa g "
        . "LEFT JOIN rezervacija r ON r.grupa_id = g.grupa_id LEFT JOIN rodendan ro ON ro.rezervacija_id = r.rezervacija_id GROUP BY g.grupa_naziv ";
$rezultat = $veza->selectDB($upit);
while ($red = mysqli_fetch_array($rezultat)) {
    $podaci[] = $red;
}

$veza->zatvoriDB();

if (!strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
    header("Location: index.php");
    exit();
}

$smarty->assign("podaci", $podaci);
$smarty->display('index.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
            
