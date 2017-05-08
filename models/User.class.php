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

				$_SESSION["AASA_id"] = $this->id;
			}

		} elseif(isset($_SESSION["AASA_id"])) {
			if(is_numeric($_SESSION["AASA_id"]) AND $_SESSION["AASA_id"] > 0) {
				$resultCo = $this->bdd->sql("SELECT * FROM users WHERE id=".$_SESSION["AASA_id"]);
				if(count($resultCo) == 1) {
					$userBdd = $resultCo[0];
					$this->id     = $userBdd["id"];
					$this->email  = $userBdd["email"];
					$this->nom    = $userBdd["nom"];
					$this->prenom = $userBdd["prenom"];	
				} else { $this->disconnect(); }
			} else {
				$this->disconnect();
			}
		}
	}

	public function create($nNom,$nPrenom,$nEmail,$nPassword) {
		$result = false;
		$verifMail = count($this->bdd->sql("SELECT email FROM USERS WHERE email = '".$nEmail."'"));
		if($verifMail == 0) {
			echo "INSERT INTO USERS (email, nom, prenom, password)
							VALUES ('".$nEmail."','".$nNom."','".$nPrenom."','".$this->hashPwd($nEmail,$nPassword)."')";
			$this->bdd->insert("INSERT INTO USERS (email, nom, prenom, password)
							VALUES ('".$nEmail."','".$nNom."','".$nPrenom."','".$this->hashPwd($nEmail,$nPassword)."')");
			$result = true;
		}
		return $result;
	}

	public function disconnect() {
		unset($_SESSION["AASA_id"]);
		$this->id     = -1;
		$this->email  = "";
		$this->nom    = "";
		$this->prenom = "";
	}

	private function hashPwd($email,$pwd) {
		$salt = "w6PZMQxt:?c_!r78E93&";
		$pwd = hash("sha256",$pwd);
		return hash("sha256",$email.$pwd.$salt);
	}

	public function isConnected() {
		return ($this->id > 0);
	}

	public function getId() {
		return $this->id;
	}

	public function getEmail() {
		return $this->email; 
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function getInfosSmarty() {
		return array('isConnected' => $this->isConnected(), 
					'nom' => $this->nom,
					'prenom' => $this->prenom);
	}

};

?>