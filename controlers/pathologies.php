<?php

$requete = 	"SELECT patho.desc, meridien.nom FROM patho
			INNER JOIN meridien ON patho.mer = meridien.code
			ORDER BY meridien.nom ASC";
			
$listePathos = $bddr->sql($requete);

$smarty->assign("listePathos",$listePathos);

/*$lastMer = "";
foreach ($listePathos as $key => $value) {
	if($value["nom"] != $lastMer) {
		echo "<h3>".$value["nom"]."</h3>";
		$lastMer = $value["nom"];
	}
	echo $value["desc"]."<br />";
}*/