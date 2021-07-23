<?php
ob_start();
require './baza.class.php';

$korisnikId = $_GET['id'];

$veza = new Baza();
$veza->spojiDB();

$upit = "UPDATE korisnici SET uloge_id = 3 WHERE korisnici_id = '{$korisnikId}'";
$rezultat = $veza->selectDB($upit);
header("Location: obrasci/kreiranjeModeratora.php");
$veza->zatvoriDB();
ob_end_flush();
?>