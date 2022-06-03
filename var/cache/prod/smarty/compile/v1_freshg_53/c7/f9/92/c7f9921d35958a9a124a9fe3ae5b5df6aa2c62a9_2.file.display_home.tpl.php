<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac22be55_54509633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7f9921d35958a9a124a9fe3ae5b5df6aa2c62a9' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ac22be55_54509633 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if (Configuration::get('TVCMSFOOTERLOGO_IMG')) {?><div class='tvfooter-about-logo-wrapper tvfooter-logo-block'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['main_image']) {?><div class='tvfooter-img-block'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_IMG'), ENT_QUOTES, 'UTF-8');?>
" alt="" height="34" width="200" class="tv-img-responsive" loading="lazy"/></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_title']) {?><div class='tvfooter-logo-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_short_description']) {?><div class='tvfooter-logo-short-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_description']) {?><div class='tvfooter-logo-desc'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div><?php }
}
}
