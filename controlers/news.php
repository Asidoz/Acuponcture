<?php

$url = "http://www.santemagazine.fr/rss"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
$smarty->assign("newsRss",$rss);