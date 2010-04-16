<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Skills: ".$querylist{1}."</title>";
}
else {
	echo "<title>Skills</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?>
<?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/SkillsScript.php"); ?>

<h1>SKILLS</h1>

<?php

if ($querylist{1} != "") { 
	MenuList("Skill", "Data/SkillsList.data", "Skills.php");
    SkillDetail($querylist{0}, $querylist{1});
}
else {
	echo "<p>The skills that describe heroes in DINO-PIRATES OF NINJA ISLAND are listed below:</p>";
	
	SkillList("Name", "All");
	
	echo "<h2 style=\"clear:left;margin-top:2em;\">Skill Descriptions</h2>";
	
	echo "<p>Skills are presented in alphabetical order, in the following format. Entries that do not apply to a particular skill are omitted in that skill's description.</p>";
	
	echo "<h3>Skill Description Format</h3>";
	
	echo "<p><b>Skill Name (Key Ability)</b></p>";
	echo "<p><b>Trained Only; Armor Penalty</b></p>";
	
	echo "<p>The skill name line and the line beneath it include the following information:</p>";
	
	echo "<p><b>Key Ability:</b> The abbreviation for the ability whose modifier applies to the skill check.</p>";
	
	echo "<p><b>Trained Only:</b> If \"Trained Only\" appears on the line beneath the skill name, a character must have at least 1 rank in the skill to use it. If \"Trained Only\" is omitted, the skill can be used untrained. If any particular notes apply to trained or untrained use, they are covered in the Special section (see below).</p>";
	
	echo "<p><b>Armor Penalty:</b> If \"Armor Penalty\" appears on the line beneath the skill name, apply the armor penalty for the armor the character is wearing to checks involving this skill.</p>";
	
	echo "<p><b>Check:</b> What a character can do with a successful skill check, and the check's DC.</p>";
	
	echo "<p><b>Challenges:</b> Any specific challenges associated with this skill and their effects.</p>";
	
	echo "<p><b>Try Again?:</b> Any conditions that apply to repeated attempts to use the skill for a particular purpose. If this entry is omitted, the skill check can be tried again without any inherent penalty other than taking additional time.</p>";
	
	echo "<p><b>Time:</b> How much time it takes to make a check with this skill.</p>";
	
	echo "<p><b>Special:</b> Any particular notes that apply, such as whether a character can take 10 or take 20 when using the skill.</p>";

}


?>

</div>
</body>
</html>