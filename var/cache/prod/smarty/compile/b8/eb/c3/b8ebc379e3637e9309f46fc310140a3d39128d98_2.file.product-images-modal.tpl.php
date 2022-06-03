<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:43
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0bf50d6a3_37637028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8ebc379e3637e9309f46fc310140a3d39128d98' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0bf50d6a3_37637028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="tvmodel-close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?><figure><img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><figcaption class="image-caption"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3739538076273e0bf508466_65365489', 'product_description_short');
?>
</figcaption></figure><aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421507596273e0bf5093a8_76647950', 'product_images');
if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?><div class="arrows js-modal-arrows"><i class="material-icons arrow-up js-modal-arrow-up">&#xe5ce;</i><i class="material-icons arrow-down js-modal-arrow-down">&#xe5cf;</i></div><?php }?><div><i></i></div></aside></div></div><!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal --><?php }
/* {block 'product_description_short'} */
class Block_3739538076273e0bf508466_65365489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_3739538076273e0bf508466_65365489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_1421507596273e0bf5093a8_76647950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_1421507596273e0bf5093a8_76647950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>"><ul class="product-images js-modal-product-images"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?><li class="thumb-container"><img data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="150" itemprop="image" loading="lazy"></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php
}
}
/* {/block 'product_images'} */
}
