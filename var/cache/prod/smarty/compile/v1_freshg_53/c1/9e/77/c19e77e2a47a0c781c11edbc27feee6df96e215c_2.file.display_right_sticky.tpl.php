<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsproductcompare/views/templates/front/display_right_sticky.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac390726_55718295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19e77e2a47a0c781c11edbc27feee6df96e215c' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsproductcompare/views/templates/front/display_right_sticky.tpl',
      1 => 1651641690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ac390726_55718295 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvsticky-compare">
  	<a class="link_wishlist tvcmscount-compare-product" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
">
    	<i class='material-icons'>&#xE043;</i>
      	<div class="tvsticky-compare-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare ','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
(<span class="count-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
</span>)</div>
  	</a>
</div>
<?php }
}
