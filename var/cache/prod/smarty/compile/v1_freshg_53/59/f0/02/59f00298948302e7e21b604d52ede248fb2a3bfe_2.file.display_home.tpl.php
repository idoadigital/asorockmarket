<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:23
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsslider/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ab5317d8_18309939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f00298948302e7e21b604d52ede248fb2a3bfe' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsslider/views/templates/front/display_home.tpl',
      1 => 1651641690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ab5317d8_18309939 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_assignInScope('col', '');
if (!empty($_smarty_tpl->tpl_vars['offer_banner']->value)) {
$_smarty_tpl->_assignInScope('col', 'col-md-10 col-lg-10');
}
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index' && !empty($_smarty_tpl->tpl_vars['data']->value) && is_array($_smarty_tpl->tpl_vars['data']->value)) {?><div class="tvcms-slider-offerbanner-wrapper container-fluid"><div class="<?php if ($_smarty_tpl->tpl_vars['col']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
col-md-12 col-lg-12<?php } else {
}?> tvcmsmain-slider-wrapper" data-speed='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_slider_js']->value['speed'], ENT_QUOTES, 'UTF-8');?>
' data-pause-hover='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_slider_js']->value['pause'], ENT_QUOTES, 'UTF-8');?>
'><div class='tvcms-main-slider tv-main-slider'><div id='tvmain-slider' class="owl-theme owl-carousel" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value[0]['width']) && !empty($_smarty_tpl->tpl_vars['data']->value[0]['height'])) {?> style="aspect-ratio: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value[0]['width']/$_smarty_tpl->tpl_vars['data']->value[0]['height'], ENT_QUOTES, 'UTF-8');?>
; height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value[0]['height'], ENT_QUOTES, 'UTF-8');?>
;" <?php }?>><?php $_smarty_tpl->_assignInScope('i', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
if ($_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "image_upload") {
if (!empty($_smarty_tpl->tpl_vars['slide']->value['url']) && $_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "image_upload") {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage tvslider-list" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><picture><source srcset='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["med_image_url"], ENT_QUOTES, 'UTF-8');?>
' media="(max-width: 768px) and (min-width: 576px)" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['med_height'], ENT_QUOTES, 'UTF-8');?>
"><source srcset='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["sml_image_url"], ENT_QUOTES, 'UTF-8');?>
' media="(max-width: 575px)" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['sml_height'], ENT_QUOTES, 'UTF-8');?>
"><img class="tvmain-slider-img tv-img-responsive" src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["image_url"], ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Main Slider",'mod'=>"tvcmsslider"),$_smarty_tpl ) );?>
'  data-caption-id='tvmain-slider-img-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
' width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['height'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value != 0) {?>style="display:none" loading="lazy" <?php }?>> </picture> <div id='tvmain-slider-img-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
' class='tvmain-slider-content-inner <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>active<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["class_name"], ENT_QUOTES, 'UTF-8');?>
'><div class='tvmain-slider-contant'><h2 class="tvmain-slider-title animated"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2><div class="tvmain-slider-info animated"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['btn_caption'])) {?><div class="tvmain-slider-btn"><button class="btn tvall-inner-btn tvmain-slider-button animated"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['btn_caption'], ENT_QUOTES, 'UTF-8');?>
</span></button></div><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?></a><?php }
} elseif ($_smarty_tpl->tpl_vars['slide']->value["ivr_value"] == "video_upload") {?><div class="tv-video tvslider-list"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><button class="tvslider-video-link active"><i class="material-icons">&#xe89e;</i></button></a><button class="tvslider-video-play active"><i class="material-icons">play_arrow</i></button><button class="tvslider-video-mute active"><i class="material-icons">volume_up</i></button><video class="tvslider-video<?php ob_start();
echo htmlspecialchars(!$_smarty_tpl->tpl_vars['slide']->value['video_width'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars(!$_smarty_tpl->tpl_vars['slide']->value['video_height'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 && $_prefixVariable2) {?> tvcms-test<?php }?>" loop="loop" <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['video_width'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['video_height'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable3 && $_prefixVariable4) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['video_width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['video_height'], ENT_QUOTES, 'UTF-8');?>
" <?php }?> preload="metadata"><source type="video/mp4" data-src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value["image_url"], ENT_QUOTES, 'UTF-8');?>
'></video></div><?php }
$_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php }
}
}
