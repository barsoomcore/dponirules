<?php

function CreaturesTemplatesList ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
    $dataFromFile = GetListing("Data/CreaturesTemplatesList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    
    foreach($dataFromFile as $individualListing)
    {
    
        list($name, $Level, $Type, $SubType, $Size, $Spd, $Abilities, $Skills, $Feats, $Combat, $Damage, $Traits, $ST, $Desc, $Advance, $LevelLag) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $creaturestring = "<div class=\"statblock\"><h2>$name</h2>";
        $creaturestring .= "<p>$Desc</p>";
        $creaturestring .= "<div class=\"upperstatblock\">";
        //$creaturestring .= "<img style=\"float:right\" src=\"/dponiwiki/media/images/".$name.".png\" />";
        if ($Level != "") {$creaturestring .= "<p><b>Level:</b> $Level</p>";}
        $creaturestring .= "<p><b><a href=\"CreaturesTypes.php\">Type</a>:</b> $Type</p>";
        if ($SubType != "") { $creaturestring .= "<p><b><a href=\"CreaturesSubTypes.php\">Sub-Type:</a></b> $SubType</p>";}
        if ($Spd != "" ) {$creaturestring .= "<p><b>Speed:</b> $Spd</p>";}
        if ($Abilities != "" ) {$creaturestring .= "<p><b><a href=\"BasicsAbilities.php\">Abilities</a>:</b> $Abilities</p>";}
        if ($Skills != "" ) {$creaturestring .= "<p><b><a href=\"Skills.php\">Skills</a>:</b> $Skills</p>";}
        if ($Feats != "" ) {$creaturestring .= "<p><b><a href=\"Feats.php\">Feats</a>:</b> $Feats</p>";}
        if ($Traits != "" ) {$creaturestring .= "<p><b><a href=\"CreaturesTraits.php\">Traits</a>:</b> $Traits</p>";}
        if ($Combat != "" ) {$creaturestring .= "<p><b><a href=\"Combat.php\">Combat</a>:</b> $Combat</p>";}
        if ($Damage != "") {$creaturestring .= "<p><b>Damage:</b> $Damage</p>";}
        if ($ST != "" ) { $creaturestring .= "<p><b><a href=\"BasicsSavingThrows.php\">Saving Throws</a>:</b> $ST</p>";}
        if ($Advance != "") {$creaturestring .= "<p><b>Advancement:</b> $Advance</p>";}
        if ($LevelLag != "") {$creaturestring .= "<p><b>Level Lag:</b> $LevelLag</p>";}
        $creaturestring .= "</div>";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        
        print $creaturestring;
    }
}


function CreaturesTemplatesTable ($field, $term) 
{
    // first we retrieve a set of arrays using the GetListing function in ListScript.php
    
	$dataFromFile = GetListing("Data/CreaturesTemplatesList.data", $field, $term);
    
    // then we cycle through each array in the set and divide its elements into the 
    // specific stats for each entry
    $evenoddcounter = 1;
	
    foreach($dataFromFile as $individualListing) 
    {
        list($name, $level, $type) = $individualListing;
        
        // for each entry we create a formatted string using the stats
        
        $contentstring .= "<tr";
        if (1&$evenoddcounter) { $contentstring .= " class=\"odd-row\"";}
        $contentstring .= "><td class=\"center\"><a href=\"CreaturesTemplates.php?Name=".urlencode($name)."\">$name</a></td>";
        //$contentstring .= "<td>$level Level <a href=\"CreaturesTypes.php?Name=$type\">$type</a></td></tr>";
        
        //  finally we print each entry and repeat for as many arrays as there are in the set
        $evenoddcounter++;
    }
	$contentstring .= "</table>";        
	print $contentstring;
}

?>