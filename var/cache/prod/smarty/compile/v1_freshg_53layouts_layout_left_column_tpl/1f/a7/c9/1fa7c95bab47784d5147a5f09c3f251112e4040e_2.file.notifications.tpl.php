<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abd42f00_80972226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa7c95bab47784d5147a5f09c3f251112e4040e' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/notifications.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0abd42f00_80972226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?><aside id="notifications"><div class="container"><?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15632519156273e0abd3add6_00230194', 'notifications_error');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1508092796273e0abd3d0e3_20139150', 'notifications_warning');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4308205436273e0abd3f004_01201082', 'notifications_success');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20790258636273e0abd41261_35133403', 'notifications_info');
}?></div></aside><?php }
}
/* {block 'notifications_error'} */
class Block_15632519156273e0abd3add6_00230194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_15632519156273e0abd3add6_00230194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-danger" role="alert" data-alert="danger"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_1508092796273e0abd3d0e3_20139150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_1508092796273e0abd3d0e3_20139150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-warning" role="alert" data-alert="warning"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_4308205436273e0abd3f004_01201082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_4308205436273e0abd3f004_01201082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-success" role="alert" data-alert="success"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_20790258636273e0abd41261_35133403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_20790258636273e0abd41261_35133403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-info" role="alert" data-alert="info"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_info'} */
}
