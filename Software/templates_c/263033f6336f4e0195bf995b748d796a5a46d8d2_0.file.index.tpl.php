<?php
/* Smarty version 3.1.39, created on 2021-06-16 20:38:38
  from '/var/www/html/bgolubic/zadaca_04/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca452e336c35_90037330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '263033f6336f4e0195bf995b748d796a5a46d8d2' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/index.tpl',
      1 => 1623868633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca452e336c35_90037330 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="divTablica">
    <table>
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>Naziv grupe</th>
                <th>Broj rođendana</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($_smarty_tpl->tpl_vars['podaci']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['podaci']->value, 'podatak');
$_smarty_tpl->tpl_vars['podatak']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['podatak']->value) {
$_smarty_tpl->tpl_vars['podatak']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['grupa_naziv'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['grupa_brojRodendana'];?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
</div><?php }
}
