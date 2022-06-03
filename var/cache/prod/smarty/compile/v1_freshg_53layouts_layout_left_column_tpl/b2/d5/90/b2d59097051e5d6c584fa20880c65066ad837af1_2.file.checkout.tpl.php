<?php
/* Smarty version 3.1.43, created on 2022-05-06 11:05:34
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627500fea70ca6_79044112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d59097051e5d6c584fa20880c65066ad837af1' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/checkout.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/tvcms-page-loader.tpl' => 1,
    'file:checkout/_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
    'file:_partials/tvcms-javascript-files.tpl' => 1,
  ),
),false)) {
function content_627500fea70ca6_79044112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html><html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><head><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1689521726627500fea51069_71111094', 'head');
?>
</head><body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
" <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?> style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;' <?php }?> data-mouse-hover-img='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_HOVER_IMG"), ENT_QUOTES, 'UTF-8');?>
' data-menu-sticky='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_MAIN_MENU_STICKY"), ENT_QUOTES, 'UTF-8');?>
'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123208677627500fea64439_14892600', 'hook_after_body_opening_tag');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayThemeOptions'),$_smarty_tpl ) );
$_smarty_tpl->_subTemplateRender('file:_partials/tvcms-page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="tv-main-div <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?>tv-box-layout container<?php }?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_BODY_BACKGROUND_COLOR_STATUS') == '1') {?>style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBodyBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;'<?php }?>><header id="header"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_433857502627500fea68663_79197911', 'header');
?>
</header><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_937479376627500fea69217_25661432', 'notifications');
?>
<div id="wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
<div class="container"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1565870137627500fea6a4f0_09767138', 'content');
?>
</div><div class="half-wrapper-backdrop"></div></div><footer id="footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2112782422627500fea6d268_66982017', 'footer');
?>
</footer></div><div class="full-wrapper-backdrop"></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293629470627500fea6dee8_34431215', 'javascript_bottom');
$_smarty_tpl->_subTemplateRender("file:_partials/tvcms-javascript-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1638129223627500fea6f802_99574015', 'hook_before_body_closing_tag');
?>
</body></html><?php }
/* {block 'head'} */
class Block_1689521726627500fea51069_71111094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1689521726627500fea51069_71111094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_123208677627500fea64439_14892600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_123208677627500fea64439_14892600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'header'} */
class Block_433857502627500fea68663_79197911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_433857502627500fea68663_79197911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_937479376627500fea69217_25661432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_937479376627500fea69217_25661432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'notifications'} */
/* {block 'cart_summary'} */
class Block_1671786451627500fea6a940_37530584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_298198130627500fea6b8e6_12253155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_1565870137627500fea6a4f0_09767138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1565870137627500fea6a4f0_09767138',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_1671786451627500fea6a940_37530584',
    1 => 'Block_298198130627500fea6b8e6_12253155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content"><div class="row"><div class="col-md-12 col-lg-8 tvcheckout-process-left"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1671786451627500fea6a940_37530584', 'cart_summary', $this->tplIndex);
?>
</div><div class="col-md-12 col-lg-4 tvcheckout-process-right"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_298198130627500fea6b8e6_12253155', 'cart_summary', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>
</div></div></div><?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_2112782422627500fea6d268_66982017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2112782422627500fea6d268_66982017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_293629470627500fea6dee8_34431215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_293629470627500fea6dee8_34431215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_1638129223627500fea6f802_99574015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_1638129223627500fea6f802_99574015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
