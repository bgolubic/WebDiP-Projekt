<?php
ob_start();
require './baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "DELETE FROM rezervacija WHERE rezervacija_id = '{$_GET['id']}'";
$rezultat = $veza->updateDB($upit);
header("Location: obrasci/rezervacija.php");
$veza->zatvoriDB();
ob_end_flush();
?>