<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Powers: ".$querylist{1}."</title>";
}
else {
	echo "<title>Powers</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/PowersScript.php"); ?> 

<h1>POWERS</h1>

<?php MenuList("Power", "Data/PowersList.data", "Powers.php"); 

if ($querylist{1} != "") { 
    PowerList($querylist{0}, $querylist{1});
}
else {
	echo "<p>Powers are strange supernatural forces that can be controlled and commanded by sorcerers, shamans, witch doctors, mystics and the like. All forms of magic are represented as powers, listed below:</p>";
	PowersTable ("Name", "All");
	echo "<h2 style=\"clear:left;padding-top:2em\">Title</h2>";
	echo "<p>Often helpful. Hopefully self-explanatory.</p>";
	echo "<h2><a name=\"Fatiguing\">Descriptors</a></h2>";
	echo "<p>Most powers will have one or more descriptors after the title. These explain how the powers are used in play.</p>";
	echo "<h3><a name=\"Maintenance\">Fatiguing</a></h3>";
	echo "<p>If a power has the \"Fatiguing\" descriptor after the title, that means you have to make a Resilience roll every time you use that power. If you fail the Resilience roll but are not <a href=\"PlayingConditions.php?Name=Unconscious\">unconscious</a>, the power still takes effect normally; you just have to mark off another level of <a href=\"PlayingFatigue.php\">fatigue</a>. If you do fall <a href=\"PlayingConditions.php?Name=Unconscious\">unconscious</a>, the power does not manifest.</p>";
	echo "<h3><a name=\"Concentration\">Maintenance</a></h3>";
	echo "<p>Some powers can be maintained for some time, assuming you remain able to keep them running. Such powers don't require much on your part; but you must be able to spend a free action each round in order to maintain them. If you fall <a href=\"PlayingConditions.php?Name=Unconscious\">unconscious</a> these powers shut down immediately and their effects end. If you are distracted while maintaining these powers you must make an immediate <a href=\"Skills.php?Name=Concentration\">Concentration</a> check in order to keep maintaining them. The Difficulty of the <a href=\"Skills.php?Name=Concentration\">Concentration</a> check is 10 + 2 for every power you are currently maintaining, plus any damage modifiers you may be subjected to (as per the <a href=\"Skills.php?Name=Concentration\">Concentration</a> skill). If you fail the <a href=\"Skills.php?Name=Concentration\">Concentration</a> check, all maintained powers fail and their effects end immediately. If no maximum duration is listed, the power can be maintained indefinitely, as long as you remain able to take a free action each round.</p>";
	echo "<h3><a name=\"MentalContact\">Concentration</a></h3>";
	echo "<p>Some powers are not so easy to maintain. A power with the \"Concentration\" descriptor requires more effort on your part to maintain. You must spend a standard action each round to maintain a Concentration power. Distractions require the same sort of <a href=\"Skills.php?Name=Concentration\">Concentration</a> check as a Maintenance power.</p>";
	echo "<p>You can choose to attempt to maintain a Concentration power as a move action rather than a standard action. In order to do so you must make a <a href=\"Skills.php?Name=Concentration\">Concentration</a> check at a Difficulty of 10 + the power's rank. If you fail at this check, the power lapses.</p>";
	echo "<h3>Mental Contact</h3>";
	echo "<p>Some powers work on the mind of the target and as such, require the wielder to first establish contact with the target's mind. This is done with either the <a href=\"Powers.php?Name=Mind%20Touch\">Mind Touch</a> power (for sentient creatures) or the <a href=\"Powers.php?Name=Beast%20Link\">Beast Link</a> power (for animals), so all Mental Contact powers require the use of either the <a href=\"Powers.php?Name=Mind%20Touch\">Mind Touch</a> power or the <a href=\"Powers.php?Name=Beast%20Link\">Beast Link</a> power first.</p>";
	echo "<p>The normal use is to first use <a href=\"Powers.php?Name=Mind%20Touch\">Mind Touch</a> to contact the target's mind, then, if that attempt is successful, to use the following power to achieve the desired affect. If the <a href=\"Powers.php?Name=Mind%20Touch\">Mind Touch</a> attempt is unsuccessful, the following power cannot be used.</p>";
	echo "<h3><a name=\"Prerequisites\">Prerequisites</a></h3>";
	echo "<p>Some powers require you to be able to use other powers, sometimes at particular ranks. You must possess both the prerequisite power and the number of power ranks in order to use this power. You include any ranks with a power you have gained from <a href=\"Feats.php\">feats</a>.</p>";
	echo "<h2>Descriptive Text</h2>";
	echo "<p>A power's descriptive text explains how the power works or what it does.</p>";
	echo "<h2>Try Again</h2>";
	echo "<p>Ordinarily a power can be used again for as long as your Fatigue holds up. Some powers have special rules regarding multiple uses; those are listed here.</p>";
	echo "<h2>Action</h2>";
	echo "<p>By default, using a power is a standard action. Some powers, however, require more or less time so check this section for each power.</p>";
}

?>


</div>
</body>
</html>