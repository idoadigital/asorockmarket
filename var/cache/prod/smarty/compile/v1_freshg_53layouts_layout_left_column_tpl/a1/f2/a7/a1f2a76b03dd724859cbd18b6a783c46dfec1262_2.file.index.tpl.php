<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab9a32c2_93148864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f2a76b03dd724859cbd18b6a783c46dfec1262' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/index.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ab9a32c2_93148864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13669768626273e0ab9a0407_56239626', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_7350744936273e0ab9a0a65_45160614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20747365416273e0ab9a1934_27731992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3104166096273e0ab9a1386_10567501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20747365416273e0ab9a1934_27731992', 'hook_home', $this->tplIndex);
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13669768626273e0ab9a0407_56239626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_13669768626273e0ab9a0407_56239626',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7350744936273e0ab9a0a65_45160614',
  ),
  'page_content' => 
  array (
    0 => 'Block_3104166096273e0ab9a1386_10567501',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20747365416273e0ab9a1934_27731992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content" class="page-home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7350744936273e0ab9a0a65_45160614', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3104166096273e0ab9a1386_10567501', 'page_content', $this->tplIndex);
?>
</section><?php
}
}
/* {/block 'page_content_container'} */
}
