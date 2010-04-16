<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Modifiers: ".$querylist{1}."</title>";
}
else {
	echo "<title>Combat Modifiers</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?>
<?php include ("Scripts/Menu.php"); ?>
<?php include ("Scripts/CombatModifiersScript.php") ?>

<h1>COMBAT MODIFIERS</h1>

<?php

MenuList("Modifier", "Data/ModifiersList.data", "CombatModifiers.php");

if ($querylist{1} != "") { 
    ModifierDetail($querylist{0}, $querylist{1});
}
else {
	echo "<p>Combat is fluid and complex, and many factors can influence one combatant's advantage over another. Below are listed the most common modifiers to combat rolls.</p>";
	echo "<div style=\"float:left; margin-right:1em; margin-top: 1em; \">";
	echo "<table class=\"last-row\" width=\"150px\" style=\"float:left;\">";
	echo "<th class=\"center\">Combat Modifiers</th>";
	ModifierTitleList("Name", "All");
	echo "</table></div>";
	ModifierDetail("Name", "All");
}

?>