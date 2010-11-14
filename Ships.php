<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Ships</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>
	

<h1>SHIPS</h1>
<p>This section explains how to run ship-to-ship combat in DINO-PIRATES OF NINJA ISLAND. This page describes the characteristics of both a ship and its crew. <a href="ShipsManeuvering.php">Maneuvering</a> explains how ships move. <a href="ShipsCombat.php">Combat</a> outlines the rules around shooting at each other. <a href="ShipsDamage.php">Damage</a> goes over sinking, ramming and assorted things that can happen during naval combat. And finally we have <a href="ShipsExamples.php">a set of examples</a> &mdash; the sorts of ships that are found amongst the Islands (pirate and others) that PCs might run into (or afoul of) in the course of their adventures.</p>

<h2>A Ship</h2>
<p>In DINO-PIRATES OF NINJA ISLAND, we like things simple. So a ship's combat description is kept to a minimum number of statistics:</p>
<dl>
	<dt>Speed: </dt>
		<dd>Listed in feet/round.</dd>
	<dt><a href="Combat.php#BaseDefense">Defense</a>: </dt>
		<dd>A ship has a <a href="Combat.php#BaseDefense">Defense</a> of 5 + the <a href="CreaturesTemplates.php?Name=Combat%20Unit">Commander Effect</a> of its captain.</dd>
	<dt>Toughness: </dt>
		<dd>A ship has a base Toughness bonus of +10. Furthermore, some ships have thick hulls (+2 to Toughness), and warships have extra thick hulls (+3 to Toughness).</dd>
	<dt>Maneuver:</dt> 
		<dd>The number of turns a vessel can make in one round (where a turn is 1/16 of a circle). A vessel with a maneuver of 1 requires 8 rounds to turn 180 degrees. This number is modified by the Crew Quality (see below).</dd>
	<dt>Attack Fore/Aft/Broadside: </dt>
		<dd>Three listings of the attack bonus for the ship in each of the major positions. This bonus is equal to half the number of weapons at the position, plus any other modifiers. 
		<p class="notation">Attack Bonus = 1/2 guns firing + Crew Quality + Commander Bonus</p>
		
		For each attack bonus, the base damage bonus will also be listed (based on the type of weapons at the position). See the <a href="ShipsCombat.php">Combat</a> section for details on where these numbers come from.</dd>
	<dt>Crew:</dt> 
		<dd><a name="CrewQuality">The normal complement</a> required to handle the ship in combat. Loss of crew can handicap a ship's performance.</dt>
</dl>

<p>Note that these statistics do not include how many folks are currently on the ship, nor what its carrying capacity is, or its long-distance travel speed. This stat block is for combat only. If nobody's shooting at you, you don't need a lot of information at your fingertips.</p>

<h2>A Crew</h2>
<p>Likewise, a crew's description is simple. We use the <a href="CreaturesTemplates.php?Name=Combat%20Unit">Combat Unit template</a>:</p>
<dl>
	<dt><a href="CreaturesTypes.php">Type</a>:</dt>
		<dd>According to the creature <a href="CreaturesTypes.php">type</a>.</dd>
	<dt>Speed:</dt>
		<dd>in feet/round
	<dt><a href="BasicsAbilities.php">Abilities</a>:</dt>
		<dd>All six.
	<dt><a href="Skills.php">Skills:</a></dt>
		<dd>Most crews will have some ranks in <a href="Skills.php?Name=Knowledge">Knowledge</a> (sea lore)
	<dt><a href="Feats.php">Feats:</a></dt>
		<dd>As per the <a href="CreaturesTemplates.php?Name=Combat%20Unit">Combat Unit template</a>
	<dt><a href="CreaturesTraits.php">Traits</a>:</dt>
		<dd>All crew have the following traits (as listed in the <a href="CreaturesTemplates.php?Name=Combat%20Unit">Combat Unit template</a> description): Commander Effect, <a href="CreaturesTraits.php?Name=Damage%20Reduction">Damage Reduction</a> (+2 v area affects for 20 or fewer individuals, +4 v area affects for 21+ individuals), Immunity to Targeted Effects, Vulnerable to Flanking. They also possess the Quality trait, detailed below.
	<dt><a href="Combat.php">Combat:</a></dt>
		<dd>Crews apply their Commander Effect bonus to Attack and Defense
	<dt>Saving Throws:</dt>
		<dd>As per the <a href="CreaturesTemplates.php?Name=Combat%20Unit">Combat Unit template</a>
	<dt>Damage:</dt>
		<dd>A Crew takes damage as follows
		<ul>
			<li><b><a href="PlayingConditions.php?Name=Wounded">Wounded</a>:</b> A crew that takes a <a href="PlayingConditions.php?Name=Wounded">wounded</a> result suffers 10% casualties.
			<li><b><a href="PlayingConditions.php?Name=Disabled">Disabled</a>:</b> A crew that takes a <a href="PlayingConditions.php?Name=Disabled">disabled</a> result suffers 25% casualties and is treated as a Quality one level less than originally.
			<li><b><a href="PlayingConditions.php?Name=Dying">Dying</a>: </b>A crew that takes a <a href="PlayingConditions.php?Name=Dying">dying</a> result suffers 50% casualties and has a -2 penalty on all actions. Such a crew is also treated as if it had a Quality two levels less than originally.
			<li><b><a href="PlayingConditions.php?Name=Dead">Dead</a>:</b> A crew that takes a <a href="PlayingConditions.php?Name=Dead">dead</a> result suffers 90% casualties and disbands. Their ship has no effective crew at all.
		</ul></dd>
	<dt>Quality:</dt>
		<dd>Every crew has a Quality trait that affects many aspects of naval combat. The ratings and the appropriate descriptions of a crew with such a rating are:
		<ul>
			<li><b>Rabble:</b> -2</li>
			<li><b>Poor:</b> -1</li>
			<li><b>Average:</b> +0</li>
			<li><b>Superior:</b> +1</li>
			<li><b>Expert:</b> +2</li>
		</ul></dd>
</dl>

<p>So there we have it. Ships and their crews. </p>

<h2>Cannons</h2>
<p>While cannons operate with effects similar to those weapons we in the non-DINO-PIRATE world are familiar with, the actual mechanics of their operation are somewhat different. The primary difference lies in the manufacturing of the cannons themselves. Amongst the islands of the DINO-PIRATE archipelago, a few sorcerers have perfected the secret of causing metal to fuse and separate on command. This enables the creation of breech-loading weapons, which geatly reduces reload time compared with muzzle-loading weapons. Each cannon is enspelled by a sorcerer so that it opens at the rear upon command (there is typically a touch-rod for each cannon) and can be cleaned out and reloaded from there. When the opening is latched shut, the metal fuses back into a seamless whole and there is no risk of blowback or damage.</p> 
<p>There are four types of cannon, each differentiated by damage, size and number of crew required to operate one.</p>

<table class="last-row" width="500px">
	<th>Gun Type</th><th class="center">Damage</th><th class="center">Crew</th>
	<tr class="odd-row"><td>Swivel Gun</td><td class="center">+6 (slashing)</td><td class="center">1</td></tr>
	<tr><td>Small Cannon</td><td class="center">+8 (piercing)*</td><td class="center">2</td></tr>
	<tr class="odd-row"><td>Medium Cannon</td><td class="center">+12 (piercing)*</td><td class="center">3</td></tr>
	<tr><td>Large Cannon</td><td class="center">+16 (piercing)*</td><td class="center">4</td></tr>
</table>

<p style="font-size:80%">* plus half of excess Attack roll; see "Damage" below</a>

<p>All cannon have a range increment of 100 feet. Swivel guns have a range increment of 20 feet.</p>
<p>Obviously, the bigger the ship, the more guns it can hold. And more guns is good. A ship can only carry cannon whose damage bonus is no more than the ship's Toughness bonus. Pretty big ships can hold up to 16 guns, full-on ships of the line can hold up to 30 guns, and the largest of warships can hold up to 45 guns.</p>
<p>Don't get shot by one of those.</p>
<p>The actual number of guns present may vary from one ship to another. There will be a bunch of example ships that you can rely on. Generally speaking, a merchant ship will have no more than half the maximum number of guns -- any more than that and it becomes impossible to carry enough cargo to make a profit. Besides which, guns do you no good if you don't have enough crew to man them (and the ship besides, if you want to be able to maneuver during fighting).</p>

<h2>Getting Involved: PCs and Ship Combat</h2>
<p>Very often your PCs will be involved in ship combat but will not be in direct command of any of the ships. Adventurers are rarely the best naval captains around, and many PCs will not have such feats as <a href="Feats.php?Name=Pirate%20Savvy">Pirate Savvy</a> that allow them to have a powerful effect on the outcome of the <a href="Combat.php">combat</a>.</p>
<p>Nevertheless, you'll want your PCs to take a leading role in ship combat as in any exciting moment in your DINO-PIRATES OF NINJA ISLAND</em> campaign. There are a number of ways PCs can get involved.</p>

<h3>Speechifying</h3>
<p>Charismatic heroes with ranks in <a href="Skills.php?Name=Diplomacy">Diplomacy</a>, <a href="Skills.php?Name=Bluff">Bluff</a> or <a href="Skills.php?Name=Perform">Perform</a> (acting, oratory or music) can attempt to convince a crew that they are truly better than they are. A successful check on any such skill, against a Difficulty of 25, improves a crew's Quality rating by one rank for five rounds. This is not enough to affect a crew's Reload times, unless the heroic character achieves three successes in a row on this check. It is impossible to improve a crew's Quality above Expert.</p>

<h3>Laying The Guns</h3>
<p>A PC with some engineering background or experience with gunnery can help a gun crew aim and fire to maximum effect. With a successful <a href="Skills.php?Name=Knowledge">Knowledge</a> (science) check at Difficulty 15, the ship's crew gains a +2 on its attack roll if made the immediately following action.</p>

<h3>Hand-to-Hand</h3>
<p>Of course PC crews can carry the fight to the enemy -- in DINO-PIRATES OF NINJA ISLAND, there's just about always a rope to swing on.</p>

<h3>Temporary Hand-Off</h3>
<p>It may prove to be the most fun to simply let a player run one of the captains involved in the fight. These rules are simple enough that a detailed knowledge of seamanship isn't required to be effective in <a href="ShipsCombat.php">combat</a>. Indeed, folks with detailed knowledge of seamanship might find themselves at a disadvantage.</p>

<h3>The Captain is Down</h3>
<p>You don't want to do this too many times, but if a stray splinter or something lays out the captain of the PC's ship, SOMEBODY will have to step up.</p>
</body>
</html>
