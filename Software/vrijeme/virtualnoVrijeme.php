<?php
$putanja = dirname($_SERVER['REQUEST_URI'], 2);
$direktorij = dirname(getcwd());
$naslov = "Virtualno vrijeme";
include '../zaglavlje.php';
include '../meni.php';
include '../dohvacanje_podataka/dohvatPomaka.php';

$url = "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=xml";


$sati = 0;
if (isset($_POST['postavke']) && isset($_POST['nacin'])) {
    $nacin = $_POST['nacin'];
    $url = "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=$nacin";

    if (!($fp = fopen($url, 'r'))) {
        echo "Problem: nije moguće otvoriti url: " . $url;
        exit;
    }
    switch ($nacin) {
        case 'json':
            $string = fread($fp, 10000);
            $json = json_decode($string, false);
            $sati = $json->WebDiP->vrijeme->pomak->brojSati;
            $sati = (is_numeric($sati)) ? $sati : 0;

            fclose($fp);

            $var->konfiguracija;
            $var->konfiguracija->pomak = $sati;
            $string = json_encode($var);
            break;
        case 'xml':
            $string = fread($fp, 10000);
            fclose($fp);

            $domdoc = new DOMDocument;
            $domdoc->loadXML($string);

            $params = $domdoc->getElementsByTagName('brojSati');
            $sati = 0;

            if ($params != NULL) {
                $sati = $params->item(0)->nodeValue;
            }

            $xml = new SimpleXMLElement('<xml/>');
            $elem = $xml->addChild('konfiguracija');
            $elem->addChild('pomak', $sati);
            $string = $xml->asXML();
            break;
        default:
            $string = "";
            break;
    }
    $fp = fopen("../$nacin/konfiguracija.$nacin", "w");
    fwrite($fp, $string);
    fclose($fp);
}

$vrijeme_servera = time();
$vrijeme_sustava = $vrijeme_servera + (dohvatiPomak() * 60 * 60);
$ispisVrijemeServera = date('d.m.Y H:i:s', $vrijeme_servera);
$ispisVrijemeSustava = date('d.m.Y H:i:s', $vrijeme_sustava);

$smarty->assign('ispisVrijemeServera', $ispisVrijemeServera);
$smarty->assign('ispisVrijemeSustava', $ispisVrijemeSustava);
$smarty->display('virtualnoVrijeme.tpl');
$smarty->display('podnozje.tpl');
?>