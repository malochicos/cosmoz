<?php
/* Smarty version 3.1.33, created on 2020-07-20 17:09:51
  from '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/applications/dashboard/views/email/email-basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f15cfdf22bdb5_81769179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf0b5f4149b464889862f4ea67d967d4d97b0cd' => 
    array (
      0 => '/home/vol7_6/epizy.com/epiz_25916666/forum.cosmoz-serv.cf/htdocs/applications/dashboard/views/email/email-basic.tpl',
      1 => 1572302950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15cfdf22bdb5_81769179 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<![endif]--><meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if (gte mso 9)|(IE)]>
    
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
    </style>
    
    <![endif]-->
</head>
<body bgcolor="<?php echo $_smarty_tpl->tpl_vars['email']->value['backgroundColor'];?>
" style='font-size: 16px;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100% !important;height: 100%;margin: 0 !important;padding: 0;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
'>
<center class="wrapper" style="margin: 0;padding: 10px;box-sizing: border-box;font-size: 100%;width: 100%;table-layout: fixed;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['backgroundColor'];?>
">
    <div class="webkit" style="margin: 0 auto;padding: 0;box-sizing: border-box;font-size: 100%;max-width: 600px">
        <!--[if (gte mso 9)|(IE)]>
        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
        <![endif]-->
        <table class="outer main" align="center" style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;border-spacing: 0;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;Margin: 0 auto;width: 100%;max-width: 600px;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['containerBackgroundColor'];?>
'><tr style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
<td style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['containerBackgroundColor'];?>
'>
                    <table width="100%" style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;border-spacing: 0;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4'><tr style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
<td class="inner contents" style='font-size: 100%;margin: 0;padding: 20px 30px;box-sizing: border-box;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['containerBackgroundColor'];?>
'>
                                <?php if ($_smarty_tpl->tpl_vars['email']->value['image']) {?>
                                <div class="image-wrap center" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%;text-align: center;margin-bottom: 10px">
                                    <?php if ($_smarty_tpl->tpl_vars['email']->value['image']['link']) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['email']->value['image']['link'];?>
" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['email']->value['image']['source'] != '') {?>
                                        <img class="center" src="<?php echo $_smarty_tpl->tpl_vars['email']->value['image']['source'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['email']->value['image']['alt'];?>
" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%;max-width: 75%;border: 0;text-align: center">
                                        <?php } elseif ($_smarty_tpl->tpl_vars['email']->value['image']['alt'] != '') {?>
                                        <h1 class="center h1" style='Margin-bottom: 18px;margin: 0;padding: 0;box-sizing: border-box;font-size: 36px;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 200;text-align: center;line-height: 1.2;margin-top: 20px;margin-bottom: 5px;word-break: normal'><?php echo $_smarty_tpl->tpl_vars['email']->value['image']['alt'];?>
</h1>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['email']->value['image']['link']) {?>
                                    </a>
                                    <?php }?>
                                </div>
                                <hr style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%;border-style: solid;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;border-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
">
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['email']->value['title']) {?><h1 class="center" style='Margin-bottom: 18px;margin: 0;padding: 0;box-sizing: border-box;font-size: 36px;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 200;text-align: center;line-height: 1.2;margin-top: 20px;margin-bottom: 5px;word-break: normal'><?php echo $_smarty_tpl->tpl_vars['email']->value['title'];?>
</h1><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['email']->value['lead']) {?><p class="lead center" style='margin: 0;Margin-bottom: 10px;font-size: 20px;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: center;line-height: 1.2;margin-bottom: 15px'><?php echo $_smarty_tpl->tpl_vars['email']->value['lead'];?>
</p><?php }?>
                                <p class="message" style='margin: 0;Margin-bottom: 10px;font-size: 100%;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;margin-top: 10px;margin-bottom: 15px'><?php echo $_smarty_tpl->tpl_vars['email']->value['message'];?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['email']->value['button']) {?>
                                <div class="button-wrap center" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%;text-align: center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['email']->value['button']['url'];?>
" class="button" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['button']['textColor'];?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['button']['backgroundColor'];?>
;border-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['button']['backgroundColor'];?>
;text-decoration: none;text-align: center;font-weight: 700;cursor: pointer;display: inline-block;border-width: 12px 18px;border-style: solid"><?php echo $_smarty_tpl->tpl_vars['email']->value['button']['text'];?>
</a>
                                </div>
                                <?php }?>
                            </td>
                        </tr></table>
</td>
            </tr></table>
<!--[if (gte mso 9)|(IE)]>
                </td>
            </tr>
        </table>
        <![endif]-->
        <?php if ($_smarty_tpl->tpl_vars['email']->value['footer']) {?>
        <!--[if (gte mso 9)|(IE)]>
        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
        <![endif]-->
        <table class="outer footer" align="center" style='font-size: 14px;margin: 0;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['textColor'];?>
;border-spacing: 0;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;Margin: 0 auto;width: 100%;max-width: 600px;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['backgroundColor'];?>
'><tr style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
<td style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['backgroundColor'];?>
'>
                    <table width="100%" style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;border-spacing: 0;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4'><tr style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
<td class="inner contents" style='font-size: 100%;margin: 0;padding: 20px 30px;box-sizing: border-box;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['backgroundColor'];?>
'>
                                <div class="content" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
                                    <table style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;border-spacing: 0;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4'><tr style="margin: 0;padding: 0;box-sizing: border-box;font-size: 100%">
<td style='font-size: 100%;margin: 0;padding: 0;box-sizing: border-box;font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;font-weight: 300;text-align: left;line-height: 1.4;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['textColor'];?>
;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['backgroundColor'];?>
'>
                                                <div class="footer center" style="margin: 0;padding: 0;box-sizing: border-box;font-size: 14px;color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['textColor'];?>
;text-align: center;background-color: <?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['backgroundColor'];?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value['footer']['text'];?>
</div>
                                            </td>
                                        </tr></table>
</div>
                            </td>
                        </tr></table>
</td>
            </tr></table>
<!--[if (gte mso 9)|(IE)]>
                </td>
            </tr>
        </table>
        <![endif]-->
        <?php }?>
    </div>
</center>
</body>
</html>
<?php }
}
