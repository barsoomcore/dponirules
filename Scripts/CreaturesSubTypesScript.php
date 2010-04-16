<?php

function CreaturesSubTypesList ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
        
    $dataFromFile = GetListing("Data/CreaturesSubTypesList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($name, $description) = $individualListing;
        
        // for each entry we create a formatted string using the stats
     
        $subtypestring = "<h5>$name</h5>";
        $subtypestring .= "<p>$description</p>";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $subtypestring;
        
    }
}


?>