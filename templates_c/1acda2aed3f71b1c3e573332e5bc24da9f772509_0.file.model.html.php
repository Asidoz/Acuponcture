<?php
/* Smarty version 3.1.30, created on 2017-03-07 14:52:55
  from "C:\wamp64\www\Acu\Acuponcture\view\model.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bec947ace023_90630437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1acda2aed3f71b1c3e573332e5bc24da9f772509' => 
    array (
      0 => 'C:\\wamp64\\www\\Acu\\Acuponcture\\view\\model.html',
      1 => 1488896879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bec947ace023_90630437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2093458bec947ac1394_69987521', 'title');
?>
Association des Acupuncteurs soucieux de l'Accessibilité</title>
    <link rel="stylesheet" href="styles/all.css">
</head>
<body>

<!-- Header -->
<header>
    <div>
        <h1>Association des Acupuncteurs soucieux de l'Accessibilité</h1>

        <!-- Menu de navigation -->
        <nav>
            <ul>
                <li><a href="" title="">Les Symptômes</a></li>
                <li><a href="" title="">Recherche de pathologies</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2189558bec947ac9c94_00126234', 'contenu');
?>

    </section>

    <section id="infos">
        <h2>Les p'tites infos</h2>
        <article>
            <h3>Nos horaires</h3>
            <p>Ouvert le XX de XXh à XXh !</p>
        </article>

        <article>
            <h3>New !</h3>
            <p>Nouvelles aiguilles disponibles !</p>
        </article>
    </section>
</div>

<!-- Footer -->
<footer>
    Created by Corentin G. and Florian L. - &copy; 2017
</footer>

</body>
</html><?php }
/* {block 'title'} */
class Block_2093458bec947ac1394_69987521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_2189558bec947ac9c94_00126234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content<?php
}
}
/* {/block 'contenu'} */
}
