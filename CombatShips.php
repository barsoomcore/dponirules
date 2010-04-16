<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Ship Combat</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>
	

<h2>The Basics</h2>
<p>The basics of sailing ship combat are simple: total the number of guns your ship can bring to bear, and determine the attack bonus from that (+1 for every two guns). Choose your target (Hull or Rigging). Make your attack roll and if you hit, determine the Damage bonus from the base damage for the weapon, modified by the amount the roll exceeded the target's defense. The target ship makes a Toughness save and damage is applied.</p>
<p>Reload and hit 'em again! Yarrr!</p>
<p>This section explains how to run ship-to-ship combat in DINO-PIRATES OF NINJA ISLAND. First we explain how to describe the characteristics of both a ship and its crew. Then we get into maneuvering and position. Then come the big guns: cannonfire and its effects. There's some discussion on sinking, ramming and assorted things that can happen during naval combat. And finally we have a set of examples -- the sorts of ships that are found amongst the Islands, the sorts of crew members, how to roll your own ships and some actual ships (pirates and others) that PCs might run into (or afoul of) in the course of their adventures.</p>

<h3>A Ship</h3>
<p>In DINO-PIRATES OF NINJA ISLAND, we like things simple. So a ship's combat description is kept to a minimum number of statistics:</p>
<dl>
	<dt>Size and Type</dt><dd></dd>
	<dt>Speed: </dt>
		<dd>Listed in feet/round.</dd>
	<dt>Defense: </dt>
		<dd>A ship has a Defense of 10 + its <a href="CharGenSize.php">Size Modifier</a> + the Commander Effect of its captain.</dd>
	<dt>Toughness: </dt>
		<dd>A ship has a Toughness of +5 for 1" thick wood, +2 per <a href="CharGenSize.php">size category</a> above Medium. Furthermore, ships of Huge size or larger have up to 4" thick hulls (+2 to Toughness), and warships have up to 8" thick hulls (+3 to Toughness).</dd>
	<dt>Maneuver:</dt> 
		<dd>The number of turns a vessel can make in one round (where a turn is 1/16 of a circle). A vessel with a maneuver of 1 requires 8 rounds to turn 180 degrees. This number is modified by the Crew Quality.</dd>
	<dt>Attack Fore/Aft/Broadside: </dt>
		<dd>Three listings of the attack bonus for the ship in each of the major positions. This bonus is equal to half the number of weapons at the position, plus any other modifiers. For each attack bonus, the base damage bonus will also be listed (based on the type of weapons at the position). See the Roll Out The Big Guns section for details on where these numbers come from.</dd>
	<dt>Crew:</dt> 
		<dd>The normal complement required to handle the ship in combat. Loss of crew can handicap a ship's performance.</dt>
</dl>

<p>Note that these statistics do not include how many folks are currently on the ship, nor what its carrying capacity is, or its long-distance travel speed. This stat block is for <a href="Combat.php">combat</a> only. If nobody's shooting at you, you don't need a lot of information at your fingertips.</p>

<h3>A Crew</h3>
<p>Likewise, a crew's description is simple. We use the Combat Unit template from the True20 Bestiary:</p>
<dl>
	<dt>Type and Size:</dt>
		<dd>According to the creature <a href="CreaturesTypes.php">type</a>.</dd>
	<dt>Speed:</dt>
		<dd>in feet/round
	<dt><a href="BasicsAbilities.php">Abilities</a>:</dt>
		<dd>All six.
	<dt><a href="Skills.php">Skills:</a></dt>
		<dd>Most crews will have some ranks in <a href="Skills.php?Name=Knowledge">Knowledge</a> (sea lore)
	<dt><a href="Feats.php">Feats:</a></dt>
		<dd>As per Bestiary
	<dt><a href="CreaturesTraits.php">Traits</a>:</dt>
		<dd>All crew have the following traits (at least): Combat Unit Traits, Commander Effect, <a href="CreaturesTraits.php?Name=Damage%20Reduction">Damage Reduction</a> (+2 v area affects for 20 or fewer individuals, +4 v area affects for 21+ individuals), Immunity to Targeted Effects, Vulnerable to Flanking. They also possess the Quality trait, detailed below.
	<dt><a href="Combat.php">Combat:</a></dt>
		<dd>Crews apply their Commander Effect bonus to Attack and Defense
	<dt>Saving Throws:</dt>
		<dd>As per the Bestiary
	<dt>Damage:</dt>
		<dd>A Crew takes damage as follows
		<ul>
			<li><b>Wounded:</b> A crew that takes a Wounded result suffers 10% casualties.
			<li><b>Disabled:</b> A crew that takes a Disabled result suffers 25% casualties.
			<li><b>Dying: </b>A crew that takes a Dying result suffers 50% casualties and adopts the qualities of a Combat Unit one <a href="CharGenSize.php">size</a> smaller.
			<li><b>Dead:</b> A crew that takes a Dead result suffers 90% casualties and disbands. Their ship has no effective crew at all.
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

<p>So there we have it. Ships and their crews. You're probably wondering at this point how it all fits together. First up, we'll talk about how to maneuver your ship around.</p>


<h2>Maneuvering</h2>
<p>Ships are subject to a couple of considerations when they try and maneuver: their own maneuverability, the quality of their crew, and the current condition of the wind.</p>

<h3>The Maneuverability Rating</h3>
<p>All ships have a Maneuverability rating that indicates how many turns they can make in a single round. A turn is 1/16 of a circle, so a ship with a Maneuverability of 8 can turn right around (180 degrees) in a single round, while moving their Speed. </p>

<h3>Crew Quality</h3>
<p>Ships apply their Crew Quality to their Maneuverability. A ship's Crew Quality can never reduce its Maneuverability below 1.</p>

<h3>The Wind</h3>
<p>The direction of the wind is of prime importance in naval combat. A ship moves faster before the wind, tends to drift in the direction of the wind and the crew must perform skillfully in order to change direction against the wind.</p>
<p>Whenever you're setting up a naval combat, be sure to indicate the direction of the wind on your map or battlemap or whatever you're using. </p>
<p>For all ships that rely on wind power, turning into the wind is harder than turning away from the wind. A ship's Maneuverability is reduced by 1 if it turns into the wind (thus, a ship with a Maneuverability of 1 cannot turn into the wind).</p>
<p>The wind also pushes all ships in its direction. You can generally just eyeball this, but keep in mind that all ships drift in the direction the wind blows them. Any ship that wishes to avoid this effect must make some movement against the wind. This is hard, however, as all ships also take a Speed penalty according to their orientation to the wind. This penalty applies to any round in which the ship posseess that orientation. Orientation penalties do not stack; use the worst one that applies each round. Penalties only apply to any remaining movement that round -- so that a ship that travels half its distance and then turns fully into the wind comes to a halt at that point; not that its previous movement is somehow magically retraced.</p>

<table width="400px">
	<th>Wind Orientation</th><th class="center">Speed Penalty</th>
	<tr class="odd-row"><td>Dead Ahead</td><td class="center">100%</td></tr>
	<tr><td>Off the Bow</td><td class="center">50%</td></tr>
	<tr class="odd-row"><td>Off the Beam</td><td class="center">25%</td></tr>
	<tr><td>Off the Stern</td><td class="center">No Penalty</td></tr>
	<tr class="odd-row"><td>Dead Astern</td><td class="center">10%</td></tr>
</table>

<p>A naval combat that goes on for a while might suffer changes to the wind direction and speed. Up to you, Narrator, but give characters a chance to predict the upcoming change with a Knowledge (Sea Lore) check.</p>

<h4>Note: Tacking versus Hauling</h4>
<p>A good crew can tack a ship rather than haul it -- the terms referring to the two basic ways of changing direction across the line of the wind. A ship can haul -- which means to put its stern to the wind and make its turn heading downwind, which is easy but uses up lots of sea room -- you want to make sure the wind won't push you onto the rocks as you make your turn! Safer and faster is to tack -- to bring its bow into the wind, losing all headway for just a second, and then catching the wind on the other side as the ship's momentum carries it around. Done correctly, tacking is sort of like executing a bootlegger turn with a thousand-ton wooden machine. Done incorrectly, it's like making a complete fool of yourself, destroying your ship and rendering yourself helpless.</p>

<h3>Making It Work</h3>
<p>Okay, so how do you keep track of all this? Well, you could use miniatures if you have them, but you might not. We've had great success with a sheet of paper with a bit of coastline and a wind arrow, and just drawing lines to estimate how far each ship can travel, just eyeballing it the whole way. If you need more exact measurements than that, use graph paper or hexes or rulers. Those punch-out cards that assemble into ships work great, too. Whatever you like. But we just sort of squint and hold up our thumb and go, "That looks about right."</p>

<h2>Roll Out The Big Guns: Combat</h2>
<p>As ships close with each other, the gun ports are opened and the cannon are run out. At a distance, you see the puff of smoke in silence; only later can you hear the crack of the explosion, just as the cannonballs go whistling overhead. Now it's a shooting match. This section outlines how gunfire works.</p>

<h3>Fire As She Bears</h3>
<p>Ships have four arcs of fire: Fore, Aft, and Broadside (right or left). Ship's stat blocks define Fore and Aft separately (many ships will have no guns in either of those arcs) and for most ships a single Broadside attack rating is given -- this rating applies to both sides. This isn't very complicated: the Fore guns can only fire at targets ahead of the ship, Aft guns can only fire at targets behind the ship, and the Broadsides can only fire out either side. So getting your ship positioned just right relative to your opponent's ship is a big part of any battle.</p>
<p>We're not going to provide you with pretty charts outlining the arcs of fire in great detail. Eyeball it. This isn't rocket science (it's ballistics!).</p>

<h3>Cannons</h3>
<p>While cannons operate with effects similar to those weapons we in the non-Dino-Pirate world are familiar with, the actual mechanics of their operation are somewhat different. The primary difference lies in the manufacturing of the cannons themselves. Amongst the islands of the Dino-Pirate archipelago, a few sorcerers have perfected the secret of causing metal to fuse and separate on command. This enables the creation of breech-loading weapons, which geatly reduces reload time compared with muzzle-loading weapons. Each cannon is enspelled by a sorcerer so that it opens at the rear upon command (there is typically a touch-rod for each cannon) and can be cleaned out and reloaded from there. When the opening is latched shut, the metal fuses back into a seamless whole and there is no risk of blowback or damage.</p> 
<p>There are four types of cannon, each differentiated by damage, size and number of crew required to operate one.</p>

<table class="last-row" width="500px">
	<th>Gun Type</th><th class="center">Damage</th><th class="center">Size Category</th><th class="center">Crew</th>
	<tr class="odd-row"><td>Swivel Gun</td><td class="center">+6 (slashing)</td><td class="center">Large</td><td class="center">1</td></tr>
	<tr><td>Small Cannon</td><td class="center">+8 (piercing)*</td><td class="center">Gargantuan</td><td class="center">2</td></tr>
	<tr class="odd-row"><td>Medium Cannon</td><td class="center">+12 (piercing)*</td><td class="center">Colossal</td><td class="center">3</td></tr>
	<tr><td>Large Cannon</td><td class="center">+16 (piercing)*</td><td class="center">Awesome</td><td class="center">4</td></tr>
</table>

<p style="font-size:80%">* plus half of excess Attack roll; see "Damage" below</a>

<p>All cannon have a range increment of 100 feet. Swivel guns have a range increment of 20 feet.</p>
<p>Obviously, the bigger the ship, the more guns it can hold. And more guns is good. A ship can only hold cannon of the same <a href="CharGenSize.php">size category</a> or smaller than the ship itself. Gargantuan ships can hold up to 16 guns, Colossal ships can hold up to 30 guns, and Awesome ships can hold up to 45 guns.</p>
<p>Don't get shot by one of those.</p>
<p>The actual number of guns present may vary from one ship to another. There will be a bunch of example ships that you can rely on. Generally speaking, a merchant ship will have no more than half the maximum number of guns -- any more than that and it becomes impossible to carry enough cargo to make a profit. Besides which, guns do you no good if you don't have enough crew to man them (and the ship besides, if you want to be able to maneuver during fighting).</p>

<h3>Reload!</h3>
<p>The time it takes to reload your guns depends on the quality of your crew:</p>
<table width="100%">
	<th>Crew Quality</th><th class="center">Reload Time (Breech-Load)</th><th class="center">Reload Time (Muzzle-Load)</th>
	<tr class="odd-row"><td>Rabble</td><td class="center">15 round</td><td class="center">30 rounds</td></tr>
	<tr><td>Poor</td><td class="center">12 rounds</td><td class="center">24 rounds</td></tr>
	<tr class="odd-row"><td>Average</td><td class="center">10 rounds</td><td class="center">20 rounds</td></tr>
	<tr><td>Superior</td><td class="center">8 rounds</td><td class="center">16 rounds</td></tr>
	<tr class="odd-row"><td>Expert</td><td class="center">6 rounds</td><td class="center">12 rounds</td></tr>
</table>

<p>If your crew is Disabled, they operate the guns as a crew one step worse than their actual Quality. If they are Dying, they operate the guns as a crew two steps worse. A Dead crew cannot operate the guns until they become Undead. If these penalties reduce a crew's Quality below Rabble, they cannot operate the guns.</p>
<p>There is also an <a href="Feats.php?Name=Expert%20Gunner">Expert Gunner</a> feat available to ship crews that reduces the reload time by two rounds.</p>

<h3>Ready! -- Initiative</h3>
<p>At the beginning of ship combat, just like in regular <a href="Combat.php">combat</a>, all the parties involved roll initiative. That includes all heroic characters. Everyone takes their turn just like regular <a href="Combat.php">combat</a>. Folks can attack, run and jump about to their heart's content. When it comes time for the turn of someone who's controlling a ship, they get to decide where their ship goes (subject to the rules in the previous section). Likewise when it comes time for the turn of someone who's controlling the guns; they get to decide to fire the guns.</p>
<p>Firing the guns will only have an effect if a target passes through the arc of the guns during the character's turn. A character can hold their action, of course, if they think a target will come into view later in the round.</p>
<p>When firing at a ship, the target is by default the hull of the ship. If desired, the guns may be aimed at the ship's rigging instead.</p>

<h3>Aim! -- The Attack Roll and the Defense Value</h3>
<p>Attack Roll: Only a single attack roll is made for any volley, be it forward, aft or broadside. A ship has a base attack bonus of +0. Ships do not suffer <a href="CharGenSize.php">size modifiers</a> to their attack rolls. Instead, ships gain a bonus on their attack roll of +1 for every two guns participating in the volley. Ships also add their crew's Quality rating to their attack roll, as well as the Commander bonus.</p>

<p class="notation">Attack Bonus = 1/2 guns firing + Crew Quality + Commander Bonus</p>

<p>In addition, heroic characters can perform a variety of Aid actions that improve the ship's attack roll such as clever maneuvering or inspiring speeches. See the Getting Involved section below.</p>

<p>Defense: A ship's Defense is calculating as normal for any object: 10 plus <a href="CharGenSize.php">Size Modifier</a>. In addition, ships add their crew's Quality rating as well as the Commander Bonus to their Defense.</p>

<p class="notation">Defense = 10 + <a href="CharGenSize.php">Size Modifier</a> + Crew Quality + Commander Bonus</p>

<h3>Fire! -- The Damage Bonus and the Toughness Save</h3>
<p>Damage: The damage for a ship's attack is determined by the success of the attack roll. Each cannon type has a Base Damage bonus. In addition, all cannon (not swivel guns) gain a Damage bonus equal to half the amount the attack roll exceeded the target's Defense.</p>
<p>The total Damage bonus is added to 10 to determine the Toughness save DC for the target, as per the normal rules for damaging objects.<p>
<p>Toughness: A ship has a Toughness of +5 for 1" thick wood, +2 per <a href="CharGenSize.php">size category</a> above Medium. Furthermore, ships of Huge size or larger have up to 4" thick hulls (+2 to Toughness), and warships have up to 8" thick hulls (+3 to Toughness).</p>

<table class="last-row" width="100%">
	<th>Ship Size</th><th class="center">Example</th><th class="center">Base Toughness</th><th class="center">4" hull</th><th class="center">8" hull</th>
	<tr class="odd-row"><td>Medium</td><td class="center">Raft</td><td class="center">+5</td><td class="center">--</td><td class="center">--</td></tr>
	<tr><td>Large</td><td class="center">Rowboat</td><td class="center">+7</td><td class="center">--</td><td class="center">--</td></tr>
	<tr class="odd-row"><td>Huge</td><td class="center">Fishing boat</td><td class="center">+9</td><td class="center">+11</td><td class="center">+12</td></tr>
	<tr><td>Gargantuan</td><td class="center">Frigate</td><td class="center">+11</td><td class="center">+13</td><td class="center">+14</td></tr>
	<tr class="odd-row"><td>Colossal</td><td class="center">Pinnace</td><td class="center">+13</td><td class="center">+15</td><td class="center">+16</td></tr>
	<tr><td>Awesome</td><td class="center">West Indiaman</td><td class="center">+15</td><td class="center">+17</td><td class="center">+18</td></tr>
</table>

<p>For example, a brigandine fires a broadside of 10 medium cannon (base damage +12) at a fleeing merchant frigate (+13 Toughness). Since 10 guns were used in the attack, the brigandine gets a +5 to hit. It rolls 8 over the frigate's Defense for a +4 to damage (8/2 = 4) for +16 total damage. The frigate's Toughness save is Difficulty is 26. The frigate rolls a 7 on its Toughness save for a total of 20. Since the frigate failed its Toughness save by more than 4, it is Wounded.</p>
<p>A ship's Toughness save assumes the ship is receiving the attacks broadside, where the ship is most heavily armoured. If the attack is received lengthwise, coming from the stern or the bow, the ship suffers a -2 penalty on its Toughness save.</p>

<h3>Ship Damage</h3> 
<p>Ships suffer damage conditions just like anyone else. The damage suffered by a ship depends on the target of the attack: the hull or the rigging. Appropriate damage consequences, including crew casualties, are listed below for each target. Note that the crew does NOT get a Toughness save separate from the ship. Those casualty percentages are automatically deducted from the crew. This represents men who are demoralized, injured or killed or otherwise taken out of <a href="Combat.php">combat</a>.</p>

<h4>Hull</h4>
<p><b>Hurt:</b> No effect. Cosmetic damage only.</p>
<p><b>Wounded:</b> Bulwark breaks off and a section of deck erupts in a shower of burning splinters. -1 to future Toughness saves, 10% crew casualties (that is, the crew takes a Wounded result). A random heroic character must succeed on a Difficulty 15 Reflex save or take +2 damage. </p>
<p><b>Disabled:</b> Minor leak develops (see below). -1 to future Toughness saves, -2 to Maneuverability, 25% crew casualties (that is, the crew takes a Disabled result), loss of 50% of guns on one side. Crew must make a Will save at DC 15 to keep fighting. Any heroic character below decks takes damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save).</p>
<p><b>Dying:</b> Major leak develops (see below). -1 to future Toughness saves, -4 to Maneuverability, 50% crew casualties (that is, the crew takes a Dying result), loss of all guns on one side. Crew must make a Will save at DC 20 to keep fighting. Any heroic character not in the rigging takes damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save).</p>
<p><b>Dead:</b> The ship sinks where it lies. It has no Maneuverability and no Speed and no guns able to fire. It suffers 90% crew casualties (that is, the crew takes a Dead result).</p>

<h4>Rigging</h4>
<p>The rigging of a ship is considered to have Damage Resistance 10/piercing. Standard cannon shot is unsuited for shooting away spars and lines, and holes in a sail are rarely fatal.</p>
<p><b>Hurt:</b> No effect. Cosmetic damage only</p>
<p><b>Wounded:</b> Rigging torn lose, yard breaks off. -1 to future Toughness saves. -2 to Maneuverability. One random heroic character in the rigging takes damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save). </p>
<p><b>Disabled:</b> Mast snaps.-4 to Maneuverability, 10% crew casualties. Crew must make a Will save at DC 15 to keep fighting. All heroic characters in the rigging take damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save).</p> 
<p><b>Dying:</b> All masts snap. -6 Maneuverability, 25% crew casualties. Crew must make a Will save at DC 15 to keep fighting. All heroic characters on the deck or in the rigging take damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save). </p>
<p><b>Dead:</b> The ship cannot move unless towed. It has no Maneuverability and no Speed. It suffers 50% crew casualties.</p>

<h3>Leaks</h3>
<p>As noted in the damage conditions above, ships can develop minor and major leaks.</p>
<p>Minor Leak:</em> The ship is taking on water and may suffer further damage as a result. Each round, the ship makes a Toughness save against a DC of 15. A Craft (carpentry) check at DC 10 can be used to aid this check. If the ship fails the Toughness save, it takes damage to its hull as listed above, but with no crew casualties, gun losses or damage to heroic characters. Will saves are still required for the crew. A Craft (carpentry) check at DC 20, taking 20 minutes, puts an end to a minor leak.</p>
<p>Major Leak:</em> The ship is taking on large amounts of water and may suffer further damage as a result. Each round, the ship makes a Toughness save against a DC of 25. A Craft (carpentry) check at DC 15 can be used to aid this check. If the ship fails the Toughness save, it takes damage to its hull as listed above, but with no crew casualties, gun losses or damage to heroic characters. Will saves are still required for the crew. A Craft (carpentry) check at DC 30, taking one hour, puts an end to a major leak.</p>

<h3>Ramming</h3> 
<p>Sometimes guns aren't enough. Sometimes you just need to send a really clear message and just run right into the other guy. Shiver his timbers, so to speak. "Ramming Speed!"</p>
<p>When two ships collide, they deal damage to each other according to their <a href="CharGenSize.php">size</a>. Each ship makes a Toughness save to determine how much damage was inflicted. The base damage for ramming is +4, adjusted by the size modifier listed below:</p>


<h4>Collision Damage Size Modifier</h4>

<table width="400px">
	<th>Smallest Object or<br />Creature Size</th><th class="center">Damage Modifier</th>
	<tr class="odd-row"><td>Awesome</td><td class="center">+20</td></tr>
	<tr><td>Colossal</td><td class="center">+16</td></tr></td></tr>
	<tr class="odd-row"><td>Gargantuan</td><td class="center">+12</td></tr></td></tr>
	<tr><td>Huge</td><td class="center">+8</td></tr></td></tr>
	<tr class="odd-row"><td>Large</td><td class="center">+4</td></tr></td></tr>
	<tr><td>Medium</td><td class="center">+0</td></tr></td></tr>
	<tr class="odd-row"><td>Small</td><td class="center">-4</td></tr></td></tr>
	<tr><td>Tiny</td><td class="center">-8</td></tr></td></tr>
	<tr class="odd-row"><td>Smaller than Tiny</td><td class="center">-12</td></tr>
</table>

<p>Ships are designed to handle fore-to-aft stresses better than beam-to-beam, and so if one ship can "T-Bone" another, by driving its prow into its target's side, the target suffers an additional +3 to damage, while the rammer enjoys a -3 reduction in its damage. Ships colliding head-on both take the additional +3.
Ramming damage is always Hull damage.</p>

<h2>Getting Involved: PCs and Ship Combat</h2>
<p>Very often your PCs will be involved in ship combat but will not be in direct command of any of the ships. Adventurers are rarely the best naval captains around, and many PCs will not have such feats as Pirate Savvy that allow them to have a powerful effect on the outcome of the <a href="Combat.php">combat</a>.</p>
<p>Nevertheless, you'll want your PCs to take a leading role in ship combat as in any exciting moment in your DINO-PIRATES OF NINJA ISLAND</em> campaign. There are a number of ways PCs can get involved.</p>

<h3>Speechifying</h3>
<p>Charismatic heroes with ranks in Diplomacy or Bluff can attempt to convince a crew that they are truly better than they are. A successful check on either skill, against a DC of 25, improves a crew's Quality rating by one rank for five rounds. This is not enough to affect a crew's Reload times, unless the heroic character achieves three successes in a row on this check. It is impossible to improve a crew's Quality above Expert.</p>

<h3>Laying The Guns</h3>
<p>A PC with some engineering background or experience with gunnery can help a gun crew aim and fire to maximum effect. With a successful Knowledge (science) check at DC 15, the ship's crew gains a +2 on its attack roll if made the immediately following action.</p>

<h3>Hand-to-Hand</h3>
<p>Of course PC crews can carry the fight to the enemy -- in DINO-PIRATES OF NINJA ISLAND, there's just about always a rope to swing on.</p>

<h3>Temporary Hand-Off</h3>
<p>It may prove to be the most fun to simply let a player run one of the captains involved in the fight. These rules are simple enough that a detailed knowledge of seamanship isn't required to be effective in <a href="Combat.php">combat</a>. Indeed, folks with detailed knowledge of seamanship might find themselves at a disadvantage.</p>

<h3>The Captain is Down</h3>
<p>You don't want to do this too many times, but if a stray splinter or something lays out the captain of the PC's ship, SOMEBODY will have to step up.</p>
</body>
</html>
