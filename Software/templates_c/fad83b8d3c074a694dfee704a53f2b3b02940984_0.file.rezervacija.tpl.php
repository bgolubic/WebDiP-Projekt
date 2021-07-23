<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:54:26
  from '/var/www/html/bgolubic/zadaca_04/templates/rezervacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca3ad27f0715_01981736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad83b8d3c074a694dfee704a53f2b3b02940984' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/rezervacija.tpl',
      1 => 1623865790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca3ad27f0715_01981736 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="rezervacija" method="post" name="rezervacija" action="" style="display: flex; justify-content: center;">
    <p><label for="grupa">Odabir grupe: </label><br>
        <select id="grupa" name="grupa">
        </select><br>
        <label for="datum">Datum proslave: </label><br>
        <input type="date" id="datum" name="datum"><br>
        <label for="vrijeme">Vrijeme proslave: </label><br>
        <input type="time" id="vrijeme" name="vrijeme"><br>
        <label for="brojDjece">Broj djece: </label><br>
        <input type="text" id="brojDjece" name="brojDjece" size="20" maxlength="3" placeholder="Broj djece"><br>
        <label for="sudionici">Sudionici: </label><br>
        <textarea id="sudionici" name="sudionici" rows="20" cols="50"></textarea><br>
        <label for="upute">Upute: </label><br>
        <textarea id="upute" name="upute" rows="20" cols="50"></textarea><br>
        <input id="submitRezervacija" name="submitRezervacija" type="submit" value=" Rezerviraj ">
</form>

<div class="divTablica">
    <table class="tablica">
        <caption>Popis rezervacija</caption>
        <thead>
            <tr>
                <th>ID rezervacije</th>
                <th>ID grupe</th>
                <th>Datum rođendana</th>
                <th>Vrijeme rođendana</th>
                <th>Broj djece</th>
                <th>Sudionici</th>
                <th>Uputa</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tijelo">
        </tbody>
    </table>
</div><?php }
}
