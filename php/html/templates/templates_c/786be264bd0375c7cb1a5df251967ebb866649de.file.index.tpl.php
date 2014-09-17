<?php /* Smarty version Smarty-3.1.14, created on 2014-09-17 04:35:32
         compiled from "/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6696493395418ec9f7be5b4-47238273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786be264bd0375c7cb1a5df251967ebb866649de' => 
    array (
      0 => '/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/index.tpl',
      1 => 1410921328,
      2 => 'file',
    ),
    '13c0edc05b0e9eb60e7cc3549b0721908f7a28bf' => 
    array (
      0 => '/Users/lingboguo/Desktop/EECS485/php/html/templates/templates/base.tpl',
      1 => 1410835247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6696493395418ec9f7be5b4-47238273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5418ec9f8bb055_14969563',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418ec9f8bb055_14969563')) {function content_5418ec9f8bb055_14969563($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>

    <link rel="stylesheet" href="/static/css/style.css" />

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
  <div class="center">
    

<head>
	<title>Group 76 Project1</title>
</head>
<boby>
	<header>Test header</header>
	<h1>INDEX</h1>
	<p class="center">
  		Welcome!
	</p>
	<p>This is Group 76's Photo Album!</p>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['username']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  		<a href="/albums?username=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
  		<br>
	<?php } ?>
	<footer>Test footer</footer>
</body>


  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>