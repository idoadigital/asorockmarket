<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:08:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsnewproducts/views/templates/front/display_home-data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273da74188d13_28690738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2b35e172f8fa246bf2f64c953fd6bea0ae4f3c' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsnewproducts/views/templates/front/display_home-data.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6273da74188d13_28690738 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_image_status']) {
$_smarty_tpl->_assignInScope('col', 'col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 tvimage-true');
$_smarty_tpl->_assignInScope('image', true);
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_image_side'] == 'left') {
$_smarty_tpl->_assignInScope('image_side', 'left');
} else {
$_smarty_tpl->_assignInScope('image_side', 'right');
}
} else {
$_smarty_tpl->_assignInScope('col', '');
$_smarty_tpl->_assignInScope('image', '');
$_smarty_tpl->_assignInScope('image_side', '');
}
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['home_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0) {?><div class='tvnew-product-wrapper-box container'><div class='tvnew-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><div class='tvall-product-offer-banner'><?php if ($_smarty_tpl->tpl_vars['image']->value == true && $_smarty_tpl->tpl_vars['image_side']->value == 'left') {?><div class="tvall-product-branner col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="tvbanner-hover-wrapper tvall-block-box-shadows"><div class="tvbranner-hover-info-box"></div><div class='tvbanner-hover'></div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'new Offer Banner','mod'=>'tvcmsnewproducts'),$_smarty_tpl ) );?>
"  width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['height'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" loading="lazy"/><div class='tvbanner-hover1'></div></div></div><?php }?><div class="tvnew-product-content <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="tvall-block-box-shadows"><div class="tvnew-product"><div class="products owl-theme owl-carousel tvnew-product-wrapper tvproduct-wrapper-content-box" data-has-image='<?php if ($_smarty_tpl->tpl_vars['image']->value == true) {?>true<?php } else { ?>false<?php }?>'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>"new_product"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['image']->value == true && $_smarty_tpl->tpl_vars['image_side']->value == 'right') {?><div class="tvall-product-branner col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"><div class="tvbanner-hover-wrapper tvall-block-box-shadows"><div class="tvbranner-hover-info-box"></div><div class='tvbanner-hover'></div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'new Offer Banner','mod'=>'tvcmsnewproducts'),$_smarty_tpl ) );?>
"  width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['height'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive"loading="lazy" /><div class='tvbanner-hover1'></div></div></div><?php }?><div class='tvnew-pagination-wrapper tv-pagination-wrapper'><div class="tvnew-pagination"><div class="tvcmsnew-pagination"><div class="tvcmsnew-next-pre-btn tvcms-next-pre-btn"><div class="tvcmsnew-prev tvcmsprev-btn" data-parent="tvcmsnew-product"><i class='material-icons'>&#xe5c4;</i></div><div class="tvcmsnew-next tvcmsnext-btn" data-parent="tvcmsnew-product"><i class='material-icons'>&#xe5c8;</i></div></div></div></div></div><div class="tvallproduct-link"><a class="all-product-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All New Products','mod'=>'tvcmsnewproducts'),$_smarty_tpl ) );?>
 <i class='material-icons'>&#xe315;</i></a></div></div></div><?php }
}
}
