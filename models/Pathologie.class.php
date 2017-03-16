<?php

class Pathologie {

	private $bdd;

	private $id   = -1;
	private $mer  = "";
	private $type = "";
	private $desc = "";
	private $symptomes = array();

	function __construct($idPatho="", $nBdd="") { 
		if(isset($idPatho) && is_numeric($idPatho) && isset($nBdd)) {
			$this->bdd = $nBdd;
			$result = $this->bdd->sql("SELECT * FROM patho WHERE idP='".$idPatho."'"); 
			if(count($result) == 1) {
				$p = $result[0];
				$this->id   = $p["idP"];
				$this->mer  = $p["mer"];
				$this->type = $p["type"];
				$this->desc = $p["desc"];

				$requeteSymptomes = "SELECT symptome.desc FROM symptome
									INNER JOIN symptpatho ON symptome.idS = symptpatho.idS
									INNER JOIN patho ON patho.idP = symptpatho.idP
									INNER JOIN meridien ON meridien.code = patho.mer
									WHERE patho.idP = ".$this->id."
									ORDER BY symptome.desc ASC";
				$this->symptomes = $this->bdd->sql($requeteSymptomes);
			}
		}
	}

	public function getDesc() {
		return $this->desc;
	}

	public function getSymptomes() {
		return $this->symptomes;
	}

}

?>