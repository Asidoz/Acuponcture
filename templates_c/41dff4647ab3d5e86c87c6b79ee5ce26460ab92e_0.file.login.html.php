<?php
/* Smarty version 3.1.30, created on 2017-05-08 21:20:12
  from "C:\wamp64\www\Acuponcture\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910e10ccfe7a7_35665213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41dff4647ab3d5e86c87c6b79ee5ce26460ab92e' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\login.html',
      1 => 1494278411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/model.html' => 1,
  ),
),false)) {
function content_5910e10ccfe7a7_35665213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165065910e10ccfa786_70153905', 'contenu');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:view/model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'contenu'} */
class Block_165065910e10ccfa786_70153905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Compte</h2>

<div class="twoColumns">
    <fieldset">
        <legend>Connexion</legend>
        <form method="post" action="#" id="login_form" onSubmit="return loginUser();">
            <span class="errorTxt" style="padding-left: 50px;"></span>
            <ul>
                <li>
                    <label for="login_email">Adresse mail</label>
                    <input type="email" id="login_email" name="login_email" placeholder="jean.dupond@acupuncture.com" onkeyup="checkLoginForm();" />
                </li>
                <li>
                    <label for="login_pwd"> Mot de passe</label>
                    <input id="login_pwd" type="password" name="login_pwd" onkeyup="checkLoginForm();" />
                </li>
                <li>
                    <input id="login_submit" type="submit" value="Se connecter"  disabled />
                </li>
            </ul>
        </form>
    </fieldset>
</div>

<div class="twoColumns">
    <fieldset>
        <legend>Créer votre compte</legend>
        <form method="post" action="#" id="inscr_form" onSubmit="return checkInscr();">
            <span class="errorTxt" style="padding-left: 50px;"></span>
            <ul>
                <li>
                    <label for="email_inscr">Adresse mail</label>
                    <input type="email" id="email_inscr" name="email_inscr" placeholder="jean.dupond@acupuncture.com" required />
                </li>
                <li>
                    <label for="email_confirm_inscr">Confirmation adresse mail</label>
                    <input type="email" id="email_confirm_inscr" name="email_confirm_inscr"  placeholder="jean.dupond@acupuncture.com" />
                </li>
                <li>
                    <label for="prenom_inscr">Prénom</label>
                    <input type="text" id="prenom_inscr" name="prenom_inscr" placeholder="Jean" required />
                </li>
                <li>
                    <label for="nom_inscr">Nom</label>
                    <input type="text" id="nom_inscr" name="nom_inscr" placeholder="Dupond" required />
                </li>

                <li>
                    <label for="pwd_inscr">Mot de passe</label>
                    <input type="password" name="pwd_inscr" id="pwd_inscr" required />
                </li>
                <li>
                    <label for="pwd_confirm_inscr">Confirmation mot de passe</label>
                    <input type="password" id="pwd_confirm_inscr" name="pwd_confirm_inscr" required />
                </li>
                <li>
                    <input id="register_submit" type="submit" value="Créer votre compte" />
                </li>
            </ul>
        </form>
    </fieldset>
</div>

<?php
}
}
/* {/block 'contenu'} */
}
