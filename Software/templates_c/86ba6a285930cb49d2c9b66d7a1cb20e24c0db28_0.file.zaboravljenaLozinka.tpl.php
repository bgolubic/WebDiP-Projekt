<?php
/* Smarty version 3.1.39, created on 2021-06-07 16:51:10
  from '/var/www/html/bgolubic/zadaca_04/templates/zaboravljenaLozinka.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be325e305ed8_01923627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ba6a285930cb49d2c9b66d7a1cb20e24c0db28' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/zaboravljenaLozinka.tpl',
      1 => 1623077468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be325e305ed8_01923627 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="resetiranjeLozinke" method="post" name="resetiranjeLozinke" action="" style="display:flex; justify-content: center;">
    <p><label for="email">E-mail adresa: </label><br>
        <input type="email" id="email" name="email" size="30" maxlength="50" placeholder="ime.prezime@posluzitelj.xxx"><br>
        <input id="submitResetiraj" name="submit" type="submit" value=" Resetiraj lozinku ">
</form><?php }
}
