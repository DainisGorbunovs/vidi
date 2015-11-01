<p class="ans">Your Local Authority's Health services rank is: <?= htmlspecialchars($vars["healthRank"]) ?></p>
<p class="ans">Your Local Authority's Educational services rank is: <?= htmlspecialchars($vars["educationRank"]) ?></p>
<p class="ans">Your Local Authority's Crime rate rank is: <?= htmlspecialchars($vars["crimeRank"]) ?></p>



<p class="problem">Your Local Authority's main issue is: 

<?php

	if($vars["educationRank"] > $vars["healthRank"] && $vars["educationRank"] > $vars["crimeRank"]){
		echo "Education deprivation.";
		$help = "education";
		/*
	$ch = curl_init("http://www.charitychoice.co.uk/charities/search?sector=&region=london&q=education&distance=&postcode=");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	$cl = curl_exec($ch); //puts the website in a variable

	$dom = new DOMDocument();
	@$dom->loadHTML($cl); //the @ supresses errors caused by bad html code of the source page
	$xpath = new DOMXpath($dom);

	// ===== Queries =====

	$valueQuery = $xpath->query("//div[@class='result clearfix activated']");

	$valueQuery->item(0)->nodeValue;

	echo $valueQuery;
	*/
	}
	else if($vars["crimeRank"] > $vars["healthRank"]){
		echo "Crime.";
		$help = "crime";
	}
	else {
		echo "Health-care deprivation.";
		$help = "health";
	}
?>

</p>

<?php
	if($help === "education"){
		echo "<a class='charlink'  href='http://www.charitychoice.co.uk/charities/search?sector=&region=";
		echo $vars["areaGov"];
		echo "&q=education&distance=&postcode='> Find local charities </a>";
	}
	else if($help === "crime"){
		echo "<a class='charlink' href='http://www.charitychoice.co.uk/charities/search?sector=&region=";
		echo $vars["areaGov"];
		echo "&q=crime&distance=&postcode='> Find local charities </a>";
	}
	else if($help === "health") {
		echo "<br><a class='charlink' href='http://www.charitychoice.co.uk/charities/search?sector=&region=";
		echo $vars["areaGov"];
		echo "&q=health&distance=&postcode='> Find local charities </a>";
	}
?>
