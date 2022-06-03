<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscustomerservices/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac2157c0_56978419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91436548a29d823ef626f41d7f394d2ca4dde31e' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmscustomerservices/views/templates/front/display_home.tpl',
      1 => 1651641690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_6273e0ac2157c0_56978419 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class="tvcmscustomer-services container-fluid"><div class="tvcustomer-services"><div class="tvservice-inner"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?><div class="tvservice-all-block-wrapper"><div class="tvservices-all-block"><div class="tv-all-service wrapper card-deck"><?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) {?><div class="tvservices-center card odd tvservice-payment"><div class="tvall-block-box-shadows"><div class="tvservices-1 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) {?><div class="tvservices-center card even tvservice-cash-trustpay"><div class="tvall-block-box-shadows"><div class="tvservices-2 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) {?><div class="tvservices-center card odd tvservice-supprt"><div class="tvall-block-box-shadows"><div class="tvservices-3 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['image'], ENT_QUOTES, 'UTF-8');?>
" width="50" height="50" class="tv-img-responsive" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status']) {?><div class="tvservices-center card even tvservice-shopon"><div class="tvall-block-box-shadows"><div class="tvservices-4 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }?></div></div></div></div> </div></div><?php }
}
}
