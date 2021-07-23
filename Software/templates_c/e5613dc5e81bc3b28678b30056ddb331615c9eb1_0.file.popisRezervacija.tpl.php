<?php
/* Smarty version 3.1.39, created on 2021-06-16 19:52:26
  from '/var/www/html/bgolubic/zadaca_04/templates/popisRezervacija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca3a5ad756c9_74190830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5613dc5e81bc3b28678b30056ddb331615c9eb1' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/popisRezervacija.tpl',
      1 => 1623865946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca3a5ad756c9_74190830 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="greska" style="color:red">
    <?php echo $_smarty_tpl->tpl_vars['neuspjeh']->value;?>

</div>
<div class="divTablica">
    <table class="tablica">
        <caption>Popis</caption>
        <thead>
            <tr>
                <th>ID rezervacije</th>
                <th>ID grupe</th>
                <th>ID korisnika</th>
                <th>Datum rođendana</th>
                <th>Vrijeme rođendana</th>
                <th>Broj djece</th>
                <th>Sudionici</th>
                <th>Uputa</th>
                <th>Status</th>
                <th></th>
                <th></th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['grupa_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['korisnici_id'];?>
</td>
                <td class="datum"><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_datumRodendana'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_vrijemeRodendana'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_brojDjece'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_sudionici'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_uputa'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_status'];?>
</td>
                <td><a href="potvrdaRezervacije.php?id=<?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_id'];?>
" style="color: white;"><button>Potvrdi</button></a></td>
                <td><a href="odbijanjeRezervacije.php?id=<?php echo $_smarty_tpl->tpl_vars['podatak']->value['rezervacija_id'];?>
" style="color: white;"><button>Odbij</button></a></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
</div>
<?php echo '<script'; ?>
>
    elementi = document.getElementsByClassName("datum");
    for(i = 0; i < elementi.length; i++){
        for(j = 0; j < i; j++){
            if(elementi[i].innerHTML === elementi[j].innerHTML){
                elementi[i].style.backgroundColor = "red";
                elementi[j].style.backgroundColor = "red";
            }
        }
    }
<?php echo '</script'; ?>
><?php }
}
