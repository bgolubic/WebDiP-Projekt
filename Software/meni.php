<?php

echo "<nav class=\"stupac_1\"><ul>
        <li><a href=\"$putanja/index.php\">Početna stranica</a></li>
        <li><a href=\"$putanja/obrasci/registracija.php\">Registracija</a></li>";
if (isset($_SESSION["uloga"])) {
    if ($_SESSION["uloga"] >= 2) {
        echo "<li><a href=\"$putanja/galerija.php\">Galerija</a></li>";
        echo "<li><a href=\"$putanja/obrasci/rezervacija.php\">Rezervacije</a></li>";
        echo "<li><a href=\"$putanja/obrasci/uploadMaterijala.php\">Materijali</a></li>";
        echo "<li><a href=\"$putanja/autor.php\">Autor</a></li>";
    }
    if ($_SESSION["uloga"] >= 3) {
        echo "<li><a href=\"$putanja/popisRezervacija.php\">Popis rezervacija</a></li>";
        echo "<li><a href=\"$putanja/popisRodendana.php\">Popis rodendana</a></li>";
    }
    if ($_SESSION["uloga"] == 4) {
        echo "<li><a href=\"$putanja/racuni.php\">Računi</a></li>";
        echo "<li><a href=\"$putanja/backup.php\">Backup</a></li>";
        echo "<li><a href=\"$putanja/popisGrupa.php\">Grupe</a></li>";
    }
    echo "<li><a href=\"$putanja/odjava.php\">Odjava</a></li>";
} else {
    echo "<li><a href=\"$putanja/obrasci/prijava.php\">Prijava</a></li>";
}

echo "</ul></nav>";
