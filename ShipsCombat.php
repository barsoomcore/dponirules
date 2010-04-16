<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Ships: Combat</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>

<h1>SHIP COMBAT</h1>
<p>The basics of sailing ship combat are simple: total the number of guns your ship can bring to bear, and determine the attack bonus from that (+1 for every two guns). Choose your target (Hull or Rigging). Make your attack roll and if you hit, determine the Damage bonus from the base damage for the weapon, modified by the amount the roll exceeded the target's defense. The target ship makes a Toughness save and damage is applied.</p>
<p>Reload and hit 'em again! Yarrr!</p>

<h2>Fire As She Bears</h2>
<p>Ships have four arcs of fire: Fore, Aft, and Broadside (right or left). Ship's stat blocks define Fore and Aft separately (many ships will have no guns in either of those arcs) and for most ships a single Broadside attack rating is given -- this rating applies to both sides. This isn't very complicated: the Fore guns can only fire at targets ahead of the ship, Aft guns can only fire at targets behind the ship, and the Broadsides can only fire out either side. So getting your ship positioned just right relative to your opponent's ship is a big part of any battle.</p>
<p>We're not going to provide you with pretty charts outlining the arcs of fire in great detail. Eyeball it. This isn't rocket science (it's ballistics!).</p>

<h2>Reload!</h2>
<p>The time it takes to reload your guns depends on the <a href="Ships.php#CrewQuality">quality of your crew</a>:</p>
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

<h2>Ready! -- Initiative</h2>
<p>At the beginning of ship combat, just like in regular <a href="Combat.php">combat</a>, all the parties involved roll initiative. That includes all heroic characters. Everyone takes their turn just like regular <a href="Combat.php">combat</a>. Folks can attack, run and jump about to their heart's content. When it comes time for the turn of someone who's controlling a ship, they get to decide where their ship goes (subject to the <a href="ShipsManeuvering.php">Maneuvering</a> rules). Likewise when it comes time for the turn of someone who's controlling the guns; they get to decide to fire the guns.</p>
<p>Firing the guns will only have an effect if a target passes through the arc of the guns during the character's turn. A character can hold their action, of course, if they think a target will come into view later in the round.</p>
<p>When firing at a ship, the target is by default the hull of the ship. If desired, the guns may be aimed at the ship's rigging instead.</p>

<h2>Aim! -- The Attack Roll and the Defense Value</h2>
<p><b>Attack Roll:</b> Only a single attack roll is made for any volley, be it forward, aft or broadside. A ship has a base attack bonus of +0. Ships do not suffer <a href="CharGenSize.php">size modifiers</a> to their attack rolls. Instead, ships gain a bonus on their attack roll of +1 for every two guns participating in the volley. Ships also add their crew's Quality rating to their attack roll, as well as the Commander bonus.</p>

<p class="notation">Attack Bonus = 1/2 guns firing + Crew Quality + Commander Bonus</p>

<p><b>Defense:</b> A ship's Defense is calculating as normal for any object: 10 plus <a href="CharGenSize.php">Size Modifier</a>. In addition, ships add their crew's Quality rating as well as the Commander Bonus to their Defense. Ships cannot use either <a href="Combat.php#Dodge">Dodge</a> or <a href="Combat.php#Parry">Parry</a>.</p>

<p class="notation">Defense = 10 + <a href="CharGenSize.php">Size Modifier</a> + Crew Quality + Commander Bonus</p>

<h2>Fire! -- The Damage Bonus and the Toughness Save</h2>
<p><b>Damage:</b> The damage for a ship's attack is determined by the success of the attack roll. Each cannon type has a Base Damage bonus. In addition, all cannon (not swivel guns) gain a Damage bonus equal to half the amount the attack roll exceeded the target's Defense.</p>
<p>The total Damage bonus is added to 10 to determine the Toughness save DC for the target, as per the normal rules for damaging objects.<p>
<p><b>Toughness:</b> A ship has a Toughness of +5 for 1" thick wood, +2 per <a href="CharGenSize.php">size category</a> above Medium. Furthermore, ships of Huge size or larger have up to 4" thick hulls (+2 to Toughness), and warships have up to 8" thick hulls (+3 to Toughness).</p>

<table class="last-row" width="100%">
	<th>Ship Size</th><th class="center">Example</th><th class="center">Base Toughness</th><th class="center">4" hull</th><th class="center">8" hull</th>
	<tr class="odd-row"><td>Medium</td><td class="center">Raft</td><td class="center">+5</td><td class="center">--</td><td class="center">--</td></tr>
	<tr><td>Large</td><td class="center">Rowboat</td><td class="center">+7</td><td class="center">--</td><td class="center">--</td></tr>
	<tr class="odd-row"><td>Huge</td><td class="center">Fishing boat</td><td class="center">+9</td><td class="center">+11</td><td class="center">+12</td></tr>
	<tr><td>Gargantuan</td><td class="center">Frigate</td><td class="center">+11</td><td class="center">+13</td><td class="center">+14</td></tr>
	<tr class="odd-row"><td>Colossal</td><td class="center">Pinnace</td><td class="center">+13</td><td class="center">+15</td><td class="center">+16</td></tr>
	<tr><td>Awesome</td><td class="center">Imperial Ship of the Line</td><td class="center">+15</td><td class="center">+17</td><td class="center">+18</td></tr>
</table>

<p>For example, a brigandine fires a broadside of 10 medium cannon (base damage +12) at a fleeing merchant frigate (+13 Toughness). Since 10 guns were used in the attack, the brigandine gets a +5 to hit. It rolls 8 over the frigate's Defense for a +4 to damage (8/2 = 4) for +16 total damage. The frigate's Toughness save is Difficulty is 26. The frigate rolls a 7 on its Toughness save for a total of 20. Since the frigate failed its Toughness save by more than 4, it is Wounded.</p>
<p>A ship's Toughness save assumes the ship is receiving the attacks broadside, where the ship is most heavily armoured. If the attack is received lengthwise, coming from the stern or the bow, the ship suffers a -2 penalty on its Toughness save.</p>