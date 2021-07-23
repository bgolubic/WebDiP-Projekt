<?php
/* Smarty version 3.1.39, created on 2021-06-16 18:41:53
  from '/var/www/html/bgolubic/zadaca_04/templates/galerija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ca29d1450bb1_87404844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb525241aee72db395fba67bc9a0f7212d79d8f1' => 
    array (
      0 => '/var/www/html/bgolubic/zadaca_04/templates/galerija.tpl',
      1 => 1623861713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ca29d1450bb1_87404844 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Galerija</h2>
<label for="grupa">Odabir grupe: </label><br>
        <select id="grupa" name="grupa">
            <option value="0">Odaberite grupu</option>
        </select><br>
<h3>Slike</h3>
<div id="galerijaSlika" class="galerija">
</div>
<h3>Audio</h3>
<div id="galerijaAudio" class="galerija">
</div>
<h3>Video</h3>
<div id="galerijaVideo" class="galerija">
</div><?php }
}
