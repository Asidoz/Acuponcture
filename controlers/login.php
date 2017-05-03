<?php


if (	!isset($_SESSION["AASA_id"] )){ // Cas ou on est pas connecté.
    if(isset($_POST['email_addr1']) and isset($_POST['password-connexion']) )
    { //if we get the name succesfully
        $username = $_POST['email_addr1'];
        $pass = $_POST['password-connexion'];
        if (!empty($username) and !empty($pass) ) {
            $user= new User($bddCo,$username,$pass);
        }
    }
}


// rédiriger sur la page d'authenfication avec les infos d'user


