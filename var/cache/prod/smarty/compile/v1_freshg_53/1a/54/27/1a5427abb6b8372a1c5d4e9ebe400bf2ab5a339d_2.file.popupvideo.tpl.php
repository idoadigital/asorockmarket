<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsvideotab/views/templates/admin/popupvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b78ec4e7_27321304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5427abb6b8372a1c5d4e9ebe400bf2ab5a339d' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsvideotab/views/templates/admin/popupvideo.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0b78ec4e7_27321304 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['position_popup']->value == 1) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)) {?>
        <div class="tvproduct-play-icon">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" class="fancybox fancybox.iframe">
                                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/tvcmsvideotab/views/img/iconvideo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIVE VIDEO','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
" style="margin-top:-4px;" height="16px" width="19px" loading="lazy">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIVE VIDEO','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        <?php }
}
}
}
