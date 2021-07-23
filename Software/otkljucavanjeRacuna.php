<?php
ob_start();
require './baza.class.php';

$korisnikId = $_GET['id'];


$veza = new Baza();
$veza->spojiDB();

$upit = "UPDATE `korisnici` SET korisnici_brojNeuspjesnihPrijava = 0, korisnici_blokiran = 0 WHERE korisnici_id = {$korisnikId}";
$rezultat = $veza->updateDB($upit);
header("Location: racuni.php");

$veza->zatvoriDB();
ob_end_flush();
?>