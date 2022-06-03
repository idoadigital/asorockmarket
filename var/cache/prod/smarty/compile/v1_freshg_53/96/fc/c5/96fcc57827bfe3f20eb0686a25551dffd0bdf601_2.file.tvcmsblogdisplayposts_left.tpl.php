<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:35:24
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsblogdisplayposts/views/templates/front/tvcmsblogdisplayposts_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ac0d44b7_76597940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96fcc57827bfe3f20eb0686a25551dffd0bdf601' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsblogdisplayposts/views/templates/front/tvcmsblogdisplayposts_left.tpl',
      1 => 1651641689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-left-column-title.tpl' => 1,
    'module:tvcmsblogdisplayposts/views/templates/front/post-video.tpl' => 1,
    'module:tvcmsblogdisplayposts/views/templates/front/post-gallery.tpl' => 1,
  ),
),false)) {
function content_6273e0ac0d44b7_76597940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/t87ihn5k7gt9/public_html/ecommerce/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="tvcmsblog-event tvcmsblog-left-side tvblog-event"><div class="home_blog_post_area product_block_container tvblog-full-width tvnews-event"><div class="tvnews-event-wrapper tvall-block-box-shadows"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-left-column-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('status'=>$_smarty_tpl->tpl_vars['main_heading']->value['main_title'],'title'=>$_smarty_tpl->tpl_vars['main_heading']->value['data']['title']), 0, false);
?><div class="tvblog-event-all-block tvblog-event-inner-block"><div class="tvnews-wrapper-info-box owl-carousel"><?php $_smarty_tpl->_assignInScope('tmp', 1);
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'tvcmsblgpst');
$_smarty_tpl->tpl_vars['tvcmsblgpst']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tvcmsblgpst']->value) {
$_smarty_tpl->tpl_vars['tvcmsblgpst']->do_else = false;
?><div class="item tvblog-event-all-content-block tvblog-part-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tmp']->value, ENT_QUOTES, 'UTF-8');?>
 tvblog-even"><article class="blog_pos clearfix"><div class="blog_post_content_top tvblog-img-block col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="post_thumbnail"><?php if ($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_format'] == 'video') {
$_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['video']));
$_smarty_tpl->_subTemplateRender("module:tvcmsblogdisplayposts/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'370','height'=>"256",'firstname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'],'lastname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname']), 0, true);
} elseif ($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_format'] == 'gallery') {
$_smarty_tpl->_subTemplateRender("module:tvcmsblogdisplayposts/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['gallery_lists'],'firstname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'],'lastname'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname'],'imagesize'=>'small','link'=>$_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link']), 0, true);
} else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="img_content"><div class="tvnews-event-hoverbtn"><div class="tvblog-content-img"><picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_img_blog_left'], ENT_QUOTES, 'UTF-8');?>
" media="(min-width: 500px) and (max-width: 768px)"><img class="tvcmsblog_img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_img_blog_left'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smallwidthLeft']->value, ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smallheightLeft']->value, ENT_QUOTES, 'UTF-8');?>
"></picture></div><div class="tvnews-event-buttons"><i class='material-icons'>&#xe8b6;</i></div><div class="date_time tvdate-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_date'],'<p class="day_time tvday-time"><span>%d</span></p><p class="tvmonth-time"><span>%b</span></p>');?>
                                            </div><div class='tvblog-date-username'><div class="post_meta"><div class="meta-author tvnews-event-username"><i class="material-icons">&#xe7fd;</i><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_author_arr']['lastname'], ENT_QUOTES, 'UTF-8');?>
</p></div></div></div></div></a><?php }?></div></div><div class="post_content tvnews-event-content-wrapper col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="tv-event-content"><div class="tvnews-event-titel"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="post_title"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</h3></a></div><p class="post_description tvnews-event-description"><?php if ((isset($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'])) && !empty($_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'])) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_excerpt'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tvcmsblgpst']->value['post_content'],150,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?></p></div></div></article></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
</p><?php }?></div><div class='tvcms-blog-left-side-pagination-wrapper'><div class="tvcms-blog-left-side-pagination"><div class="tvcms-blog-left-side-next-pre-btn"><div class="tvblog-left-side-prev tvcmsprev-btn"><i class='material-icons'>&#xe5c4;</i></div><div class="tvblog-left-side-next tvcmsnext-btn"><i class='material-icons'>&#xe5c8;</i></div></div></div></div><div class="tvnews-event-link"><a href="<?php echo htmlspecialchars(TvcmsBlog::tvcmsBlogLink(), ENT_QUOTES, 'UTF-8');?>
" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All blogs','mod'=>'tvcmsblogdisplayposts'),$_smarty_tpl ) );?>
<i class='material-icons'>&#xe315;</i></a></div></div></div></div></div><?php }
}
