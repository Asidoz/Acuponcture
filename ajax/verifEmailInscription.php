<?php
print_r($_POST);
echo $_POST['username'];

if(isset($_POST['username']))
{ //if we get the name succesfully
    $username = $_POST['username'];
    if (!empty($username)) {

        $requete = 	"SELECT * FROM users WHERE email='".$username."';";

        $resultCo = $bddr->sql($requete);
        if(count($resultCo) == 1) {
            echo "0";
        }
        else{ //Création de compte
        }

    }
}
