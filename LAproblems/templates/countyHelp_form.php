<p>Your Local Authority's Health services rank is: <?= htmlspecialchars($vars["healthRank"]) ?></p>
<p>Your Local Authority's Educational services rank is: <?= htmlspecialchars($vars["educationRank"]) ?></p>
<p>Your Local Authority's Crime rate rank is: <?= htmlspecialchars($vars["crimeRank"]) ?></p>



<p>Your Local Authority's main issue is: 

<?php

	if($vars["educationRank"] > $vars["healthRank"] && $vars["educationRank"] > $vars["crimeRank"]){
		echo "Education deprivation. <br><a  href='http://www.charitychoice.co.uk/charities/search?sector=&region=";
		echo $vars["areaGov"];
		echo "&q=education&distance=&postcode='> Find local charities </a>";
	}
	else if($vars["crimeRank"] > $vars["healthRank"]){
		echo "Crime.";
		echo "<br><a  href='http://www.charitychoice.co.uk/charities/search?sector=&region=";
		echo $vars["areaGov"];
		echo "&q=crime&distance=&postcode='> Find local charities </a>";
		$help = "crime";
	}
	else {
		echo "Health-care deprivation.";
		echo "<br><a  href='http://www.charitychoice.co.uk/charities/search?sector=&region=";
		echo $vars["areaGov"];
		echo "&q=health&distance=&postcode='> Find local charities </a>";
		$help = "health";
	}
?>

</p>
