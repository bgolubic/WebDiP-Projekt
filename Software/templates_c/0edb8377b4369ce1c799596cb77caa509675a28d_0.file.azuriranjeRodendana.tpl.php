<?php
/* Smarty version 3.1.39, created on 2021-06-16 13:40:39
  from '/var/www/html/bgolubic/zadaca_04/templates/azuriranjeRodendana.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9e33795d447_59439091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0edb8377b4369ce1c799596cb77caa509675a28d' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/azuriranjeRodendana.tpl',
      1 => 1623843639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9e33795d447_59439091 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="rodendan" method="post" name="rodendan" action="" style="display:flex; justify-content: center;">
    <p><label for="naziv">Naziv: </label><br>
        <input type="text" id="naziv" name="naziv" size="20" maxlength="45" placeholder="Naziv rođendana" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
"><br>
        <label for="opis">Opis: </label><br>
        <textarea id="opis" name="opis" rows="20" cols="50"><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</textarea><br>
        <input id="submitRodendan" name="submitRodendan" type="submit" value=" Ažuriraj rođendan ">
</form><?php }
}
