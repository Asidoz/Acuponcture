<?php

// Récupération id patologie
if(isset($_GET["patho"]) && is_numeric($_GET["patho"])) {
    $patho = new Pathologie($_GET["patho"],$bddr);
} else {
    $patho = new Pathologie();
}

$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><Personne></Personne>");
$pathologie = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><pathologie></pathologie>");$i=1;


$pathologie->addChild('id_pathologie', $_GET["patho"]);
$pathologie->addChild('typ', $patho.getType());
$pathologie->addChild('description_pathologie', $patho.getDesc());
$mer=$pathologie->addChild('mer',"");

$requete = 	"SELECT patho.idP, patho.type, patho.desc, meridien.code,meridien.nom,meridien.element,meridien.yin FROM patho
			INNER JOIN meridien ON patho.mer = meridien.code
			WHERE patho.idP='".$patho.getMer()."'";

$meridien_res = array();
$this->$meridien_res = $this->bdd->sql($requete);
$p = $result[0];

$mer->addChild('code',  $p["code"]);
$mer->addChild('nom', $p["nom"]);
$mer->addChild('yin', $p["yin"]);


// Deuxieme requete
$requete = 	"SELECT symptPatho.aggr,symptome.idS, symptome.desc FROM patho
			INNER JOIN symptPatho on patho.idP=symptPatho.idP
			INNER JOIN symptome on symptPatho.idS=symptome.idS
			WHERE patho.idP='".$patho.getMer()."'";


$liste_symptome_res=$pathologie->addChild('liste_symptome',"");

$liste_symptome_res = array();
$this->$liste_symptome_res = $this->bdd->sql($requete);

for ($i=0; $i < count($liste_symptome); $i++) {
    $symptome=$liste_symptome->addChild('symptome',"");
    $symptome->addChild('id_symptome', $liste_symptome_res[$i]["idS"]);
    $symptome->addChild('description_symptome',$liste_symptome_res[$i]["desc"]);
    $symptome->addChild('symptome_aggravation', $liste_symptome_res[$i]["aggr"]);
}



// Troisieme requete
$requete = 	"SELECT DISTINCT keywords.name , keywords.idK FROM patho
			INNER JOIN symptPatho on patho.idP=symptPatho.idP
			INNER JOIN symptome on symptPatho.idS=symptome.idS
			INNER JOIN keySympt on symptome.idS= keySympt.idS
			INNER JOIN keywords on keySympt.idK= keywords.idK
			WHERE patho.idP='".$patho.getMer()."'";


$liste_mot_cle=$pathologie->addChild('liste_mot_cle',"");

$liste_mot_cle_res= array();
$this->$liste_mot_cle_res = $this->bdd->sql($requete);

for ($i=0; $i < count($liste_symptome); $i++) {
    $mot_cle=$liste_mot_cle->addChild('mot_cle',"");
    $mot_cle->addChild('id_mot_cle', $liste_mot_cle_res[$i]["idK"]);
    $mot_cle->addChild('name_mot_cle', $liste_mot_cle_res[$i]["name"]);
}

print($pathologie->asXML());

