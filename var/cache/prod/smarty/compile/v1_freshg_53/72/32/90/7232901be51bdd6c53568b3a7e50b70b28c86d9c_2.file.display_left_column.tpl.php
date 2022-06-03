<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmstestimonial/views/templates/front/display_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abf0a0e1_77455452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7232901be51bdd6c53568b3a7e50b70b28c86d9c' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmstestimonial/views/templates/front/display_left_column.tpl',
      1 => 1651641691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-left-column-title.tpl' => 2,
  ),
),false)) {
function content_6273e0abf0a0e1_77455452 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['GetStatusService']->value == 1) {?><div class='tvcms-left-testimonial tvcms-all-testimonial'><div class='tvtestimonial'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, false);
?><div class="tvtestimonial-slider-button-wrapper"><div class="tvtestimonial-slider-inner"><div class='tvtestimonial-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvtestimonial-wrapper-info"><div class="tvtestimonial-inner-content-box"><div class="tvtestimonial-img-content-block"><div class="tvtestimonial-img-block"><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value["path"], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["image"], ENT_QUOTES, 'UTF-8');?>
'  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" /></div><div class="tvtestimonial-title-des"><div class="tvtestimonial-title"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["link"], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div><div class="tvtestimonial-designation"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['designation'], ENT_QUOTES, 'UTF-8');?>
</div></div></div><div class='tvtestimonial-info-box'><div class="tvtestimonial-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class='tvcms-testimonial-pagination-wrapper'><div class="tvcms-testimonial-pagination"><div class="tvcms-testimonial-next-pre-btn"><div class="tvtestimonial-prev tvcmsprev-btn"><i class='material-icons'>&#xe5c4;</i></div><div class="tvtestimonial-next tvcmsnext-btn"><i class='material-icons'>&#xe5c8;</i></div></div></div></div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status'] && $_smarty_tpl->tpl_vars['GetStatusService']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><div class='tvcms-left-testimonial tvcms-all-testimonial'><div class='tvtestimonial'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, true);
?><div class="tvtestimonial-slider-button-wrapper"><div class="tvtestimonial-slider-inner"><div class='tvtestimonial-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvtestimonial-wrapper-info"><div class="tvtestimonial-inner-content-box"><div class="tvtestimonial-img-content-block"><div class="tvtestimonial-img-block"><img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value["path"], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["image"], ENT_QUOTES, 'UTF-8');?>
' width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></div><div class="tvtestimonial-title-des"><div class="tvtestimonial-title"><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["link"], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div></div></div><div class='tvtestimonial-info-box'><div class="tvtestimonial-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class='tvcms-testimonial-pagination-wrapper'><div class="tvcms-testimonial-pagination"><div class="tvcms-testimonial-next-pre-btn"><div class="tvtestimonial-prev tvcmsprev-btn"><i class='material-icons'>&#xe5c4;</i></div><div class="tvtestimonial-next tvcmsnext-btn"><i class='material-icons'>&#xe5c8;</i></div></div></div></div></div></div></div><?php }
}
}
