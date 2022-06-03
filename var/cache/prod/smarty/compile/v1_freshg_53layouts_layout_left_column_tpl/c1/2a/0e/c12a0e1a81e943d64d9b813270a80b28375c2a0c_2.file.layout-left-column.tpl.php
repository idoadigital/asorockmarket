<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab9cd594_86026895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c12a0e1a81e943d64d9b813270a80b28375c2a0c' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/layouts/layout-left-column.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ab9cd594_86026895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4135536676273e0ab9c92d0_26686937', 'right_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6738668606273e0ab9c9b90_45226703', 'content_wrapper');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_4135536676273e0ab9c92d0_26686937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_4135536676273e0ab9c92d0_26686937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_7442846926273e0ab9cc269_12881858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_6738668606273e0ab9c9b90_45226703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_6738668606273e0ab9c9b90_45226703',
  ),
  'content' => 
  array (
    0 => 'Block_7442846926273e0ab9cc269_12881858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php } else { ?> col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7442846926273e0ab9cc269_12881858', 'content', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'content_wrapper'} */
}
