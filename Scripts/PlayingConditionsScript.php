<?php

function ConditionList ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
	$dataFromFile = GetListing("Data/ConditionsList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
	
    foreach($dataFromFile as $individualListing) 
    {
        list($name, $condition) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $contentstring .= "<h2>$name</h2>";
        $contentstring .= "<p>$condition</p>";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
    }     
	print $contentstring;
}
	

?>