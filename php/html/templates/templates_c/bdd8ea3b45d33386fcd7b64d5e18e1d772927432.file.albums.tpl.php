<?php /* Smarty version Smarty-3.1.14, created on 2014-09-19 19:05:54
         compiled from "/Developer/Workspace/EECS485/php/html/templates/templates/albums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148273686554179cf94a3813-42692476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd8ea3b45d33386fcd7b64d5e18e1d772927432' => 
    array (
      0 => '/Developer/Workspace/EECS485/php/html/templates/templates/albums.tpl',
      1 => 1411104550,
      2 => 'file',
    ),
    '94c5279065c052d6b4fb57b23b562087691fc151' => 
    array (
      0 => '/Developer/Workspace/EECS485/php/html/templates/templates/base.tpl',
      1 => 1410832330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148273686554179cf94a3813-42692476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54179cf9542ed4_75045964',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54179cf9542ed4_75045964')) {function content_54179cf9542ed4_75045964($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    
<h1>ALBUMS</h1>
<p class="important">
 Welcome!
</p>
<?php if (isset($_smarty_tpl->tpl_vars['album_title']->value)){?>
<?php if (count($_smarty_tpl->tpl_vars['album_title']->value)==0){?>
<p>Empty Albums for <?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
</p>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album_title']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  	<a href="/album?id=<?php echo $_smarty_tpl->tpl_vars['item']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
  	<br>
<?php } ?>
<br>
<p><a href="/albums/edit?username=<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
">Edit the albums</a></p>
<p><a href="/">Back to Index</a></p>
<?php }?>
<?php }?>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>