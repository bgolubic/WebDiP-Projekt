<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI']);
$direktorij = getcwd();
$naslov = "Backup";
include './zaglavlje.php';
include './meni.php';
$podaci = array();

if (!isset($_SESSION["uloga"])) {
    header("Location: obrasci/prijava.php");
    exit();
} elseif (isset($_SESSION["uloga"]) && $_SESSION["uloga"] != 4) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['btnBackup'])) {
    createBackup();
}
if (isset($_POST['btnRestore'])) {
    restoreBackup();
}

$smarty->display('backup.tpl');
$smarty->display('podnozje.tpl');

function createBackup() {
    $veza = new Baza();
    $veza->spojiDB();
    $upitRodendan = "SELECT * FROM rodendan";
    $rezultatRodendan = $veza->selectDB($upitRodendan);
    while ($red = mysqli_fetch_array($rezultatRodendan)) {
        $sviRodendani[] = $red;
    }
    $backupQuery = array();
    foreach ($sviRodendani as $k => $v) {
        $backupQuery[] = "INSERT INTO rodendan VALUES ('$v[0]', '$v[1]', '$v[2]', '$v[3]', '$v[4]', '$v[5]')\n";
    }
    $upitMaterijali = "SELECT * FROM materijali";
    $rezultatMaterijali = $veza->selectDB($upitMaterijali);
    while ($red = mysqli_fetch_array($rezultatMaterijali)) {
        $sviMaterijali[] = $red;
    }
    foreach ($sviMaterijali as $k => $v) {
        $backupQuery[] = "INSERT INTO materijali VALUES ('$v[0]', '$v[1]', '$v[2]', '$v[3]')\n";
    }
    $veza->zatvoriDB();
    $backupFile = fopen("backup.sql", "w");
    foreach ($backupQuery as $k => $v) {
        fwrite($backupFile, $v);
    }
    fclose($backupFile);

    preuzimanjeDatoteke();
}

function restoreBackup() {
    if (!empty($_FILES) && $_FILES['datoteka']['size'] !== 0) {
        $userfile = $_FILES['datoteka']['tmp_name'];
        $userfile_name = $_FILES['datoteka']['name'];
        $userfile_size = $_FILES['datoteka']['size'];
        $userfile_type = $_FILES['datoteka']['type'];
        $userfile_error = $_FILES['datoteka']['error'];
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
        }

        $upfile = $userfile_name;

        if (is_uploaded_file($userfile)) {
            if (!move_uploaded_file($userfile, $upfile)) {
                echo 'Problem: nije moguće prenijeti datoteku na odredište';
            }
        } else {
            echo 'Problem: mogući napad prijenosom. Datoteka: ' . $userfile_name;
        }
        $backupFile = fopen($upfile, "r");
        $content = explode("\n", fread($backupFile, filesize("backup.sql")));
        array_pop($content);
        fclose($backupFile);
        $veza = new Baza();
        $veza->spojiDB();
        $upit = "TRUNCATE TABLE rodendani";
        $rezultat = $veza->updateDB($upit);
        $upit = "TRUNCATE TABLE materijali";
        $rezultat = $veza->updateDB($upit);
        foreach ($content as $k => $v) {
            $upit = $v;
            $rezultat = $veza->updateDB($upit);
        }
        $veza->zatvoriDB();
    } else {
        echo "Potrebno je odabrati datoteku!";
    }
}

function preuzimanjeDatoteke() {
    $dir = "./";
    $file = $dir . "backup.sql";

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
    }
}
ob_end_flush();
?>
            
