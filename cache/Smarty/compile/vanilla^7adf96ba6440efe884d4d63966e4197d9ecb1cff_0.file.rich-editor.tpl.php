<?php
/* Smarty version 3.1.33, created on 2020-06-02 16:14:34
  from '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/plugins/rich-editor/views/rich-editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed67aea7e8041_15525474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7adf96ba6440efe884d4d63966e4197d9ecb1cff' => 
    array (
      0 => '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/plugins/rich-editor/views/rich-editor.tpl',
      1 => 1572302950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed67aea7e8041_15525474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.t.php','function'=>'smarty_function_t',),));
?>
<div class="richEditor isDisabled" aria-label="<?php echo smarty_function_t(array('c'=>"Type your message"),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorID'];?>
" aria-describedby="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" role="textbox" aria-multiline="true">
    <p id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" class="sr-only">
        <?php echo smarty_function_t(array('c'=>"richEditor.description.title"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.paragraphMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.inlineMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.embed"),$_smarty_tpl);?>

    </p>
    <div class="richEditor-frame InputBox">
        <div class="richEditor-textWrap">
            <div class="ql-editor richEditor-text userContent isDisabled" data-gramm="false" contenteditable="false" disabled="disabled" data-placeholder="Create a new post..." tabindex="0"></div>
        </div>
    </div>
</div>
<?php }
}
