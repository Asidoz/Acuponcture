<?php
/* Smarty version 3.1.30, created on 2017-03-24 15:45:06
  from "C:\wamp64\www\AcuponctureOk\Acuponcture\view\news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d53f021b0df7_61620804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37fe29cc7b386282257b4bd43917aff854a455a2' => 
    array (
      0 => 'C:\\wamp64\\www\\AcuponctureOk\\Acuponcture\\view\\news.html',
      1 => 1490367235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d53f021b0df7_61620804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<?php $_smarty_tpl->_assignInScope('news', explode(" : ",$_smarty_tpl->tpl_vars['newsRss']->value->channel->item[$_smarty_tpl->tpl_vars['i']->value]->title));
?>
	<article>
		<h3><?php echo $_smarty_tpl->tpl_vars['news']->value[0];?>
</h3>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['newsRss']->value->channel->item[$_smarty_tpl->tpl_vars['i']->value]->link;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['news']->value[1];?>
</a></p>
	</article>
<?php }
}
}
}
