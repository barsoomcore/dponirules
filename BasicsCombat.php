<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Combat Basics</title><?php include ("Scripts/HeaderScript.php"); ?>

<?php include ("Scripts/Menu.php"); ?>  

<h1>COMBAT BASICS</h1>
<p>For a detailed explanation of combat, see <a href="Combat.php">Combat</a>.</p>

<h2>Combat Bonus</h2>
<p>The basic number to know about for combat is, thoughtfully enough, the Combat Bonus. This number is basis for determining your ability to hit things, and your ability to avoid getting hit. Your Combat bonus depends on your <a href="Roles.php">role</a> and level.</p>

<h2>Attack Rolls</h2>
<p>An attack roll is just what it sounds like. A successful attack roll is one that meets or exceeds your target's <a href="Combat.php#BaseDefense">Defense</a> (or <a href="Combat.php#Dodge">Dodge</a> or <a href="Combat.php#Parry">Parry</a>, if your target can use those). Your normal <a href="Combat.php#AttackBonus"> Attack Bonus</a> is equal to your Combat bonus plus your Dexterity.</p>
<p>You can't ever take 5, 10 or 20 on an attack roll. You can't apply <a href="Basics.php#Challenges">Challenges</a> to an attack roll. Aiding someone else's attack roll is a little different than aiding a check. Attack rolls are subject to <a href="BasicsStunts.php">Stunts</a>.</p>

<h3>Automatic Results</h3>
<p>The biggest difference between attack rolls and checks is that with attack rolls, a natural 20 on the die ALWAYS means a success, while a natural 1 ALWAYS means failure. These results only apply to natural rolls of the die, and are independent of the target's <a href="Combat.php#BaseDefense">Defense</a> or the attacker's bonuses.</p>

<h3>Special Maneuvers</h3>
<p>Sometimes you want to do something fancy, like knock a marine flat on his back, or drive right through the crowd of gibbering minions to hurl the mad scientist into his doomed creation. Good for you. To do these sorts of things you use a <a href="Combat.php#ManeuverBonus">Maneuver Bonus</a>, which is normally equal to your Combat Bonus + your Strength.</p>

<h2>Defense</h2>
<p>Defense represents how hard it is for someone to hit you. A hero's <a href="Combat.php#BaseDefense">Base Defense</a> is normally equal to 10 + their combat bonus + any applicable modifiers for size or feats or abilities.</p>
<p>Your <a href="Combat.php#BaseDefense">Base Defense</a> is what an opponent needs to beat on an attack roll if you are not able to respond to their attack.</p>

<h3>Dodge and Parry</h3>
<p>Characters that are aware of their attacker get to add to their Defense, giving them two values known as <a href="Combat.php#Parry">Parry</a> and <a href="Combat.php#Dodge">Dodge</a>. You can choose to use either your <a href="Combat.php#Parry">Parry</a> or your <a href="Combat.php#Dodge">Dodge</a> against melee attacks, and your <a href="Combat.php#Dodge">Dodge</a> against missile attacks.</p>
<p>A character's <a href="Combat.php#Dodge">Dodge</a> is equal to their Combat Bonus plus their Dexterity. Their <a href="Combat.php#Parry">Parry</a> is equal to their Combat Bonus plus their Strength. In addition, feats and other abilities may affect a character's <a href="Combat.php#Dodge">Dodge</a> or <a href="Combat.php#Parry">Parry</a>.</p>

<h2>Initiative Bonus</h2>
<p>When combat begins (or in fact anytime one character wants to try and do something before another), the order in which actions are taken is determined by their <a href="CombatInitiative.php">Initiative</a> result. An initiative check is a normal check modified by the character's Dexterity (and any applicable feats or abilities they may have). The character with the highest initiative result goes first.</p>


</div>
</body>
</html>