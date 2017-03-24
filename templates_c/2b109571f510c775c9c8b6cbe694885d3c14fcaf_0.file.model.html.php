<?php
/* Smarty version 3.1.30, created on 2017-03-24 13:16:29
  from "C:\wamp64\www\Acuponcture\view\model.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d51c2d886848_19397057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b109571f510c775c9c8b6cbe694885d3c14fcaf' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\model.html',
      1 => 1490361388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/news.html' => 1,
  ),
),false)) {
function content_58d51c2d886848_19397057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1050558d51c2d847132_25184060', 'title');
?>
Association des Acupuncteurs soucieux de l'Accessibilité</title>
    <link rel="stylesheet" href="/styles/all.css">
</head>
<body>

<!-- Header -->
<header>
    <div>
        <h1>Association des Acupuncteurs soucieux de l'Accessibilité</h1>

        <!-- Menu de navigation -->
        <nav>
            <ul>
                <li><a href="/" title="">Accueil</a></li>
                <li><a href="/page/pathologies.html" title="">Les Pathologies</a></li>
                <?php if ($_smarty_tpl->tpl_vars['user_id']->value == -1) {?>
                    <li>Me connecter</li>
                <?php } else { ?>
                    <li>Mon Compte</li>
                <?php }?>
            </ul>
        </nav>
    </div>
</header>

<!-- Contenu de la page -->
<div id="container">
    <section id="contenu">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2638258d51c2d85aad6_14557185', 'contenu');
?>

    </section>

    <section id="infos">
        <h2>Les infos</h2>
        <!--
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeNews']->value, 'n', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['n']->value) {
?>
        <article>
            <h3><?php echo $_smarty_tpl->tpl_vars['n']->value["titreNews"];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['n']->value["texteNews"];?>
</p>
        </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

-->
        <?php $_smarty_tpl->_subTemplateRender("file:view/news.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </section>
</div>

<!-- Footer -->
<footer>
    <a href="/page/about.html">A propos</a> - &copy; 2017
</footer>

</body>
</html><?php }
/* {block 'title'} */
class Block_1050558d51c2d847132_25184060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_2638258d51c2d85aad6_14557185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content<?php
}
}
/* {/block 'contenu'} */
}
