<?php
/* Smarty version 3.1.33, created on 2020-06-04 18:56:03
  from '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/applications/dashboard/views/empty.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ed943c3af1403_12288317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02b073a3c4e0c1b7eb085df8125b4c8f72b24e1' => 
    array (
      0 => '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/applications/dashboard/views/empty.master.tpl',
      1 => 1572302950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed943c3af1403_12288317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),));
echo '<?xml ';?>version="1.0" encoding="utf-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
">
<head>
    <?php echo smarty_function_asset(array('name'=>'Head'),$_smarty_tpl);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">
<div id="Content"><?php echo smarty_function_asset(array('name'=>'Content'),$_smarty_tpl);?>
</div>
<?php echo smarty_function_asset(array('name'=>'Foot'),$_smarty_tpl);?>

<?php echo smarty_function_event(array('name'=>'AfterBody'),$_smarty_tpl);?>

</body>
</html>
<?php }
}
