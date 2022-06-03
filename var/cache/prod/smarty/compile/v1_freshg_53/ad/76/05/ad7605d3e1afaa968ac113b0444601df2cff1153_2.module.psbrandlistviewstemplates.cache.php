<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from 'module:psbrandlistviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac14bc04_60666615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:psbrandlistviewstemplates',
      1 => 1651641692,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'brand_display_type\']->value).".tpl' => 2,
  ),
),false)) {
function content_6273e0ac14bc04_60666615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4601650466273e0ac143631_43499285';
if ($_smarty_tpl->tpl_vars['GetStatusBrand']->value == 1) {?><div id="search_filters_brands" class='tvfilter-brand-list-wrapper'><div class="facet"><div class="tvleft-right-title-wrapper"><?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a class="tvleft-right-title facet-label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?><div class='tvleft-right-title-toggle'><i class='material-icons'>&#xe313;</i></div></div><div class="tvsearch-filter-brand-wrapper tvside-panel-dropdown"><?php if ($_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->_subTemplateRender("module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0, true);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php }?></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['GetStatusBrand']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><div id="search_filters_brands" class='tvfilter-brand-list-wrapper'><div class="facet"><div class="tvleft-right-title-wrapper"><?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a class="tvleft-right-title facet-label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?><div class='tvleft-right-title-toggle'><i class='material-icons'>&#xe313;</i></div></div><div class="tvsearch-filter-brand-wrapper tvside-panel-dropdown"><?php if ($_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->_subTemplateRender("module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0, true);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php }?></div></div></div><?php }
}
}
