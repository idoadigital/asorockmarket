<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:37:31
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e12b0f52b5_13416770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6dfff91af7eb2f7bf46f529e7def691f01e4791' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/form-errors.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e12b0f52b5_13416770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?><div class="help-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2333788586273e12b0f36f3_89641984', 'form_errors');
?>
</div><?php }
}
/* {block 'form_errors'} */
class Block_2333788586273e12b0f36f3_89641984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_2333788586273e12b0f36f3_89641984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'form_errors'} */
}
