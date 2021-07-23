<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Upload materijala";
include '../zaglavlje.php';
include '../meni.php';
include '../dohvacanje_podataka/dohvatPomaka.php';

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] < 2) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['submitMaterijal'])) {
    $userfile = $_FILES['materijal']['tmp_name'];
    $userfile_name = $_FILES['materijal']['name'];
    $userfile_size = $_FILES['materijal']['size'];
    $userfile_type = $_FILES['materijal']['type'];
    $userfile_error = $_FILES['materijal']['error'];
    if ($userfile_error > 0) {
        echo 'Problem: ';
        switch ($userfile_error) {
            case 1: echo 'Veličina veća od ' . ini_get('upload_max_filesize');
                break;
            case 2: echo 'Veličina veća od ' . $_POST["MAX_FILE_SIZE"] . 'B';
                break;
            case 3: echo 'Datoteka djelomično prenesena';
                break;
            case 4: echo 'Datoteka nije prenesena';
                break;
        }
        exit;
    }

    if ($_POST['vrsta'] === "Audio") {
        if ($userfile_type != 'audio/mpeg') {
            echo 'Problem: datoteka ' . $userfile_name . ' nije audio';
            exit;
        }
    } else if ($_POST['vrsta'] === "Video") {
        if ($userfile_type != 'video/mp4') {
            echo 'Problem: datoteka ' . $userfile_name . ' nije video';
            exit;
        }
    } else if ($_POST['vrsta'] === "Slika") {
        if ($userfile_type != 'image/jpeg') {
            echo 'Problem: datoteka ' . $userfile_name . ' nije slika';
            exit;
        }
    }

    $upfile = $direktorij . '/multimedija/' . $userfile_name;

    if (is_uploaded_file($userfile)) {
        if (!move_uploaded_file($userfile, $upfile)) {
            echo 'Problem: nije moguće prenijeti datoteku na odredište';
            exit;
        }
        $veza = new Baza();
        $veza->spojiDB();

        $upitInsertMaterijali = "INSERT INTO materijali (materijali_ime, materijali_vrsta, materijali_putanja) "
                . "VALUES ('{$userfile_name}', '{$_POST['vrsta']}', '{$putanja}')";
        $rezultatInsertMaterijali = $veza->updateDB($upitInsertMaterijali);
        if(isset($_POST['suglasnost'])){
            $suglasnost = "1";
        }
        else{
            $suglasnost = "0";
        }
        $upitInsertFK = "INSERT INTO rezervacija_materijali (rezervacija_id, materijali_id, suglasnost)"
                . "VALUES ('{$_POST['rezervacija']}', '{$veza->idZadnjegDB()}', '{$suglasnost}')";
        $rezultatInsertFK = $veza->updateDB($upitInsertFK);

        $veza->zatvoriDB();
    } else {
        echo 'Problem: mogući napad prijenosom. Datoteka: ' . $userfile_name;
        exit;
    }
}

$smarty->display('uploadMaterijala.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
