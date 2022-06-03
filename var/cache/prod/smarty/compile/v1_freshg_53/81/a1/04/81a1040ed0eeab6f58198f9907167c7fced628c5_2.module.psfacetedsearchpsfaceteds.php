<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abd76836_84335879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1651641692,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0abd76836_84335879 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']))) {?><div id="search_filters_wrapper"><div id="search_filter_controls" class="hidden-md-up hidden-sm-down"><button class="btn btn-secondary ok"><i class="material-icons rtl-no-flip">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button></div><?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>
</div><?php }
}
}
