<?php

function ModifierDetail ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
        
    $dataFromFile = GetListing("Data/ModifiersList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($name, $description) = $individualListing;
        
        // for each entry we create a formatted string using the stats
    
        $contentstring = "<h2>$name</h2>";
        if ($description != "") {$contentstring .= "<p>$description</p>";}
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $contentstring;
    
    }
    
}

function ModifierTitleList ($field, $term)
{
	$dataFromFile = GetListing("Data/ModifiersList.data", $field, $term);  
	$evenoddcounter = 1;
    foreach($dataFromFile as $individualListing)
    {
        list($name, $description) = $individualListing;
		$liststring .= "<tr";
        if (1&$evenoddcounter) { $liststring .= " class=\"odd-row\"";}
        $liststring .= "><td><a href=\"CombatModifiers.php?Name=";
        $liststring .= urlencode($name);
        $liststring .= "\">$name</a></td></tr>";
        $evenoddcounter++;
    }
    print $liststring;
}

?>