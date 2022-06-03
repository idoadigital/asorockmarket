<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/footer-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac1f73c9_60953339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ce570c67b979c21f7e5c774ba13e3b9cdcfd702' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/footer-1.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ac1f73c9_60953339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShowMap'),$_smarty_tpl ) );?>
<div class="footer-container tvcmsfooter-background-image footer-1" data-footer-layout="1" <?php if ($_smarty_tpl->tpl_vars['FooterImageStatus']->value) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paths']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['FooterBackgroundImage']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php }?>> <div class="container tvfooter-logo-link-wrapper"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayCustomerServices"),$_smarty_tpl ) );
}?><div class="tvfooter-storelogo-weapper"><div class="tvfooter-storelogo-inner clearfix"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17520601036273e0ac1f1638_18455839', 'hook_footer_part_2');
?>
</div></div><div class='tvfooter-storelogo-imformation row'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14717326686273e0ac1f23a4_37038897', 'hook_footer_part_1');
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5124972096273e0ac1f4007_66547889', 'hook_footer');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomsocialblock'),$_smarty_tpl ) );?>
<div class='tvbottom-to-top'><a href="javascript:" class="tvbottom-to-top-icon"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go Top','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe316;</i></a></div></div><div class="tvfooter-copy-payment-icon-wrapper"><div class="container tvfooter-copy-payment-icon-content"><div class="row tvfooter-copy-payment-icon-inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentIcon'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCopyRightText'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialMediaBlock'),$_smarty_tpl ) );?>
</div></div></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomJs'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTvcmsFooter'),$_smarty_tpl ) );
}
/* {block 'hook_footer_part_2'} */
class Block_17520601036273e0ac1f1638_18455839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_2' => 
  array (
    0 => 'Block_17520601036273e0ac1f1638_18455839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart2'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_2'} */
/* {block 'hook_footer_part_1'} */
class Block_14717326686273e0ac1f23a4_37038897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_1' => 
  array (
    0 => 'Block_14717326686273e0ac1f23a4_37038897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactCinfo'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCategory'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart1'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyaccountcblock'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewslettersubscription'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_1'} */
/* {block 'hook_footer'} */
class Block_5124972096273e0ac1f4007_66547889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_5124972096273e0ac1f4007_66547889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
}
