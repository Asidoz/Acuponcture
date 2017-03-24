<?php
/* Smarty version 3.1.30, created on 2017-03-24 15:59:24
  from "C:\wamp64\www\Acuponcture\view\news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d5425c3392e7_29777910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '389b2976f455d4be19db98082125f364e6fff2df' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\news.html',
      1 => 1490363295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d5425c3392e7_29777910 (Smarty_Internal_Template $_smarty_tpl) {
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
