<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:08:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscategoryproduct/views/templates/front/show_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273da749715d0_51774161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd961a24ae6ab77b88e26d71d08b4c519ebc7f6' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscategoryproduct/views/templates/front/show_product.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/category-product-slider.tpl' => 1,
  ),
),false)) {
function content_6273da749715d0_51774161 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ((isset($_smarty_tpl->tpl_vars['product_list']->value)) && !empty($_smarty_tpl->tpl_vars['product_list']->value)) {?><div class='tvtabcategory-all-product-content-box'><div class='tvtabcategory-all-product-slider owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/category-product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"category_product_slider"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="tvtabcategory-product-pagination"><div class="tvtabcategory-product-next-pre-btn"><div class="tvtabcategory-product-prev swiper-button-prev tvcmsprev-btn"><i class='material-icons'>&#xe5c4;</i></div><div class="tvtabcategory-product-next swiper-button-next tvcmsnext-btn"><i class='material-icons'>&#xe5c8;</i></div></div></div><?php } else { ?><div class="tvtabcategory-not-found"><div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Data Found','mod'=>'tvcmscategoryproduct'),$_smarty_tpl ) );?>
</div></div><?php }
}
}
