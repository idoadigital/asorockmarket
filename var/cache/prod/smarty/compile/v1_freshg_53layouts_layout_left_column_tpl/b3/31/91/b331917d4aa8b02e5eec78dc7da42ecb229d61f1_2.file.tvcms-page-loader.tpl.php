<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/tvcms-page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abb89112_48384747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b331917d4aa8b02e5eec78dc7da42ecb229d61f1' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/tvcms-page-loader.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0abb89112_48384747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (Configuration::get('TVCMSCUSTOMSETTING_PAGE_LOADER')) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13427195866273e0abb87314_34278064', 'page_loading');
}
}
/* {block 'page_loading'} */
class Block_13427195866273e0abb87314_34278064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loading' => 
  array (
    0 => 'Block_13427195866273e0abb87314_34278064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvcms-loading-overlay"><div class="tvcms-loading-inner"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"  height="51" width="205"/><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
themevolty/tv_loading.gif" alt="" height="101" width="114"/></div></div><?php
}
}
/* {/block 'page_loading'} */
}
