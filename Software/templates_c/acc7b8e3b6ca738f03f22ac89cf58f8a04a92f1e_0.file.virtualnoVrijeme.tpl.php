<?php
/* Smarty version 3.1.39, created on 2021-06-08 14:42:12
  from '/var/www/html/bgolubic/zadaca_04/templates/virtualnoVrijeme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bf65a4f3e5c0_50616971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acc7b8e3b6ca738f03f22ac89cf58f8a04a92f1e' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/virtualnoVrijeme.tpl',
      1 => 1623156132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf65a4f3e5c0_50616971 (Smarty_Internal_Template $_smarty_tpl) {
?>Vrijeme servera: <?php echo $_smarty_tpl->tpl_vars['ispisVrijemeServera']->value;?>
<br>
Vrijeme sustava: <?php echo $_smarty_tpl->tpl_vars['ispisVrijemeSustava']->value;?>
<br><br><br>

<form name="postavke" id="postavke" method="post" action="">
    <fieldset>
        <legend><a target="_blank" href="http://barka.foi.hr/WebDiP/pomak_vremena/vrijeme.html" style="color: white;">Postavi virtualno vrijeme</a></legend>
        <label for="nacin">Odaberi način spremanja:</label><br>
        <input type="radio" name="nacin" value="json" checked />JSON<br>
        <input type="radio" name="nacin" value="xml" />XML<br>
    </fieldset>
    <input type="submit" name="postavke" value=" Postavi ">
</form><?php }
}
