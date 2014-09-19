<?php /* Smarty version Smarty-3.1.14, created on 2014-09-18 03:56:48
         compiled from "/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:648945330541915f2c47612-15803131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60b748b0fda9425e78bd31483b78acf3488cdb3' => 
    array (
      0 => '/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/album.tpl',
      1 => 1411005347,
      2 => 'file',
    ),
    '13c0edc05b0e9eb60e7cc3549b0721908f7a28bf' => 
    array (
      0 => '/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/base.tpl',
      1 => 1410835247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '648945330541915f2c47612-15803131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_541915f2c8d2d0_89750443',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541915f2c8d2d0_89750443')) {function content_541915f2c8d2d0_89750443($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUM</h1>
<p class="important">
 Welcome!
</p>
<?php if (isset($_smarty_tpl->tpl_vars['pic_url']->value)){?>
<?php if (count($_smarty_tpl->tpl_vars['pic_url']->value)==0){?>
<p>This is an empty Album.</p>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pic_url']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  	<a href="/pic?id=<?php echo $_smarty_tpl->tpl_vars['item']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
  	<br>
<?php } ?>
<br>
<a href="/album/edit?id=<?php echo $_smarty_tpl->tpl_vars['album_id']->value;?>
">Edit photos</a>
<?php }?>
<?php }?>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>