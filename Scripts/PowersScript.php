<?php

function PowerList ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
        
    $dataFromFile = GetListing("Data/PowersList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
    
        list($name, $fatiguing, $maintenance, $concentration, $mentalcontact, $prerequisites, $description, $tryagain, $action) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $contentstring = "<h3>$name</h3><p><b>";
        if ($fatiguing != "" ) {$contentstring .= ": <a href=\"Powers.php#Fatiguing\">$fatiguing</a> :";}
        if ($concentration != "") {$contentstring .= ": <a href=\"Powers.php#Concentration\">$concentration</a> :";}
        if ($maintenance != "") {$contentstring .= ": <a href=\"Powers.php#Maintenance\">$maintenance</a> :";}
        if ($mentalcontact != "") {$contentstring .= ": <a href=\"Powers.php#MentalContact\">$mentalcontact</a> :";}
        $contentstring .= "</b></p>";
        if ($prerequisites != "") {$contentstring .= "<p><b>Prerequisites:</b> $prerequisites</p>";}
        $contentstring .= "<p>$description</p>";
        if ($tryagain != "") {$contentstring .= "<p><b>Try Again:</b> $tryagain</p>";}
        if ($action != "") {$contentstring .= "<p><b>Action:</b> $action</p>";}
        	else {$contentstring .= "<p><b>Action:</b> $name is a standard action.</p>";}
        $contentstring .= "";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $contentstring;
    }
}


function PowersTable ($field, $term)
{
	$dataFromFile = GetListing("Data/PowersList.data", $field, $term);
	
	$evenoddcounter = 1;
	$contentstring = "<div style=\"float:left; margin-right:1em; margin-top: 1em; \">";
	$contentstring .= "<table class=\"last-row\" width=\"300px\" style=\"float:left;\">";
	$contentstring .= "<th>Power</th><th class=\"center\">Fatiguing?</th><th class=\"center\">Mental<br />Contact?</th>";
	
	foreach($dataFromFile as $individualListing)
	{
		list($name, $fatiguing, $concentration, $maintenance, $mentalcontact, $prerequisites, $description, $tryagain, $action) = $individualListing;
		
		$contentstring .= "<tr";
        if (1&$evenoddcounter) { $contentstring .= " class=\"odd-row\"";}
        $contentstring .= "><td><a href=\"Powers.php?Name=". urlencode($name). "\">$name</td><td class=\"center\">";
        if ($fatiguing != "") {$contentstring .= "Yes";}
        $contentstring .= "</td><td class=\"center\">";
        if ($mentalcontact != "") { $contentstring .= "Yes";}
        $contentstring .= "</td></tr>";
        if ($evenoddcounter == (ceil(count($dataFromFile)/2))) {
        	$contentstring .= "</table><table class=\"last-row\" width=\"300px\" style=\"float:left;margin-left:1em\">";
        	$contentstring .= "<th>Power</th><th class=\"center\">Fatiguing?</th><th class=\"center\">Mental<br />Contact?</th>";
        }
        
        $evenoddcounter++;
    }
    
    $contentstring .= "</table></div>";
    print $contentstring;
}

?>