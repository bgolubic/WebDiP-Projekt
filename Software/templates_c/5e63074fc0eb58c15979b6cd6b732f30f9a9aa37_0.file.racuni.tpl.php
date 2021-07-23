<?php
/* Smarty version 3.1.39, created on 2021-06-16 21:17:58
  from '/var/www/html/bgolubic/zadaca_04/templates/racuni.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca4e668d3c37_37555100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e63074fc0eb58c15979b6cd6b732f30f9a9aa37' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/racuni.tpl',
      1 => 1623871077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca4e668d3c37_37555100 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="divTablica">
    <table class="tablica" style="color:white">
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>ID korisnika</th>
                <th>ID uloge</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tijelo">
        </tbody>
    </table>
</div>
<a href="obrasci/kreiranjeModeratora.php" style="justify-content: center; display: flex; text-decoration: none;"><button style="height: 50px; width: 150px;">Kreiranje moderatora</button></a><br>
<a href="dodjelaModeratora.php" style="justify-content: center; display: flex; text-decoration: none;"><button style="height: 50px; width: 150px;">Dodjela moderatora</button></a><?php }
}
