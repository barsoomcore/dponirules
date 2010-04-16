<?php

function FeatDetail ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
        
    $dataFromFile = GetListing("Data/FeatsList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($name, $type, $prerequisite, $benefit) = $individualListing;
        
        // for each entry we create a formatted string using the stats
     
        $featstring = "<h5>$name ($type)</h5>";
        if ($prerequisite != "") {$featstring .= "<p><b>Prerequisite:</b> $prerequisite</p>";}
        if ($benefit != "") {$featstring .= "<p>$benefit</p>";}
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $featstring;
        
    }
}

function FeatList ($field, $term)
{
	$dataFromFile = GetListing("Data/FeatsList.data", $field, $term);
	
	$evenoddcounter = 1;
	$contentstring .= "<table class=\"last-row\" style=\"float:left\" width=\"250px\">";
	
	foreach($dataFromFile as $individualListing)
	{
		list($name, $type, $prerequisite, $benefit, $summary) = $individualListing;
		
		$contentstring .= "<tr";
        if (1&$evenoddcounter) { $contentstring .= " class=\"odd-row\"";}
        $contentstring .= "><td><p style=\"font-size:80%;margin:0.1em 0 0 0;\"><a href=\"Feats.php?Name=". urlencode($name). "\"><b>$name</b></a></p><p style=\"font-size:50%;margin:0 0 0 0;\">$summary</p></td>";
        if ($evenoddcounter == (ceil(count($dataFromFile)/3))) {
        	$contentstring .= "</table><table class=\"last-row\" style=\"float:left;margin-left:1em\" width=\"250px\">";
        	if (1&$evenoddcounter) {$evenoddcounter++;}
        }
        
        if ($evenoddcounter == (ceil(2*(count($dataFromFile)/3)))) {
        	$contentstring .= "</table><table class=\"last-row\" style=\"float:left;margin-left:1em\" width=\"250px\">";
        	if (1&$evenoddcounter) {$evenoddcounter++;}
        }

		$evenoddcounter++;
	}
	
	$contentstring .= "</table>";
	print $contentstring;
}


?>