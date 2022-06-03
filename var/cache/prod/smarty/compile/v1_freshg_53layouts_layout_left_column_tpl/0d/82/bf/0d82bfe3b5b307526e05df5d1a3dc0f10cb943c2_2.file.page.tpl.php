<?php
/* Smarty version 3.1.43, created on 2022-05-06 11:06:11
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62750123e3e5d6_03460120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d82bfe3b5b307526e05df5d1a3dc0f10cb943c2' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/cms/page.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62750123e3e5d6_03460120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89050570062750123e38489_85647018', 'page_title');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52998384462750123e3a236_00045963', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_89050570062750123e38489_85647018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_89050570062750123e38489_85647018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_141902191362750123e3ae07_54171191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['cms']->value['content'];
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_173887774362750123e3bdf6_92178420 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_67179055062750123e3d389_78799906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_52998384462750123e3a236_00045963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_52998384462750123e3a236_00045963',
  ),
  'cms_content' => 
  array (
    0 => 'Block_141902191362750123e3ae07_54171191',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_173887774362750123e3bdf6_92178420',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_67179055062750123e3d389_78799906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content page-cms cms-description page-cms-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
 tv-sub-pages-inner-content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141902191362750123e3ae07_54171191', 'cms_content', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173887774362750123e3bdf6_92178420', 'hook_cms_dispute_information', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67179055062750123e3d389_78799906', 'hook_cms_print_button', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
}
