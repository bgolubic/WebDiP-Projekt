<?php
/* Smarty version 3.1.39, created on 2021-06-16 17:43:43
  from '/var/www/html/bgolubic/zadaca_04/templates/uploadMaterijala.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca1c2f8a2091_79125786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc2a21ce80796fe5ed904bf5fef07c8ac6289a0' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/uploadMaterijala.tpl',
      1 => 1623858223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca1c2f8a2091_79125786 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="materijali" method="post" name="materijali" action="" style="display: flex; justify-content: center;" enctype="multipart/form-data">
    <p><label for="rezervacija">Odabir rezervacije: </label><br>
        <select id="rezervacija" name="rezervacija">
        </select><br>
        <label for="vrsta">Odabir vrste materijala: </label><br>
        <select id="vrsta" name="vrsta">
            <option value="Audio">Audio (.mp3)</option>
            <option value="Video">Video (.mp4)</option>
            <option value="Slika">Slika (.jpg)</option>
        </select><br>
        <label for="materijal">Prijenos datoteke: </label><br>
        <input type="file" name="materijal" id="materijal"><br>
        <label for="suglasnost">Suglasnost: </label>
        <input type="checkbox" id="suglasnost" name="suglasnost"><br>
        <input id="submitMaterijal" name="submitMaterijal" type="submit" value=" Upload ">
</form><?php }
}
