<?php
ob_start();
require './baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "UPDATE rezervacija SET rezervacija_status = 'Potvrđeno' WHERE rezervacija_id = '{$_GET['id']}'";
$rezultat = $veza->updateDB($upit);
header("Location: obrasci/rodendan.php?id={$_GET['id']}");
$veza->zatvoriDB();

ob_end_flush();
?>