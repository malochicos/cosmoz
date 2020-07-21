<?php
/* Smarty version 3.1.33, created on 2020-06-08 09:36:36
  from '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/themes/mobile/views/default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede06a48780d3_65765169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c1da4158edc7750e1bcfb7c89df68bd3f9fc977' => 
    array (
      0 => '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/themes/mobile/views/default.master.tpl',
      1 => 1591608990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede06a48780d3_65765169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.home_link.php','function'=>'smarty_function_home_link',),2=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.profile_link.php','function'=>'smarty_function_profile_link',),3=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.inbox_link.php','function'=>'smarty_function_inbox_link',),4=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.custom_menu.php','function'=>'smarty_function_custom_menu',),5=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.event.php','function'=>'smarty_function_event',),6=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.link.php','function'=>'smarty_function_link',),7=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),8=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.nomobile_link.php','function'=>'smarty_function_nomobile_link',),9=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.dashboard_link.php','function'=>'smarty_function_dashboard_link',),10=>array('file'=>'/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/library/SmartyPlugins/function.signinout_link.php','function'=>'smarty_function_signinout_link',),));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
">
<head>
    <?php echo smarty_function_asset(array('name'=>'Head'),$_smarty_tpl);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">
<div id="Frame">
    <div class="Banner" role="banner">
        <ul role="navigation">
            <?php echo smarty_function_home_link(array(),$_smarty_tpl);?>

            <?php echo smarty_function_profile_link(array(),$_smarty_tpl);?>

            <?php echo smarty_function_inbox_link(array(),$_smarty_tpl);?>

            <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

            <?php echo smarty_function_event(array('name'=>"BeforeSignInLink"),$_smarty_tpl);?>

            <?php if (!$_smarty_tpl->tpl_vars['User']->value['SignedIn']) {?>
                <li class="SignInItem"><?php echo smarty_function_link(array('path'=>"signin",'class'=>"SignIn"),$_smarty_tpl);?>
</li>
            <?php }?>
        </ul>
    </div>
    <div id="Body">
        <div class="BreadcrumbsWrapper">
            <?php echo smarty_function_breadcrumbs(array('homelink'=>"0"),$_smarty_tpl);?>

        </div>
        <div id="Content" role="main">
            <?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>

        </div>
    </div>
    <div id="Foot" role="contentinfo">
        <div class="FootMenu">
            <?php echo smarty_function_nomobile_link(array('wrap'=>"span"),$_smarty_tpl);?>

            <?php echo smarty_function_dashboard_link(array('wrap'=>"span"),$_smarty_tpl);?>

            <?php echo smarty_function_signinout_link(array('wrap'=>"span"),$_smarty_tpl);?>

        </div>
    </div>
</div>
<?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>

</body>
</html>
<?php }
}
