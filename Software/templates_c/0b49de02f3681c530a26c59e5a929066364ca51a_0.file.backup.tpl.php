<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:15:06
  from '/var/www/html/bgolubic/zadaca_04/templates/backup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca319a110f13_45080776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b49de02f3681c530a26c59e5a929066364ca51a' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/backup.tpl',
      1 => 1623863706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca319a110f13_45080776 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" enctype="multipart/form-data">
    <input type="file" name="datoteka" id="datoteka"><br>
    <input id="btnBackup" name="btnBackup" type="submit" value=" Napravi sigurnosnu kopiju "><br>
    <input id="btnRestore" name="btnRestore" type="submit" value=" Vrati iz sigurnosne kopije ">
</form>
<?php }
}
