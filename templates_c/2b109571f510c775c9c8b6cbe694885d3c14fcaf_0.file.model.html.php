<?php
/* Smarty version 3.1.30, created on 2017-03-15 19:26:30
  from "C:\wamp64\www\Acuponcture\view\model.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c9956610bf58_81714270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b109571f510c775c9c8b6cbe694885d3c14fcaf' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\model.html',
      1 => 1489605989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c9956610bf58_81714270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1670558c995660d8cd0_87602238', 'title');
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
                <li><a href="" title="">Les Symptômes</a></li>
                <li><a href="/page/pathologies.html" title="">Les Pathologies</a></li>
                <li><a href="" title="">Me soigner</a></li>
                <li>Mon Compte</li>
            </ul>
        </nav>
    </div>
</header>

<!-- Contenu de la page -->
<div id="container">
    <section id="contenu">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1815058c995660e2ba6_59640407', 'contenu');
?>

    </section>

    <section id="infos">
        <h2>Les infos</h2>

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


    </section>
</div>

<!-- Footer -->
<footer>
    Created by Corentin G. and Florian L. - &copy; 2017
</footer>

</body>
</html><?php }
/* {block 'title'} */
class Block_1670558c995660d8cd0_87602238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_1815058c995660e2ba6_59640407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content<?php
}
}
/* {/block 'contenu'} */
}
