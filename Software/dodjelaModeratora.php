<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();
$naslov = "Dodjela moderatora";
include './zaglavlje.php';
include './meni.php';
$podaci = array();

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 4) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['submitDodjela'])) {
    $veza = new Baza();
    $veza->spojiDB();
    
    $upitGrupa = "SELECT grupa_id FROM grupa WHERE grupa_naziv = '{$_POST['grupa']}'";
    $rezultatGrupa = $veza->selectDB($upitGrupa);
    while ($red = mysqli_fetch_array($rezultatGrupa)) {
        $grupaId = $red[0];
    }

    $upitKorisnik = "SELECT korisnici_id FROM korisnici WHERE korisnici_korisnickoIme = '{$_POST['moderator']}'";
    $rezultatKorisnik = $veza->selectDB($upitKorisnik);
    while ($red = mysqli_fetch_array($rezultatKorisnik)) {
        $korisnikId = $red[0];
    }
    
    $upitInsert = "INSERT INTO moderiranje (grupa_id, korisnici_id) VALUES ('{$grupaId}', '{$korisnikId}')";
    $rezultatInsert = $veza->updateDB($upitInsert);

    $veza->zatvoriDB();
}

$smarty->assign("podaci", $podaci);
$smarty->display('dodjelaModeratora.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>