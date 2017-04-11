<?php

if(isset($_POST['username']))
{ //if we get the name succesfully
    $username = $_POST['username'];
    //echo username;
    if (!empty($username)) {

        $requete = 	"SELECT * FROM users WHERE email='".$username."';";

        $resultCo = $bddr->sql($requete);

        if(count($resultCo) == 1) {
            $data="sry";
            echo $username;
            die();
        }
    }
}

