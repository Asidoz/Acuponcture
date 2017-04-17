<?php

// Récupération id patologie
if(isset($_GET["patho"]) && is_numeric($_GET["patho"])) { 
	$patho = new Pathologie($_GET["patho"],$bddr);
} else {
	$patho = new Pathologie();
}

$smarty->assign("nomPatho",ucwords($patho->getDesc()));
$smarty->assign("listeSymptomes",$patho->getSymptomes());
/*print_r($patho->getSymptomes());*/