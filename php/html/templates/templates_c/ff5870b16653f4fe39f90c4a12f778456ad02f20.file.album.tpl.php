<?php /* Smarty version Smarty-3.1.14, created on 2014-09-19 05:12:28
         compiled from "/Developer/Workspace/EECS485/php/html/templates/templates/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33490046554179c642fa2b7-80829170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff5870b16653f4fe39f90c4a12f778456ad02f20' => 
    array (
      0 => '/Developer/Workspace/EECS485/php/html/templates/templates/album.tpl',
      1 => 1411092431,
      2 => 'file',
    ),
    '94c5279065c052d6b4fb57b23b562087691fc151' => 
    array (
      0 => '/Developer/Workspace/EECS485/php/html/templates/templates/base.tpl',
      1 => 1410832330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33490046554179c642fa2b7-80829170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54179c643c2862_32161417',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54179c643c2862_32161417')) {function content_54179c643c2862_32161417($_smarty_tpl) {?>

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