<?php 
session_start();

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

// User
$user = new User($bddw);
include("controlers/user.php");
$smarty->assign("user",$user->getInfosSmarty());

# News
include("controlers/news.php");

# Controlers
if(file_exists("controlers/".$page->getPage().".php")) {
	include("controlers/".$page->getPage().".php");
} else {
	// Affichage page d'erreur de chargement.
	$smarty->assign("nomPage",$page->getPage());
	$smarty->display("view/error.html");
	exit;
}

# Affichage de la page
$smarty->display("view/".$page->getPage().".html");

?>