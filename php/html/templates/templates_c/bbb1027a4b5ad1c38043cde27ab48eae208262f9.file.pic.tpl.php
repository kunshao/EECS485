<?php /* Smarty version Smarty-3.1.14, created on 2014-09-16 04:14:04
         compiled from "/Developer/Workspace/EECS485/php/html/templates/templates/pic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127289272354179cecdcaa76-99866683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb1027a4b5ad1c38043cde27ab48eae208262f9' => 
    array (
      0 => '/Developer/Workspace/EECS485/php/html/templates/templates/pic.tpl',
      1 => 1410832330,
      2 => 'file',
    ),
    '94c5279065c052d6b4fb57b23b562087691fc151' => 
    array (
      0 => '/Developer/Workspace/EECS485/php/html/templates/templates/base.tpl',
      1 => 1410832330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127289272354179cecdcaa76-99866683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54179ced020bd5_45580995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54179ced020bd5_45580995')) {function content_54179ced020bd5_45580995($_smarty_tpl) {?>

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
  Welcome <?php echo $_smarty_tpl->tpl_vars['picid']->value;?>

</p>

  </div>
  <script type="text/javascript" src="/static/js/main.js"></script>
</body>

</html><?php }} ?>