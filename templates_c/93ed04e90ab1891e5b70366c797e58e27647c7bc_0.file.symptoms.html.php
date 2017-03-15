<?php
/* Smarty version 3.1.30, created on 2017-03-15 19:03:55
  from "C:\wamp64\www\Acuponcture\view\symptoms.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c9901baf9107_67176243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ed04e90ab1891e5b70366c797e58e27647c7bc' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\symptoms.html',
      1 => 1489604634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58c9901baf9107_67176243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2807758c9901baee025_01180131', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_637058c9901baf64e2_09021929', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_2807758c9901baee025_01180131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pathologies - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_637058c9901baf64e2_09021929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Les Pathologies</h2>
	<p>
		On va afficher une jolie liste..
	</p>
<?php
}
}
/* {/block 'contenu'} */
}
