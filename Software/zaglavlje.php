<?php

require "$direktorij/vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php";
require "$direktorij/baza.class.php";
require "$direktorij/sesija.class.php";
Sesija::kreirajSesiju();
$smarty = new Smarty();

$smarty->setTemplateDir("$direktorij/templates")
        ->setCompileDir("$direktorij/templates_c")
        ->setPluginsDir(SMARTY_PLUGINS_DIR)
        ->setCacheDir("$direktorij/cache")
        ->setConfigDir("$direktorij/configs");

if(!isset($_COOKIE['stil'])){
    setcookie("stil", "bgolubic.css", false, '/', false);
    $_COOKIE['stil'] = "bgolubic.css";
}

$stil = $_COOKIE['stil'];

if(isset($naslov) && isset($putanja)){
    $smarty->assign("naslov", $naslov);
    $smarty->assign("putanja", $putanja);
    $smarty->assign("stil", $stil);
    $smarty->display('zaglavlje.tpl');
}
