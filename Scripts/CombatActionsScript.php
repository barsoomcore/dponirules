<?php

function ActionDetail ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
        
    $dataFromFile = GetListing("Data/ActionsList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($name, $time, $type, $description) = $individualListing;
        
        // for each entry we create a formatted string using the stats
    
        $actionstring = "<h3>$name ";
        if ($time != "") {$actionstring .= "($time)</h3>";}
        if ($type == "Maneuver") {$actionstring .= "<p>($name is a <a href=\"Combat.php#ManeuverBonus\">special maneuver</a>)</h5>";}
        if ($description != "") {$actionstring .= "<p>$description</p>";}
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $actionstring;
    
    }
    
}

function ActionTitleList ($field, $term)
{
	$dataFromFile = GetListing("Data/ActionsList.data", $field, $term);  
	$i = 1;
    foreach($dataFromFile as $individualListing)
    {
    	$i++;
        list($name, $time, $type, $description) = $individualListing;
        $liststring = " <a href=\"CombatActions.php?Name=";
        $liststring .= urlencode($name);
        $liststring .= "\">$name</a>";
        if ($i <= count($dataFromFile)) {
        	$liststring .= ", ";
        }
        print $liststring;
    }
        
}

?>