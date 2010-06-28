<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Actions: ".$querylist{1}."</title>";
}
else {
	echo "<title>Actions</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/CombatActionsScript.php"); ?>
<?php

MenuList("Action", "Data/ActionsList.data", "CombatActions.php");

if ($querylist{1} != "") { 

	if ($querylist{0} == "Type" || $querylist{0} == "Time")	{
		print "<h1>".strtoupper($querylist{1})." ACTIONS</h1>";
	}
	else {print "<h1>ACTIONS</h1>";}
    ActionDetail($querylist{0}, $querylist{1});
}
else {
	echo "<h1>ACTIONS</h1>";
	echo "<h2>Action Types</h2><p>The five types of actions are standard, move, full, free, and reaction. In a normal round, you can perform a standard action and a move action (or two move actions; you can always take a move action in place of a standard action), or you can perform a full action. You can also perform as many free and reaction actions as your Narrator allows.</p><p>In some situations (such as in the surprise round), you may be limited to taking only a standard or move action, not both.</p>";
	echo "<h4>Fast Task</h4><p>Remember that the <a href=\"BasicsChecks.php#Challenges\">Fast Task challenge</a> allows you to make some actions (skill checks and power checks, but not attack rolls or maneuver rolls) in a shorter time than usual.</p>";
	echo "<h3>Standard Action</h3><p>A standard action allows you to do something. You can make an attack, use a <a href=\"Skills.php\">skill</a>, <a href=\"Feats.php\">feat</a>, or <a href=\"Powers.php\">power</a> (unless it requires a full action to perform; see below), or perform other similar actions. During a combat round, you can take a standard action and a move action. You can take the move action before or after, but not during, the standard action. Below is a complete list of standard actions:</p><p>";
	ActionTitleList("Time", "Standard"); 
	echo "</p><h3>Move Action</h3><p>A move action allows you to move your speed or perform an action taking a similar amount of time, such as climb one-quarter of your speed, draw or stow a weapon or other object, stand up, pick up an object, or perform some equivalent action.</p><p>You can take a move action in place of a standard action. For example, rather than moving your speed and attacking you can stand up and move your speed (two move actions), draw a weapon and climb one-quarter your speed (two move actions), or pick up an object and stow it in a backpack (two move actions).</p><p>If you move no actual distance in a round (usually because you have traded a move action for an equivalent action like standing up), you can take a 5-foot \"step\" before, during, or after the action. For example, you can stand up (a move action), take a 5-foot step, and attack (a standard action). Below is a complete list of move actions:</p><p>";
	ActionTitleList("Time", "Move");
	echo "</p><h3>Full Action</h3><p>A full action requires all your attention during a round. The only movement you can take during a full action is a 5-foot step before, during, or after the action. Some full-round actions do not allow you to take a 5-foot step. You can also perform free actions (see below) as the Narrator allows.</p><p>";
	ActionTitleList("Time", "Full");
	echo "</p><h3>Free Action</h3><p>Free actions consume very little time and, over the span of the round, their impact is so minor they are considered to take no real time at all. You can perform one or more free actions while taking another action. However, the Narrator puts reasonable limits on what you can do for free. A good rule of thumb is your Dexterity or Intelligence +1 in free actions per round, with a minimum of one. For instance, dropping an object, dropping to a prone position, speaking a sentence or two, and ceasing to concentrate on maintaining a power are all free actions. Below is a complete list of free actions:</p><p>";
	ActionTitleList("Time", "Free");
	echo "<h3>Reaction</h3><p>A reaction is something that happens in response to something else, like a reflex. Like free actions, reactions take so little time they're considered free. The difference between the two is a free action is a conscious choice made on the character's turn to act. A reaction is a reflex or automatic response that can occur even when it's not your turn to act. Characters can react even while unable to take normal actions, such as while <a href=\"PlayingConditions.php?Name=Stunned\">stunned</a>. A <a href=\"BasicsSavingThrows.php\">saving throw</a> is an example of a reaction, something you instinctively do to avoid danger. Some <a href=\"Powers.php\">powers</a> and other traits are usable as reactions.</p>";
	echo "<h2>Miscellaneous Actions</h2><p>For actions not covered in any of this material, the Narrator determines how long the action takes.</p>";
	echo "<h3>Skills</h3><p>Most uses of <a href=\"Skills.php\">skills</a> in a combat situation are standard actions, but some might be move or full actions. The description of a skill provides the time required to use it.</p>";
	echo "<h3>Feats</h3><p>Certain <a href=\"Feats.php\">feats</a> allow you to take special actions in combat. Other <a href=\"Feats.php\">feats</a> are not actions in themselves, but grant a bonus when attempting something you can already do. Some <a href=\"Feats.php\">feats</a> aren't meant for use within the framework of combat. The individual feat descriptions tell you what you need to know about them.</p>";
	
}

?>


</div>
</body>
</html>