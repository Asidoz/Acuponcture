<?php
/* Smarty version 3.1.30, created on 2017-05-08 20:14:33
  from "C:\wamp64\www\Acuponcture\view\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910d1a9403389_37300469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bac79d434458f35495ada68b154938a69c8bac6' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\search.html',
      1 => 1490373757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_5910d1a9403389_37300469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49875910d1a9303c62_61539784', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_301045910d1a93ffe60_67374723', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_49875910d1a9303c62_61539784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Recherche - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_301045910d1a93ffe60_67374723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>
	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['valueSearch']->value;?>
"/> 
	<input type="button" value="GO" />
</p>

<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSearch']->value, 'r', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['r']->value) {
?>
		<li><a href="/pathologie/<?php echo $_smarty_tpl->tpl_vars['r']->value->toUrl();?>
.html"><?php echo $_smarty_tpl->tpl_vars['r']->value->getDesc();?>
</a></li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php
}
}
/* {/block 'contenu'} */
}
