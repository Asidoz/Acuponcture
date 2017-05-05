<?php

// SMARTY
require("../tpl/Smarty.class.php");
$smarty = new Smarty();

// BDD
require("../models/SQL.class.php");
$bddr = new SQL("read",1);
if(isset($_POST["e"])) {
	$emailTest = $_POST["e"];

	$l = $bddr->sql("SELECT email FROM users WHERE email='".$emailTest."'");
	
	if(count($l) == 1) {
		$result = 1;
	} else {
		$result = 0;
	}

	$smarty->assign("var",$result);
	$smarty->display("../view/onlyVar.html");
}

?>