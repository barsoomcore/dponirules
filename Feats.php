<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Feats: ".$querylist{1}."</title>";
}
else {
	echo "<title>Feats</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?>
<?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/FeatsScript.php"); ?>

<h1>FEATS</h1>

<?php MenuList("Feat", "Data/FeatsList.data", "Feats.php");

if ($querylist{0} == "Name") {
    FeatDetail($querylist{0}, $querylist{1});
}

elseif ($querylist{0} == "Type") {
	print "<h2>".$querylist{1}." Feats</h2>";
	
	if ($querylist{1} == "General") {
		print "<p>The following feats are available to all characters:</p>";
	}
	elseif ($querylist{1} == "Expert") {
		print "<p>The following feats are available to <a href=\"RolesExpert.php\">Expert</a> and <a href=\"RolesGeneralist.php\">Generalist</a> characters:";
	}
	else {
		print "<p>The following feats are available to <a href=\"Roles".$querylist{1}.".php\">".$querylist{1}."</a> characters:";
	}
	FeatList($querylist{0}, $querylist{1});
}

else  {
	
	echo "<h2>All Feats</h2>";
	echo "<p>Below are listed all feats in DINO-PIRATES OF NINJA ISLAND.";
	echo "<h3>General Feats</h3>";
	echo "<p>Anyone can take these feats, no matter what <a href=\"Roles.php\">role</a> they are.</p>";
	FeatList("Type", "General");
	echo "<h3 style=\"clear:left;padding-top:1em;\">Adept Feats</h3>";
	echo "<p>Only <a href=\"RolesAdept.php\">adepts</a> and some <a href=\"RolesGeneralist.php\">generalists</a> can take these feats.</p>";
	FeatList("Type", "Adept");
	echo "<h3 style=\"clear:left;padding-top:1em;\">Expert Feats</h3>";
	echo "<p>Only <a href=\"RolesExpert.php\">experts</a> and <a href=\"RolesGeneralist.php\">generalists</a> can take these feats.</p>";
	FeatList("Type", "Expert");
	echo "<h3 style=\"clear:left;padding-top:1em;\">Warrior Feats</h3>";
	echo "<p>Only <a href=\"RolesWarrior.php\">warriors</a> can take these feats.</p>";
	FeatList("Type", "Warrior");
	echo "<h2 style=\"clear:left;padding-top:2em;\">Feat Descriptions</h2>";
	echo "<p>Here is the format for feat descriptions.</p>";	
	echo "<p><b>Feat Name:</b> The name of the feat.</p>";	
	echo "<p><b>Prerequisite:</b> A minimum ability score, another feat or feats, a minimum base attack bonus, and/or the minimum ranks in a skill that a character must have to acquire this feat. This entry is absent if a feat has no prerequisite.</p>";
	echo "<p>A character can gain a feat at the same level at which he or she gains all the prerequisites.</p>";
	echo "<p>A character can't use a feat if the character has lost a prerequisite.</p>";	
	echo "<p><b>Benefit:</b> What the feat enables a character to do.</p>";

}

?>

</div>
</body>
</html>