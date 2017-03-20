<?php

$requete = 	"SELECT patho.idP, patho.desc, meridien.nom FROM patho
			INNER JOIN meridien ON patho.mer = meridien.code
			ORDER BY meridien.nom ASC";

$listePathos = $bddr->sql($requete);

for ($i=0; $i < count($listePathos); $i++) { 
	$listePathos[$i]["url"] = Pathologie::url($listePathos[$i]["desc"],$listePathos[$i]["idP"]);
}

$smarty->assign("listePathos",$listePathos);

