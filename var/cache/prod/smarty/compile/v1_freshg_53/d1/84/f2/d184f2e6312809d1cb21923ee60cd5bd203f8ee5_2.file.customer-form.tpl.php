<?php
/* Smarty version 3.1.43, created on 2022-05-06 11:05:34
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627500fec9ae32_05201272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd184f2e6312809d1cb21923ee60cd5bd203f8ee5' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/_partials/customer-form.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627500fec9ae32_05201272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_311459791627500fec94b41_13933625', "form_field");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1275454035627500fec9a0a7_33130812', "form_buttons");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "customer/_partials/customer-form.tpl");
}
/* {block "form_field"} */
class Block_311459791627500fec94b41_13933625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_311459791627500fec94b41_13933625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'password' && $_smarty_tpl->tpl_vars['guest_allowed']->value) {?><p><span class="font-weight-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span> <span class="font-italic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span><br><span class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></p><?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
} else {
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
}
}
}
/* {/block "form_field"} */
/* {block "form_buttons"} */
class Block_1275454035627500fec9a0a7_33130812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_1275454035627500fec9a0a7_33130812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button class="continue tvall-inner-btn float-xs-right" name="continue" data-link-action="register-new-customer" type="submit" value="1" ><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><?php
}
}
/* {/block "form_buttons"} */
}
