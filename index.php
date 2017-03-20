<?php 

// SMARTY
require("tpl/Smarty.class.php");
$smarty = new Smarty();

spl_autoload_register(function ($classname) {
    $filename = "models/". $classname .".class.php";
    include_once($filename);
});

// BDD
$bddr = new SQL("read");
$bddw = new SQL("write");

// Page
if(isset($_GET["p"])) {
	$page = new Page($_GET["p"]);
} else {
	$page = new Page();
}

//include("controlers/".$page->getPage().".php");

// Traiter les données en faisant des includes
// include("traitement".$page->getPage().".php");
// le fichier inclue ajoute les paramètres à envoyer au template

$smarty->display("view/".$page->getPage().".html");

?>