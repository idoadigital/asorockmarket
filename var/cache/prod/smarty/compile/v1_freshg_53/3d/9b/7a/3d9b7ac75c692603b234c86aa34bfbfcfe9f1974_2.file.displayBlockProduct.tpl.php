<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b79f5eb6_36662564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9b7ac75c692603b234c86aa34bfbfcfe9f1974' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0b79f5eb6_36662564 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="block-reassurance"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'key');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?><li><div class="block-reassurance-item" <?php if ($_smarty_tpl->tpl_vars['block']->value['type_link'] !== $_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value && !empty($_smarty_tpl->tpl_vars['block']->value['link'])) {?> style="cursor:pointer;" onclick="window.open('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['link'], ENT_QUOTES, 'UTF-8');?>
')"<?php }?>><?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {
if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?><img class="svg" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="25px" width="25px" loading="lazy"><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="25px" width="25px" loading="lazy"><?php }
}
if (empty($_smarty_tpl->tpl_vars['block']->value['description'])) {?><span class="block-title" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span class="block-title" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span><span style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>
</span><?php }?></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><div class="clearfix"></div></div>
<?php }
}
