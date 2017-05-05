<?php

$url = "http://www.santemagazine.fr/rss"; /* insérer ici l'adresse du flux RSS de votre choix */
if(file_exists($url)) 
	$rss = simplexml_load_file($url);
else
	$rss = "";
$smarty->assign("newsRss",$rss);