<?php 

class User {

	private $bdd;

	private $id     = -1 ;
	private $email  = "";
	private $nom    = "";
	private $prenom = "";

	function __construct($bddCo, $emailCo="", $pwdCo="") {

		$this->bdd = $bddCo;

		if($emailCo != "" && $pwdCo != "") {
			$resultCo = $this->bdd->sql("SELECT * FROM users WHERE email='".$emailCo."' AND password='".$this->hashPwd($emailCo,$pwdCo)."'");
			if(count($resultCo) == 1) {
				$userBdd = $resultCo[0];
				$this->id     = $userBdd["id"];
				$this->email  = $userBdd["email"];
				$this->nom    = $userBdd["nom"];
				$this->prenom = $userBdd["prenom"];
			}
		}

	}

	private function hashPwd($email,$pwd) {
		$salt = "w6PZMQxt:?c_!r78E93&";
		$pwd = hash("sha256",$pwd);
		return hash("sha256",$email.$pwd.$salt);
	}

	public function isConnected() {
		return ($this->id != 0);
	}

	public function getId() {
		return $this->id;
	}

	public function getEmail() {
		return $this->email;
	}

};

?>