<?php
/* Smarty version 3.1.39, created on 2021-06-06 12:20:08
  from '/var/www/html/bgolubic/zadaca_04/templates/obrazac.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bca158e85710_13589080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639cc1f8a45b471a3edcaed4609b852f46842dd9' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/obrazac.tpl',
      1 => 1622884017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bca158e85710_13589080 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="greskaLabel"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['greske']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    Nije ispravno: <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<form id="obrazac" method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" style="display:flex; justify-content: center;">
    <p><label for="datumRod" id="labelRod" class="<?php echo $_smarty_tpl->tpl_vars['klasaLabeleDatuma']->value;?>
">Datum proslave rođendana: </label><br>
        <input type="text" id="datumRod" name="danRod" placeholder="dd.mm.gggg." class="<?php echo $_smarty_tpl->tpl_vars['klasaInputaDatuma']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['valueDatum']->value;?>
"><br>
        <label for="vrijemePro" id="labelVrijemePro" class="<?php echo $_smarty_tpl->tpl_vars['klasaLabeleVremena']->value;?>
">Vrijeme proslave rođendana: </label><br>
        <input type="text" id="vrijemePro" name="vrijemePro" placeholder="h:i:s AM/PM ili h:i:s" class="<?php echo $_smarty_tpl->tpl_vars['klasaInputaVremena']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['valueVrijeme']->value;?>
"><br>
        <label>Najdraža boja:</label><br>
        <input type="radio" id="bijela" name="boja" value="Bijela">
        <label for="bijela">Bijela</label><br>
        <input type="radio" id="siva" name="boja" value="Siva">
        <label for="siva">Siva</label><br>
        <input type="radio" id="crvena" name="boja" value="Crvena">
        <label for="crvena">Crvena</label><br>
        <input type="radio" id="zelena" name="boja" value="Zelena">
        <label for="zelena">Zelena</label><br>
        <input type="radio" id="plava" name="boja" value="Plava">
        <label for="plava">Plava</label><br>
        <input type="radio" id="zuta" name="boja" value="Žuta">
        <label for="zuta">Žuta</label><br>
        <label for="brojGosti" id="labelBrojGosti" class="<?php echo $_smarty_tpl->tpl_vars['klasaLabeleBroja']->value;?>
">Odaberite brojeve gostiju:</label><br>
        <select id="brojGosti" name="brojGosti[]" size="10" multiple class="<?php echo $_smarty_tpl->tpl_vars['klasaInputaBroja']->value;?>
">
            <optgroup label="DJECA DO 6 GODINA">
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
            </optgroup>
            <optgroup label="DJECA OD 6 DO 14 GODINA">
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
            </optgroup>
            <optgroup label="MLADI OD 15 DO 19 GODINA">
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
            </optgroup>
            <optgroup label="MLADI OD 20 do 24 GODINE">
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
            </optgroup>
            <optgroup label="ODRASLI">
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
            </optgroup>
        </select><br>
        <label for="alkohol">Hoće li biti alkohola?</label>
        <input type="checkbox" id="alkohol" name="alkohol"><br>
        <label>Torta</label><br>
        <input type="radio" id="bezTorte" name="torta" value="Bez torte">
        <label for="bezTorte">Bez torte</label><br>
        <input type="radio" id="vocnaTorta" name="torta" value="Voćna">
        <label for="vocnaTorta">Voćna</label><br>
        <input type="radio" id="cokoladnaTorta" name="torta" value="Čokoladna">
        <label for="cokoladnaTorta">Čokoladna</label><br>
        <input id="submitObrazac" name="submit" type="submit" value=" <?php echo $_smarty_tpl->tpl_vars['gumbSubmit']->value;?>
 ">
        <input id="resetObrazac" type="reset" value=" Inicijaliziraj "> </p>
</form>
<form method="POST" enctype="multipart/form-data">
    <?php echo $_smarty_tpl->tpl_vars['inputEmail']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['selectFile']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['gumbBackup']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['gumbRestore']->value;?>

</form>
<?php }
}
