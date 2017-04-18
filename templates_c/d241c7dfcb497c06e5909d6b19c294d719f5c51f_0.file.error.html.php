<?php
/* Smarty version 3.1.30, created on 2017-04-17 11:59:26
  from "C:\wamp64\www\Acuponcture\view\error.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f4ae1e4d1de4_44066002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd241c7dfcb497c06e5909d6b19c294d719f5c51f' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\error.html',
      1 => 1492428776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58f4ae1e4d1de4_44066002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2075658f4ae1e4c1227_44536630', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1990158f4ae1e4cf8d8_38619501', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_2075658f4ae1e4c1227_44536630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_1990158f4ae1e4cf8d8_38619501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Erreur lors du chargement</h2>
	<p>
		Une erreur s'est produite lors du chargement de la page "<?php echo $_smarty_tpl->tpl_vars['nomPage']->value;?>
".<br />
		<a href="/" title="Accueil">Retourner à l'accueil</a>
	</p>
<?php
}
}
/* {/block 'contenu'} */
}
