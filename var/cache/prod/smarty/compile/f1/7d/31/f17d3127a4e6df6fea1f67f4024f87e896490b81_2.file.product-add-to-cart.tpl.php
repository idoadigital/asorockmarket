<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:43
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0bf4e3fa2_58675763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f17d3127a4e6df6fea1f67f4024f87e896490b81' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-additional-info.tpl' => 1,
  ),
),false)) {
function content_6273e0bf4e3fa2_58675763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart"><?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15845853856273e0bf4dd6c3_35000326', 'product_quantity');
}?></div><?php }
/* {block 'product_additional_info'} */
class Block_7798196836273e0bf4e2615_26196115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_quantity'} */
class Block_15845853856273e0bf4dd6c3_35000326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_15845853856273e0bf4dd6c3_35000326',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_7798196836273e0bf4e2615_26196115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-quantity"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity : ','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><div class="qty"><input type="text" name="qty" id="quantity_wanted" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
" class="input-group" min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"></div></div><div class='tvwishlist-compare-wrapper-page add tv-product-page-add-to-cart-wrapper'><div class="tvcart-btn-model"><button class="tvall-inner-btn add-to-cart <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>> <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> <i class='material-icons block'>&#xe14b;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><?php } else { ?><i class="material-icons shopping-cart">&#xE547;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><?php }?></button></div><div class="tvproduct-wishlist-compare"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWishlistProductPage','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCompareProductPage','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div><div class="tvproduct-stock-social"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPageStockIndicator','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7798196836273e0bf4e2615_26196115', 'product_additional_info', $this->tplIndex);
?>
</div></div><?php
}
}
/* {/block 'product_quantity'} */
}
