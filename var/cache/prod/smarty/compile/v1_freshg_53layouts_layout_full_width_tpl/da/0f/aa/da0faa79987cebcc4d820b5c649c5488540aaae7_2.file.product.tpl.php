<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b762f1f9_42550344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da0faa79987cebcc4d820b5c649c5488540aaae7' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/product.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
  ),
),false)) {
function content_6273e0b762f1f9_42550344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2856832986273e0b7602ea9_95617522', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14243022276273e0b7604ec7_68231913', 'head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7433764966273e0b760ba71_10524332', 'head_microdata_special');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15838426396273e0b760cdb2_03815136', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_2856832986273e0b7602ea9_95617522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_2856832986273e0b7602ea9_95617522',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_14243022276273e0b7604ec7_68231913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14243022276273e0b7604ec7_68231913',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta content="width=device-width, initial-scale=1" name="viewport"><meta property="og:type" content="product"><meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?><meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_7433764966273e0b760ba71_10524332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_7433764966273e0b760ba71_10524332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_description'} */
class Block_4224571996273e0b76181d9_31043063 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-description cms-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div><?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_21435516616273e0b76191e7_41518859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_17177629496273e0b7619e28_31351588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?><div class="tab-pane fade in" id="attachments" role="tabpanel"><div class="product-attachments"><p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?><div class="attachment"><h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)</a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_1720213586273e0b760fb24_53055912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tabs tvproduct-description-tab clearfix"><ul class="nav nav-tabs" role="tablist"><?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?><li class="nav-item" role="presentation"><a class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab" href="#description" role="tab" aria-controls="description" <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true" <?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </a></li><?php }?><li class="nav-item" role="presentation"><a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab" href="#product-details" role="tab" aria-controls="product-details" <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true" <?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </a></li><?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?><li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#attachments" role="tab" aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?><li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tab" aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviewsTab'),$_smarty_tpl ) );?>
</ul><div class="tab-content clearfix" id="tab-content"><div class="tab-pane fade in <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active <?php }?>" id="description" role="tabpanel"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4224571996273e0b76181d9_31043063', 'product_description', $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21435516616273e0b76191e7_41518859', 'product_details', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17177629496273e0b7619e28_31351588', 'product_attachments', $this->tplIndex);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?><div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviewsTabContent','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_accessories'} */
class Block_18065860486273e0b76234e9_49011774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['accessories']->value) {?><div class="tvcmslike-product container-fluid"><div class='tvlike-product-wrapper-box container'><div class='tvcmsmain-title-wrapper'><div class="tvcms-main-title"><div class='tvmain-title'><h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2></div></div></div><div class="tvlike-product"><div class="products owl-theme owl-carousel tvlike-product-wrapper tvproduct-wrapper-content-box"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>"like_product"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class='tvlike-pagination-wrapper tv-pagination-wrapper'><div class="tvcmslike-next-pre-btn tvcms-next-pre-btn"><div class="tvcmslike-prev tvcmsprev-btn" data-parent="tvcmslike-product"><i class='material-icons'>&#xe5c4;</i></div><div class="tvcmslike-next tvcmsnext-btn" data-parent="tvcmslike-product"><i class='material-icons'>&#xe5c8;</i></div></div></div></div></div><?php }
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_20440573856273e0b76261f4_13768637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_19687491996273e0b7626fb3_45933893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_1219230286273e0b762ba27_68936205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_11411673666273e0b762b5e7_42721684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219230286273e0b762ba27_68936205', 'page_title', $this->tplIndex);
?>
</h1><?php
}
}
/* {/block 'page_header'} */
/* {block 'product_prices'} */
class Block_18692946406273e0b762c975_18460890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'page_footer'} */
class Block_16407132156273e0b762db09_90501158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1277663986273e0b7627a70_07813029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_PAGE_BOTTOM_STICKY_STATUS')) {?><div class="tvfooter-product-sticky-bottom"><div class="container"><div class="tvflex-items"><div class="tvproduct-image-title-price"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><div class="product-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></div><div class="tvtitle-price"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11411673666273e0b762b5e7_42721684', 'page_header', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18692946406273e0b762c975_18460890', 'product_prices', $this->tplIndex);
?>
</div><?php }?></div><div><div class="product-actions" id="bottom_sticky_data"></div></div></div></div></div><?php }?><footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16407132156273e0b762db09_90501158', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15838426396273e0b760cdb2_03815136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15838426396273e0b760cdb2_03815136',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_1720213586273e0b760fb24_53055912',
  ),
  'product_description' => 
  array (
    0 => 'Block_4224571996273e0b76181d9_31043063',
  ),
  'product_details' => 
  array (
    0 => 'Block_21435516616273e0b76191e7_41518859',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_17177629496273e0b7619e28_31351588',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_18065860486273e0b76234e9_49011774',
  ),
  'product_footer' => 
  array (
    0 => 'Block_20440573856273e0b76261f4_13768637',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_19687491996273e0b7626fb3_45933893',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1277663986273e0b7627a70_07813029',
  ),
  'page_header' => 
  array (
    0 => 'Block_11411673666273e0b762b5e7_42721684',
  ),
  'page_title' => 
  array (
    0 => 'Block_1219230286273e0b762ba27_68936205',
  ),
  'product_prices' => 
  array (
    0 => 'Block_18692946406273e0b762c975_18460890',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16407132156273e0b762db09_90501158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main" itemscope itemtype="https://schema.org/Product"><meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><div class="tvproduct-page-wrapper"><?php $_smarty_tpl->_assignInScope('prod_layout', "../catalog/tv-".((string)$_smarty_tpl->tpl_vars['TVCMSPRODUCTCUSTOM_LAYOUT']->value).".tpl");
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['prod_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1720213586273e0b760fb24_53055912', 'product_tabs', $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18065860486273e0b76234e9_49011774', 'product_accessories', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20440573856273e0b76261f4_13768637', 'product_footer', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19687491996273e0b7626fb3_45933893', 'product_images_modal', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1277663986273e0b7627a70_07813029', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
