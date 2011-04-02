<?php

// this script contains data and functions that create the page headers and menus for each page

ini_set("display_errors", "0");
include ("Scripts/ListScript.php");

// we store all the page names and urls that will appear at the root of the menu
// in an array. The array contains two arrays, one called "url" that contains
// all of the pages referred to and one called "name" that gives the text to be
// displayed for each item

$mainlist = array ( 
    "url" => array ("Home.php", "Basics.php", "CharGen.php", "Roles.php", "Skills.php", "Feats.php", "Powers.php", "Playing.php", "Combat.php", "Equipment.php", "Ships.php", "Creatures.php", "License.php", "dponiwiki/page/running-dino-pirates", "dponiwiki"),  
    "name" => array ("DPoNI Home", "The Rules", "Character Creation", "Roles", "Skills", "Feats", "Powers", "Playing the Game", "Combat", "Equipment", "Ships", "Creatures", "License", "The Tools", "The Setting")
);

// now we define a whole slew of similar arrays, one for each submenu that can
// be displayed these arrays are constructed the same way as the main one, above
// a couple of rules:
// 1. the first item in each list MUST exist in $mainlist
// 2. no item in any sub-list may exist in any other sublist

// if we want to use a page and have it display a certain submenu, but don't
// want the page itself to appear in the menu, we can set it to have a "name"
// value of "hidden". This lets us have pages like "Skills.php" which is used to
// display sets of Skills based on a script, without needing a Skills page in
// the menu.

$sublist = array (
    "basiclist" => array (
        "url" => array ("Basics.php", "BasicsAbilities.php", "BasicsChecks.php", "BasicsCombat.php", "BasicsSavingThrows.php", "BasicsStunts.php", "BasicsConviction.php", "BasicsTime.php"),
        "name" => array ("The Rules", "Abilities", "Checks", "Attack Rolls", "Saving Throws", "Stunts", "Conviction", "Time")
    ),
    
    "chargenlist" => array (
        "url" => array ("CharGen.php", "CharGenHistory.php", "CharGenBackgrounds.php", "CharGenSamples.php", "CharGenChen.php", "CharGenKana.php", "CharGenMbungo.php", "CharGenMingWa.php", "CharGenShugo.php", "CharGenVictoria.php"),
        "name" => array ("Character Creation", "History", "Backgrounds", "Sample Characters", "hidden", "hidden", "hidden", "hidden", "hidden", "hidden")
    ),
    
    "rolelist" => array ( 
        "url" => array ("Roles.php", "RolesAdept.php", "RolesExpert.php", "RolesWarrior.php", "RolesGeneralist.php", "RolesAdvancement.php", "RolesOrdinaries.php"),
        "name" => array ("Roles", "Adept", "Expert", "Warrior", "Generalist", "Advancement", "Ordinaries")
    ),
    
    "playinglist" => array (
    	"url" => array ("Playing.php", "PlayingPhysical.php", "PlayingSocial.php", "PlayingConditions.php", "PlayingHazards.php"),
    	"name" => array ("Playing The Game", "Physical Actions", "Social Actions", "Conditions",  "Hazards")
    ),
    
    "combatlist" => array (
		"url" => array ("Combat.php", "CombatInitiative.php", "CombatActions.php", "CombatModifiers.php", "CombatDamage.php", "CombatEnemies.php", "CombatChases.php"),
		"name" => array ("Combat", "Initiative", "Actions", "Modifiers", "Damage", "Enemies", "Chases")
	),
    
    "equipmentlist" => array (
        "url" => array ("Equipment.php", "EquipmentWealth.php", "EquipmentGeneral.php", "EquipmentWeapons.php", "EquipmentArmor.php", "EquipmentPoisons.php", "EquipmentNinjaGear.php", "EquipmentSupernatural.php"),
        "name" => array ("Equipment", "Wealth", "General Gear", "Weapons", "Armor", "Poisons", "Ninja Gear", "Supernatural Items")
    ),
    
    "featlist" => array (
        "url" => array ("Feats.php", "Feats.php?Type=General", "Feats.php?Type=Adept", "Feats.php?Type=Expert", "Feats.php?Type=Warrior", ),
        "name" => array ("Feats", "General Feats", "Adept Feats", "Expert Feats", "Warrior Feats" )
    ),
    
    "skilllist" => array (
        "url" => array ("Skills.php", "SkillsControlShape.php"),
        "name" => array ("Skills", "hidden")
    ),
    
    "creaturelist" => array (
		"url" => array ("Creatures.php", "CreaturesTypes.php", "CreaturesSubTypes.php", "CreaturesTraits.php", "CreaturesTemplates.php"),
		"name" => array ("Creatures", "Types", "Sub-Types", "Traits", "Templates")
    ),
    
    "powerlist" => array (
        "url" => array ("Powers.php", "PowersUsing.php", "PowersPhilosophies.php"),
        "name" => array ("Powers", "Using Powers", "Philosophies")
    ),
    
    "shiplist" => array (
    	"url" => array ("Ships.php", "ShipsManeuvering.php", "ShipsCombat.php", "ShipsDamage.php", "ShipsExamples.php"),
    	"name" => array ("Ships", "Maneuvering", "Combat", "Damage", "Examples")
    ),
    
);



   
// this big ol' function is what actually prints out the menu. It gets called
// from findFile, detailed below, but basically it takes a file url and a
// sublist (if any exists for that file) and creates the menu required for that
// file

function menuPrinter ($file, $list)
{
    global $mainlist;
    
    // cycle through all the items in the $mainlist array
    
    for ($i = 0; $i < count($mainlist[url]); $i++)
    {
        // we use a 'name' value of "hidden" so that certain menu items cause
        // the menu to appear but don't show up themselves -- see the
        // "CreatureList" array for an example $mainlist currently doesn't use
        // any but you never know...
        
        if ($mainlist[name][$i] != "hidden")
        {
            // $list is empty if no submenu needs to be displayed (see function
            // findFile), so we only create a submenu if $list has a value
                
            if ($list != "")
            {
                // knowing that we have to create a submenu, we look for
                // the first item in the sublist ($list)
                
                if ($mainlist[url][$i] == $list[url][0])
                {
                    // we print the first item in $list, using printSelected if
                    // it matches $file and printBoldUnselected if not
                    
                    if ($file == $list[url][0]) 
                        { printSelected ($list[url][0], $list[name][0]); }
                        else 
                        { printBoldUnselected ($list[url][0], $list[name][0]); }
                
                    // now we begin to cycle through the items in $list
                    
                    for ($j = 1; $j < count($list[url]); $j++)
                    {
                        // again with the "hidden" trick
                        
                        if ($list[name][$j] != "hidden") 
                        {
                            if ($file == $list[url][$j]) 
                                { printSubSelected ($list[url][$j], $list[name][$j]); } // if $file matches
                            else 
                                { printSubUnselected ($list[url][$j], $list[name][$j]); } // if not
                        }
                    }
                }
                                    
                //otherwise just print everything as a list item
                
                elseif ($file != $mainlist["url"][$i])
                    { printUnselected ($mainlist[url][$i], $mainlist[name][$i]); }
            }
            
            // if $list is empty then we just print the contents of $mainlist
            
            else
            {
                // when we get to the filename that matches our current file,
                // mark it as "selected"
                
                if ($file == $mainlist[url][$i])
                    { printSelected ($mainlist[url][$i], $mainlist[name][$i]); }
            
                // otherwise just print it as a list item
                
                elseif ($file != $mainlist[url][$i])
                    { printUnselected ($mainlist[url][$i], $mainlist[name][$i]); }
            }
        }
    }
}

// these print functions are called from menuPrinter, above. Nothing very
// exciting here

function printSelected ($url, $name)
{ print "<li class=\"selected\"><a href=\"$url\"><b>$name</b></a>"; }

function printUnselected ($url, $name)
{ print "<li><a href=\"$url\">$name</a>"; }

function printBoldUnselected ($url, $name)
{ print "<li><a href=\"$url\"><b>$name</b></a>"; }

function printSubSelected ($url, $name)
{
    print "<li class=\"selected\">";
    print "<a class=\"sub\" href=\"$url\">$name</a>";
}

function printSubUnselected ($url, $name)
{
    print "<li>";
    print "<a class=\"sub\" href=\"$url\">$name</a>";
}

// the following function is what determines if the requested file exists in 
// one of the sublists, and passes the appropriate information to menuPrinter

function findFile ($file) 
{
    global $sublist;
    $foundlist = "";
    
    foreach ($sublist as $eachlist) 
    {
        if (in_array($file, $eachlist[url])) 
        {
            $foundlist = $eachlist;
        }
    }
    
    menuPrinter ($file, $foundlist);
}

// now we put it all together and create the page

// get the filename of the current file from $_SERVER

$FileName = explode ("/", $_SERVER['REQUEST_URI']);
$FileNameEnd = array_pop ($FileName);

// strip any parameters that may have been passed in the URL

$FileNameBreak = explode ("?", $FileNameEnd);
$FileNamePop = $FileNameBreak[0];

// start printing the page

Print "<div id=\"banner\">";
print "<a href=\"http://www.scratchfactory.com\"><img src=\"/dponiwiki/media/banners/SFTransparentLogo.png\" style=\"padding-top:5px;float:right;\"></a>";
print "<a href=\"Home.php\">"; 
print "<img style=\"border: none; padding-left: 25px;\" src=\"/dponiwiki/media/banners/Banner.png\" alt=\"Banner\"></a>";
print "</div>";
print "<div id=\"nav\">";
print "<ul>";

// go looking for the file requested and print the appropriate menu

findFile($FileNamePop);

// print the rest of the page

print "</ul>";
print "</div>";
print "<div id=\"content\">";

if ($FileNamePop != "License.php") {
print "<p id=\"legal\">This material is Open Game Content, and is licensed for public use under the terms of the <a href=\"License.php\">Open Game License v1.0a.</a><br />Hosted by <a href=\"http://www.scratchfactory.com\">Scratch Factory</a></p>";
}

?>