<?php /* Smarty version Smarty-3.1.14, created on 2014-09-19 07:32:45
         compiled from "/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/pic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418004507541a3be13ecfd5-08697853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce31cf0459ddfbbea4cd1dbb084bd1ae57b4e61' => 
    array (
      0 => '/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/pic.tpl',
      1 => 1411102696,
      2 => 'file',
    ),
    '13c0edc05b0e9eb60e7cc3549b0721908f7a28bf' => 
    array (
      0 => '/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/base.tpl',
      1 => 1410835247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418004507541a3be13ecfd5-08697853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541a3be142fe19_44247650',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541a3be142fe19_44247650')) {function content_541a3be142fe19_44247650($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>PIC</h1>
<p class="important">
  Welcome
</p>
<p><a href="/pic?id=<?php echo $_smarty_tpl->tpl_vars['pic_id_pre']->value;?>
">Previous</a></p>
<p><a href="/pic?id=<?php echo $_smarty_tpl->tpl_vars['pic_id_next']->value;?>
">Next</a></p>
<p><a href="/album?id=<?php echo $_smarty_tpl->tpl_vars['pic_album_id']->value;?>
">Go back to album</a></p>
<img src="<?php echo $_smarty_tpl->tpl_vars['pic_url_current']->value;?>
">


  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>