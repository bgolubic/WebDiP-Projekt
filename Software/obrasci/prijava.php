<?php
ob_start();
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Prijava";
include '../zaglavlje.php';
include '../meni.php';
$greska = "";

/*if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}*/

if(isset($_GET['aktivacija']) && $_GET['aktivacija'] === '0'){
    echo "Vaš račun je već aktiviran!";
}
else if(isset($_GET['aktivacija']) && $_GET['aktivacija'] === '1'){
    echo "Uspješno ste aktivirali svoj račun, možete se prijaviti.";
}
else if(isset($_GET['aktivacija']) && $_GET['aktivacija'] === '2'){
    echo "Vaš kod za aktivaciju je istekao, poslan vam je novi na vaš email!";
}

if(isset($_COOKIE['prijavljen'])){
    $korIme = $_COOKIE['prijavljen'];
}
else{
    $korIme = "";
}

if (isset($_GET['submit'])) {
    if($_GET['submit'] === " Prijavi se "){
        foreach ($_GET as $k => $v) {
            if (empty($v)) {
                $greska .= "Nije popunjeno: " . $k . "<br>";
            }
        }
        if (empty($greska)) {
            $veza = new Baza();
            $veza->spojiDB();

            $korime = $_GET['korIme'];
            $lozinka = $_GET['lozinka'];
            
            $lozinkaSHA256 = hash('sha256', $lozinka);
            
            $upit = "SELECT * FROM `korisnici` WHERE "
                    . "`korisnici_korisnickoIme`='{$korime}' AND "
                    . "`korisnici_lozinkaSHA256`='{$lozinkaSHA256}'";
            $rezultat = $veza->selectDB($upit);

            $autenticiran = false;
            $zakljucan = false;
            while ($red = mysqli_fetch_array($rezultat)) {
                if ($red) {
                    if($red["korisnici_brojNeuspjesnihPrijava"] < 3){
                        $autenticiran = true;
                        $tip = $red["uloge_id"];
                        $id = $red["korisnici_id"];
                    }
                    else{
                        $zakljucan = true;
                    }
                }
            }
            if ($autenticiran) {
                $poruka = 'Uspješna prijava!';
                
                if(!isset($_GET['zapamti'])){
                    setcookie("prijavljen", "", time() - 3600);
                }
                else{
                    setcookie("prijavljen", $korime);
                }
                
                setcookie("autenticiran", $korime, false, '/', false);
                setcookie("korisnikId", $id, false, '/', false);
                
                Sesija::kreirajKorisnika($korime, $tip);
                
                $upitUspjeh = "UPDATE korisnici SET korisnici_brojNeuspjesnihPrijava = 0 WHERE `korisnici_korisnickoIme`='{$korime}'";
                $rezultatUspjeh = $veza->updateDB($upitUspjeh);
                header("Location: ../index.php");
                exit();
            } else if(!$zakljucan){
                $poruka = 'Neispravna lozinka!';
                echo $poruka;
                $upitNeuspjeh = "UPDATE korisnici SET korisnici_brojNeuspjesnihPrijava = korisnici_brojNeuspjesnihPrijava+1 WHERE `korisnici_korisnickoIme`='{$korime}'";
                $rezultatNeuspjeh = $veza->updateDB($upitNeuspjeh);
            }
            else{
                echo "Vaš račun je zaključan!";
            }

            $veza->zatvoriDB();
            
        }
    }
}
$neuspjeh = "";
if(!empty($greska)){
    $neuspjeh = "Neuspješna prijava, pokušajte ponovo!";
}
$smarty->assign('neuspjeh', $neuspjeh);
$smarty->assign('korIme', $korIme);
$smarty->display('prijava.tpl');
$smarty->display('podnozje.tpl');
ob_end_flush();
?>
