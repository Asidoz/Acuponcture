<?php
/* Smarty version 3.1.30, created on 2017-03-20 14:36:06
  from "C:\wamp64\www\Acuponcture\view\about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cfe8d6a6db23_51030188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8321234a4c0390279c5e7cd8ca27184374fee714' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\about.html',
      1 => 1490020560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58cfe8d6a6db23_51030188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466358cfe8d6a65d67_94859456', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1322058cfe8d6a6c033_55448096', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_466358cfe8d6a65d67_94859456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
A Propos - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_1322058cfe8d6a6c033_55448096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>A Propos</h2>
	
	<h3>Sources</h3>
	<p></p>

	<h3>Auteurs</h3>
	<p>
		<ul>
			<li>GENTIL Corentin</li>
			<li>LE BRECH Florian</li>
			<li>PRIMA Corentin</li>
			<li>VERCOUSTRE Théo</li>
		</ul>
	</p>

	<h3>Webographie</h3>
	<p></p>
<?php
}
}
/* {/block 'contenu'} */
}
