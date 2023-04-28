<?php
/* Smarty version 3.1.33, created on 2023-04-16 20:31:09
  from 'C:\xampp2\htdocs\logo\app\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_643c3eed762507_92718536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f56240090ac3da5e63b8edecc9cd7ec7b7553fc' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\logo\\app\\views\\main.tpl',
      1 => 1681669292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c3eed762507_92718536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Logopedia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
	</head>
	<body>
	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_488615113643c3eed761fc5_74195421', 'content');
?>

		
	</div>
	

</body>
</html><?php }
/* {block 'content'} */
class Block_488615113643c3eed761fc5_74195421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_488615113643c3eed761fc5_74195421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
