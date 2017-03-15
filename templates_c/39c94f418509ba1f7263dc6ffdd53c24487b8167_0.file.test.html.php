<?php
/* Smarty version 3.1.30, created on 2017-03-15 18:46:08
  from "C:\wamp64\www\Acuponcture\view\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c98bf0c05773_70920705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39c94f418509ba1f7263dc6ffdd53c24487b8167' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\test.html',
      1 => 1489599058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58c98bf0c05773_70920705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1612858c98bf0bfc7f5_05219332', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82558c98bf0c03a64_31784621', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1612858c98bf0bfc7f5_05219332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Test - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_82558c98bf0c03a64_31784621 extends Smarty_Internal_Block
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
