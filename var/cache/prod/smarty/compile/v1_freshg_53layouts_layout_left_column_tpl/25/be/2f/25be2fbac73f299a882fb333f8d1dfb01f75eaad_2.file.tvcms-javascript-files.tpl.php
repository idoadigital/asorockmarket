<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/tvcms-javascript-files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abaa20e8_03434345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25be2fbac73f299a882fb333f8d1dfb01f75eaad' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/tvcms-javascript-files.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0abaa20e8_03434345 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSFRONTSIDE_THEME_SETTING_SHOW')) {?><!-- START THEME_CONTROL --><div class="tvcms-custom-theme"></div><!-- END THEME_CONTROL --><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_OPTION')) {
if (Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }?><!-- END THEME_CONTROL CUSTOM COLOR CSS --><?php }
}
}
