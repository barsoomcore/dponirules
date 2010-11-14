<?php

function WeaponsList ($field, $term, $range) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
	if ($range == "Melee") 
	{
       	$dataFromFile = GetListing("Data/MeleeWeaponsList.data", $field, $term);
    }
    
    elseif ($range == "Ranged") 
    {
       	$dataFromFile = GetListing("Data/RangedWeaponsList.data", $field, $term);
    }
    
    else 
    { 
    	$dataFromFile = GetListing("Data/MeleeWeaponsList.data", $field, $term);
		$dataFromRangedFile = GetListing("Data/RangedWeaponsList.data", $field, $term);
			foreach($dataFromRangedFile as $rangedWeapon) 
			{
				array_push($dataFromFile, $rangedWeapon);
			}
    }
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    $evenoddcounter = 1;
	$contentstring = "<table class=\"last-row\" width=\"100%\"><th>Weapon</th><th class=\"center\">Damage</th><th class=\"center\">Critical</th><th class=\"center\">Damage Descriptor</th><th class=\"center\">Range Increment</th><th class=\"center\">Cost</th>";
	
    foreach($dataFromFile as $individualListing) 
    {
        list($name, $damage, $criticalnumber, $criticaldamage, $damagetype, $range, $size, $cost, $weight, $type) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $contentstring .= "<tr";
        if (1&$evenoddcounter) { $contentstring .= " class=\"odd-row\"";}
        $contentstring .= "><td><a href=\"EquipmentWeapons.php?Name=". urlencode($name)."\">$name</a></td>";
        $contentstring .= "<td class=\"center\">$damage</td>";
        $contentstring .= "<td class=\"center\">$criticalnumber/$criticaldamage</td>";
        $contentstring .= "<td class=\"center\">$damagetype</td>";
        $contentstring .= "<td class=\"center\">$range</td>";
        $contentstring .= "<td class=\"center\">$cost</td></tr>";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        $evenoddcounter++;
    }
	$contentstring .= "</table>";        
	print $contentstring;
}

function WeaponDetail ($field, $term)
{
	$dataFromFile = GetListing("Data/MeleeWeaponsList.data", $field, $term);
	$dataFromRangedFile = GetListing("Data/RangedWeaponsList.data", $field, $term);	
	if ($dataFromRangedFile != "") { $dataFromFile = $dataFromRangedFile; }
	foreach($dataFromFile as $individualListing)
	{
		list($name, $damage, $criticalnumber, $criticaldamage, $damagetype, $range, $size, $cost, $weight, $type, $description) = $individualListing;
		
		$contentstring .= "<h2>$name</h2><table width=\"100%\"><th>Damage</th><th>Critical</th><th>Damage Descriptor</th><th>Range Increment</th><th>Cost</th><th>Type</th>";
		$contentstring .= "<tr class=\"odd-row\"><td>$damage</td>";
		$contentstring .= "<td>$criticalnumber/$criticaldamage</td>";
		$contentstring .= "<td>$damagetype</td>";
		$contentstring .= "<td>$range</td>";
		$contentstring .= "<td>$cost</td>";
		$contentstring .= "<td>$type</td></tr></table>";
		$contentstring .= "<p>$description</p>";
	}
	
	print $contentstring;
	
}
	

?>