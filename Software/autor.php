<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();

$naslov = "Autor";
include './zaglavlje.php';
include 'meni.php';

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    header("Location: index.php");
    exit();
}

if (isset($_COOKIE['autenticiran'])) {
    $veza = new Baza();
    $veza->spojiDB();

    $upit = "SELECT * FROM `DZ4_korisnik`";
    $rezultat = $veza->selectDB($upit);
    $veza->zatvoriDB();
}

$smarty->display('autor.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
            
