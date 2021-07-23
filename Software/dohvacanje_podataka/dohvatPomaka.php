<?php

function dohvatiPomak() {
    $fp = fopen("../xml/konfiguracija.xml", 'r');
    $string = fread($fp, 10000);
    fclose($fp);

    $domdoc = new DOMDocument;
    $domdoc->loadXML($string);

    $params = $domdoc->getElementsByTagName('pomak');
    $satiDatoteka = 0;

    if ($params != NULL) {
        $satiDatoteka = $params->item(0)->nodeValue;
    }
    
    return $satiDatoteka;
}