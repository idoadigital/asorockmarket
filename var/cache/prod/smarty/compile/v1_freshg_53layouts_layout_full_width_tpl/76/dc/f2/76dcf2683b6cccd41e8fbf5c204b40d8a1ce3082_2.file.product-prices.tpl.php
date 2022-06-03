<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b793d996_06893405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76dcf2683b6cccd41e8fbf5c204b40d8a1ce3082' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/product-prices.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0b793d996_06893405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-prices"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12635927786273e0b7925d08_53426821', 'product_price');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5838230426273e0b7930877_62738679', 'product_without_taxes');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8452601766273e0b79324a9_01400281', 'product_pack_price');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4558984436273e0b7933b04_79529400', 'product_ecotax');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>
<div class="tax-shipping-delivery-label"><?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return policy:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['number_of_days_for_return'], ENT_QUOTES, 'UTF-8');
}?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {
if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?><span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
} elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {
if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?><span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] == 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?><span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}?></div></div><?php }
}
/* {block 'product_discount'} */
class Block_18269334356273e0b7927db6_57363296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><div class="product-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_8334449306273e0b792c7b5_23805366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?><p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p><?php }
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_12635927786273e0b7925d08_53426821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_12635927786273e0b7925d08_53426821',
  ),
  'product_discount' => 
  array (
    0 => 'Block_18269334356273e0b7927db6_57363296',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_8334449306273e0b792c7b5_23805366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><link itemprop="availability" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><div class="current-price"><span class="price" itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18269334356273e0b7927db6_57363296', 'product_discount', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span><?php } else { ?><span class="discount discount-amount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>
</span><?php }
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8334449306273e0b792c7b5_23805366', 'product_unit_price', $this->tplIndex);
if (Configuration::get('PS_TAX')) {?><div class="tvproduct-tax-label"><?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Included','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Excluded','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></div><?php }?></div><?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_5838230426273e0b7930877_62738679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_5838230426273e0b7930877_62738679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?><p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p><?php }
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_8452601766273e0b79324a9_01400281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_8452601766273e0b79324a9_01400281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?><p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p><?php }
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_4558984436273e0b7933b04_79529400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_4558984436273e0b7933b04_79529400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?><p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></p><?php }
}
}
/* {/block 'product_ecotax'} */
}
