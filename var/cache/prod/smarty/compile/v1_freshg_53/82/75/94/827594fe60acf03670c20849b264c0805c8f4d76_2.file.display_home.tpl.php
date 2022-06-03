<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmspaymenticon/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac3a4431_58245423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '827594fe60acf03670c20849b264c0805c8f4d76' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmspaymenticon/views/templates/front/display_home.tpl',
      1 => 1651641689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_6273e0ac3a4431_58245423 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class="tvfooter-payment-icon-img-block col-xl-4 col-md-12 col-sm-12"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?><div class="tvfooter-payment-icon-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="tvfooter-payment-content-block tvfooter-payment-icon"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="30" width="100" class="tv-img-responsive" loading="lazy" /></a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
