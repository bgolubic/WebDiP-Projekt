<?php
/* Smarty version 3.1.39, created on 2021-06-16 13:57:35
  from '/var/www/html/bgolubic/zadaca_04/templates/otkazRodendana.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9e72fcdc4f8_18830756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3341ca66d9aa3e97ccccaf031fdef6ee526bd24' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/otkazRodendana.tpl',
      1 => 1623844651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9e72fcdc4f8_18830756 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="zamjenskiTermin" method="post" name="zamjenskiTermin" action="" style="display:flex; justify-content: center;">
    <p><label for="datum">Datum proslave: </label><br>
        <input type="date" id="datum" name="datum" value="<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
"><br>
        <input id="submitZamjena" name="submitZamjena" type="submit" value=" Odredi zamjenski termin ">
</form><?php }
}
