<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Basics</title><?php include ("Scripts/HeaderScript.php"); ?>

<?php include ("Scripts/Menu.php"); ?>
<?php include ("Scripts/SkillsScript.php"); ?>

<h1>THE RULES</h1>
<p>Here are the basic rules to guide you in playing DINO-PIRATES OF NINJA ISLAND</p>

<h2>Core System</h2>
<p>DINO-PIRATES OF NINJA ISLAND uses a core mechanic to resolve actions. Whenever your character attempts any action with a chance of failure, do the following: </p>
<ol>
	<li>Roll a twenty-sided die (abbreviated d20).</li>
	<li>Add any relevant modifiers (for things like <a href="BasicsAbilities.php">abilities</a>, <a href="Skills.php">skills</a>, and circumstances). </li>
	<li>Compare the total to a number called the action's Difficulty (set by the Narrator based on the circumstances). </li>
</ol>
<p>If the result equals or exceeds the Difficulty, the action succeeds. If the 
result is lower than the Difficulty, the action fails. This simple system 
is used for nearly everything in DPoNI, with variations based on the 
modifiers added to a roll, the Difficulty, and the effects of success and 
failure.</p>
<p>There are three primary types of rolls that all use this mechanic: checks, <a href="BasicsCombat.php">attack rolls</a> and <a href="BasicsSavingThrows.php">saving throws</a>.</p>

<h2>Checks</h2>
<p>You make a check any time you want to use a <a href="Skills.php">skill</a>, a <a href="Powers.php">power</a>, or an <a href="BasicsAbilities.php">ability</a>. Checks work exactly as described in the core system. The Difficulties for checks are either set by the Narrator or by an opposing roll from another character. You can usually try again for any check, although you may suffer consequences from failing a check (such as <a href="Skills.php?Name=Climb">Climb</a> or <a href="Skills.php?Name=Stealth">Stealth</a>).</p>
<p>Checks can benefit from <a href="BasicsStunts.php">Stunts</a>.</p>

<h3>Checks Without Rolls</h3>
<p> You can choose to take an automatic result instead of rolling the die, and then apply your modifiers for the check to that result as though you had rolled.</p>

<h5>Taking 5</h5>
<p>If you would succeed at the task by rolling a 5 or more, you are assumed to automatically succeed. Your check result is calculated as 5 + your total modifiers for the check. You may take 5 under any circumstances and the check takes the normal amount of time.</p>

<h5>Taking 10</h5>
<p>If you are not under pressure or distracted you can choose to take 10 as your automatic result. Your check result is calculated as 10 + your total modifiers for the check. Remember, you may only take 10 when you are not under pressure or distracted, but the check takes the normal amount of time.</p>

<h5>Taking 20</h5>
<p>If you are willing to take longer to complete a task, and there are no consequences for failure, you may choose to take 20 as your automatic result. Your check result is calculated as 20 + your total modifiers for the check. Taking 20 takes 20 times as long as a normal check, and you automatically suffer any consequences for failure. Don't do this when disarming a trap, kids.</p>

<a name="Challenges"><h3>Challenges</h3></a>
<p>When you get good at stuff, you can start getting fancy. A Challenge is a kind of modifier applied to the Difficulty of a check that allows you to do things a little more impressively than just the basics. This increase to the Difficulty adjusts any penalties for failure, so if you set off the bomb by blowing your Disable Device check by 10 or more, a Difficulty 15 check with a +5 challenge applied to will be explosive with a result of 10 or less. Be cautious!</p>
<p>Taking a challenge on a check normally applies a +5 modifier to the Difficulty of the check.</p>
<p>Some standard challenges that apply to all checks are listed below:</p>

<h5>Fast Task</h5>
<p>You can reduce the time needed to complete the check. A full-round action becomes a standard action, a standard action becomes a move action and a move action becomes a free action. Checks longer than a full-round action have their time reduced by 25% per challenge penalty taken. You cannot reduce a check to a free action if it normally requires a standard action or longer.</p>

<h5>Simultaneous Tasks</h5>
<p>You can perform two tasks at the same time by accepting a +10 modifier to one of the checks. The two tasks, if successful, take as long as the longest of the two takes.</p>

<h5>Done With Style</h5>
<p>You gain a +2 bonus on your next interaction skill check or <a href="BasicsReputation.php">Reputation check</a> if you succeed on any skill check or attack with the Difficulty increased by 5.</p>
<p>Interaction Skills, by the way, are:</p>
	
<?php SkillList("Interaction", "Yes"); ?>

<a name="Aid"><h3 style="clear:both">Aid</h3></a>
<p>Heroes, being the cooperative sort, are always helping each other out. When two characters want to cooperate on a task that requires a check, one character aids the other. The aiding character makes the appropriate check against a Difficulty of 10 (they can't take 10 on this check). If the aid check is successful, the recipient of the aid attempt receives a +2 bonus on their check (which is made against whatever the appropriate Difficulty is for the task). A very successful Aid check, one that exceeds 20, grants a +3 bonus, and one that exceeds 30 grants a +4 bonus, and so on. Note that multiple folks may be able to chip in on some tasks (be reasonable), and each successful Aid check supplies another bonus.</p>

</div>
</body>
</html>