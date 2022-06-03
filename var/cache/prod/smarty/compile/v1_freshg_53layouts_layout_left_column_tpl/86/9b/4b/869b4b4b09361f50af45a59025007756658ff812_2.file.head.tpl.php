<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0aba30088_45468297',
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
function content_6273e0aba30088_45468297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20571856306273e0aba17ea1_29281367', 'head_charset');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4127780946273e0aba18936_00283452', 'head_ie_compatibility');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17097555596273e0aba19216_79648852', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6945623566273e0aba260a8_67469464', 'head_viewport');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1408092196273e0aba268e6_62830048', 'head_icons');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14803999606273e0aba28877_84315665', 'stylesheets');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10960110406273e0aba29768_05632964', 'javascript_head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3007568646273e0aba2ab53_54444836', 'hook_header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18334528276273e0aba2f0c0_87296620', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_20571856306273e0aba17ea1_29281367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_20571856306273e0aba17ea1_29281367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="utf-8"><?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_4127780946273e0aba18936_00283452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_4127780946273e0aba18936_00283452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="x-ua-compatible" content="ie=edge"><?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_microdata'} */
class Block_7399206466273e0aba19657_41126046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_6485062856273e0aba1a4c3_89766143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_2218343506273e0aba1aaa4_07619286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_seo_title'} */
class Block_21081319116273e0aba1b880_75087955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_11592283806273e0aba1c849_74735516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_21366511436273e0aba1d431_77436495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_2849291766273e0aba1e0d1_82710086 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_20041303966273e0aba20e89_41844993 extends Smarty_Internal_Block
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
class Block_15162565096273e0aba227e8_17287534 extends Smarty_Internal_Block
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
class Block_17097555596273e0aba19216_79648852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_17097555596273e0aba19216_79648852',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_7399206466273e0aba19657_41126046',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_6485062856273e0aba1a4c3_89766143',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_2218343506273e0aba1aaa4_07619286',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_21081319116273e0aba1b880_75087955',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_11592283806273e0aba1c849_74735516',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_21366511436273e0aba1d431_77436495',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_2849291766273e0aba1e0d1_82710086',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_20041303966273e0aba20e89_41844993',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_15162565096273e0aba227e8_17287534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7399206466273e0aba19657_41126046', 'head_microdata', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6485062856273e0aba1a4c3_89766143', 'head_microdata_special', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2218343506273e0aba1aaa4_07619286', 'head_pagination_seo', $this->tplIndex);
?>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21081319116273e0aba1b880_75087955', 'head_seo_title', $this->tplIndex);
?>
</title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11592283806273e0aba1c849_74735516', 'hook_after_title_tag', $this->tplIndex);
?>
<meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21366511436273e0aba1d431_77436495', 'head_seo_description', $this->tplIndex);
?>
"><meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2849291766273e0aba1e0d1_82710086', 'head_seo_keywords', $this->tplIndex);
?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?><meta name="AdsBot-Google" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?><link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20041303966273e0aba20e89_41844993', 'head_hreflang', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15162565096273e0aba227e8_17287534', 'head_open_graph', $this->tplIndex);
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_6945623566273e0aba260a8_67469464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_6945623566273e0aba260a8_67469464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_1408092196273e0aba268e6_62830048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_1408092196273e0aba268e6_62830048',
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
class Block_14803999606273e0aba28877_84315665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_14803999606273e0aba28877_84315665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_10960110406273e0aba29768_05632964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_10960110406273e0aba29768_05632964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_3007568646273e0aba2ab53_54444836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_3007568646273e0aba2ab53_54444836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_18334528276273e0aba2f0c0_87296620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_18334528276273e0aba2f0c0_87296620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
