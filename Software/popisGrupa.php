<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();
$naslov = "Popis grupa";
include './zaglavlje.php';
include 'meni.php';

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 4) {
    header("Location: index.php");
    exit();
}

$smarty->display('popisGrupa.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>