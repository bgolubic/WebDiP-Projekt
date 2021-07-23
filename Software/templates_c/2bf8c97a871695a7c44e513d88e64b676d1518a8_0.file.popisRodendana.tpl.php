<?php
/* Smarty version 3.1.39, created on 2021-06-16 13:59:56
  from '/var/www/html/bgolubic/zadaca_04/templates/popisRodendana.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9e7bc94cb74_61598119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf8c97a871695a7c44e513d88e64b676d1518a8' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/popisRodendana.tpl',
      1 => 1623844796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9e7bc94cb74_61598119 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="divTablica">
    <table class="tablica">
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>ID rođendana</th>
                <th>ID korisnika</th>
                <th>ID rezervacije</th>
                <th>Naziv rođendana</th>
                <th>Opis rođendana</th>
                <th>Datum rođendana</th>
                <th>Zamjenski termin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['podaci']->value, 'podatak');
$_smarty_tpl->tpl_vars['podatak']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['podatak']->value) {
$_smarty_tpl->tpl_vars['podatak']->do_else = false;
?>
            <tr>
                <td class="id" value="<?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_id'];?>
"><a href="obrasci/azuriranjeRodendana.php?id=<?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_id'];?>
" style="color: white;"><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_id'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['korisnici_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_naziv'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_opis'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_datumRodendana'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_zamjenskiTermin'];?>
</td>
                <td><a href="obrasci/otkazRodendana.php?id=<?php echo $_smarty_tpl->tpl_vars['podatak']->value['rodendan_id'];?>
" style="color: white;"><button>Otkaži</button></a></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
