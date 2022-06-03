<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:08:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmswishlist/views/templates/front/tvcmswishlist-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273da7438f048_12922376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38bb99c3fa45faa3b034a84bbaf647d3dadfc3ec' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmswishlist/views/templates/front/tvcmswishlist-extra.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273da7438f048_12922376 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvproduct-wishlist"><input type="hidden" class="wishlist_prod_id" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && !empty($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?><div class="buttons_bottom_block no-print panel-product-line panel-product-actions" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div id="wishlist_button"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
if ($_smarty_tpl->tpl_vars['wishlist']->value['default'] == '1') {?><a class="wishlist_button_extra" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
); return false;"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><div class="tvproduct-wishlist-wrapper-icon"><svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="16px" height="16px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1040 928"><path d="M288 66q73 0 180 106l46 45l45-46q15-16 31.5-30t32.5-26t31.5-21T684 78.5t27.5-9.5t24.5-3q89 0 157 68q69 69 69 166t-69 167q-5 4-359 387q-5 5-11 6.5t-10 1.5q-12 0-21-8q-324-360-359-395q-8-8-15.5-17.5t-14-19t-12-19.5t-10-20.5T74 361t-5.5-22t-3.5-23t-1-23q0-98 69-167q32-31 70-45.5T288 66zm0-64q-59 0-109 19T88 81q-43 43-65.5 99T0 292.5T22.5 405T88 504q9 9 49.5 53.5t91 100.5t100 111t83.5 92l34 37q27 28 66.5 28t67.5-28q354-383 358-386q88-88 88-212T938 89q-44-44-93.5-65.5T736 2q-53 0-111.5 35T513 126Q387 2 288 2z" fill="#000000" /><rect x="0" y="0" width="1040" height="928" fill="rgba(0, 0, 0, 0)" /></svg></div><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span></div></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php } else { ?><a href="#" class="tvquick-view-popup-wishlist wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, 1); return false;" rel="nofollow" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><div class="tvproduct-wishlist-wrapper-icon"><svg aria-hidden="true" focusable="false" width="18" height="18" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1040 928"><path d="M288 66q73 0 180 106l46 45l45-46q15-16 31.5-30t32.5-26t31.5-21T684 78.5t27.5-9.5t24.5-3q89 0 157 68q69 69 69 166t-69 167q-5 4-359 387q-5 5-11 6.5t-10 1.5q-12 0-21-8q-324-360-359-395q-8-8-15.5-17.5t-14-19t-12-19.5t-10-20.5T74 361t-5.5-22t-3.5-23t-1-23q0-98 69-167q32-31 70-45.5T288 66zm0-64q-59 0-109 19T88 81q-43 43-65.5 99T0 292.5T22.5 405T88 504q9 9 49.5 53.5t91 100.5t100 111t83.5 92l34 37q27 28 66.5 28t67.5-28q354-383 358-386q88-88 88-212T938 89q-44-44-93.5-65.5T736 2q-53 0-111.5 35T513 126Q387 2 288 2z" fill="#000000"></path><rect x="0" y="0" width="1040" height="928" fill="rgba(0, 0, 0, 0)"></rect></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span></div></div></a><?php }?></div><?php }
}
