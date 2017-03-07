<?php 
ini_set('display_errors', 1);

require_once("models/sql.class.php");
require_once("models/page.class.php");
require("tpl/Smarty.class.php");

// BDD
$bdd = new SQL();

// SMARTY
$smarty = new Smarty();

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