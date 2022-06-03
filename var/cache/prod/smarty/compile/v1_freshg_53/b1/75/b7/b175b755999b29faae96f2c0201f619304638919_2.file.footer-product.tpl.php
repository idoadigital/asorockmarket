<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:08:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/miniatures/footer-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273da7459c920_93480060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b175b755999b29faae96f2c0201f619304638919' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/miniatures/footer-product.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273da7459c920_93480060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19868915056273da74514fa9_94144273', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_14091865276273da74515650_15340715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-image col-xl-4 col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img class="tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['side_product_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['side_product_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['side_product_default']['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php if (Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize']['side_product_default']['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][0]['cover'])) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize']['side_product_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize']['side_product_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize']['side_product_default']['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['side_product_default']['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][1]['cover'])) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['side_product_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['side_product_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize']['side_product_default']['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php }
}?></a><?php } else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img class="tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ImgDir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8');?>
-default-side_product_default2x.jpg" /></a><?php }?></div><?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_3050123566273da74533a66_30042392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-name product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6></a></div><?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_12459136516273da74591920_68207797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-price-and-shipping"><span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><span class="discount-percentage discount-product tvproduct-discount-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' off','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?><span class="discount-amount discount-product tvproduct-discount-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' off','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php }
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>
<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>
</div><?php }
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_miniature_item'} */
class Block_19868915056273da74514fa9_94144273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_19868915056273da74514fa9_94144273',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_14091865276273da74515650_15340715',
  ),
  'product_name' => 
  array (
    0 => 'Block_3050123566273da74533a66_30042392',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_12459136516273da74591920_68207797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="tvleft-right-product-slider"><div class="thumbnail-container"><div class="tvproduct-wrapper"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14091865276273da74515650_15340715', 'product_thumbnail', $this->tplIndex);
?>
<div class="product-description col-xl-8 col-lg-9 col-md-9 col-sm-9 col-xs-9"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3050123566273da74533a66_30042392', 'product_name', $this->tplIndex);
?>
<div class="tv-product-price"><div class="tvproduct-name-price-wrapper"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12459136516273da74591920_68207797', 'product_price_and_shipping', $this->tplIndex);
?>
</div></div></div></div></div></article><?php
}
}
/* {/block 'product_miniature_item'} */
}
