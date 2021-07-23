<?php

$direktorij = getcwd();
require './baza.class.php';

$veza = new Baza();
$veza->spojiDB();

$upit = "SELECT ro.rodendan_id, ro.korisnici_id, ro.rezervacija_id, ro.rodendan_naziv, ro.rodendan_opis, ro.rodendan_zamjenskiTermin"
        . " FROM grupa g, rezervacija r, rodendan ro WHERE r.rezervacija_id = ro.rezervacija_id AND g.grupa_id = r.grupa_id LIMIT 10";
$rezultat = $veza->selectDB($upit);


$veza->zatvoriDB();

header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel name='Rođendani'>
 <title>Rođendani po grupama</title>
 <link>$direktorij/index.php</link>
 <description>Zadnjih deset rođendana po svakoj grupi</description>
 <language>hr</language>";

while ($red = mysqli_fetch_array($rezultat)) {
    $rodendanId = $red[0];
    $korisniciId = $red[1];
    $rezervacijaId = $red[2];
    $rodendanNaziv = $red[3];
    $rodendanOpis = $red[4];
    $rodendanZamjenskiTermin = $red[5];
    echo "<item>
   <rodendan_id>$rodendanId</rodendan_id>
   <korisnici_id>$korisniciId</korisnici_id>
   <rezervacija_id>$rezervacijaId</rezervacija_id>
   <rodendan_naziv>$rodendanNaziv</rodendan_naziv>
   <rodendan_opis>$rodendanOpis</rodendan_opis>
   <rodendan_zamjenskiTermin>$rodendanZamjenskiTermin</rodendan_zamjenskiTermin>
   </item>";
}
echo "</channel></rss>";
?>