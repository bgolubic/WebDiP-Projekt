<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Kreiranje moderatora";
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

$smarty->display('kreiranjeModeratora.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>