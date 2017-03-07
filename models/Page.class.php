<?php

class Page 
{

	private $p = "home";
	private $listeP;

	function __construct($newP="") {

		// Récupération de la liste des pages
		$tabfich=file("conf/pages.conf");
		for( $i = 0 ; $i < count($tabfich) ; $i++ )	{
			$tmp = preg_split("/:/",$tabfich[$i]);
			$listeP[$tmp[0]] = str_replace("\n", "", $tmp[1]);
		} 

		// Vérification sur la page existe
		if(isset($listeP[$newP])) {
			$this->p = $listeP[$newP];
		}

	}

	public function getPage() {
		return $this->p;
	}

}

?>