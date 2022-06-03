<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsofferbanner/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab5d2321_57745505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e58c2e1f1ec55cb26853663e679380013547dd0' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsofferbanner/views/templates/front/display_home.tpl',
      1 => 1651641689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ab5d2321_57745505 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable7 = ob_get_clean();
if (!empty($_prefixVariable7)) {?><div class="tvcmsofferbanners-one container-fluid"><div class="container"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" class="tvbanner-hover-wrapper" ><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive tv-img-responsive" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer Banner','mod'=>'tvcmsofferbanner'),$_smarty_tpl ) );?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_IMAGE_HEIGHT'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_IMAGE_WIDTH'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
 tvofferbanner-content"><?php echo $_smarty_tpl->tpl_vars['data']->value['TVCMSOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></a></div></div><?php }
}
}
