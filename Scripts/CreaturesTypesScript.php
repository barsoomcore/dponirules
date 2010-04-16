<?php

function CreaturesTypeList ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
    $dataFromFile = GetListing("Data/CreaturesTypesList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($Name, $Description, $Toughness, $Combat, $SV, $Skills, $Mindless, $Feats, $FeatTypes, $BonusFeats, $Powers, $Traits, $Advancement) = $individualListing;
        
        $BonusFeatArray = explode (", ", $BonusFeats);
        $FeatTypesArray = explode (", ", $FeatTypes);
        $creaturetypestring = "<h2>$Name</h2>";
        $creaturetypestring .= "<p>$Description</p>";
        if ($Toughness != "" ) {$creaturetypestring .= "<p><b>Toughness:</b> Base Toughness equal to $Toughness. This value is modified by their <a href=\"CharGenSize.php\">size</a> and <a href=\"EquipmentArmor.php\">armor</a>.</p>";}
        if ($Combat != "" ) {$creaturetypestring .= "<p><b>Combat:</b> Base <a href=\"Combat.php#CombatBonus\">Combat Bonus</a> equal to $Combat times level.</p>";}
        if ($SV != "" ) {$creaturetypestring .= "<p><b>Good Saving Throws:</b> $SV</p>";}
        $creaturetypestring .= "<p><a href=\"Skills.php\"><b>Skills:</b></a> ";
        if ($Mindless != "") {
        	$creaturetypestring .= "These creatures are usually mindless and have no skills. If they have an Intelligence score, they gain skills as follows: ";
        }
        if ($Skills != "" ) {$creaturetypestring .= "At 1st level, ($Skills + Int, minimum 1) skills at 4 ranks each, and ($Skills + Int) skill ranks per additional level.</p>";}
		$creaturetypestring .= "<p><a href=\"Feats.php\"><b>Feats:</b></a> ";
		if ($Mindless != "") {
			$creaturetypestring .= "These creatures are usually mindless and have no feats. If they have an Intelligence score, they gain feats as follows: ";
		}
        if ($Feats = "1" ) { $creaturetypestring .= "One feat at first level, and an additional feat every third level. These feats may be chosen from the following categories:<ul>";
			foreach($FeatTypesArray as $FeatTypesValue)
			{
				$creaturetypestring .= "<li><a href=\"Feats.php?Type=".urlencode($FeatTypesValue)."\">$FeatTypesValue</a></li>";
			}
			$creaturetypestring .="</ul>";
			if ($Powers != "") {$creaturetypestring .= "</p><p>These creatures can also take a <a href=\"Powers.php\">supernatural power</a> in place of a feat. They gain power ranks equal to their creature level.";}
        }
		$creaturetypestring .= "</p>";
        if ($BonusFeats != "") {$creaturetypestring .= "<p><b>Bonus Feats:</b> ";
			$i =1;
        	foreach($BonusFeatArray as $BonusFeatsValue)
        	{
        		$creaturetypestring .= "<a href=\"Feats.php?Name=".urlencode($BonusFeatsValue)."\">$BonusFeatsValue</a>";
        		if (count($BonusFeatArray) > $i) { 
        			$creaturetypestring .= ", ";
        		}
        		$i++;
        	}
        }
        if ($Traits != "") {$creaturetypestring .= "<p><b>Traits:</b><ul>$Traits</ul></p>";}
        $creaturetypestring .= "<p><b>Advancement:</b> $Advancement</p>";
        
        print $creaturetypestring;
        
    }

}

function CreaturesTypeNames()
{
    
    $dataFromFile = GetListing("Data/CreaturesTypesList.data", "Name", "All");
    foreach($dataFromFile as $individualListing)
    {
        $CreatureName = $individualListing[0];
        $CreatureNameList .= "<h5><a href=\"CreaturesTypes.php?Name=".urlencode($CreatureName)."\">$CreatureName</a></h5>";
        $CreatureDescription = $individualListing[1];
        $CreatureNameList .= "<p>$CreatureDescription</p>";
    }
    print $CreatureNameList;
}
	

?>