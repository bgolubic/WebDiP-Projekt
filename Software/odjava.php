<?php
ob_start();
$direktorij = getcwd();
include './zaglavlje.php';
Sesija::obrisiSesiju();
header("Location: obrasci/prijava.php");
ob_end_flush();
?>