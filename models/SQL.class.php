<?php

class SQL 
{
	
	private $infos;
	private $bdd;

	function __construct() {

		// Récupération des infos de connexion
		$tabfich=file("conf/bdd.conf");
		for( $i = 0 ; $i < count($tabfich) ; $i++ )	{
			$tmp = split("=",$tabfich[$i]);
			$infos[$tmp[0]] = str_replace("\n", "", $tmp[1]);
		} 

		// Connexion à la BDD
		$this->bdd = new PDO($infos["type"].":host=".$infos["host"].";dbname=".$infos["db"].";charset=utf8", $infos["user"], $infos["mdp"]);

	}

	public function sql($requete) {
		$reponse = $this->bdd->query($requete);
		return $reponse->fetch();
	}

	public function test() {
		$reponse = $this->bdd->query('SELECT nom FROM meridien');
		while($donnees = $reponse->fetch()) {
			echo $donnees["nom"]."<br />";
		}
	}

}

?>