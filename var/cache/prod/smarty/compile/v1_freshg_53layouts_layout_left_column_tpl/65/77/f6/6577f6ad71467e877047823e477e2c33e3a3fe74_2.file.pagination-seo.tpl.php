<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/pagination-seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0aba6cb27_50727174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6577f6ad71467e877047823e477e2c33e3a3fe74' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/themes/v1_freshg_53/templates/_partials/pagination-seo.tpl',
      1 => 1651641692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0aba6cb27_50727174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/t87ihn5k7gt9/public_html/ecommerce/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>
    <?php $_smarty_tpl->_assignInScope('page_nb', 1);?>
    <?php if ((isset($_GET['page']))) {?>
        <?php $_smarty_tpl->_assignInScope('page_nb', (($tmp = @intval($_GET['page']))===null||$tmp==='' ? 1 : $tmp));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('queryPage', ('?page=').($_smarty_tpl->tpl_vars['page_nb']->value));?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['canonical'] = smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value['canonical'],$_smarty_tpl->tpl_vars['queryPage']->value,'');
$_smarty_tpl->_assignInScope('page', $_tmp_array);?>

    <?php $_smarty_tpl->_assignInScope('prev', false);?>
    <?php $_smarty_tpl->_assignInScope('next', false);?>
    <?php if (($_smarty_tpl->tpl_vars['page_nb']->value-1) == 1) {?>
        <?php $_smarty_tpl->_assignInScope('prev', $_smarty_tpl->tpl_vars['page']->value['canonical']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page_nb']->value > 2) {?>
        <?php $_smarty_tpl->_assignInScope('prev', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value-1))));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to']) {?>
        <?php $_smarty_tpl->_assignInScope('next', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value+1))));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['next']->value) {?><link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
}
