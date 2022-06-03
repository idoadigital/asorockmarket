<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/miniatures/product-grid-view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab7786a6_48889801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75532b1b6c8eeb9d0db6135a53cdf9361c082b12' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/miniatures/product-grid-view.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
  ),
),false)) {
function content_6273e0ab7786a6_48889801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '17916773476273e0ab751e78_64893064';
?>
    <div class="tvproduct-wrapper <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10875778906273e0ab752df4_69972483', 'product_thumbnail');
?>
<div class="tvproduct-info-box-wrapper"><div class="product-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value,'productType'=>((string)$_smarty_tpl->tpl_vars['class_name']->value)),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13064730136273e0ab76b753_67502103', 'product_name');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18083369636273e0ab76ccd4_59850679', 'product_price_and_shipping');
?>
</div><div class='tvproduct-hover-btn'><div class="tvproduct-cart-btn"><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post"><input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="qty" value="1"><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['is_customizable']) && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?><input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id"><?php }?><input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
"><button data-button-action="add-to-cart" type="submit" class="btn add-to-cart tvproduct-add-to-cart <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>tvproduct-out-of-stock disable<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?> data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out Of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>"><i class="material-icons add-cart add-cart-loading">&#xe863;</i><svg class="add-cart" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 128.3 134.7" style="enable-background:new 0 0 128.3 134.7;" xml:space="preserve"><g id="XMLID_4_"><path id="XMLID_1_" style="fill:none;stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" d="M100.2,129.7h-72c-3.8,0-7.1-2.7-7.8-6.4L5.2,50.8c-1-5,2.8-9.6,7.8-9.6h102.3c5.1,0,8.9,4.7,7.8,9.6L108,123.3C107.2,127,103.9,129.7,100.2,129.7z"></path><path id="XMLID_3_" style="fill:#ffffff;" d="M52.4,104.7L52.4,104.7c-2.5,0-4.5-2-4.5-4.5V70.6c0-2.5,2-4.5,4.5-4.5h0c2.5,0,4.5,2,4.5,4.5v29.6C56.9,102.7,54.9,104.7,52.4,104.7z"></path><path id="XMLID_5_" style="fill:#ffffff;" d="M75.9,104.7L75.9,104.7c-2.5,0-4.5-2-4.5-4.5V70.6c0-2.5,2-4.5,4.5-4.5h0c2.5,0,4.5,2,4.5,4.5v29.6C80.4,102.7,78.4,104.7,75.9,104.7z"></path><path id="XMLID_6_" style="fill:#ffffff;" d="M21.5,42.2L21.5,42.2c-2-1.5-2.4-4.3-0.9-6.3L46.5,1.8c1.5-2,4.3-2.4,6.3-0.9l0,0c2,1.5,2.4,4.3,0.9,6.3L27.8,41.3C26.3,43.3,23.5,43.7,21.5,42.2z"></path><path id="XMLID_8_" style="fill:#ffffff;" d="M106.5,42.2L106.5,42.2c2-1.5,2.4-4.3,0.9-6.3L81.6,1.8c-1.5-2-4.3-2.4-6.3-0.9l0,0c-2,1.5-2.4,4.3-0.9,6.3l25.8,34.1C101.7,43.3,104.6,43.7,106.5,42.2z"></path></g></svg><i class='material-icons out-of-stock hide'>&#xe611;</i></button></form></div><div class=" tvproduct-quick-btn"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1004468116273e0ab774d16_81078128', 'quick_view');
?>
</div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWishlistBtnProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCompareProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div></div></div><?php }
/* {block 'product_flags'} */
class Block_14172047326273e0ab761dc4_60806645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="tvproduct-flags tvproduct-online-new-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'online-only' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'new') {?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><ul class="tvproduct-flags tvproduct-sale-pack-wrapper"><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</li></ul><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?><span class="product-flag on-sale"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_10875778906273e0ab752df4_69972483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_10875778906273e0ab752df4_69972483',
  ),
  'product_flags' => 
  array (
    0 => 'Block_14172047326273e0ab761dc4_60806645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-image"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail" itemprop="url"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tvproduct-defult-img tv-img-responsive" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><?php if (Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][0]['cover'])) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][1]['cover'])) {
ob_start();
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG') != '0', ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><?php }
}
}?></a><?php } else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ImgDir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8');?>
-default-home_default.jpg" itemprop="image" class="tv-img-responsive" loading="lazy"></a><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14172047326273e0ab761dc4_60806645', 'product_flags', $this->tplIndex);
if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}?></div><?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_13064730136273e0ab76b753_67502103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_13064730136273e0ab76b753_67502103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-name product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><h6 itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6></a></div><?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_18083369636273e0ab76ccd4_59850679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_18083369636273e0ab76ccd4_59850679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tv-product-price tvproduct-name-price-wrapper"><?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-price-and-shipping"><meta itemprop="sku" content="1234" /><meta itemprop="mpn" content="1234" /><meta itemprop="brand" content="fashion" /><span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>
</div><?php }?></div><?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'quick_view'} */
class Block_1004468116273e0ab774d16_81078128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quick_view' => 
  array (
    0 => 'Block_1004468116273e0ab774d16_81078128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="quick-view" href="#" data-link-action="quickview" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><div class="tvproduct-quick-icon"><svg aria-hidden="true" focusable="false" width="14px" height="14px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1056 896"><path d="M531 257q-39 0-74.5 15.5t-61 41t-41 61T339 449t15.5 75t41 61.5t61 40.5t74.5 15q53 0 97-25.5t69.5-69.5t25.5-97q0-79-56-135.5T531 257zm0 320q-34 0-64-17.5t-47.5-47T402 448q0-26 10-49.5t27.5-41t41-27.5t49.5-10q53 0 90.5 37.5T658 448t-37 91t-90 38zm509-136q0-1-.5-2.5t-.5-2.5t-.5-1.5l-.5-.5v-1l-1-2q-68-157-206-246.5T530 95q-107 0-206 39T144.5 249.5T18 431v2.5l-1 1.5v3l-1 2q-1 6-1 9q0 2 .5 4t.5 4q0 1 1 3v2l.5 1.5l.5.5v3q69 157 207.5 245.5T528 801q107 0 205.5-38.5T912 648t125-181q1 0 1-1v-1.5l.5-1l.5-.5v-3l1-2q1-6 1-9q0-2-.5-4t-.5-4zM528 737q-142 0-263-74.5T81 449q63-139 185-214.5T530 159q92 0 176.5 32T862 289.5T975 449q-63 139-184 213.5T528 737z" fill="#ffffff"></path><rect x="0" y="0" width="1056" height="896" fill="rgba(0, 0, 0, 0)"></rect></svg></div></a><?php
}
}
/* {/block 'quick_view'} */
}
