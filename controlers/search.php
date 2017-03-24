<?php

if(isset($_GET["s"])) {
	$valueSearch = preg_replace("/-/", " ", $_GET["s"]);
} else {
	$valueSearch = "";
}

$smarty->assign("valueSearch",$valueSearch);

$motsCles = preg_split("/ /", $valueSearch);

$first = true;
$sql = "SELECT * FROM patho WHERE ";
foreach ($motsCles as $key => $value) {
	if($first) {
		$first = false;
	} else {
		$sql .= "OR ";
	}
	$sql .= 'patho.desc LIKE "%'.$value.'%" ';
}

$results = $bddr->sql($sql);
