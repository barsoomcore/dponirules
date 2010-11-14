<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Ships: Damage</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>

<h1>SHIP DAMAGE</h1> 
<p>Ships suffer damage conditions just like anyone else. The damage suffered by a ship depends on the target of the attack: the hull or the rigging. Appropriate damage consequences, including crew casualties, are listed below for each target. Note that the crew does NOT get a Toughness save separate from the ship. Those casualty percentages are automatically deducted from the crew. This represents men who are demoralized, injured or killed or otherwise taken out of <a href="Combat.php">combat</a>.</p>

<h2>Hull</h2>
<p><b>Hurt:</b> No effect. Cosmetic damage only.</p>
<p><b>Wounded:</b> Bulwark breaks off and a section of deck erupts in a shower of burning splinters. -1 to future Toughness saves, 10% crew casualties (that is, the crew takes a Wounded result). A random heroic character must succeed on a Difficulty 15 Reflex save or take +2 damage. </p>
<p><b>Disabled:</b> Minor leak develops (see below). -1 to future Toughness saves, -2 to Maneuverability, 25% crew casualties (that is, the crew takes a Disabled result), loss of 50% of guns on one side. Crew must make a Will save at Difficulty 15 to keep fighting. Any heroic character below decks takes damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save).</p>
<p><b>Dying:</b> Major leak develops (see below). -1 to future Toughness saves, -4 to Maneuverability, 50% crew casualties (that is, the crew takes a Dying result), loss of all guns on one side. Crew must make a Will save at Difficulty 20 to keep fighting. Any heroic character not in the rigging takes damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save).</p>
<p><b>Dead:</b> The ship sinks where it lies. It has no Maneuverability and no Speed and no guns able to fire. It suffers 90% crew casualties (that is, the crew takes a Dead result).</p>

<h2>Rigging</h2>
<p>The rigging of a ship is considered to have Damage Resistance 10/piercing. Standard cannon shot is unsuited for shooting away spars and lines, and holes in a sail are rarely fatal.</p>
<p><b>Hurt:</b> No effect. Cosmetic damage only</p>
<p><b>Wounded:</b> Rigging torn lose, yard breaks off. -1 to future Toughness saves. -2 to Maneuverability. One random heroic character in the rigging takes damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save). </p>
<p><b>Disabled:</b> Mast snaps.-4 to Maneuverability, 10% crew casualties. Crew must make a Will save at Difficulty 15 to keep fighting. All heroic characters in the rigging take damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save).</p> 
<p><b>Dying:</b> All masts snap. -6 Maneuverability, 25% crew casualties. Crew must make a Will save at Difficulty 15 to keep fighting. All heroic characters on the deck or in the rigging take damage from the cannon as if it were an area attack (Reflex save Difficulty 10 + cannon Base Damage, 1/2 damage on a successful save). </p>
<p><b>Dead:</b> The ship cannot move unless towed. It has no Maneuverability and no Speed. It suffers 50% crew casualties.</p>

<h2>Leaks</h2>
<p>As noted in the damage conditions above, ships can develop minor and major leaks.</p>
<p><em>Minor Leak:</em> The ship is taking on water and may suffer further damage as a result. Each round, the ship makes a Toughness save against a Difficulty of 15. A <a href="Skills.php?Name=Craft">Craft</a> (carpentry) check at Difficulty 10 can be used to aid this check. If the ship fails the Toughness save, it takes damage to its hull as listed above, but with no crew casualties, gun losses or damage to heroic characters. Will saves are still required for the crew. A <a href="Skills.php?Name=Craft">Craft</a> (carpentry) check at Difficulty 20, taking 20 minutes, puts an end to a minor leak.</p>
<p><em>Major Leak:</em> The ship is taking on large amounts of water and may suffer further damage as a result. Each round, the ship makes a Toughness save against a Difficulty of 25. A <a href="Skills.php?Name=Craft">Craft</a> (carpentry) check at Difficulty 15 can be used to aid this check. If the ship fails the Toughness save, it takes damage to its hull as listed above, but with no crew casualties, gun losses or damage to heroic characters. Will saves are still required for the crew. A <a href="Skills.php?Name=Craft">Craft</a> (carpentry) check at Difficulty 30, taking one hour, puts an end to a major leak.</p>

<h2>Ramming</h2> 
<p>Sometimes guns aren't enough. Sometimes you just need to send a really clear message and just run right into the other guy. Shiver his timbers, so to speak. "Ramming Speed!"</p>
<p>When two ships collide, each ship makes a Toughness save to determine how much damage was inflicted. The base damage for ramming is +12, adjusted by any Toughness bonuses the ship may have (for thick hulls or any other modifier).</p>

<p>Ships are designed to handle fore-to-aft stresses better than beam-to-beam, and so if one ship can "T-Bone" another, by driving its prow into its target's side, the target suffers an additional +3 to damage, while the rammer enjoys a -3 reduction in its damage. Ships colliding head-on both take the additional +3.
Ramming damage is always Hull damage.</p>