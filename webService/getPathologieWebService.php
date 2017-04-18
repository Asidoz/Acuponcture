<?php


$requete = 	"SELECT patho.idP, patho.type, patho.desc, meridien.code,meridien.nom,meridien.element,meridien.yin FROM patho
			INNER JOIN meridien ON patho.mer = meridien.code
			WHERE patho.idP='1'";


$results = $bddr->sql($sql);

$pathologie_array = array();

// premiere écriture pour le fichier XML
$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><Personne></Personne>");

$i=1;
//Si on a bien un résultat

$pathologie = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><pathologie></pathologie>");$i=1;
//Si on a bien un résultat

$pathologie->addChild('id_pathologie', "");
$pathologie->addChild('typ', "Track $i - Track Title");
$pathologie->addChild('description_pathologie', "Track $i - Track Title");
$mer=$pathologie    ->addChild('mer',"");
$mer->addChild('code', "Track $i - Track Title");
$mer->addChild('nom', "Track $i - Track Title");
$mer->addChild('yin', "Track $i - Track Title");
$liste_symptome=$pathologie->addChild('liste_symptome',"");
$symptome=$liste_symptome->addChild('symptome',"");
$symptome->addChild('id_symptome', "Track $i - Track Title");
$symptome->addChild('description_symptome', "Track $i - Track Title");
$symptome->addChild('symptome_aggravation', "Track $i - Track Title");
$liste_mot_cle=$pathologie->addChild('liste_mot_cle',"");
$mot_cle=$liste_mot_cle->addChild('mot_cle',"");
$mot_cle->addChild('id_mot_cle', "Track $i - Track Title");
$mot_cle->addChild('name_mot_cle', "Track $i - Track Title");
print($pathologie->asXML());


// Deuxieme requete


$requete = 	"SELECT symptPatho.aggr,symptome.idS, symptome.desc FROM patho
			INNER JOIN symptPatho on patho.idP=symptPatho.idP
			INNER JOIN symptome on symptPatho.idS=symptome.idS
			WHERE patho.idP='1'";

$results = $bddr->sql($sql);

for ($i=0; $i < count($results); $i++) {
     $results[$i]["symptPatho.aggr"]
     $results[$i]["symptome.idS"]
     $results[$i]["symptome.desc"]


}

// Troisieme requete

$requete = 	"SELECT DISTINCT keywords.name FROM patho
			INNER JOIN symptPatho on patho.idP=symptPatho.idP
			INNER JOIN symptome on symptPatho.idS=symptome.idS
			INNER JOIN keySympt on symptome.idS= keySympt.idS
			INNER JOIN keywords on keySympt.idK= keywords.idK
			WHERE patho.idP='1'";



// Quatrieme requete