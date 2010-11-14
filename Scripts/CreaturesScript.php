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

function CreaturesJSON ($field, $term)
{
	$dataFromFile = GetListing("Data/CreaturesList.data", $field, $term);
	
		
	foreach($dataFromFile as $individualListing)
	{
		list($name, $Level, $Type, $SubType, $Size, $Spd, $Abilities, $Skills, $Feats, $Traits, $Combat, $ST, $Desc, $Details) = $individualListing;
		
		$Label = $Type." ".$SubType;
		$creatureJSON = "{ \"role_name\": \"".$Label."\", ";
		$creatureJSON .= "\"npc_name\": \"".$name."\", ";
		$creatureJSON .= "\"description\": \"".addslashes($Desc)."\", ";
		$creatureJSON .= "\"details\": \"<p>".addslashes($Details)."\", ";
		$creatureJSON .= "\"fields\": { ";
		$creatureJSON .= "\"level\": ".rtrim($Level, 'rndsth').", ";
		
		$CombatArray = (explode(";", $Combat));
		if ($CombatArray[0] == '<a href="CreaturesSubTypes.php?Name=Swarm">Swarm!') { 
			$swarm_link = addslashes("<a href=\"CreaturesSubTypes.php?Name=Swarm\">Swarm");
			$creatureJSON .= "\"primary_attack\": \"".$swarm_link."\", "; }
		else {
			$creatureJSON .= "\"primary_attack\": ".substr($CombatArray[0], 0, strpos($CombatArray[0], "!")).", ";
		}
				
		$SecondaryAttack = (explode("and", $CombatArray[0]));
		if ($SecondaryAttack[1]) { 
			$sbstart = strpos($SecondaryAttack[1], "+");
			$sbend = strpos($SecondaryAttack[1], "</b>");
			$SecondaryAttackBonus = substr($SecondaryAttack[1], $sbstart, $sbend - $sbstart);
			$creatureJSON .= "\"secondary_attack\": ".$SecondaryAttackBonus.", "; 
		}
				
		$Damage = (explode("!", $CombatArray[1]));
		$creatureJSON .= "\"full_damage\": ".$Damage[0].", ";
		
		$SecondaryDamage = (explode("and", $Damage[1]));
		if ($SecondaryDamage[1]) {
			$sdstart = strpos($SecondaryDamage[1], "+");
			$sdend = strpos($SecondaryDamage[1], "</b>");
			$SecondaryDamageBonus = substr($SecondaryDamage[1], $sdstart, $sdend - $sdstart);
			$creatureJSON .= "\"secondary_damage\": ".$SecondaryDamageBonus.", ";
		}
				
		$DefenseArray = (explode("!", $CombatArray[2]));
		$DodgeParry = (explode("/", $DefenseArray[0]));
		$creatureJSON .= "\"dodge\": ".$DodgeParry[0].", ";
		if ($DodgeParry[1] == "--"){ $DodgeParry[1] = "\"--\""; }
		$creatureJSON .= "\"parry\": ".$DodgeParry[1].", ";

		$creatureJSON .= "\"skills\": \"";		
		$SkillsArray = (explode(";", $Skills));
		foreach($SkillsArray as $Skill){
			$SkillDetail = (explode("!", $Skill));
			$SkillTag = "<a href=\"Skills.php?Name=".urlencode($SkillDetail[0])."\">$SkillDetail[0]</a>";
			$creatureJSON .= addslashes($SkillTag)." ";
			$creatureJSON .= $SkillDetail[1].", ";
		}
		$creatureJSON = rtrim($creatureJSON, ", ");
		$creatureJSON .= "\", ";
		
		$creatureJSON .= "\"abilities\": \"";
		if ($Feats) {
			$FeatsArray = (explode(";", $Feats));
			foreach($FeatsArray as $Feat){
				$FeatLinkArray = (explode("!", $Feat));
				if (substr($FeatLinkArray[0], 0, 6) == "Power:") {
					$FeatLinkArray[0] = substr($FeatLinkArray[0], 6, strlen($FeatLinkArray[0]));
					$FeatLink = "<a href=\"Powers.php?Name=".urlencode($FeatLinkArray[0])."\">$FeatLinkArray[0]</a> "; 
				} else {
					$FeatLink = "<a href=\"Feats.php?Name=".urlencode($FeatLinkArray[0])."\">$FeatLinkArray[0]</a>";
				}
				$creatureJSON .= addslashes($FeatLink);
				$creatureJSON .= addslashes($FeatLinkArray[1])." ";
			}
			$creatureJSON = rtrim($creatureJSON, " ");
			if ($Traits) { $creatureJSON .= ", "; }
		}
		if ($Traits) { $creatureJSON .= addslashes($Traits); }
		
		$creatureJSON .= "\", ";
				
		$rawSavesArray = (explode(";", $ST));
		$SavesArray = array();
		foreach($rawSavesArray as $Save){
			if ($Save == "--") { $SavesArray[] = "\"--\""; }
			else { $SavesArray[] = substr($Save, 0, strpos($Save, "!"));}
		}
		$creatureJSON .= "\"toughness\": ".$SavesArray[0].", ";
		$creatureJSON .= "\"fortitude\": ".$SavesArray[1].", ";
		$creatureJSON .= "\"reflex\": ".$SavesArray[2].", ";
		$creatureJSON .= "\"will\": ".$SavesArray[3].", ";
				
		$AbilitiesArray = (explode(",", $Abilities));
		$AbilitiesValues = array();
		foreach($AbilitiesArray as $Ability){
			$rawAbility = substr($Ability, -2, strlen($Ability));
			if ( $rawAbility == "--" ) { $rawAbility = "\"--\""; }
			$AbilitiesValues[] = $rawAbility;
		}
		$creatureJSON .= "\"strength\": ".$AbilitiesValues[0].", ";
		$creatureJSON .= "\"dexterity\": ".$AbilitiesValues[1].", ";
		$creatureJSON .= "\"constitution\": ".$AbilitiesValues[2].", ";
		$creatureJSON .= "\"intelligence\": ".$AbilitiesValues[3].", ";
		$creatureJSON .= "\"wisdom\": ".$AbilitiesValues[4].", ";
		$creatureJSON .= "\"charisma\": ".$AbilitiesValues[5].", ";
		
		$mb = substr($CombatArray[0], 0, strpos($CombatArray[0], "!"));
		$dex = substr($AbilitiesArray[1], -2);
		$strength = substr($AbilitiesArray[0], -2);
		$mb = ($mb - $dex) + $strength;
		
		switch ($Size) {
			case "Fine": 
				$mb = $mb - 16;
				break;
			case "Diminutive": 
				$mb = $mb -8;
				break;
			case "Tiny": 
				$mb = $mb -4;
				break;
			case "Small": 
				$mb = $mb -2;
				break;
			case "Large": 
				$mb = $mb +2;
				break;
			case "Huge": 
				$mb = $mb + 4;
				break;
			case "Gargantuan": 
				$mb = $mb +8;
				break;
			case "Colossal": 
				$mb = $mb +16;
				break;
			case "Awesome": 
				$mb = $mb +32;
				break;
		}
		
		$creatureJSON .= "\"mb\": ".$mb.", ";
		
		$BaseDefense = $DodgeParry[0] - $dex;
		$creatureJSON .= "\"base_defense\": ".$BaseDefense.", ";
		
		$creatureJSON .= "\"reputation\": \"--\" ";
		
		$creatureJSON .= " }}";
	}
	print $creatureJSON;
	
}

?>