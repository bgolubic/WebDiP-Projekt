<?php
/* Smarty version 3.1.39, created on 2021-06-07 15:50:24
  from '/var/www/html/bgolubic/zadaca_04/templates/registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be24209ec032_85360216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa61f572789cba976ec6d0561c1dbbed9969a3f2' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/registracija.tpl',
      1 => 1623073824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be24209ec032_85360216 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['greske']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    Nije ispravno uneseno: <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo $_smarty_tpl->tpl_vars['provjeraLozinke']->value;?>

</div>
<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<form id="registracija" method="post" name="form1" action="" style="display: block;">
    <p><label for="ime">Ime: </label><br>
        <input type="text" id="ime" name="ime" size="30" maxlength="30" placeholder="Ime"><br>
        <label for="prez">Prezime: </label><br>
        <input type="text" id="prez" name="prez" size="30" maxlength="35" placeholder="Prezime"><br>
        <label for="email">Email adresa: </label><br>
        <input type="email" id="email" name="email" size="30" maxlength="50" placeholder="ime.prezime@posluzitelj.xxx"><br>
        <label for="korIme">Korisničko ime: </label><br>
        <input type="text" id="korIme" name="korIme" size="30" maxlength="20" placeholder="Korisničko ime"><br>
        <label for="lozinka">Lozinka: </label><br>
        <input type="password" id="lozinka" name="lozinka" size="30" maxlength="20" placeholder="Lozinka"><br>
        <label for="ponLozinka">Ponovi lozinku: </label><br>
        <input type="password" id="ponLozinka" name="ponLozinka" size="30" maxlength="20" placeholder="Ponovi lozinku"><br>
        <label for="grad">Grad: </label><br>
        <input type="text" id="grad" name="grad" size="30" maxlength="50" placeholder="Grad"><br>
        <label for="tel">Telefon: </label><br>
        <input type="text" id="tel" name="tel" size="30" maxlength="15" placeholder="Telefon"><br>
        <label for="uvjeti">Uvjeti: </label>
        <input type="checkbox" id="uvjeti" name="uvjeti"><br>
        <div class="g-recaptcha" data-sitekey="6LfnvRcbAAAAAL5zLWDr1GRY7cZgv6V2U3pIIzxq"></div>
        <br>
        <input id="submitRegistracija" type="submit" value=" Registracija ">
</form><?php }
}
