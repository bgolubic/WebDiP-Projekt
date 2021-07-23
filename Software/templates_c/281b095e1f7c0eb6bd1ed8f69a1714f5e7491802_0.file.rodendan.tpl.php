<?php
/* Smarty version 3.1.39, created on 2021-06-16 11:25:20
  from '/var/www/html/bgolubic/zadaca_04/templates/rodendan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9c380000ae2_39327228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281b095e1f7c0eb6bd1ed8f69a1714f5e7491802' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/rodendan.tpl',
      1 => 1623835518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9c380000ae2_39327228 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="rodendan" method="post" name="rodendan" action="" style="display:flex; justify-content: center;">
    <p><label for="naziv">Naziv: </label><br>
        <input type="text" id="naziv" name="naziv" size="20" maxlength="45" placeholder="Naziv rođendana"><br>
        <label for="opis">Opis: </label><br>
        <textarea id="opis" name="opis" rows="20" cols="50"></textarea><br>
        <input id="submitRodendan" name="submitRodendan" type="submit" value=" Kreiraj rođendan ">
</form><?php }
}
