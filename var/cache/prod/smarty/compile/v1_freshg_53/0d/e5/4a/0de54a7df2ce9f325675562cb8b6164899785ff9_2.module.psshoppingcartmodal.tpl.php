<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:38
  from 'module:psshoppingcartmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0bab78080_64563311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de54a7df2ce9f325675562cb8b6164899785ff9' => 
    array (
      0 => 'module:psshoppingcartmodal.tpl',
      1 => 1651641692,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0bab78080_64563311 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blockcart-modal" class="modal fade tv-addtocart-msg-wrapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close tv-addtocart-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title h6 text-sm-center" id="myModalLabel"><i class="material-icons rtl-no-flip">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product successfully added to your shopping cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4></div><div class="modal-body tv-addtocart-content-part"><div class="row"><div class="col-md-6 divide-right"><div class="row tv-addtocart-image-name-wrapper"><div class="col-md-6 tv-addtocart-product-image"><img class="product-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['add_cart_def']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['add_cart_def']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['add_cart_def']['height'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image"></div><div class="col-md-6 tv-addtocart-product-name"><h6 class="h6 product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6><p class="tv-addtocart-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'property_value', false, 'property');
$_smarty_tpl->tpl_vars['property_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['property']->value => $_smarty_tpl->tpl_vars['property_value']->value) {
$_smarty_tpl->tpl_vars['property_value']->do_else = false;
?><span><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value, ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property_value']->value, ENT_QUOTES, 'UTF-8');?>
</span><br><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><span><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cart_quantity'], ENT_QUOTES, 'UTF-8');?>
</span></div></div></div><div class="col-md-6 tv-addtocart-content"><div class="cart-content"><?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 1) {?><p class="cart-products-count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %products_count% items in your cart.','sprintf'=>array('%products_count%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p><?php } else { ?><p class="cart-products-count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %product_count% item in your cart.','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</p><?php }?><p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</p><p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['value'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']),$_smarty_tpl ) );?>
</p><?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?><p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?><p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</p><div class="cart-content-btn"><button type="button" class="tvall-inner-btn" data-dismiss="modal"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvall-inner-btn"><i class="material-icons rtl-no-flip">&#xE876;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a></div></div></div></div></div></div></div></div><?php }
}
