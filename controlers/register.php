<?php
include  '../models/SQL.class.php';
if(isset($_POST['email_addr2'])  and  isset($_POST['email_addr2']) and isset($_POST['nom']) and   isset($_POST['password']) and isset($_POST['prenom']) ){
    $user=  new User();
    $user->createUser($bddCo,$emailCo,$pwdCo, $nom, $prenom );
            // need redirection sur Login, + BDD pas initialisé je crois
}






