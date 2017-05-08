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

	public static function url($name, $id) {
		$name = strtolower($name);
		$alphabet = array(
            'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
            'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
            'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
            'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
            'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
            'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
            'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f', 'œ'=>'oe', "'"=>'-'
        );

		$name = strtr($name, $alphabet);
		$name = str_replace(' ', '-', $name);
		//return $name."-".$id;
		return "/patho/".$id."/";
	}

	public function toUrl() {
		return $this->url($this->desc, $this->id);
	}

	public function getDesc() {
		return $this->desc;
	}

	public function getSymptomes() {
		return $this->symptomes;
	}
	public function getType(){
	    return $this->type;
    }
    public function getMer(){
	    return $this->mer;
	}

}

?>