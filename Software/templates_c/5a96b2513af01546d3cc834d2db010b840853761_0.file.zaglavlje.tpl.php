<?php
/* Smarty version 3.1.39, created on 2021-06-16 20:25:26
  from '/var/www/html/bgolubic/zadaca_04/templates/zaglavlje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca42168c85c1_49235715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a96b2513af01546d3cc834d2db010b840853761' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/zaglavlje.tpl',
      1 => 1623867926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca42168c85c1_49235715 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="hr">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="autor" content="Bruno Golubić">
        <meta name="opis" content="Zadaća 4, 16.5.2021.">
        <meta name="kljucne_rijeci" content="Zadaća 4, WebDiP">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['stil']->value;?>
" type="text/css"/>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
        <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" type="text/css"/>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>-->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/javascript/bgolubic_jquery.js"><?php echo '</script'; ?>
>
    </head>
    <body class="resetka">
        <header>
            <div>
                <a href="https://www.facebook.com/"><img src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/facebook.png" alt="Facebook" width="50"></a>
                <a href="https://www.twitter.com/"><img src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/twitter.png" alt="Twitter" width="50"></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/rss.php"><img src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/rss.png" alt="RSS" width="50"></a>
                <img src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/light_dark.png" alt="lightdark" width="50" id="promjenaDizajna">
                <img src="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/multimedija/eye.png" alt="eye" width="50" id="promjenaDisleksija">
            </div>
            <h1><a href="#sadrzaj"><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</a></h1>
            <hr>
        </header>
        <section id="sadrzaj">
            
<?php echo '<script'; ?>
>            
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
<?php echo '</script'; ?>
>  <?php }
}
