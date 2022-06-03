<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab9ff414_44267025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8592633bc8fade1a9917d8fdb26ef3f7715238c' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/layouts/layout-both-columns.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/tvcms-javascript-files.tpl' => 1,
    'file:_partials/tvcms-page-loader.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6273e0ab9ff414_44267025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!doctype html><html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><head><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1755421326273e0ab9d9c99_50166772', 'head');
$_smarty_tpl->_subTemplateRender("file:_partials/tvcms-javascript-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></head><body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['res_1']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['res_1']->value, ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['res_2']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['res_2']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?> style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;' <?php }?> data-mouse-hover-img='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_HOVER_IMG"), ENT_QUOTES, 'UTF-8');?>
' data-menu-sticky='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_MAIN_MENU_STICKY"), ENT_QUOTES, 'UTF-8');?>
'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_281672556273e0ab9dff02_08495673', 'hook_after_body_opening_tag');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayThemeOptions'),$_smarty_tpl ) );?>
<main><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="tv-main-div <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?>tv-box-layout container<?php }?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_BODY_BACKGROUND_COLOR_STATUS') == '1') {?>style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBodyBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;' <?php }?>> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4783793356273e0ab9e3d82_45134467', 'product_activation');
?>
 <header id="header"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10280828886273e0ab9e4a41_14948209', 'header');
?>
</header><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202612976273e0ab9e5561_24070654', 'notifications');
?>
<div id="wrapper"><div class="tvcmscontainer-layout"><div class="container"><div id="wrappertop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
</div><div class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?> container <?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' || (isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?> tv-left-layout<?php } else { ?>tv-full-layout <?php if ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width']))) {?>tvcms-full-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-both-columns']))) {?>tvcms-left-right-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?>tvcms-left-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column']))) {?>tvcms-right-layout<?php }
}?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18028149056273e0ab9eb424_07136293', 'breadcrumb');
}?><div class="row"><?php if (!Context::getContext()->isMobile() && !Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14140481826273e0ab9ed6e1_01255437', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5122761016273e0ab9f08b9_78989857', "content_wrapper");
if (Context::getContext()->isMobile() || Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17575231646273e0ab9f43b0_34331680', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_663824496273e0ab9f73f3_93685050', "right_column");
?>
</div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}?></div></div><div class="half-wrapper-backdrop"></div></div><footer id="footer"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterProducts"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNewsLetterPopup"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17702670826273e0ab9fb9d8_97786332', "footer");
?>
</footer></div></main><div class="full-wrapper-backdrop"></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18873418176273e0ab9fc785_50651823', 'javascript_bottom');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12346632016273e0ab9fd9d5_50886498', 'hook_before_body_closing_tag');
?>
</body></html><?php }
/* {block 'head'} */
class Block_1755421326273e0ab9d9c99_50166772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1755421326273e0ab9d9c99_50166772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_281672556273e0ab9dff02_08495673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_281672556273e0ab9dff02_08495673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_4783793356273e0ab9e3d82_45134467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_4783793356273e0ab9e3d82_45134467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_10280828886273e0ab9e4a41_14948209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10280828886273e0ab9e4a41_14948209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_202612976273e0ab9e5561_24070654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_202612976273e0ab9e5561_24070654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_18028149056273e0ab9eb424_07136293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_18028149056273e0ab9eb424_07136293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_14140481826273e0ab9ed6e1_01255437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_14140481826273e0ab9ed6e1_01255437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_2899094226273e0ab9f1e85_02123223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_5122761016273e0ab9f08b9_78989857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_5122761016273e0ab9f08b9_78989857',
  ),
  'content' => 
  array (
    0 => 'Block_2899094226273e0ab9f1e85_02123223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column right-column col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12"><div class="theiaStickySidebar"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2899094226273e0ab9f1e85_02123223', "content", $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_17575231646273e0ab9f43b0_34331680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_17575231646273e0ab9f43b0_34331680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_663824496273e0ab9f73f3_93685050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_663824496273e0ab9f73f3_93685050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="right-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><div class='tvright-column-remove'><div class="tvright-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_17702670826273e0ab9fb9d8_97786332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17702670826273e0ab9fb9d8_97786332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_18873418176273e0ab9fc785_50651823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_18873418176273e0ab9fc785_50651823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_12346632016273e0ab9fd9d5_50886498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_12346632016273e0ab9fd9d5_50886498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
