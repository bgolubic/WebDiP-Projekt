<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:36:01
  from '/var/www/html/bgolubic/zadaca_04/templates/popisGrupa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca368119c773_67211167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9328f2c1ce44b83dae63120922621300f6cc6679' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/popisGrupa.tpl',
      1 => 1623864961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca368119c773_67211167 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="divTablica">
    <table class="tablica">
        <caption>Popis grupa</caption>
        <thead>
            <tr>
                <th>ID grupe</th>
                <th>Naziv grupe</th>
                <th>Korisnik ID</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tijelo">
        </tbody>
    </table>
</div>
<a href="obrasci/kreiranjeGrupe.php" style="justify-content: center; display: flex; text-decoration: none;"><button style="height: 50px; width: 150px;">Kreiraj grupu</button></a><?php }
}
