<?php
ob_start();
require './baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "UPDATE rezervacija SET rezervacija_status = 'Odbijeno' WHERE rezervacija_id = '{$_GET['id']}'";
$rezultat = $veza->updateDB($upit);
header("Location: popisRezervacija.php");
$veza->zatvoriDB();
ob_end_flush();
?>