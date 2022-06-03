<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:37:30
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e12acc4665_77334822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f07258e14cb8a20fc516b060cc9abc3989e52a7' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/customer/authentication.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e12acc4665_77334822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5289755836273e12acbe577_93910435', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_18038198556273e12acbeae9_58095721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-title"><h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h1></div><?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_727299836273e12acc1b89_06296236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_2876300766273e12acc0a35_71319710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727299836273e12acc1b89_06296236', 'display_after_login_form', $this->tplIndex);
?>
<div class="no-account"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div><?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_5289755836273e12acbe577_93910435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_5289755836273e12acbe577_93910435',
  ),
  'page_title' => 
  array (
    0 => 'Block_18038198556273e12acbeae9_58095721',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_2876300766273e12acc0a35_71319710',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_727299836273e12acc1b89_06296236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18038198556273e12acbeae9_58095721', 'page_title', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2876300766273e12acc0a35_71319710', 'login_form_container', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
