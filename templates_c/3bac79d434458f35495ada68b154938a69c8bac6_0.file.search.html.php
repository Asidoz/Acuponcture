<?php
/* Smarty version 3.1.30, created on 2017-03-24 15:15:31
  from "C:\wamp64\www\Acuponcture\view\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d53813c2ea46_86975184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bac79d434458f35495ada68b154938a69c8bac6' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\search.html',
      1 => 1490368451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_58d53813c2ea46_86975184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3217858d53813b8e5b9_65409336', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2893158d53813c251d3_93231004', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_3217858d53813b8e5b9_65409336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Recherche - <?php
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_2893158d53813c251d3_93231004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>
<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['valueSearch']->value;?>
"/> 
<input type="button" value="GO" />
</p>
<?php
}
}
/* {/block 'contenu'} */
}
