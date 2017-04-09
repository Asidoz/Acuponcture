<?php

class Page 
{

	private $p = "home";
	private $listeP;

	function __construct($newP="") {

		// Récupération de la liste des pages
		$this->listeP = parse_ini_file("conf/pages.ini");

		// Vérification sur la page existe
		if(isset($this->listeP[$newP])) {
			$this->p = $this->listeP[$newP];
		}

	}

	public function getPage() {
		return $this->p;
	}
}

?>