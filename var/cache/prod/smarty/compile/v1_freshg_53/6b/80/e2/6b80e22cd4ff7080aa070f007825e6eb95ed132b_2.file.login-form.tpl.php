<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:37:31
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e12b0dedf8_39537019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b80e22cd4ff7080aa070f007825e6eb95ed132b' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/customer/_partials/login-form.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_6273e12b0dedf8_39537019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12433383686273e12b0d5b93_16758781', 'login_form');
}
/* {block 'login_form_errors'} */
class Block_19397718726273e12b0d6098_59762079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_16424803766273e12b0d7d55_33926395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_20948280546273e12b0daa01_85859351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_6988862246273e12b0d8729_73679073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20948280546273e12b0daa01_85859351', 'form_field', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_9785669046273e12b0dd660_85838922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button id="submit-login" class="tvall-inner-btn form-control-submit" data-link-action="sign-in" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_1353652016273e12b0dd171_18394473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="form-footer text-center clearfix"><input type="hidden" name="submitLogin" value="1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9785669046273e12b0dd660_85838922', 'form_buttons', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_12433383686273e12b0d5b93_16758781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_12433383686273e12b0d5b93_16758781',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_19397718726273e12b0d6098_59762079',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_16424803766273e12b0d7d55_33926395',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_6988862246273e12b0d8729_73679073',
  ),
  'form_field' => 
  array (
    0 => 'Block_20948280546273e12b0daa01_85859351',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_1353652016273e12b0dd171_18394473',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_9785669046273e12b0dd660_85838922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19397718726273e12b0d6098_59762079', 'login_form_errors', $this->tplIndex);
?>
<form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16424803766273e12b0d7d55_33926395', 'login_form_actionurl', $this->tplIndex);
?>
" method="post"><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6988862246273e12b0d8729_73679073', 'login_form_fields', $this->tplIndex);
?>
<div class="forgot-password"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1353652016273e12b0dd171_18394473', 'login_form_footer', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'login_form'} */
}
