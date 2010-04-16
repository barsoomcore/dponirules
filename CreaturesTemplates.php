<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Templates: ".$querylist{1}."</title>";
}
else {
	echo "<title>Creatures: Templates</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?>
<?php include ("Scripts/CreaturesTemplatesScript.php"); ?>


<h1>CREATURE TEMPLATES</h1>

<?php 

if ($querylist{1} != "") { 
    CreaturesTemplatesList($querylist{0}, $querylist{1});
}
else {
	echo "<p>A template is a set of modifications for creating a certain type of creature. In most cases, the template is added to an existing creature to change its traits. For example, if someone dies and becomes a ghost, you can apply the <a href=\"CreaturesTemplates.php?Name=Ghost\">ghost template</a>. Templates are an easy way to modify and customize your creatures, or create a variety of distinct creatures sharing a set of common traits.</p>";
	
	echo "<table class=\"last-row\" style=\"float:left; margin-right: 0.5em;\" width=\"300px\">";
	echo "<th class=\"center\">Templates</th>";
	CreaturesTemplatesTable ("Name", "All");
	
	echo "<h2>Reading A Template</h2>";
	echo "<p>A template's description provides a set of instructions for altering an existing creature, known as the base creature. The changes that a template might cause to a creature are discussed below. Generally, if a template does not cause a change to a certain statistic, that entry is missing from the template description. For clarity, the entry for a statistic or attribute that is not changed is sometimes given as \"Same as the base creature\".</p>";
	echo "<h3>Type</h3>";
	echo "<p>Templates often change a creature's <a href=\"CreaturesTypes.php\">type</a>. The creature gains all the standard <a href=\"CreaturesTraits.php\">traits</a> of the new <a href=\"CreaturesTypes.php\">type</a>, but retains features of its old <a href=\"CreaturesTypes.php\">type</a> unless those are specifically modified.</p>";
	echo "<h3>Size</h3>";
	echo "<p>Templates may change the creature's <a href=\"CharGenSize.php\">size</a>. If a template changes a creature's <a href=\"CharGenSize.php\">size</a>, the creature acquires all the features of its new <a href=\"CharGenSize.php\">size</a>.</p>";
	echo "<h3>Speed</h3>";
	echo "<p>If a template modifies a creature's speed, the template states how that happens. More commonly, a template add a new mode of movement.</p>";
	echo "<h3>Abilities</h3>";
	echo "<p>If a template changes one or more <a href=\"BasicsAbilities.php\">abilities</a>, the changes are noted here.</p>";
	echo "<h3>Skills</h3>";
	echo "<p>Most templates do not change <a href=\"Skills.php\">skills</a> directly but may offer the creature a bonus to certain <a href=\"Skills.php\">skill</a> checks. In some cases, the template applies penalties, like a penalty to <a href=\"Skills.php?Name=Stealth\">Stealth</a> checks.";
	echo "<h3>Feats</h3>";
	echo "<p>Some templates grant one or more bonus <a href=\"Feats.php\">feats</a>.";
	echo "<h3>Traits</h3>";
	echo "<p>A template may add or remove <a href=\"CreaturesTraits.php\">traits</a>. The template description of any <a href=\"CreaturesTraits.php\">traits</a> a template provides, including how to determine saving throw Difficulties, if applicable. Even if the traits entry is missing from a template description, the creature still gains any <a href=\"CreaturesTraits.php\">traits</a> associated with its new <a href=\"CreaturesTypes.php\">type</a>.";
	echo "<h3>Combat</h3>";
	echo "<p>Templates can change the creature's <a href=\"Combat.php#CombatBonus\">combat bonus</a> and add or remove attack forms. <a href=\"Combat.php#Damage\">Damage</a> amy change with Strength, attack type or qualities. Some templates increase or decrease <a href=\"Combat.php#BaseDefense\">defense</a>, either because Dexterity changes, or it gains a bonus to its <a href=\"Combat.php#Dodge\">Dodge</a> or <a href=\"Combat.php#Parry\">Parry</a>.</p>";
	echo "<h3>Saving Throws</h3>";
	echo "<p>Templates rarely change <a href=\"BasicsSavingThrows.php\">saves</a> directly. Usually such a change is a side effect of altering the creature's abilities. In some cases, however, a template grants a bonus to particular saves, like saves against a specific energy type such as fire or cold damage. A creature's Toughness save may be altered if it gains some form of natural protection such as natural armor. Certain bonus feats (such as <a href=\"Feats.php?Name=Tough\">Tough</a>, <a href=\"Feats.php?Name=Great%20Fortitude\">Great Fortitude</a>, <a href=\"Feats.php?Name=Lightning%20Reflexes\">Lightning Reflexes</a> and <a href=\"Feats.php?Name=Iron%20Will\">Iron Will</a>) can also raise saving throw.</p>";
	echo "<h3>Advancement</h3>";
	echo "<p>this line gives special rules regarding this creature's advancement. Some templates allow a character to advance in a heroic role, and some only allow it to advance as a creature.";
	echo "<h3>Level Lag</h3>";
	echo "<p>Level lag assumes that gaining a template effectively increases a character's level by the listed amount. A hero who has acquired a template that increases their level does not advance in level along with other characters until their level lags behind that of the other characters by the listed level lag for that template.";
	
	}
?>



</div>
</body>
</head>