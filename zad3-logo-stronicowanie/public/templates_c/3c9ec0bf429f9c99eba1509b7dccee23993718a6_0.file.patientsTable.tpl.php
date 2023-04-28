<?php
/* Smarty version 3.1.33, created on 2023-04-16 20:31:09
  from 'C:\xampp2\htdocs\logo\app\views\patientsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_643c3eed7a2035_35977408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c9ec0bf429f9c99eba1509b7dccee23993718a6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\logo\\app\\views\\patientsTable.tpl',
      1 => 1681669750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c3eed7a2035_35977408 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tab_people" width=400>
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td align=center><?php echo $_smarty_tpl->tpl_vars['p']->value["date_of_birth"];?>
</td><!-- <td align=center><a class="button-large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user1'];?>
">Usuń</a></td> --></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
