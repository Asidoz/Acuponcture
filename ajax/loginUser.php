<?php
session_start();

// SMARTY
require("../tpl/Smarty.class.php");
$smarty = new Smarty();

// BDD
require("../models/SQL.class.php");
$bddr = new SQL("read",1);

// User
require("../models/User.class.php");

if(isset($_POST["e"]) && isset($_POST["p"])) {
	$email = $_POST["e"];
	$pwd = $_POST["p"];

	$user = new User($bddr,$email,$pwd);
	if($user->isConnected())
		$result = "OK";
	else
		$result = "Identifiants incorrects";

	$smarty->assign("var",$result);
	$smarty->display("../view/onlyVar.html");
}

?>