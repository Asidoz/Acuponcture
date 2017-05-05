<?php
/* Smarty version 3.1.30, created on 2017-05-05 07:37:37
  from "C:\wamp64\www\Acuponcture\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c2bc1c7acb3_35692142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41dff4647ab3d5e86c87c6b79ee5ce26460ab92e' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\login.html',
      1 => 1493969840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_590c2bc1c7acb3_35692142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16362590c2bc1c75f43_65040096', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'contenu'} */
class Block_16362590c2bc1c75f43_65040096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Compte</h2>


<fieldset id="blockFormulaireConnexion">
    <legend>Connexion</legend>
    <form  method="post" action="login.html" id="formulaireConnexion">
        <ul>
            <li>
                <label for="email_addr1">Adresse mail&nbsp;</label>
                <input type="email" id="email_addr1" placeholder="jean.dupond@acupuncture.com" required>
            </li>
            <li>
                <label  for="password-connexion"> Mot de passe &nbsp;</label>
                <input  id="password-connexion" type="password" name="psw-connexion" >
            </li>
            <li>
                <input id="login-submit" type="submit" value="Se connecter" />
            </li>
        </ul>
    </form>
</fieldset>


<fieldset id="blockFormulaireInscription">
    <legend>Créer votre compte</legend>
    <form  method="post" action="login.php" id="formulaireInscription" onchange="return checkFormInscription()">
        <ul>
            <li>
                <label for="email_addr2">Adresse mail&nbsp;</label>
                <input type="email" id="email_addr2" name="email_addr2" placeholder="jean.dupond@acupuncture.com" required
                        onkeyup="checkMail(this)">
                <span id = "email_status">test </span>
            </li>
            <li>
                <label for="email_addr_repeat2">Confirmez l'adresse mail&nbsp;</label>
                <input type="email" id="email_addr_repeat2" name="email_addr_repeat2"  placeholder="jean.dupond@acupuncture.com" required
                       onkeyup="checkMail(this)">
            </li>
            <li>
                <label for="prenom">Prénom&nbsp;</label>
                <input type="text" id="prenom" name="prenom" placeholder="Jean" required >
            </li>
            <li>
                <label for="nom">Nom&nbsp;</label>
                <input type="text" id="nom" name="nom" placeholder="Dupond" required>
            </li>

            <li>
                <label for="password">Mot de passe &nbsp;</label>
                <input type="password" id ="password" name="psw" required>
            </li>
            <li>
                <label for="password_repeat">Confirmer votre mot de passe &nbsp;</label>
                <input type="password" id="password_repeat" name="psw-repeat" required
                       oninput="checkPassword(this)">
            </li>
            <li>
                <input id="register-submit" type="button" value="Créer votre compte" onclick="checkMailAviability(this)"/>
            </li>
        </ul>
    </form>
</fieldset>

<?php
}
}
/* {/block 'contenu'} */
}
