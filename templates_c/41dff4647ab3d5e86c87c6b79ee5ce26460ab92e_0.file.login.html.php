<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2017-05-03 19:06:30
=======
/* Smarty version 3.1.30, created on 2017-05-05 07:37:37
>>>>>>> origin/Florian
  from "C:\wamp64\www\Acuponcture\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_590a2a36d70254_65842204',
=======
  'unifunc' => 'content_590c2bc1c7acb3_35692142',
>>>>>>> origin/Florian
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41dff4647ab3d5e86c87c6b79ee5ce26460ab92e' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\login.html',
<<<<<<< HEAD
      1 => 1493838232,
=======
      1 => 1493969840,
>>>>>>> origin/Florian
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_590a2a36d70254_65842204 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_590c2bc1c7acb3_35692142 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> origin/Florian
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14037590a2a36d68a58_53362386', 'contenu');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16362590c2bc1c75f43_65040096', 'contenu');
>>>>>>> origin/Florian
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'contenu'} */
<<<<<<< HEAD
class Block_14037590a2a36d68a58_53362386 extends Smarty_Internal_Block
=======
class Block_16362590c2bc1c75f43_65040096 extends Smarty_Internal_Block
>>>>>>> origin/Florian
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Compte</h2>

<?php if ($_smarty_tpl->tpl_vars['user']->value['isConnected'] == 1) {?>             //Dans le cas ou nous serions connecter, nous affichons les données utilisateurs

<?php } else { ?>
<fieldset id="blockFormulaireConnexion">
    <legend>Connexion</legend>
<<<<<<< HEAD
    <form  method="post" action="login" id="formulaireConnexion">
=======
    <form  method="post" action="login.html" id="formulaireConnexion">
>>>>>>> origin/Florian
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
<<<<<<< HEAD
    <form  method="post" action="register.php" id="formulaireInscription" onchange="return checkFormInscription()">
=======
    <form  method="post" action="login.php" id="formulaireInscription" onchange="return checkFormInscription()">
>>>>>>> origin/Florian
        <ul>
            <li>
                <label for="email_addr2">Adresse mail&nbsp;</label>
                <input type="email" id="email_addr2" name="email_addr2" placeholder="jean.dupond@acupuncture.com" required
<<<<<<< HEAD
                       onblur="checkMailAviability()">
                <span id = "email_status"></span>
=======
                        onkeyup="checkMail(this)">
                <span id = "email_status">test </span>
>>>>>>> origin/Florian
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
<<<<<<< HEAD
                <input id="register-submit" type="button" value="Créer votre compte" />
=======
                <input id="register-submit" type="button" value="Créer votre compte" onclick="checkMailAviability(this)"/>
>>>>>>> origin/Florian
            </li>
        </ul>
    </form>
</fieldset>
<?php }?>


<?php
}
}
/* {/block 'contenu'} */
}
