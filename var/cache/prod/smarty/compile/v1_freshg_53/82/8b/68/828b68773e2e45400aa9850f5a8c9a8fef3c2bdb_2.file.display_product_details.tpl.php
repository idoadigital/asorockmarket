<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:35
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsproductcompare/views/templates/front/display_product_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0b7999ee6_92065946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '828b68773e2e45400aa9850f5a8c9a8fef3c2bdb' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsproductcompare/views/templates/front/display_product_details.tpl',
      1 => 1651641690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0b7999ee6_92065946 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcompare-wrapper product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><div class="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><button class="btn btn-unstyle tvcmsproduct-compare-btn" data-product-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
' data-comp-val='<?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>remove<?php } else { ?>add<?php }?>' data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="Add to Wishlist" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><div class="tvcmsproduct-compare-wrapper-icon"><svg class='remove <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {
} else { ?>hide<?php }?>' aria-hidden="true" focusable="false" width="18" height="18" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M512 0q212 0 362 150t150 362t-150 362t-362 150t-362-150T0 512t150-362T512 0zm0 961q185 0 316.5-132T960 512T828.5 195.5T512 64T195.5 195.5T64 512t131.5 317T512 961zm-35-417H288q-14 0-23-9t-9-23t9-23t23-9h448q14 0 23 9t9 23t-9 23t-23 9H477z" fill="#000000"></path><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)"></rect></svg><svg class='add <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>hide<?php }?>' aria-hidden="true" focusable="false" width="18" height="18" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 960"><path d="M402 442l40-55l-135-184H3v64h271zm517-175l-78 70q-7 7-8 16t5 16l6 8q7 7 17 7t17-7l127-115h.5l.5-1l8-8q7-6 7-15.5t-7-16.5l-8-8h-1v-1L876 94q-4-3-8.5-5t-9-2t-9 2t-7.5 5l-6 8q-6 7-5 16t8 16l76 69H684L274 779H3v64h304l410-576h202zm87 522h-1v-1L876 670q-5-4-11-6t-12.5 0t-10.5 6l-6 8q-4 4-5 10t1.5 12t6.5 10l77 70l-199-1l-115-177l-39 56l121 185l234 1l-77 69q-7 7-8 16t5 16l6 8q3 4 7.5 5.5t9 1.5t9-1.5t8.5-5.5l127-115h.5l.5-1l8-8q7-6 7-15.5t-7-16.5z" fill="#000000"></path><rect x="0" y="0" width="1024" height="960" fill="rgba(0, 0, 0, 0)"></rect></svg></div></button></div></div><?php }
}
