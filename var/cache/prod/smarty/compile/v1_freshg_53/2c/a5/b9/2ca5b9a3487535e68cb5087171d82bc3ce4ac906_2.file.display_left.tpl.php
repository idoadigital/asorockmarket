<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsspecialproducts/views/templates/front/display_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac108e29_97773832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ca5b9a3487535e68cb5087171d82bc3ce4ac906' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsspecialproducts/views/templates/front/display_left.tpl',
      1 => 1651641691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:tvcmsspecialproducts/views/templates/front/display_side_product.tpl' => 2,
  ),
),false)) {
function content_6273e0ac108e29_97773832 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusSpecial']->value == 1) {
$_smarty_tpl->_subTemplateRender("module:tvcmsspecialproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'special_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, false);
} elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['dis_arr_result']->value['left_status'] && count($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list']) > 0 && $_smarty_tpl->tpl_vars['AllStatusSpecial']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
$_smarty_tpl->_subTemplateRender("module:tvcmsspecialproducts/views/templates/front/display_side_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_title_status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_left_title'],'main_title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['left_title'],'products'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['product_list'],'tv_product_type'=>'special_product_left','link'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['link']), 0, true);
}
}
}
