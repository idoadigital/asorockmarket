<?php
/* Smarty version 3.1.43, created on 2022-05-06 11:05:34
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627500fec882b1_42969823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a8b02741db4eb574dceb02ab5b9efd219ccc5a' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627500fec882b1_42969823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1248141270627500fec84ec3_08081666', 'step');
}
/* {block 'step_content'} */
class Block_1174644503627500fec87596_33486621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_1248141270627500fec84ec3_08081666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_1248141270627500fec84ec3_08081666',
  ),
  'step_content' => 
  array (
    0 => 'Block_1174644503627500fec87596_33486621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"><h1 class="step-title h3"><i class="material-icons rtl-no-flip done">&#xE876;</i><span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
<span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></h1><div class="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1174644503627500fec87596_33486621', 'step_content', $this->tplIndex);
?>
</div></div><?php
}
}
/* {/block 'step'} */
}
