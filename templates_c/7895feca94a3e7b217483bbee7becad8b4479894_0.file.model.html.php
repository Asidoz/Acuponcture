<?php
/* Smarty version 3.1.30, created on 2017-03-24 15:51:25
  from "C:\wamp64\www\AcuponctureOk\Acuponcture\view\model.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d5407dc09718_00827763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7895feca94a3e7b217483bbee7becad8b4479894' => 
    array (
      0 => 'C:\\wamp64\\www\\AcuponctureOk\\Acuponcture\\view\\model.html',
      1 => 1490370683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/news.html' => 1,
  ),
),false)) {
function content_58d5407dc09718_00827763 (Smarty_Internal_Template $_smarty_tpl) {
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
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="/styles/css/bootstrap.css">
        <link rel="stylesheet" href="/styles/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="/styles/css/custom-styles.css">
        <link rel="stylesheet" href="/styles/css/font-awesome.css">
        <link rel="stylesheet" href="/styles/css/component.css">
        <link rel="stylesheet" href="/styles/css/font-awesome-ie7.css">
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
            <div class="menu">
                
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li class="active"><a href="/" title="">Accueil</a></li>
                                    <li><a href="/page/pathologies.html" title="">Les Pathologies</a></li>

                                    <li><a href="#">Me soigner</a></li>
                                    <li><a href="#">Mon Compte</a></li>
                      
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
                    
            </div>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2580858d5407dbbf5d2_73209056', 'contenu');
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
/* {block 'contenu'} */
class Block_2580858d5407dbbf5d2_73209056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content<?php
}
}
/* {/block 'contenu'} */
}
