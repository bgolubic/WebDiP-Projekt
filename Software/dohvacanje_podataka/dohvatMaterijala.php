<?php

require '../baza.class.php';

$grupaId = $_GET['id'];
$prijavljen = $_GET['prijavljen'];

$veza = new Baza();
$veza->spojiDB();

if ($prijavljen == '1') {
    $upit = "SELECT * FROM materijali m, rezervacija_materijali rm, rezervacija r WHERE "
            . "m.materijali_id = rm.materijali_id AND rm.rezervacija_id = r.rezervacija_id AND r.grupa_id = '{$grupaId}'";
} else {
    $upit = "SELECT * FROM materijali m, rezervacija_materijali rm, rezervacija r WHERE "
            . "m.materijali_id = rm.materijali_id AND rm.rezervacija_id = r.rezervacija_id AND r.grupa_id = '{$grupaId}' AND rm.suglasnost = 1";
}
$rezultat = $veza->selectDB($upit);
if ($rezultat->num_rows != 0) {
    while ($red = mysqli_fetch_array($rezultat)) {
        $podaci[] = $red;
    }
}
else{
    $podaci[] = "";
}

$veza->zatvoriDB();
echo json_encode($podaci);
