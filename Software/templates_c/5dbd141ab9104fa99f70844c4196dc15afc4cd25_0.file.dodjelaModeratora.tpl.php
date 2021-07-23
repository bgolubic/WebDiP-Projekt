<?php
/* Smarty version 3.1.39, created on 2021-06-16 14:59:25
  from '/var/www/html/bgolubic/zadaca_04/templates/dodjelaModeratora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9f5adf3d6f1_80018849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dbd141ab9104fa99f70844c4196dc15afc4cd25' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/dodjelaModeratora.tpl',
      1 => 1623848276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9f5adf3d6f1_80018849 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="rezervacija" method="post" name="rezervacija" action="" style="display: flex; justify-content: center;">
    <p><label for="grupa">Odabir grupe: </label><br>
        <select id="grupa" name="grupa">
        </select><br>
        <label for="moderator">Odabir moderatora: </label><br>
        <select id="moderator" name="moderator">
        </select><br>
        <input id="submitDodjela" name="submitDodjela" type="submit" value=" Dodijeli ">
</form>
<?php }
}
