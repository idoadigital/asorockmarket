<?php
/* Smarty version 3.1.43, created on 2022-05-05 14:36:29
  from '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsvideotab/views/templates/admin/videotab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6273e0ed26aee6_00352530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7c3df8a6ed48db042b0007e38ce140eece5b5f3' => 
    array (
      0 => '/home/t87ihn5k7gt9/public_html/ecommerce/modules/tvcmsvideotab/views/templates/admin/videotab.tpl',
      1 => 1651641688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273e0ed26aee6_00352530 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel product-tab">
<?php if ($_smarty_tpl->tpl_vars['editfrommodule']->value == 1) {?>
    <?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'htmlall','UTF-8' ));?>
modules/tvcmsvideotab/views/js/showhidetab.js" type="text/javascript" charset="utf-8" async defer><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'htmlall','UTF-8' ));?>
modules/tvcmsvideotab/views/js/videotab.js" type="text/javascript" charset="utf-8" async defer><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var url = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'htmlall','UTF-8' ));?>
";
    var url2 = "<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
";    var id_product = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
";
	var update_successful = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['update_successful']->value,'htmlall','UTF-8' ));?>
";
	var are_you_sure = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['are_you_sure']->value,'htmlall','UTF-8' ));?>
";
	var video_removed = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['video_removed']->value,'htmlall','UTF-8' ));?>
";
<?php echo '</script'; ?>
>

<input value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' ));?>
" class="hidden" id="product" name="id_product" />
<div class="alert alert-warning alert_video" style="display: none;" >
    <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
 <warning class=""></warning>
        <ul  id="seeMore">
            <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must save this product before adding specific videos','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</li>
        </ul>
</div>
<div class="alert alert-danger alert_embed" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <br>
    <ol>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can not leave the Embed field blank ','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</li>
    </ol>
</div>
<div class="alert alert-danger alert_primary" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <br>
    <ol>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must upload at least a file for default language','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</li>
    </ol>
</div>
<div class="alert alert-danger alert_size" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <br>
    <ol>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload files are too large','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</li>
    </ol>
</div>
<div class="alert alert-danger alert_select" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <br>
    <ol>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to select the file','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</li>
    </ol>
</div>
<div class="alert alert-danger alert_type" style="display: none;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <br>
    <ol>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File is invalid','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</li>
    </ol>
</div>
<div class="form-group <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>col-md-12<?php }?>">
    <h3 ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Tab','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</h3> 

    <div class="form-group" style="width: 99%;border-bottom: 1px solid #d8c8c8;height: 100px;line-height: 20px;margin-left: 5px;">
        <label class="control-label col-md-3 text-right text17" for="simple_product">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type :','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-9">
            <p class="radio">
                <label id="embed" onclick="embed()">
                    <input type="radio"  name="type_video"  value="0" <?php if (empty($_smarty_tpl->tpl_vars['total']->value)) {?> checked <?php } else { ?> checked <?php }?> <?php if (empty($_smarty_tpl->tpl_vars['embed']->value)) {?> <?php } else { ?> checked<?php }?>>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Embed','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>

                </label>
        
            </p>
            <p class="radio">
                <label id="upload" onclick="upload()">
                    <input type="radio"  name="type_video" value="1" <?php if (empty($_smarty_tpl->tpl_vars['file']->value)) {?> <?php } else { ?> checked <?php }?>>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload Video','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>

                </label>
            </p>
        </div>
    </div>
    <div class="form-group" id="url_video" style=" <?php if (empty($_smarty_tpl->tpl_vars['total']->value)) {?> display: block; <?php } else { ?>  <?php if (empty($_smarty_tpl->tpl_vars['embed']->value)) {?> display: none; <?php } else { ?> display: block; checked <?php }
}?>">
        <div class="col-lg-1"><span class="pull-right">
        </span></div>
        <label class="control-label col-md-2 required text-right text17">
            <span class="label-tooltip" data-toggle="tooltip" title="">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Embed Code:','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>

            </span>
        </label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'value', false, 'key_lang');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <div class="translatable-field1 lang1-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
" style="<?php if ($_smarty_tpl->tpl_vars['value']->value['checked'] == 1) {?>display: block;<?php }
if ($_smarty_tpl->tpl_vars['value']->value['checked'] != 1) {?>display: none;<?php }?>">
                <div class="col-lg-5" style="margin-bottom: 10px;">
                <?php if (empty($_smarty_tpl->tpl_vars['embed']->value)) {?>
                <textarea name="name_url[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
]" <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>style="width: -webkit-fill-available;"<?php }?>  id="note" cols="30" rows="10" onkeyup="autosize()"></textarea>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['embed']->value)) {?>
                    <textarea name="name_url[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
]" <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>style="width: -webkit-fill-available;"<?php }?>  id="note" cols="30" rows="10" onkeyup="autosize()" ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['embed']->value, 'value1', false, 'key1');
$_smarty_tpl->tpl_vars['value1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['value1']->value) {
$_smarty_tpl->tpl_vars['value1']->do_else = false;
if ($_smarty_tpl->tpl_vars['value1']->value['id_lang'] == $_smarty_tpl->tpl_vars['value']->value['id_lang']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['text_url'],'htmlall','UTF-8' ));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></textarea>
                <?php }?>
                    <span class="erro_url" style="color:red;font-size: 15px;"></span>    
                </div>
             <div class="col-lg-2">
              <button type="button" class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown">
               <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['iso_code'],'htmlall','UTF-8' ));?>

               <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'value', false, 'key_lang');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
              <li>
              <a href="javascript:hideOtherLanguage1(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
);"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['name'],'htmlall','UTF-8' ));?>

              </a></li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
             </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div class="form-group" id="uploadvideo" style="<?php if (empty($_smarty_tpl->tpl_vars['file']->value)) {?> display: none; <?php } else { ?> display: block; <?php }?>">
        <div class="col-lg-1"><span class="pull-right">
        </span></div>
        <label class="control-label col-lg-2 required text-right text17">
            <span class="label-tooltip" data-toggle="tooltip" title="">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video files :','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>

            </span>
        </label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'value', false, 'key_lang');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <div class="translatable-field2 lang2-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
" style="<?php if ($_smarty_tpl->tpl_vars['value']->value['checked'] == 1) {?>display: block;<?php }
if ($_smarty_tpl->tpl_vars['value']->value['checked'] != 1) {?>display: none;<?php }?>">
            <div class="col-lg-4">

                <button  class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?>" data-style="expand-right" data-size="s" type="button" id="text_file" onclick="textfile(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
)" ><span class="ladda-label">
                    <i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add file','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
    
                </span><span class="ladda-spinner"></span></button>
                <span class="test<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
" name="name_tam"><?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( empty($_smarty_tpl->tpl_vars['file']->value),'htmlall','UTF-8' ))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file']->value, 'value1', false, 'key1');
$_smarty_tpl->tpl_vars['value1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['value1']->value) {
$_smarty_tpl->tpl_vars['value1']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['value1']->value['id_lang'] == $_smarty_tpl->tpl_vars['value']->value['id_lang']) {?>
                        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['type'],'htmlall','UTF-8' )) == 1) {?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['text_url'],'htmlall','UTF-8' ));?>

                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?></span>
            <p style="font-style: italic;color: #959595;"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['videotype']->value,'htmlall','UTF-8' ));?>
</p>
                <input id="fileToUpload<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
" type="file" name="fileToUpload[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
]" class="hidden andi">
                <input type="text" id="text_file<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
" class="form-control hidden andi" name="name_file[<?php echo $_smarty_tpl->tpl_vars['value']->value['id_lang'];?>
|escape:'htmlall':'UTF-8']" value="">
            </div>
            <div class="col-lg-3">
                <?php if (!call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( empty($_smarty_tpl->tpl_vars['file']->value),'htmlall','UTF-8' ))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file']->value, 'value1', false, 'key1');
$_smarty_tpl->tpl_vars['value1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['value1']->value) {
$_smarty_tpl->tpl_vars['value1']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['value1']->value['id_lang'] == $_smarty_tpl->tpl_vars['value']->value['id_lang']) {?>
                            <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['type'],'htmlall','UTF-8' )) == 1) {?>
                                <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>
                                    <a href="javascript:void(0);" onclick="ConfirmDelete(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['id_product'],'htmlall','UTF-8' ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['type'],'htmlall','UTF-8' ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['id_lang'],'htmlall','UTF-8' ));?>
)" data-toggle="tooltip" class="btn btn-invisible delete" data-original-title="Video delete this product.">
                                      <i class="material-icons"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'delete','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</i>
                                    </a>
                                    <?php } else { ?>
                                    <a href="javascript:void(0);" onclick="ConfirmDelete(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['id_product'],'htmlall','UTF-8' ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['type'],'htmlall','UTF-8' ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value1']->value['id_lang'],'htmlall','UTF-8' ));?>
)" title="Delete" class="delete" style="margin-left: 5px;">
                                    <i class="icon-trash "></i></a>
                                <?php }?>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
              <button type="button" class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown" style="margin-left: 5px;">
               <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['iso_code'],'htmlall','UTF-8' ));?>

               <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'value', false, 'key_lang');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <li>
                    <a href="javascript:hideOtherLanguage2(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_lang'],'htmlall','UTF-8' ));?>
);"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['name'],'htmlall','UTF-8' ));?>

                    </a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
             </div>
        </div>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    </div>
    <div class="panel-footer">
        <?php if ($_smarty_tpl->tpl_vars['editfrommodule']->value == 1) {?>
            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url2']->value,'htmlall','UTF-8' ));?>
" class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?>" id="" ><i class="process-icon-cancel"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</a>
            <button type="button" name="save" class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?> pull-right " id="save_edit" onclick="savevideoedit()"> <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
 </button>
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'),'htmlall','UTF-8' ));?>
 <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cancel']->value,'htmlall','UTF-8' ));?>
 <?php }?>" class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?> " ><i class="process-icon-cancel"></i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</a>
            <button type="button" name="save" class="btn <?php if ($_smarty_tpl->tpl_vars['ver']->value == 1) {?>btn-primary <?php } else { ?>btn-default<?php }?>  pull-right" id="save" onclick="savevideo()"> <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</button>    
        <?php }?>    
    </div>
</div><?php }
}
