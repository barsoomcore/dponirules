<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Chases</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?> 
</head>

<h1>CHASE SCENES</h1>

<p>Chase scenes are a special case of combat, where everyone is assumed to be in motion (whether running or riding a mount or in a vehicle). While chases are run more or less like combats, there are a few simple changes to the round process, and a few conditions that have to be considered.</p>

<h2>The Chase Round</h2>
<p>When characters are in a chase, they are presumed to be moving as fast as they can at all times. But characters just taking Run or Move All Out actions is boring, so in a chase, each character gets a single standard or move action each round in addition to their "running as fast as they can" action. Or "hanging on for dear life" action.</p>

<h3>Obstacle Check</h3>
<p>Each round, each character in the chase must make an obstacle check to see if they encounter some sort of obstacle to be dealt with. This is a straight d20 roll against a Difficulty set by <a href="#Conditions">the chase conditions</a>:</p>

<ul>
	<li>Open: Difficulty 2</li>
	<li>Close: Difficulty 4</li>
	<li>Tight: Difficulty 8</li>
</ul>

<p>If an obstacle is encountered, the character has to deal with it, either by avoiding it using one of the abilities or skills (which means NOT making an attempt to gain on their opponent), or by ignoring it and trying to do something else (which means they <a href="#Crashes">crash</a> through it, but if they don't fall prone or unconscious, they can attempt to gain on their opponent).</p>

<p>If you encounter an obstacle, you and the Narrator will have to decide what it is, and in particular how large it is, using the <a href="CharGenSize.php">Size table</a> as a guide. Note that if you are the quarry of the chase, pursuers who are close to you may have to deal with the obstacle as well. If the obstacle is Large or larger, all pursuers at Point-Blank range automatically encounter that obstacle on their turn, and have to decide how to deal with it. If the obstacle is Gargantuan or larger, all pursuers at Short or Point-Blank range automatically encounter the obstacle on their turn as well.</p>

<h3>Actions</h3>
<p>The basic action in a chase is to gain on the opponent. This can be done as a simple Strength check against a Difficulty of 15. If you succeed, you gain on your opponent by one range increment. You receive a +2 on this check if you have the <a href="Feats.php?Name=Run">Run</a> feat. You can also <a href="BasicsStunts.php">stunt</a> on this check, using any of your <a href="Skills.php">skills</a> you can convince your Narrator is reasonable. You can also make an attack on the opponent, although this means automatically losing a range increment against them unless you can stop them (for example, if you can successfully <a href="CombatActions.php?Name=Trip">trip</a> or <a href="CombatActions.php?Name=Grapple">grapple</a> your opponent).</p>
<p>You can also do pretty much any <a href="CombatActions.php?Time=Standard">standard</a> or <a href="CombatActions.php?Time=Move">move</a> action you want to do. <a name="Conditions">If you fail</a>, your Narrator might rule that you <a href="#Crashes">crash</a>.</p>
<p>When running a chase, let your players be creative. You won't have every detail of every stall in the market, so if a player suggests somebody is selling washbasins, go with it. If there's a crowd, let them work the crowd with interaction skills. If there might possibly be a rope hanging somewhere, there is and they can swing on it.</p>

<h2>Chase Conditions</h2>
<p>Below are some of the factors to consider in running a chase.</p>

<h3>Distance</h3>
<p>In a chase, counting out squares of movement each turn is unreasonable and not fun, so instead track distance in relative terms: distance between the pursuer(s) and the quarry. Each pursuer has a distance from the quarry expressed as one of five ranges: Point-Blank, Short, Medium, Long, and Extreme. Determine the range for each pursuer when the chase begins. Ranges may adjust for different chase conditions, but in general characters at Point-Blank range can use melee attacks against each other, while characters at Short range are around ten to thirty feet away (one range increment, mostly). Characters at Medium range are something more like fifty feet away and characters at Long range are maybe a hundred feet away. But these ranges vary greatly according to the chase conditions. A useful baseline is that characters at Medium range suffer a -2 penalty on ranged attacks, and characters at Long range suffer a -4 penalty. Characters at Extreme range cannot target their opponent.</p>

<h3>Speed</h3>
<p>If you're faster than your opponent, you get a +2 on attempts to catch up with or pull away from them. If you're twice as fast, make it a +4.</p>

<h3>Terrain</h3>
<p>A chase can be run through crowded markets or along open roadways. Choose a terrain for your chase: Open, Close or Tight. Close terrains (pretty crowded, some traffic, blocked sightlines common) impose a -2 penalty on <a href="Skills.php?Name=Notice">Notice</a> checks but a +2 bonus on anything to do with tricky maneuvering or hiding. Tight terrains (very crowded, full of traffic, with no good sightlines) impose a -4 penalty on <a href="Skills.php?Name=Notice">Notice</a> checks but provide a +4 bonus on anything to do with tricky maneuvering or hiding.</p>

<a name="Crashes"><h2>Crashing</h2></a>
<p>Sometimes you just can't quite round that turn, or sometimes you just want to white-knuckle right through that market stall. When you collide with an object (including another chase participant), there are two potential consequences: damage and falling down.</p>

<h3>Damage</h3>
<p>This damage is equal to the Toughness modifier for the object's <a href="CharGenSize.php">size</a>. If you are running, this is <a href="CombatDamage.php#NonLethalDamage">non-lethal damage</a>; if you are riding or driving a vehicle, this is lethal damage. For lightweight or otherwise not-too-substantial objects, the Narrator may rule that the damage is reduced or even eliminated (this is known as the Fruit Cart rule).</p>

<h3>Falling Down</h3>
<p>When you collide with an object, you also have to make a Reflex save or <a href="Skills.php?Name=Acrobatics">Acrobatics</a> check (whichever is higher) against a Difficulty of 15. This Difficulty is modified by the <a href="CharGenSize.php">size-based maneuver modifier</a>. If you fail at this check, you fall prone and automatically lose a range increment against your opponent. If you fail by 20, you fall prone and then a herd of ungulates tramples you.</p>

</div>
</body>
</html>