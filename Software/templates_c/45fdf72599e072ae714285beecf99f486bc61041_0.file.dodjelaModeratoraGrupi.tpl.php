<?php
/* Smarty version 3.1.39, created on 2021-06-16 14:52:39
  from '/var/www/html/bgolubic/zadaca_04/templates/dodjelaModeratoraGrupi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9f4177d7d88_45920754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45fdf72599e072ae714285beecf99f486bc61041' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/dodjelaModeratoraGrupi.tpl',
      1 => 1623847773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9f4177d7d88_45920754 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="dojdelaModeratora" method="post" name="dojdelaModeratora" action="" style="display:flex; justify-content: center;">
    <p><label for="grupa">Odabir grupe: </label><br>
        <select id="grupa" name="grupa">
        </select><br>
        <input id="submitDodjela" name="submitDodjela" type="submit" value=" Dodijeli ">
</form><?php }
}
