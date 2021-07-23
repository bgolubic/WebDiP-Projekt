<?php
/* Smarty version 3.1.39, created on 2021-06-16 16:11:21
  from '/var/www/html/bgolubic/zadaca_04/templates/prijava.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca068910ec55_27782139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb17502aa8ca766dd9fefd603b7bcec97133a922' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/prijava.tpl',
      1 => 1623852600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca068910ec55_27782139 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="prijava" method="get" name="form1" action="" style="display:flex; justify-content: center;">
    <p><label for="korIme">Korisničko ime: </label><br>
        <input type="text" id="korIme" name="korIme" size="20" maxlength="20" placeholder="Korisničko ime" value="<?php echo $_smarty_tpl->tpl_vars['korIme']->value;?>
"><br>
        <label for="lozinka">Lozinka: </label><br>
        <input type="password" id="lozinka" name="lozinka" size="20" maxlength="30" placeholder="Lozinka"><br>
        <label for="zapamti">Zapamti me: </label>
        <input type="checkbox" id="zapamti" name="zapamti"><br>
        <input id="submitPrijava" name="submit" type="submit" value=" Prijavi se ">
</form>
<a href="<?php echo $_smarty_tpl->tpl_vars['putanja']->value;?>
/obrasci/zaboravljenaLozinka.php" style="display:flex; justify-content: center; color: white;">Zaboravljena lozinka</a> <?php }
}
