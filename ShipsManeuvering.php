<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Ships: Maneuvering</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>

<h1>MANEUVERING</h1>
<p>Ships are subject to a couple of considerations when they try and maneuver: their own maneuverability, the quality of their crew, and the current condition of the wind.</p>

<h2>The Maneuverability Rating</h2>
<p>All ships have a Base Maneuverability rating that indicates how many turns an Average crew can make in a single round. A turn is 1/16 of a circle, so a ship with a Maneuverability of 8 can turn right around (180 degrees) in a single round, while moving their Speed. The turns can be distributed anywhere throughout the ship's movement, as desired.</p>

<h3>Crew Quality</h3>
<p>Ships apply their Crew Quality to their Maneuverability. A ship's Crew Quality can never reduce its Maneuverability below 1.</p>

<p class="notation">Maneuverability (minimum 1) = Base Maneuverability + Crew Quality</p>

<h2>The Wind</h2>
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

<p>A naval combat that goes on for a while might suffer changes to the wind direction and speed. Up to you, Narrator, but give characters a chance to predict the upcoming change with a <a href="Skills.php?Name=Knowledge">Knowledge</a> (Sea Lore) check.</p>

<h3>Note: Tacking versus Hauling</h3>
<p>A good crew can tack a ship rather than haul it &mdash; the terms referring to the two basic ways of changing direction across the line of the wind. A ship can haul &mdash; which means to put its stern to the wind and make its turn heading downwind, which is easy but uses up lots of sea room &mdash; you want to make sure the wind won't push you onto the rocks as you make your turn! It's faster  to tack &mdash; bring your bow into the wind, lose all headway for just a second, and then catch the wind on the other side as the ship's momentum carries it around. Done correctly, tacking is sort of like executing a bootlegger turn with a thousand-ton wooden machine. Done incorrectly, it's like making a complete fool of yourself, destroying your ship and rendering yourself helpless.</p>
<p>Only Crews of Average or better Quality can attempt to tack. A successful tack allows a ship to turn fully into the wind without losing its Speed for the round. To attempt a tack, the captain of the ship makes a d20 check modified by his Commander Bonus and the Maneuverability rating of his ship (including the Crew Quality modifier, and with the -1 penalty for turning into the wind applied). The Difficulty to tack in normal conditions is a 15. This may be more difficulty under extreme weather or while under fire.</p>
<p class="notation">Tack Difficulty 15 vs d20 + Commander Bonus + (Maneuverability - 1)</p>
<p>A failed tack attempt leaves the ship facing into the wind, helpless. The ship moves backward according to the wind direction and speed. The captain can attempt another tack each round to get out of this predicament, with each successive attempt receiving a +1 bonus.</p>
<p>A tack attempt that fails by 10 or more deals damage to the ship's rigging equal to the ship's base Toughness.</p>

<h2>Making It Work</h2>
<p>Okay, so how do you keep track of all this? Well, you could use miniatures if you have them, but you might not. We've had great success with a sheet of paper with a bit of coastline and a wind arrow, and just drawing lines to estimate how far each ship can travel, just eyeballing it the whole way. If you need more exact measurements than that, use graph paper or hexes or rulers. Those punch-out cards that assemble into ships work great, too. Whatever you like. But we just sort of squint and hold up our thumb and go, "That looks about right."</p>

</div>
</body>
</html>