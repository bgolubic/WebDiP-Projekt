<?php

require '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT * FROM rezervacija";
$rezultat = $veza->selectDB($upit);

while($red = mysqli_fetch_array($rezultat)){
    $podaci[] = $red;
}

$veza->zatvoriDB();
echo json_encode($podaci);