<?php

$listeNews = $bddr->sql("SELECT titreNews,texteNews FROM news ORDER BY idNews ASC LIMIT 3");
$smarty->assign("listeNews",$listeNews);