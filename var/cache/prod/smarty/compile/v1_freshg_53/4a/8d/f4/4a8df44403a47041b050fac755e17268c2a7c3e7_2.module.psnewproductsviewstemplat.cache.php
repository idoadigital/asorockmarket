<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab8c5122_92082029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1651641692,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-grid-view.tpl' => 1,
  ),
),false)) {
function content_6273e0ab8c5122_92082029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '453449506273e0ab8bf1f8_41857863';
?>
<div class="featured-products clearfix mt-3"><div class="tvcmsmain-title-wrapper clearfix"><div class="tvcms-main-title"><div class="tvmain-title"><h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2></div></div></div><div class="products"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20371348516273e0ab8c0fe9_96630799', 'product_miniature_item');
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
/* {block 'product_miniature_item'} */
class Block_20371348516273e0ab8c0fe9_96630799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_20371348516273e0ab8c0fe9_96630799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="col-xs-12 col-sm-6 col-md-4 col-lg-3 <?php if (!(isset($_smarty_tpl->tpl_vars['tab_slider']->value))) {?>item<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['double_row']->value) && $_smarty_tpl->tpl_vars['double_row']->value == true) {?>tvtab-first-product<?php }?> product-miniature js-product-miniature <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
 tvall-product-wrapper-info-box" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product"><div class="thumbnail-container"><?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-grid-view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('class_name'=>'grid','product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, true);
?></div></article><?php
}
}
/* {/block 'product_miniature_item'} */
}
