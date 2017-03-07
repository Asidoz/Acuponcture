<?php

class SQL 
{
	
	/*private $type = "mysql";
	private $host = "localhost";
	private $db = "projet";
	private $userR = "readProjet";
	private $mdpR = "readTLI2017";
	private $userW = "phpProjet";
	private $mdpW = "ProjetTLI2017";*/
	
	private $bdd;
	private $infos;

	function __construct($mode) {

		$this->infos = parse_ini_file("conf/bdd.ini");

		if($mode == "write") {
			$user = $this->infos["userw"];
			$mdp = $this->infos["mdpw"];
		} else {
			$user = $this->infos["userr"];
			$mdp = $this->infos["mdpr"];
		}

		// Connexion à la BDD
		$this->bdd = new PDO($this->infos["type"].":host=".$this->infos["host"].";dbname=".$this->infos["db"].";charset=utf8", $user, $mdp);

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