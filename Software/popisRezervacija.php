<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();
$naslov = "Popis rezervacija";
include './zaglavlje.php';
include './meni.php';
$podaci = array();
$neuspjeh = "";
if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 3) {
    header("Location: index.php");
    exit();
}


$veza = new Baza();
$veza->spojiDB();
if($_SESSION['uloga'] === '3'){
    $upit = "SELECT * FROM rezervacija r, moderiranje m WHERE r.grupa_id = m.grupa_id && m.korisnici_id = {$_COOKIE['korisnikId']}";
}
else{
    $upit = "SELECT * FROM rezervacija";
}
$rezultat = $veza->selectDB($upit);
if(!empty($rezultat)){
    while($red = mysqli_fetch_array($rezultat)){
    $podaci[] = $red;
}
}

$veza->zatvoriDB();

if(empty($podaci)){
    $neuspjeh = "Niste dodijeljeni niti jednoj grupi!";
}

$smarty->assign("podaci", $podaci);
$smarty->assign("neuspjeh", $neuspjeh);
$smarty->display('popisRezervacija.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
            
