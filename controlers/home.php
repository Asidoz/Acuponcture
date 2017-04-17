<?php

$var = $bddr->sql("SELECT patho.desc FROM patho WHERE patho.desc LIKE '%poumon%' OR patho.desc LIKE '%intestin%'");

foreach ($var as $key => $value) {
	echo $value["desc"]."<br />";
}