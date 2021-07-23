<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="hr">
    <head>
        <title>{$naslov}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="Bruno Golubić">
        <meta name="opis" content="Zadaća 4, 16.5.2021.">
        <meta name="kljucne_rijeci" content="Zadaća 4, WebDiP">
        <link rel="stylesheet" href="{$putanja}/css/{$stil}" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" type="text/css"/>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>-->
        <script type="text/javascript" src="{$putanja}/javascript/bgolubic_jquery.js"></script>
    </head>
    <body class="resetka">
        <header>
            <div>
                <a href="https://www.facebook.com/"><img src="{$putanja}/multimedija/facebook.png" alt="Facebook" width="50"></a>
                <a href="https://www.twitter.com/"><img src="{$putanja}/multimedija/twitter.png" alt="Twitter" width="50"></a>
                <a href="{$putanja}/rss.php"><img src="{$putanja}/multimedija/rss.png" alt="RSS" width="50"></a>
                <img src="{$putanja}/multimedija/light_dark.png" alt="lightdark" width="50" id="promjenaDizajna">
                <img src="{$putanja}/multimedija/eye.png" alt="eye" width="50" id="promjenaDisleksija">
            </div>
            <h1><a href="#sadrzaj">{$naslov}</a></h1>
            <hr>
        </header>
        <section id="sadrzaj">
            
<script>            
      $("#promjenaDisleksija").click(function () {
        var kolacici = document.cookie;
        if(kolacici.includes("bgolubic.css")){
            document.cookie = "stil=bgolubic_accesibility.css; path=/";
        }
        else if(kolacici.includes("bgolubic_accesibility.css")){
            document.cookie = "stil=bgolubic.css; path=/";
        }
        else if(kolacici.includes("bgolubic_dark.css")){
            document.cookie = "stil=bgolubic_accesibility_dark.css; path=/";
        }
        else if(kolacici.includes("bgolubic_accesibility_dark.css")){
            document.cookie = "stil=bgolubic_dark.css; path=/";
        }
        location.reload();
       });
     $("#promjenaDizajna").click(function () {
        var kolacici = document.cookie;
        if(kolacici.includes("bgolubic.css")){
            document.cookie = "stil=bgolubic_dark.css; path=/";
        }
        else if(kolacici.includes("bgolubic_accesibility.css")){
            document.cookie = "stil=bgolubic_accesibility_dark.css; path=/";
        }
        else if(kolacici.includes("bgolubic_dark.css")){
            document.cookie = "stil=bgolubic.css; path=/";
        }
        else if(kolacici.includes("bgolubic_accesibility_dark.css")){
            document.cookie = "stil=bgolubic_accesibility.css; path=/";
        }
        location.reload();
       });
</script>  