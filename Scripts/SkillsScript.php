<?php

function SkillDetail ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
        
    $dataFromFile = GetListing("Data/SkillsList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($name, $ability, $trained, $armor, $interaction, $specialization, $tools, $description, $check, $challenge, $tryagain, $action, $special) = $individualListing;
        
        // for each entry we create a formatted string using the stats
    
        $skillstring = "<h3>$name</h3>";
        $skillstring .= "<h5 style=\"margin-top:0.1em;\">(";
        if ($ability != "") {$skillstring .= "$ability";}
        if ($trained != "") {$skillstring .= "; Trained Only";}
        if ($armor !="") {$skillstring .= "; Armor Penalty";}
        if ($interaction != "") {$skillstring .= "; Interaction";}
        if ($specialization != "") {$skillstring .= "; Requires Specialization"; }
        if ($tools != "") {$skillstring .= "; Requires Tools"; }
        $skillstring .= ")</h5>";
        if ($description != "") {$skillstring .= "<p>$description</p>";}
        if ($check != "") {$skillstring .= "<p><b>Check:</b> $check</p>";}
        if ($challenge != "") {$skillstring .= "<p><b>Challenges:</b> You can take the following challenges with $name:</p><p>$challenge</p>";}
        if ($tryagain != "") {$skillstring .= "<p><b>Try Again:</b> $tryagain</p>";}
        if ($action != "") {$skillstring .= "<p><b>Action:</b> $action</p>";}
        if ($special != "") {$skillstring .= "<p><b>Special:</b> $special</p>";}
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $skillstring;
    
    }
    
}

function SkillList ($field, $term)
{
	$dataFromFile = GetListing("Data/SkillsList.data", $field, $term);
	
	$evenoddcounter = 1;
	$contentstring = "<div style=\"float:left; margin: 1em 1em 2em 0; \">";
	$contentstring .= "<table class=\"last-row\" style=\"float:left;\" width=\"300px\">";
	$contentstring .= "<th>Skill</th><th class=\"center\">Ability</th><th class=\"center\">Trained<br />Only?</th>";
	
	foreach($dataFromFile as $individualListing)
	{
		list($name, $ability, $trained, $interaction, $specialization, $tools, $description, $check, $challenge, $tryagain, $action, $special) = $individualListing;
		
		$contentstring .= "<tr";
        if (1&$evenoddcounter) { $contentstring .= " class=\"odd-row\"";}
        $contentstring .= "><td><a href=\"Skills.php?Name=". urlencode($name). "\">$name</td>";
        $contentstring .= "<td class=\"center\">$ability</td>";
        $contentstring .= "<td class=\"center\">$trained</td></tr>";
        if (count($dataFromFile) > 6) {
			if ($evenoddcounter == (ceil(count($dataFromFile)/2))) {
				$contentstring .= "</table><table class=\"last-row\" style=\"float:left;margin-left:2em;\" width=\"300px\">";
				$contentstring .= "<th>Skill</th><th class=\"center\">Ability</th><th class=\"center\">Trained<br />Only?</th>";
				if (1&$evenoddcounter) {$evenoddcounter++;}
			}
		}
        
        $evenoddcounter++;
    }
    
    $contentstring .= "</table></div>";
    print $contentstring;
}

?>