<?php
/* Smarty version 3.1.43, created on 2022-05-06 11:05:34
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627500fedb0575_73432901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adcd6db58add51653900c47d7f820a5e3b9806a0' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/_partials/footer.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627500fedb0575_73432901 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo htmlspecialchars(Configuration::get('TVCMSFOOTERCUSTOMLAYOUT'), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('footer_layout', "../../_partials/".$_prefixVariable1.".tpl");
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['footer_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php }
}
