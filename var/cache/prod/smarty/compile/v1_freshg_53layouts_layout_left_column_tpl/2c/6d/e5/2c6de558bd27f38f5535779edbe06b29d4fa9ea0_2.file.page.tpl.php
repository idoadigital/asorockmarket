<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab9b62a8_77758643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c6de558bd27f38f5535779edbe06b29d4fa9ea0' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/page.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ab9b62a8_77758643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12729829546273e0ab9b1af1_29190288', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_header_container'} */
class Block_713763096273e0ab9b2120_94091812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_15171179176273e0ab9b3250_93809384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_6623907826273e0ab9b3aa5_90849320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16817135556273e0ab9b2b54_88718804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15171179176273e0ab9b3250_93809384', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6623907826273e0ab9b3aa5_90849320', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5181972626273e0ab9b4f98_03186460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4693112316273e0ab9b49d3_74734114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5181972626273e0ab9b4f98_03186460', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12729829546273e0ab9b1af1_29190288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12729829546273e0ab9b1af1_29190288',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_713763096273e0ab9b2120_94091812',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16817135556273e0ab9b2b54_88718804',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15171179176273e0ab9b3250_93809384',
  ),
  'page_content' => 
  array (
    0 => 'Block_6623907826273e0ab9b3aa5_90849320',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4693112316273e0ab9b49d3_74734114',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5181972626273e0ab9b4f98_03186460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_713763096273e0ab9b2120_94091812', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16817135556273e0ab9b2b54_88718804', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4693112316273e0ab9b49d3_74734114', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
