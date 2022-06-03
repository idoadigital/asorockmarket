<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:08:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsstockinfo/views/templates/front/indicators/bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273da7440a010_81603799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c4100a2e4e9e4e8d33ad18153ff5188c93f69dc' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsstockinfo/views/templates/front/indicators/bar.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273da7440a010_81603799 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tv-indicator tv-bar<?php if ($_smarty_tpl->tpl_vars['useProgressiveColors']->value) {?> tv-colors<?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-tvcmsspecialproducts-default') {
if ($_smarty_tpl->tpl_vars['isItemsDisplayable']->value) {?><div class="tv-items"><?php if ($_smarty_tpl->tpl_vars['hasMixedQty']->value) {
if ($_smarty_tpl->tpl_vars['productItems']->value != 0) {?><span class="tvinstock"><span class="tvstock_tital"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );?>
</span><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total items:','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productItems']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 </b><?php } else { ?><span class="tvinstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Product available','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );
}
}
if (!$_smarty_tpl->tpl_vars['hasMixedQty']->value) {
if ($_smarty_tpl->tpl_vars['productItems']->value != 0) {?><span class="tvinstock"><span class="tvstock_tital"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock ','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );?>
</span><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total items:','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productItems']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 </b><?php } else { ?><span class="tvinstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Product available','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );
}
}?></div><?php }
} else {
if ($_smarty_tpl->tpl_vars['isItemsDisplayable']->value) {?><div class="tv-items"><?php if (!$_smarty_tpl->tpl_vars['hasMixedQty']->value) {
if ($_smarty_tpl->tpl_vars['productItems']->value <= 0) {?><span class="tvoutstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Product available','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['productItems']->value <= 10) {?><span class="tvlowqty"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry Up Only ','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );?>
<b><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productItems']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 </b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items left','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stockIndicatorTrans']->value['items'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span class="tvinstock"><span class="tvstock_tital"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock ','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );?>
</span><b><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productItems']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 </b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available','mod'=>'tvcmsstockinfo'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stockIndicatorTrans']->value['items'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stockIndicatorTrans']->value['mixedItems'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></div><?php }
}?><div class="tv-outer" data-toggle="tvtooltip" data-placement="top" data-html="true" <?php if ((isset($_smarty_tpl->tpl_vars['stockLevelStatus']->value))) {?>title="<div class='text-center'><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stockIndicatorTrans']->value['stockStatus'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stockLevelStatus']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</b></div>"<?php }?> ><div class="tv-inner tv-lvl-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stockLevel']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></div></div></div><?php }
}
