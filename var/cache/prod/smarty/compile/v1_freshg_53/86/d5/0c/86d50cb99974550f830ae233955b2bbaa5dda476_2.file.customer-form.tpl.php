<?php
/* Smarty version 3.1.43, created on 2022-05-06 11:05:34
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/customer/_partials/customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_627500fecabd95_66014672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86d50cb99974550f830ae233955b2bbaa5dda476' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/customer/_partials/customer-form.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_627500fecabd95_66014672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1855215494627500feca5a01_80236170', 'customer_form');
}
/* {block 'customer_form_errors'} */
class Block_1129387208627500feca5ea1_20660342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_1938526505627500feca6ee2_78846319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
class Block_1673109321627500feca8968_98478525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_814346475627500feca79a1_21240752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1673109321627500feca8968_98478525', "form_field", $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_1432545635627500fecaa7b8_42582597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button class="tvall-inner-btn form-control-submit float-xs-right" data-link-action="save-customer" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_875651390627500fecaa1a6_23377915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="form-footer clearfix"><input type="hidden" name="submitCreate" value="1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1432545635627500fecaa7b8_42582597', "form_buttons", $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_1855215494627500feca5a01_80236170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_1855215494627500feca5a01_80236170',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_1129387208627500feca5ea1_20660342',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_1938526505627500feca6ee2_78846319',
  ),
  'form_fields' => 
  array (
    0 => 'Block_814346475627500feca79a1_21240752',
  ),
  'form_field' => 
  array (
    0 => 'Block_1673109321627500feca8968_98478525',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_875651390627500fecaa1a6_23377915',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1432545635627500fecaa7b8_42582597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1129387208627500feca5ea1_20660342', 'customer_form_errors', $this->tplIndex);
?>
<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1938526505627500feca6ee2_78846319', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post"><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_814346475627500feca79a1_21240752', "form_fields", $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_875651390627500fecaa1a6_23377915', 'customer_form_footer', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'customer_form'} */
}
