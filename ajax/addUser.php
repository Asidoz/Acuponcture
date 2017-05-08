<?php

// SMARTY
require("../tpl/Smarty.class.php");
$smarty = new Smarty();

// BDD
require("../models/SQL.class.php");
$bddr = new SQL("read",1);

// USER
require("../models/User.class.php");

if(isset($_POST["e"]) && isset($_POST["n"]) && isset($_POST["p"]) && isset($_POST["m"])) {
	$result = 0;

	$emailAdd = $_POST["e"];
	$nomAdd = $_POST["n"];
	$prenomAdd = $_POST["p"];
	$passwordAdd = $_POST['m'];

	$user = new User($bddr,"","");
	if(!$user->isConnected()) {
		if($user->create($nomAdd,$prenomAdd,$emailAdd,$passwordAdd)) {
			$result = 1;
		}
	}

	$smarty->assign("var",$result);
	$smarty->display("../view/onlyVar.html");
}

?>