<?php

	// configuration
	require("../includes/config.php"); 

	$hint = "";
	$q = $_REQUEST["q"];

	$q = '%' . $q . '%';

	$rows = query("SELECT areaName FROM areaRank WHERE areaName LIKE ?", $q);

	if(!empty($rows)){
		foreach($rows as $row){
			$hint = $hint . $row["areaName"] . "<br>";
		}
	}
	

	echo $hint === "" ? "no suggestion" : $hint;
?>