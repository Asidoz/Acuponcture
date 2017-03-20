<?php
/* Smarty version 3.1.30, created on 2017-03-20 10:57:47
  from "C:\wamp64\www\Acuponcture\view\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cfb5abbaedf4_11288446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39c94f418509ba1f7263dc6ffdd53c24487b8167' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\test.html',
      1 => 1489996769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58cfb5abbaedf4_11288446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292058cfb5abba2796_12237096', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1523358cfb5abbabac8_83026092', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_292058cfb5abba2796_12237096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Test - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_1523358cfb5abbabac8_83026092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2> P'tit test</h2>
	<p>
		C'est pas grand chose, mais c'est fun.
	</p>
<?php
}
}
/* {/block 'contenu'} */
}
