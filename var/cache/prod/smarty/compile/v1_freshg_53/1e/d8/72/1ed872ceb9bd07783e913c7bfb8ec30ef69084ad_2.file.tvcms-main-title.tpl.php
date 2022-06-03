<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:08:52
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/tvcms-main-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273da740a8c15_49992872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed872ceb9bd07783e913c7bfb8ec30ef69084ad' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/tvcms-main-title.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273da740a8c15_49992872 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcmsmain-title-wrapper clearfix'><div class="tvcms-main-title"><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_sub_title']) {?><div class='tvmain-sub-title'><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['short_desc'], ENT_QUOTES, 'UTF-8');?>
</h4></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_title']) {?><div class='tvmain-title'><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_description']) {?><div class='tvmain-desc'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['desc'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
