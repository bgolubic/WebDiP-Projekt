<?php

require '../baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT * FROM `grupa`";
$rezultat = $veza->selectDB($upit);

while($red = mysqli_fetch_array($rezultat)){
    $podaci[] = $red;
}

$veza->zatvoriDB();
echo json_encode($podaci);