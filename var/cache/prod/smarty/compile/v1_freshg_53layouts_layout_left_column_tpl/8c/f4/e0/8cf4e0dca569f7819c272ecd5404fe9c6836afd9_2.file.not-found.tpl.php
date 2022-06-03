<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0c8920d01_68741886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf4e0dca569f7819c272ecd5404fe9c6836afd9' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/errors/not-found.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0c8920d01_68741886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21096820296273e0c891db29_90572078', 'page_content');
?>
</section><?php }
/* {block 'search'} */
class Block_11802621446273e0c891ecf7_09581380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_17463551696273e0c891fc35_40876427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_21096820296273e0c891db29_90572078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_21096820296273e0c891db29_90572078',
  ),
  'search' => 
  array (
    0 => 'Block_11802621446273e0c891ecf7_09581380',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_17463551696273e0c891fc35_40876427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11802621446273e0c891ecf7_09581380', 'search', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17463551696273e0c891fc35_40876427', 'hook_not_found', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
