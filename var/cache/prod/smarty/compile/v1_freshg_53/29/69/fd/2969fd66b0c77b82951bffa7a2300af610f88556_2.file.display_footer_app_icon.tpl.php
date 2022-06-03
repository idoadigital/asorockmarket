<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscustomsetting/views/templates/front/display_footer_app_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac340060_88067653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2969fd66b0c77b82951bffa7a2300af610f88556' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscustomsetting/views/templates/front/display_footer_app_icon.tpl',
      1 => 1651641689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ac340060_88067653 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvapp-logo-link-wrapper "><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['apple_app_link']) {?><div class='tvapp-logo-wrapper tvapp-logo-apple'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['apple_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Apple App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
App-logo-1.png' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Apple App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
' height="31" width="110" class="tv-img-responsive"></a></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['google_app_link']) {?><div class='tvapp-logo-wrapper tvapp-logo-google'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['google_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Google App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
App-logo-2.png' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Google App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
' height="31" width="110" class="tv-img-responsive"></a></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['microsoft_app_link']) {?><div class='tvapp-logo-wrapper tvapp-logo-microsoft'><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['microsoft_link'], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Microsoft App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
'><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');?>
App-logo-3.png' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Microsoft App Link",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
' height="31" width="110" class="tv-img-responsive"></a></div><?php }?></div><?php }
}
