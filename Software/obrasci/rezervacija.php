<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Rezervacija";
include '../zaglavlje.php';
include '../meni.php';
include '../dohvacanje_podataka/dohvatPomaka.php';
$neuspjeh = "";

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['submitRezervacija'])) {
    if(!empty($_POST['datum']) && !empty($_POST['vrijeme']) && !empty($_POST['brojDjece']) && !empty($_POST['sudionici'])){
        $stvarniDatum = $_POST['datum'];
    $stvarnoVrijeme = $_POST['vrijeme'];
    $stvarniDatumIVrijeme = strtotime($stvarniDatum . $stvarnoVrijeme);
    $vrijemeSPomakom = $stvarniDatumIVrijeme + (dohvatiPomak() * 60 * 60);
    $virtualniDatum = date('Y-m-d', $vrijemeSPomakom);
    $virtualnoVrijeme = date('H:i:s', $vrijemeSPomakom);

    $veza = new Baza();
    $veza->spojiDB();
    
    $upitGrupa = "SELECT grupa_id FROM grupa WHERE grupa_naziv = '{$_POST['grupa']}'";
    $rezultatGrupa = $veza->selectDB($upitGrupa);
    while ($red = mysqli_fetch_array($rezultatGrupa)) {
        $grupaId = $red[0];
    }
    
    $upit = "INSERT INTO rezervacija (grupa_id, korisnici_id, rezervacija_DatumRodendana, rezervacija_vrijemeRodendana, rezervacija_brojDjece, rezervacija_sudionici, rezervacija_uputa, rezervacija_status) "
            . "VALUES ('{$grupaId}', '{$_COOKIE['korisnikId']}', '{$virtualniDatum}', '{$virtualnoVrijeme}', '{$_POST['brojDjece']}', '{$_POST['sudionici']}', '{$_POST['upute']}', 'U tijeku')";
    $rezultat = $veza->updateDB($upit);

    $veza->zatvoriDB();
    }
    else{
        $neuspjeh = "Niste unesli sve podatke!";
    }
}
$smarty->assign('neuspjeh', $neuspjeh);
$smarty->display('rezervacija.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
