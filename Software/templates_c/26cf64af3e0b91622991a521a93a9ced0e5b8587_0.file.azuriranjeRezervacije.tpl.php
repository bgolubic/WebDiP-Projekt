<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:59:08
  from '/var/www/html/bgolubic/zadaca_04/templates/azuriranjeRezervacije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca3bec003fd2_38819835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26cf64af3e0b91622991a521a93a9ced0e5b8587' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/azuriranjeRezervacije.tpl',
      1 => 1623866347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca3bec003fd2_38819835 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<form id="rezervacija" method="post" name="rezervacija" action="" style="display: flex; justify-content: center;">
    <p><label for="grupa">Odabir grupe: </label><br>
        <select id="grupa" name="grupa">
        </select><br>
        <label for="datum">Datum proslave: </label><br>
        <input type="date" id="datum" name="datum" value="<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
"><br>
        <label for="vrijeme">Vrijeme proslave: </label><br>
        <input type="time" id="vrijeme" name="vrijeme" value="<?php echo $_smarty_tpl->tpl_vars['vrijeme']->value;?>
"><br>
        <label for="brojDjece">Broj djece: </label><br>
        <input type="text" id="brojDjece" name="brojDjece" size="20" maxlength="3" placeholder="Broj djece" value="<?php echo $_smarty_tpl->tpl_vars['brojDjece']->value;?>
"><br>
        <label for="sudionici">Sudionici: </label><br>
        <textarea id="sudionici" name="sudionici" rows="20" cols="50"><?php echo $_smarty_tpl->tpl_vars['sudionici']->value;?>
</textarea><br>
        <label for="upute">Upute: </label><br>
        <textarea id="upute" name="upute" rows="20" cols="50"><?php echo $_smarty_tpl->tpl_vars['upute']->value;?>
</textarea><br>
        <input id="submitRezervacija" name="submitRezervacija" type="submit" value=" Rezerviraj ">
</form><?php }
}
