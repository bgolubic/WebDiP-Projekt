<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Otkazivanje rođendana";
include '../zaglavlje.php';
include '../meni.php';
include '../dohvacanje_podataka/dohvatPomaka.php';

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 3) {
    header("Location: index.php");
    exit();
}

$rodendanId = $_GET['id'];

$neuspjeh = "";


$veza = new Baza();
$veza->spojiDB();

$upitPodaci = "SELECT re.rezervacija_datumRodendana FROM rodendan r, rezervacija re WHERE r.rezervacija_id = re.rezervacija_id && r.rodendan_id = '{$rodendanId}'";
$rezultatPodaci = $veza->selectDB($upitPodaci);

while($red = mysqli_fetch_array($rezultatPodaci)){
    $datum = $red[0];
}
if(isset($_POST['submitZamjena'])){
    $upit = "UPDATE rodendan SET rodendan_zamjenskiTermin = '{$_POST['datum']}' WHERE rodendan_id = '{$rodendanId}'";
    $rezultat = $veza->updateDB($upit);
    header("Location: ../popisRodendana.php");
}


$veza->zatvoriDB();
$smarty->assign('datum', $datum);
$smarty->display('otkazRodendana.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>