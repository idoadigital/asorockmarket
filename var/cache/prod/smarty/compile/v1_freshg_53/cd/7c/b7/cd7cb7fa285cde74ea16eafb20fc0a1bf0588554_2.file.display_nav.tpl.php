<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsproductcompare/views/templates/front/display_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abbd7681_97097139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7cb7fa285cde74ea16eafb20fc0a1bf0588554' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsproductcompare/views/templates/front/display_nav.tpl',
      1 => 1651641690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0abbd7681_97097139 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmsdesktop-view-compare"><a class="link_wishlist tvdesktop-view-compare tvcmscount-compare-product" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><div class="tvdesktop-compare-icon"><svg class="add" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="15" height="15" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 960"><path d="M402 442l40-55l-135-184H3v64h271zm517-175l-78 70q-7 7-8 16t5 16l6 8q7 7 17 7t17-7l127-115h.5l.5-1l8-8q7-6 7-15.5t-7-16.5l-8-8h-1v-1L876 94q-4-3-8.5-5t-9-2t-9 2t-7.5 5l-6 8q-6 7-5 16t8 16l76 69H684L274 779H3v64h304l410-576h202zm87 522h-1v-1L876 670q-5-4-11-6t-12.5 0t-10.5 6l-6 8q-4 4-5 10t1.5 12t6.5 10l77 70l-199-1l-115-177l-39 56l121 185l234 1l-77 69q-7 7-8 16t5 16l6 8q3 4 7.5 5.5t9 1.5t9-1.5t8.5-5.5l127-115h.5l.5-1l8-8q7-6 7-15.5t-7-16.5z" fill="#000000"></path><rect x="0" y="0" width="1024" height="960" fill="rgba(0, 0, 0, 0)"></rect></svg></div><div class="tvdesktop-view-compare-name"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
 <span class="count-product">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
)</span></div></a></div><?php }
}
