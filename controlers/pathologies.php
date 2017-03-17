<?php

$requete = 	"SELECT patho.idP, patho.desc, meridien.nom FROM patho
			INNER JOIN meridien ON patho.mer = meridien.code
			ORDER BY meridien.nom ASC";

$listePathos = $bddr->sql($requete);

$smarty->assign("listePathos",$listePathos);

