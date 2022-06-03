<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/tv-product-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b78d6563_07794916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85aee55626c22713caaad4531b7f6725600b8f94' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/tv-product-1.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_6273e0b78d6563_07794916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="tvprduct-image-info-wrapper clearfix row product-1" data-product-layout="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTabVideo'),$_smarty_tpl ) );?>
<div class="col-md-6 tv-product-page-image"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6177425456273e0b78bfc46_87358660', 'product_cover_thumbnails');
?>
</div><div class="col-md-6 tv-product-page-content"><div class="tvproduct-title-brandimage" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2051495366273e0b78c08e1_59077550', 'page_header_container');
?>
<div class="tvcms-product-brand-logo"><?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvproduct-brand"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" height="75px" width="170px" loading="lazy"></a><?php }?></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10849087976273e0b78c3fd1_10059838', 'product_prices');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2912518176273e0b78c4bc6_00809439', 'product_availability');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21419936756273e0b78c7778_07921281', 'product_description_short');
if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}?><div class="product-information tvproduct-special-desc"><?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5694831596273e0b78cccd0_67200931', 'product_customization');
}?><div class="product-actions"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1940910366273e0b78cdf98_93089275', 'product_buy');
?>
</div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9885507136273e0b78d52c6_46147417', 'hook_display_reassurance');
?>
</div></div><?php }
/* {block 'product_cover_thumbnails'} */
class Block_6177425456273e0b78bfc46_87358660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_6177425456273e0b78bfc46_87358660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_18534424756273e0b78c1242_31491997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_883688706273e0b78c0d29_90785726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18534424756273e0b78c1242_31491997', 'page_title', $this->tplIndex);
?>
</h1><?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_2051495366273e0b78c08e1_59077550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_2051495366273e0b78c08e1_59077550',
  ),
  'page_header' => 
  array (
    0 => 'Block_883688706273e0b78c0d29_90785726',
  ),
  'page_title' => 
  array (
    0 => 'Block_18534424756273e0b78c1242_31491997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883688706273e0b78c0d29_90785726', 'page_header', $this->tplIndex);
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_10849087976273e0b78c3fd1_10059838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_10849087976273e0b78c3fd1_10059838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_availability'} */
class Block_2912518176273e0b78c4bc6_00809439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_2912518176273e0b78c4bc6_00809439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?><span id="product-availability"><?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?><i class="material-icons rtl-no-flip product-available">&#xE5CA;</i><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?><i class="material-icons product-last-items">&#xE002;</i><?php } else { ?><i class="material-icons product-unavailable">&#xE14B;</i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
}
/* {/block 'product_availability'} */
/* {block 'product_description_short'} */
class Block_21419936756273e0b78c7778_07921281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_21419936756273e0b78c7778_07921281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {?><div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemprop="description" class="tvproduct-page-decs"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php }
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_5694831596273e0b78cccd0_67200931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_5694831596273e0b78cccd0_67200931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_20145307556273e0b78cf628_81285974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_17828163736273e0b78d1654_17676635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_13934986606273e0b78d01a0_56774006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['packItems']->value) {?><div class="product-pack"><p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17828163736273e0b78d1654_17676635', 'product_miniature', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_20449665366273e0b78d2a80_51381791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_17405027246273e0b78d3544_57904462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_17158036576273e0b78d4614_06730034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_1940910366273e0b78cdf98_93089275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_1940910366273e0b78cdf98_93089275',
  ),
  'product_variants' => 
  array (
    0 => 'Block_20145307556273e0b78cf628_81285974',
  ),
  'product_pack' => 
  array (
    0 => 'Block_13934986606273e0b78d01a0_56774006',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_17828163736273e0b78d1654_17676635',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_20449665366273e0b78d2a80_51381791',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_17405027246273e0b78d3544_57904462',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_17158036576273e0b78d4614_06730034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh"><input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id"><input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20145307556273e0b78cf628_81285974', 'product_variants', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13934986606273e0b78d01a0_56774006', 'product_pack', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20449665366273e0b78d2a80_51381791', 'product_discounts', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17405027246273e0b78d3544_57904462', 'product_add_to_cart', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomtab'),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17158036576273e0b78d4614_06730034', 'product_refresh', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_9885507136273e0b78d52c6_46147417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_9885507136273e0b78d52c6_46147417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_reassurance'} */
}
