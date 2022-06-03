<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b77fdb01_69126736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b7485294c2336085f64a1be63651a905983183' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/header.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/desktop-header.tpl' => 2,
    'file:_partials/mobile-header.tpl' => 2,
  ),
),false)) {
function content_6273e0b77fdb01_69126736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15294176976273e0b77fa130_67838203', 'header_nav');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16962313696273e0b77fa898_32314392', 'header_top');
}
/* {block 'header_nav'} */
class Block_15294176976273e0b77fa130_67838203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_15294176976273e0b77fa130_67838203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_16962313696273e0b77fa898_32314392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_16962313696273e0b77fa898_32314392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Context::getContext()->getDevice() == 1) {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, false);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, true);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );
}
}
/* {/block 'header_top'} */
}
