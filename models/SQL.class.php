<?php

class SQL 
{
	
	private $type = "mysql";
	private $host = "localhost";
	private $db = "projet";
	private $userR = "readProjet";
	private $mdpR = "readTLI2017";
	private $userW = "phpProjet";
	private $mdpW = "ProjetTLI2017";
	
	private $bdd;

	function __construct($mode) {

		if($mode == "write") {
			$user = $this->userW;
			$mdp = $this->mdpW;
		} else {
			$user = $this->userR;
			$mdp = $this->mdpR;
		}

		// Connexion à la BDD
		$this->bdd = new PDO($this->type.":host=".$this->host.";dbname=".$this->db.";charset=utf8", $user, $mdp);

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