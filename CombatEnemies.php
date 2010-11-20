<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Modifiers: ".$querylist{1}."</title>";
}
else {
	echo "<title>Enemies</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?>
<?php include ("Scripts/Menu.php"); ?>

<h1>ENEMIES</h1>

<p>Your heroes will most often fight one of two types of bad guys: <a href="../../villains">Villains</a>, and Minions.</p>

<h2>Villains</h2>

<p>Villains are the big bad guys, with lots of special abilities, who can spend Conviction just like heroes, escape certain death and laugh maniacally.</p>

<p>You can create Villains just by using the <a href="CharGen.php">Character creation process</a> just like heroes do. Villains can have all the same feats and powers as heroes, and a villain of the same level ought to be a pretty fair fight for a single hero.</p>

<p>But that can be a lot of work, honestly. Figuring out every feat, every number -- you don't always have time for that. Especially for villains who are just going to get killed anyway. If you just want somebody with some interesting powers, use our handy <a href="../../villains">Villain Generator</a> and away you go.</p>

<h3>Creatures</h3>

<p>You can also use one of the <a href="Creatures.php">Creatures</a> detailed on this site as a villain, if that suits. Again, a creature of a given level ought to be a pretty fair fight against a hero of the same level.</p>

<p>For the most part, translating creatures from other True20 or d20 sources is not going to be very hard, so you should find it easy to include all sorts of nasty beasts in your adventures if you like.</p>

<h2>Minions</h2>

<p>Minions are minor characters subject to special rules in combat, and generally easier to defeat than normal characters. Most battles will involve large numbers of minions. The following rules apply to minions:</p>

<ul>
	<li>Minions do not have <a href="BasicsConviction.php">Conviction</a></li>
	<li>Minions have no <a href="BasicsReputation.php">Reputation</a> and only count half their level when determining the Difficulty of Reputation checks made against them.</li>
	<li>Minions cannot score <a href="Combat.php#Damage">critical hits</a> against non-minions.</li>
	<li>Non-minions can take 10 on <a href="Combat.php#AttackBonsu">attack rolls</a> against minions (attackers normally cannot take 10 on <a href="Combat.php#AttackBonus">attack rolls</a>).</li>
	<li>For every five points by which a character's attack roll exceeds a minion's <a href="Combat.php#BaseDefense">Parry or Dodge</a>, the attack strikes another minion within five feet of the character, dealing damage to all.</li>
	<li>If a minion fails a Toughness saving throw, the minion is knocked <a href="PlayingConditions.php?Name=Unconscious">unconscious</a> (non-lethal damage) or <a href="PlayingConditions.php?Name=Dying">dying</a> (lethal damage). Attackers can choose a lesser effect, if desired.</li>
	<li>Non-minions can always elect to deal lethal damage against minions, even when using an attack that would ordinarily deal non-lethal damage.</li>
	<li>The <a href="CombatDamage.php#ImpossibleToughnessSaves">Impossible Toughness Save</a> rule does not apply to minions.</li>
	<li>If a minion is within ten feet of his master, and is not engaged in melee combat, that minion can automatically interpose himself between his master and an incoming good guy as a reaction.</li>
	<li>Minions gain a +2 to their <a href="Combat.php#ManeuverBonus">maneuver Difficulty</a> whenever resisting <a href="CombatActions.php?Name=Overrun">Overrun</a> attempts.</li>
</ul>

<h3>Simplified Minion Creation</h3>

<p>Because minions fulfill a relatively simple role in games (cannon fodder and props for heroes to do cool stuff with), they can be defined quite simply. Use the following chart to quickly select appropriate combat statistics for minions of a given level (usually the same level as your heroes). Note that minions only go up to 12th level. If you're 13th level and you're still a minion, reconsider your career.</p>

<table class="last-row" width="100%">
	<th width="5%" class="center">Level</th>
	<th width="10%" class="center">Defense</th>
	<th width="15%" class="center">Toughness</th>
	<th width="10%" class="center">Attack</th>
	<th width="10%" class="center">Damage</th>
	<th width="15%" class="center">Good Save</th>
	<th width="15%" class="center">Poor Save</th>
	<th class="center">Special Ability Difficulty</th></tr>
	<tr class="odd-row">
		<td class="center"><b>1</b></td>
		<td class="center">12</td>
		<td class="center">+1</td>
		<td class="center">+2</td>
		<td class="center">+2</td>
		<td class="center">+3</td>
		<td class="center">+1</td>
		<td class="center">12</td>
	</tr>
	<tr>
		<td class="center"><b>2</b></td>
		<td class="center">13</td>
		<td class="center">+1</td>
		<td class="center">+3</td>
		<td class="center">+2</td>
		<td class="center">+4</td>
		<td class="center">+1</td>
		<td class="center">13</td>
	</tr>
	<tr class="odd-row">
		<td class="center"><b>3</b></td>
		<td class="center">14</td>
		<td class="center">+2</td>
		<td class="center">+4</td>
		<td class="center">+3</td>
		<td class="center">+4</td>
		<td class="center">+2</td>
		<td class="center">14</td>
	</tr>
	</tr>
		<td class="center"><b>4</b></td>
		<td class="center">15</td>
		<td class="center">+2</td>
		<td class="center">+5</td>
		<td class="center">+3</td>
		<td class="center">+5</td>
		<td class="center">+2</td>
		<td class="center">15</td>
	</tr>
	<tr class="odd-row"><td class="center"><b>5</b></td>
		<td class="center">16</td>
		<td class="center">+3</td>
		<td class="center">+6</td>
		<td class="center">+4</td>
		<td class="center">+5</td>
		<td class="center">+2</td>
		<td class="center">15</td>
	</tr>
	</tr>
		<td class="center"><b>6</b></td>
		<td class="center">17</td>
		<td class="center">+3</td>
		<td class="center">+7</td>
		<td class="center">+4</td>
		<td class="center">+6</td>
		<td class="center">+3</td>
		<td class="center">16</td>
	</tr>
	<tr class="odd-row"><td class="center"><b>7</b></td>
		<td class="center">18</td>
		<td class="center">+4</td>
		<td class="center">+8</td>
		<td class="center">+5</td>
		<td class="center">+6</td>
		<td class="center">+3</td>
		<td class="center">17</td>
	</tr>
	</tr>
		<td class="center"><b>8</b></td>
		<td class="center">19</td>
		<td class="center">+4</td>
		<td class="center">+9</td>
		<td class="center">+5</td>
		<td class="center">+7</td>
		<td class="center">+3</td>
		<td class="center">18</td>
	</tr>
	<tr class="odd-row"><td class="center"><b>9</b></td>
		<td class="center">20</td>
		<td class="center">+5</td>
		<td class="center">+10</td>
		<td class="center">+6</td>
		<td class="center">+7</td>
		<td class="center">+4</td>
		<td class="center">18</td>
	</tr>
	</tr>
		<td class="center"><b>10</b></td>
		<td class="center">21</td>
		<td class="center">+5</td>
		<td class="center">+11</td>
		<td class="center">+6</td>
		<td class="center">+8</td>
		<td class="center">+4</td>
		<td class="center">19</td>
	</tr>
	<tr class="odd-row"><td class="center"><b>11</b></td>
		<td class="center">22</td>
		<td class="center">+6</td>
		<td class="center">+12</td>
		<td class="center">+7</td>
		<td class="center">+8</td>
		<td class="center">+4</td>
		<td class="center">20</td>
	</tr>
	</tr>
		<td class="center"><b>12</b></td>
		<td class="center">23</td>
		<td class="center">+6</td>
		<td class="center">+13</td>
		<td class="center">+7</td>
		<td class="center">+9</td>
		<td class="center">+5</td>
		<td class="center">21</td>
	</tr>
</table>

<p>"Defense" is used to resist all attacks, including <a href="Combat.php#ManeuverBonus">special maneuvers</a>. Flat-footed minions take a -2 penalty on their Defense. Minions have a Notice check equal to their level.

<h4>Adjusting the Numbers</h4>

<p>You can adjust the numbers to reflect special cases. However, in no case should you adjust any number upwards or downwards more than 4. Ways to trade numbers that maintain the appropriate encounter difficulty include:</p>

<dl>
	<dt>Attack or Save Difficulty vs Damage:</dt>
	<dd>You can trade damage inflicted by an attack with Attack bonus or save difficulty on a one-to-one basis. A change exceeding 4 points changes the level of the minions.</dd>
	<dt>Dodge vs Toughness:</dt>
	<dd>You can trade-off Defense for Toughness and the other way round on a one-to-one basis. A change exceeding 4 points changes the level of the minions.</dd>
	<dt>Attack vs Defense:</dt>
	<dd>You can trade-off  Attack bonus for Defense and the other way round on a one-to-one basis. A change exceeding 3 points changes the level of the minions.</dd>
</dl>
<p>Remember that choices in special abilities could affect these numbers dramatically. Flying or invisible minions, for example, will be considerably more powerful, especially against heroes who cannot match their abilities.</p>
<p>Minions. They're always getting in the way.</p>

</div>
</body>
</html>