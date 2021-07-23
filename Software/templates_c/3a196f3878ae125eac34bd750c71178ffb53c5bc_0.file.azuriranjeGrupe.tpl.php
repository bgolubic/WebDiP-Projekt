<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:42:16
  from '/var/www/html/bgolubic/zadaca_04/templates/azuriranjeGrupe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca37f89fc794_22219318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a196f3878ae125eac34bd750c71178ffb53c5bc' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/azuriranjeGrupe.tpl',
      1 => 1623865328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca37f89fc794_22219318 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="grupa" method="post" name="grupa" action="" style="display: flex; justify-content: center;">
    <p><label for="naziv">Naziv grupe: </label><br>
        <input type="text" id="naziv" name="naziv" size="40" maxlength="50" placeholder="Naziv grupe" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
"><br>
        <input id="submitGrupa" name="submitGrupa" type="submit" value=" Ažuriraj grupu ">
</form><?php }
}
