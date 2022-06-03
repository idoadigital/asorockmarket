<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b76a7ce7_98662066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869b4b4b09361f50af45a59025007756658ff812' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/head.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/head-jsonld.tpl' => 1,
    'file:_partials/pagination-seo.tpl' => 1,
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6273e0b76a7ce7_98662066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8050935056273e0b7691700_25512683', 'head_charset');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9936417866273e0b7691fc4_39590367', 'head_ie_compatibility');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13021249466273e0b7692817_81976309', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12489423456273e0b769e6d1_00430911', 'head_viewport');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21310720846273e0b769ee45_87424018', 'head_icons');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9948975276273e0b76a0a23_01665085', 'stylesheets');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5182838736273e0b76a1923_97139568', 'javascript_head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482281776273e0b76a2d87_32375863', 'hook_header');
?>
<link rel="dns-prefetch" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['shop_domain_url'], ENT_QUOTES, 'UTF-8');?>
" /><link rel="preconnect" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['shop_domain_url'], ENT_QUOTES, 'UTF-8');?>
" crossorigin/><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
570eb83859dc23dd0eec423a49e147fe.woff2" as="font" type="font/woff2" crossorigin /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
material-fonts.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
poppins.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
playfair-display.css" /><?php if ($_smarty_tpl->tpl_vars['ArabicFontStatus']->value) {?><link type="text/css" rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
iran-yekan.css" media="all"><style type="text/css">body.lang-rtl, body.lang-rtl p, body.lang-rtl h1, body.lang-rtl h2, body.lang-rtl h3, body.lang-rtl h4, body.lang-rtl h5, body.lang-rtl h6, body.lang-rtl span, body.lang-rtl div {font-family: 'iran-yekan' !important;}</style><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_DARK_MODE_INPUT')) {?><link rel="stylesheet" class="dark-theme-css-r" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
dark-theme.css"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18967860066273e0b76a6f47_46233547', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_8050935056273e0b7691700_25512683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_8050935056273e0b7691700_25512683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="utf-8"><?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_9936417866273e0b7691fc4_39590367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_9936417866273e0b7691fc4_39590367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="x-ua-compatible" content="ie=edge"><?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_microdata'} */
class Block_16435031946273e0b7692c35_48980179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_14722806796273e0b76939a4_20184537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_5997003856273e0b7693f81_85789323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_seo_title'} */
class Block_10701141926273e0b7694bd8_60162264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_9470182536273e0b7695925_25045727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_15339093856273e0b7696459_97354263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_18008029806273e0b76970e3_84410826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_20485836616273e0b76999c4_73254301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?><link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_open_graph'} */
class Block_7568970616273e0b769b194_24745751 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php if (!(isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?><meta property="og:type" content="website" /><?php }
}
}
/* {/block 'head_open_graph'} */
/* {block 'head_seo'} */
class Block_13021249466273e0b7692817_81976309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_13021249466273e0b7692817_81976309',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_16435031946273e0b7692c35_48980179',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_14722806796273e0b76939a4_20184537',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_5997003856273e0b7693f81_85789323',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_10701141926273e0b7694bd8_60162264',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_9470182536273e0b7695925_25045727',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_15339093856273e0b7696459_97354263',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_18008029806273e0b76970e3_84410826',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_20485836616273e0b76999c4_73254301',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_7568970616273e0b769b194_24745751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16435031946273e0b7692c35_48980179', 'head_microdata', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14722806796273e0b76939a4_20184537', 'head_microdata_special', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5997003856273e0b7693f81_85789323', 'head_pagination_seo', $this->tplIndex);
?>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10701141926273e0b7694bd8_60162264', 'head_seo_title', $this->tplIndex);
?>
</title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9470182536273e0b7695925_25045727', 'hook_after_title_tag', $this->tplIndex);
?>
<meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15339093856273e0b7696459_97354263', 'head_seo_description', $this->tplIndex);
?>
"><meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18008029806273e0b76970e3_84410826', 'head_seo_keywords', $this->tplIndex);
?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?><meta name="AdsBot-Google" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?><link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20485836616273e0b76999c4_73254301', 'head_hreflang', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7568970616273e0b769b194_24745751', 'head_open_graph', $this->tplIndex);
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_12489423456273e0b769e6d1_00430911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_12489423456273e0b769e6d1_00430911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_21310720846273e0b769ee45_87424018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_21310720846273e0b769ee45_87424018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
"><link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_9948975276273e0b76a0a23_01665085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_9948975276273e0b76a0a23_01665085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_5182838736273e0b76a1923_97139568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_5182838736273e0b76a1923_97139568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_482281776273e0b76a2d87_32375863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_482281776273e0b76a2d87_32375863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_18967860066273e0b76a6f47_46233547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_18967860066273e0b76a6f47_46233547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
