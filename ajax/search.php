<?php

// SMARTY
require("../tpl/Smarty.class.php");
$smarty = new Smarty();

// BDD
require("../models/SQL.class.php");
$bddr = new SQL("read",1);

// PATHOLOGIE
require("../models/Pathologie.class.php");

if(isset($_POST["s"]) && $_POST["s"] != "") {

	$recherche = $_POST['s'];
	$motsCles = preg_split("/ /", $recherche);
	$result = " ";

	$first = true;
	$sql = "SELECT patho.idP FROM keywords
	INNER JOIN keysympt ON keysympt.idK = keywords.idK
	INNER JOIN symptpatho ON symptpatho.idS = keysympt.idS
	INNER JOIN patho ON patho.idP = symptpatho.idP 
	WHERE ";
	foreach ($motsCles as $key => $value) {
		if($first) {
			$first = false;
		} else {
			$sql .= "OR ";
		}
		$sql .= 'keywords.name LIKE "%'.$value.'%" ';
	}
	$sql .= "GROUP BY patho.idP ORDER BY patho.desc ASC LIMIT 5";

	$listePatho = $bddr->sql($sql);

	foreach ($listePatho as $k) {
		$patho = new Pathologie($k["idP"],$bddr);
		$result = $result.$k['idP']." - ".$patho->getDesc()." - ".$patho->toUrl()." ; ";
	}

	$smarty->assign("var",$result);
	$smarty->display("../view/onlyVar.html");
}

?>