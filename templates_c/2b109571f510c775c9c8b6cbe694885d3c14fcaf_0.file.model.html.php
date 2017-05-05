<?php
/* Smarty version 3.1.30, created on 2017-05-05 09:36:35
  from "C:\wamp64\www\Acuponcture\view\model.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c47a32134e1_63170064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b109571f510c775c9c8b6cbe694885d3c14fcaf' => 
    array (
      0 => 'C:\\wamp64\\www\\Acuponcture\\view\\model.html',
      1 => 1493976989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/news.html' => 1,
  ),
),false)) {
function content_590c47a32134e1_63170064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30130590c47a31ecc14_47311964', 'title');
?>
Association des Acupuncteurs soucieux de l'Accessibilité</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="/styles/css/bootstrap.css">
        <link rel="stylesheet" href="/styles/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="/styles/css/custom-styles.css">
        <link rel="stylesheet" href="/styles/css/font-awesome.css">
        <link rel="stylesheet" href="/styles/css/component.css">
        <link rel="stylesheet" href="/styles/css/font-awesome-ie7.css">

        <?php echo '<script'; ?>
 src="/scripts/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/scripts/login.js"><?php echo '</script'; ?>
>
    </head>
    <body>
            <div class="header-wrapper">
                <div class="container">
                    <div class="row-fluid">
                    
                        <div class="site-name">
                            <h1>Association des Acupuncteurs soucieux de l'Accessibilité</h1>
                        </div>

                        <div class="cust-form">
                            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                                
                                    <input type="text" class="search-query">
                                    <button type="submit" class="btn"><i class="fw-icon-search"></i></button>
                                
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="container">
            <nav class="menu">
                
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="/" title="Accueil">Accueil</a></li>
                                    <li><a href="/page/pathologies.html" title="Pathologies">Les Pathologies</a></li>

                                    <li><a href="#">Me soigner</a></li>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['isConnected'] == 1) {?>
                                        <li><a href="/page/account.html" title="Mon compte">Mon Compte</a></li>
                                    <?php } else { ?>
                                        <li><a href="/page/login.html" title="Me connecter">Me Connecter</a></li>
                                    <?php }?>
                                    <li><input type="text" placeholder="Recherche..." /></li>
                      
                                </ul>
                            </div>
                        </div>
                        <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Home</option>
            <option value="#">About</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">Services</option>
            <option value="#">Work</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
                    
            </nav>
            </div>
            <div class="container bg-white">
                


            <div class="container bg-white">
                <div class="row-fluid">
                 

                    
                </div>
            </div>
                    
                    <div class="container">
                      <div class="featured-blocks">
                        <div class="row-fluid">
                          <ul class="grid effect-2" id="grid">
                            <li class="span8">
                            <div>
                                <div class="block">
                                    <div  id ="container" class="block-title">
                                      
                                          <section id="contenu">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2307590c47a3206e62_52313924', 'contenu');
?>

                                             </section>

                                    </div>
                                    <div class="block-content">

                                      </a>
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="border"></div>
                          </li>
                          
                          <li class="span4">
                            <div>
                                <div class="block">
                                    <section id="infos">
                                        <h2>Les infos</h2>
                                        <?php $_smarty_tpl->_subTemplateRender("file:view/news.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    </section>
                                </div>
                            </div>
                          </li>
                        </ul>
                        </div>
                    </div>
                  </div>




                    <div class="wrap bg-black">
                      <div class="container ">
                        <div class="row-fluid">
                          <div class="span12">
                            <div class="copy-rights">
                             Created by Corentin G., Corentin P., Théo V. and Florian L. - &copy; 2017
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        

    </body>
</html>
<?php }
/* {block 'title'} */
class Block_30130590c47a31ecc14_47311964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'contenu'} */
class Block_2307590c47a3206e62_52313924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content<?php
}
}
/* {/block 'contenu'} */
}
