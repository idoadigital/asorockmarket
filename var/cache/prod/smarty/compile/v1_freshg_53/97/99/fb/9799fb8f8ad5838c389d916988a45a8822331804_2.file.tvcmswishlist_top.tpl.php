<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmswishlist/views/templates/front/tvcmswishlist_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0abc1a430_66887619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9799fb8f8ad5838c389d916988a45a8822331804' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmswishlist/views/templates/front/tvcmswishlist_top.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0abc1a430_66887619 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>var wishlistProductsIds='';var baseDir ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content_dir']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var static_token='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_token']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var isLogged ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isLogged']->value,"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
';var loggin_required='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in to manage your wishlist.','mod'=>'tvcmswishlist','js'=>1),$_smarty_tpl ) );?>
';var added_to_wishlist ='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product was successfully added to your wishlist.','mod'=>'tvcmswishlist','js'=>1),$_smarty_tpl ) );?>
';var mywishlist_url='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmswishlist','mywishlist',array(),true),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';<?php if ((isset($_smarty_tpl->tpl_vars['isLogged']->value)) && $_smarty_tpl->tpl_vars['isLogged']->value) {?>var isLoggedWishlist=true;<?php } else { ?>var isLoggedWishlist=false;<?php }
echo '</script'; ?>
><div id="_desktop_wishtlistTop" class="pull-right tvcmsdesktop-view-wishlist"><a class="wishtlist_top tvdesktop-wishlist" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tvwishlist-icon"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 457 457" xml:space="preserve"><path id="XMLID_2_" style="fill:transparent;stroke:#000000;stroke-width:27;stroke-miterlimit:10;" d="M414.6,70.9c-42.5-43.5-111.5-43.5-154.1,0l-32,32.7l-32-32.7C153.9,27.4,85,27.4,42.4,70.9c-42.5,43.5-42.5,114.1,0,157.6l32,32.7l154.1,157.6l154.1-157.6l32-32.7C457.1,184.9,457.1,114.4,414.6,70.9z"></path></svg></div><div class="tvwishlist-name"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist ','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span><span class="cart-wishlist-number tvwishlist-number tv-cart-wishlist-inner"><span>(</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['count_product']->value),'mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
<span>)</span></span></div></a></div><?php }
}
