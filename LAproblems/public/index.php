<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
        {
            apologize("You must provide your Local Authority.");
        }

        // query database for user
        $rows = query("SELECT areaName FROM areaRank WHERE areaName = ?", $_POST["name"]);

        // if we found county, bring problems
        if (count($rows) == 1)
        {
            // first (and only) row
            $rows1 = query("SELECT healthRank, educationRank, crimeRank FROM areaRank WHERE areaName = ?", $_POST["name"]);

            $vars = $rows1[0];

            render("countyHelp_form.php", ["title" => "County Problems", "vars" => $vars]);
        }
        else{
        	// else apologize
        	apologize("Invalid local authority please reselect.");
        }
    }
    else
    {
        // else render form
        render("home.php", ["title" => "County Help"]);
    }
?>
