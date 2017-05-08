<?php

class SQL 
{
	
	private $bdd;
	private $infos;

	function __construct($mode,$ajax=0) {

		if($ajax) {
			$pathConf = "../conf/bdd.ini";
		} else {
			$pathConf = "conf/bdd.ini";
		}

		$this->infos = parse_ini_file($pathConf);

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
		return $reponse->fetchAll();
	}

	public function insert($requete) {
		$this->bdd->exec($requete);
	}
}

?>