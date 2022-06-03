<?php
/* Smarty version 3.1.43, created on 2022-05-20 18:49:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscookiesnotice/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6287e2d05fe558_14539900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e849efd7fb5845d64f15f757950f718fba0dbcc5' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscookiesnotice/views/templates/front/display_home.tpl',
      1 => 1651641689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287e2d05fe558_14539900 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='tvcmscookies-notice'><div class='tvcookies-notice-img-wrapper'><div class="tvcookies-notice-img-inner"><div class="tvcookie-content-box"><div class="tvcookies-notice-title"><?php echo $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['title'];?>
</div></div><div class="tvcookie-btn-wrapper"><button class='close-cookie tvclose-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</button><button class='close-cookie tvok-btn'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ok','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</button></div></div><div class="tvcookies-notice-icon"><button class='close-cookie tvclose-icon'><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept All','mod'=>'tvcmscookiesnotice'),$_smarty_tpl ) );?>
</span></button></div></div></div><?php }
}
