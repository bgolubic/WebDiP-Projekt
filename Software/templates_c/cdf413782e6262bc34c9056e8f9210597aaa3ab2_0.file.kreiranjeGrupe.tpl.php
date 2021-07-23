<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:27:05
  from '/var/www/html/bgolubic/zadaca_04/templates/kreiranjeGrupe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca3469203011_07007362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf413782e6262bc34c9056e8f9210597aaa3ab2' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/kreiranjeGrupe.tpl',
      1 => 1623864425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca3469203011_07007362 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="grupa" method="post" name="grupa" action="" style="display: flex; justify-content: center;">
    <p><label for="naziv">Naziv grupe: </label><br>
        <input type="text" id="naziv" name="naziv" size="40" maxlength="50" placeholder="Naziv grupe"><br>
        <input id="submitGrupa" name="submitGrupa" type="submit" value=" Kreiraj grupu ">
</form><?php }
}
