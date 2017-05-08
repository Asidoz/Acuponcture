<?php

if(isset($_GET["s"])) {
	$valueSearch = preg_replace("/-/", " ", $_GET["s"]);
} else {
	$valueSearch = "";
}

$smarty->assign("valueSearch",$valueSearch);

$motsCles = preg_split("/ /", $valueSearch);

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
$sql .= "ORDER BY patho.desc ASC";

$results = $bddr->sql($sql);

$pathologies = array();

foreach ($results as $key => $p) {
	array_push($pathologies, new Pathologie($p["idP"],$bddr));
}

$smarty->assign("resultSearch",$pathologies);