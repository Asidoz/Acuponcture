<?php
/* Smarty version 3.1.30, created on 2017-05-05 14:01:11
  from "C:\wamp64\www\Acuponcture\view\pathologies.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c85a7884d64_64646319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86cbe6a2b6f17c52716684686137a7c3ba0ecefc' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\pathologies.html',
      1 => 1490371650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_590c85a7884d64_64646319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6593590c85a777d913_44765720', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30054590c85a7881930_26695479', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_6593590c85a777d913_44765720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pathologies - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_30054590c85a7881930_26695479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Les Pathologies</h2>
	<p>
		<?php $_smarty_tpl->_assignInScope('lastMer', '');
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePathos']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>

			<?php if ($_smarty_tpl->tpl_vars['lastMer']->value != $_smarty_tpl->tpl_vars['p']->value["nom"]) {?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value != 0) {?>
					</ul>
				<?php }?>
				<h3><?php echo $_smarty_tpl->tpl_vars['p']->value["nom"];?>
</h3>
				<ul>
			<?php }?>
			
				<li><a href="/pathologie/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['p']->value["desc"];?>
</a></li>

			<?php if ($_smarty_tpl->tpl_vars['lastMer']->value != $_smarty_tpl->tpl_vars['p']->value["nom"]) {?>
				<?php $_smarty_tpl->_assignInScope('lastMer', $_smarty_tpl->tpl_vars['p']->value["nom"]);
?>
			<?php }?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</p>
<?php
}
}
/* {/block 'contenu'} */
}
