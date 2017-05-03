<?php
include  '../models/SQL.class.php';
if(isset($_POST['username']))
{ //if we get the name succesfully
    $username = $_POST['username'];
    $bddr = new SQL("read");
    $bddw = new SQL("write");

    if (!empty($username)) {

        $requete = 	"SELECT * FROM users WHERE email='".$username."';";

        $resultCo = $bddr->sql($requete);
        if(count($resultCo) == 1) {
            echo "0";
        }
        else{ //Création de compte
            echo "2";
        }

    }
}
