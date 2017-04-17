<?php
/* Smarty version 3.1.30, created on 2017-03-24 16:42:27
  from "C:\wamp64\www\Acuponcture\view\symptoms.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d54c73d90bb6_25327298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ed04e90ab1891e5b70366c797e58e27647c7bc' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\symptoms.html',
      1 => 1490372270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58d54c73d90bb6_25327298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1601058d54c73d55fe1_75539101', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2380358d54c73d8d9f5_64814094', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1601058d54c73d55fe1_75539101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['nomPatho']->value;?>
 - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_2380358d54c73d8d9f5_64814094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2><?php echo $_smarty_tpl->tpl_vars['nomPatho']->value;?>
</h2>
	<p>
		<h3>Les symptomes : </h3>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeSymptomes']->value, 's', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['s']->value) {
?>
				<li><?php echo $_smarty_tpl->tpl_vars['s']->value["desc"];?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
	</p>
<?php
}
}
/* {/block 'contenu'} */
}
