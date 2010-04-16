<?php

function CreaturesList ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
    $dataFromFile = GetListing("Data/CreaturesList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
        list($name, $Level, $Type, $SubType, $Size, $Spd, $Abilities, $Skills, $Feats, $Traits, $Combat, $ST, $Desc, $Details) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $creaturestring = "<div class=\"statblock\"><h2>$name</h2>";
        $creaturestring .= "<p>$Desc</p>";
        $creaturestring .= "<div class=\"upperstatblock\">";
        //$creaturestring .= "<img style=\"float:right\" src=\"/dponiwiki/media/images/".$name.".png\" />";
        $creaturestring .= "<p><b><a href=\"CreaturesTypes.php\">Type</a>:</b> $Level level <a href=\"CreaturesTypes.php?Name=".urlencode($Type)."\">$Type</a> ";
        if ($SubType != "") { $creaturestring .= "(<a href=\"CreaturesSubTypes.php?Name=".urlencode($SubType)."\">$SubType</a>)";}
        if ($Size != "" ) {$creaturestring .= "<p><b><a href=\"CharGenSize.php\">Size</a>:</b> $Size</p>";}
        if ($Spd != "" ) {$creaturestring .= "<p><b>Speed:</b> $Spd</p>";}
        if ($Abilities != "" ) {$creaturestring .= "<p><b><a href=\"BasicsAbilities.php\">Abilities</a>:</b> $Abilities</p>";}
        if ($Skills != "" ) {
        	$creaturestring .= "<p><b><a href=\"Skills.php\">Skills</a>:</b></p><ul>";
        	$skillsarray = (explode(";", $Skills));
        	foreach ($skillsarray as $skillentry) {
				$eachskill = (explode("!", $skillentry));
				$creaturestring .= "<li><b><a href=\"Skills.php?Name=".urlencode($eachskill[0])."\">$eachskill[0]</a>:";
				$creaturestring .= " $eachskill[1]</b> ";
				$creaturestring .= "($eachskill[2])</li>";
			}
		}
		else { $creaturestring .= "<p><b><a href=\"Skills.php\">Skills</a>: None</b></p>"; }
        $creaturestring .= "</ul>";
        if ($Feats != "" ) {
        	$creaturestring .= "<p><b><a href=\"Feats.php\">Feats</a>:</b>";
        	$featsarray = (explode(";", $Feats));
        	foreach ($featsarray as $featentry) {
        		$eachfeat = (explode("!", $featentry));
        		$creaturestring .= " <a href=\"Feats.php?Name=".urlencode($eachfeat[0])."\">$eachfeat[0]</a>";
        		$creaturestring .= "$eachfeat[1]";
        	}
        }
        if ($Traits != "" ) {$creaturestring .= "<p><b><a href=\"CreaturesTraits.php\">Traits</a>:</b> $Traits</p>";}
        if ($Combat != "" ) {
        	$creaturestring .= "<p><b><a href=\"Combat.php\">Combat</a>:</b></p><ul>"; 
        	$combatarray = (explode (";", $Combat));
        		$attack = (explode("!", $combatarray[0]));
        		$creaturestring .= "<li><b><a href=\"Combat.php#AttackBonus\">Attack Bonus</a>: $attack[0]</b>";
        		$creaturestring .= " $attack[1]</li>";
        		$damage = (explode("!", $combatarray[1]));
        		$creaturestring .= "<li><b><a href=\"Combat.php#Damage\">Damage</a>: $damage[0]</b>";
        		$creaturestring .= " $damage[1]</li>";
        		$defense = (explode("!", $combatarray[2]));
        		$creaturestring .= "<li><b>Defense <a href=\"Combat.php#Dodge\">Dodge</a>/<a href=\"Combat.php#Parry\">Parry</a>: $defense[0]</b>";
        		$creaturestring .= " $defense[1]</li>";
        		$initiative = (explode("!", $combatarray[3]));
        		$creaturestring .= "<li><b><a href=\"CombatInitiative.php\">Initiative</a>: $initiative[0]</b>";
        		$creaturestring .= " $initiative[1]</il></ul>";
        		
        	//}
        }
        if ($ST != "" ) { 
        	$creaturestring .= "<p><b><a href=\"BasicsSavingThrows.php\">Saving Throws</a>:</b></p><ul>";
        	$STarray = (explode(";", $ST));
        	$toughness = (explode("!", $STarray[0]));
        	$creaturestring .= "<li><b>Toughness: $toughness[0]</b>";
        	$creaturestring .= " ($toughness[1])</li>";
        	$fortitude = (explode("!", $STarray[1]));
        	$creaturestring .= "<li><b>Fortitude: $fortitude[0]</b>";
        	$creaturestring .= " ($fortitude[1])</li>";
        	$reflex = (explode("!", $STarray[2]));
        	$creaturestring .= "<li><b>Reflex: $reflex[0]</b>";
        	$creaturestring .= " ($reflex[1])</li>";
        	$will = (explode("!", $STarray[3]));
        	$creaturestring .= "<li><b>Will: $will[0]</b>";
        	$creaturestring .= " ($will[1])</li></ul>";
        }
        $creaturestring .= "</div><div class=\"noteblock\"><p>$Details</p></div>";
        $creaturestring .= "</div>";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $creaturestring;
    }
}


function CreaturesTable ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
	$dataFromFile = GetListing("Data/CreaturesList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    $evenoddcounter = 1;
    $contentstring = "<table class=\"last-row\" style=\"float:left; margin-right: 0.5em;\" width=\"150px\">";
	
    foreach($dataFromFile as $individualListing) 
    {
        list($name, $level, $type) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $contentstring .= "<tr";
        if (1&$evenoddcounter) { $contentstring .= " class=\"odd-row\"";}
        $contentstring .= "><td><p style=\"font-weight:bold;font-size:80%;margin:0.1em 0 0 0;\"><a href=\"Creatures.php?Name=".urlencode($name)."\">$name</a></p>";
        $contentstring .= "<p style=\"font-size:50%;margin:0.1em 0 0 0;\">$level Level <a href=\"CreaturesTypes.php?Name=".urlencode($type)."\">$type</a></p></td></tr>";
        if ($evenoddcounter == (ceil(count($dataFromFile)/4))){
        	$contentstring .= "</table><table class=\"last-row\" style=\"float:left;margin-left:1em\" width=\"150px\">";
        	if (1&$evenoddcounter) {$evenoddcounter++;}
        }
		if ($evenoddcounter == (ceil(2*count($dataFromFile)/4))){
        	$contentstring .= "</table><table class=\"last-row\" style=\"float:left;margin-left:1em\" width=\"150px\">";
        	if (1&$evenoddcounter) {$evenoddcounter++;}
        }
        if ($evenoddcounter == (ceil(3*count($dataFromFile)/4))){
        	$contentstring .= "</table><table class=\"last-row\" style=\"float:left;margin-left:1em\" width=\"150px\">";
        	if (1&$evenoddcounter) {$evenoddcounter++;}
        }
        $evenoddcounter++;
    }
	$contentstring .= "</table>";        
	print $contentstring;
}

?>