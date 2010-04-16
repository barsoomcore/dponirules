<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Size</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>SIZE</h1>
<p>Note that in DPoNI, characters can be both Large and Small, if they choose. They're still human, they're just really, really big, or really, really little.
Such characters receive all the normal bonuses and penalties for being outsized, as listed on the Size Table below. This table is also used for creatures that are larger or smaller than normal human sizes.</p>

<a name="SizeTable"><h2>Size Table</h2></a>
<table class="last-row" width="100%"><th width="10%">Size</th><th width="10%" class="center">Attack Modifier</th><th width="10%" class="center">Maneuver Modifier</th><th width="10%" class="center">Stealth Modifier</th><th width="10%" class="center">Toughness Modifier</th><th width="10%" class="center">Height</th><th width="15%" class="center">Weight</th><th width="10%" class="center">Space</th><th width="5%" class="center">Reach</th><th width="10%" class="center">Carrying Capacity</th>
<tr class="odd-row"><td>Awesome</td><td class="center">-16</td><td class="center">+16</td><td class="center">-20</td><td class="center">+10</td><td class="center">128-250 ft.</td><td class="center">2 mil-10 mil lbs.</td><td class="center">40ft and up</td><td class="center">20 ft.</td><td class="center">x32</td></tr>
<tr><td>Colossal</td><td class="center">-8</td><td class="center">+8</td><td class="center">-16</td><td class="center">+8</td><td class="center">64-128 ft.</td><td class="center">250K-2 mil lbs.</td><td class="center">30 ft.</td><td class="center">15 ft.</td><td class="center">x16</td></tr>
<tr class="odd-row"><td>Gargantuan</td><td class="center">-4</td><td class="center">+4</td><td class="center">-12</td><td class="center">+6</td><td class="center">32-64 ft.</td><td class="center">32K-250K lbs.</td><td class="center">20 ft.</td><td class="center">15 ft.</td><td class="center">x8</td></tr>
<tr><td>Huge</td><td class="center">-2</td><td class="center">+2</td><td class="center">-8</td><td class="center">+4</td><td class="center">16-32 ft.</td><td class="center">4K-32K lbs.</td><td class="center">15 ft.</td><td class="center">10 ft.</td><td class="center">x4</td></tr>
<tr class="odd-row"><td>Large</td><td class="center">-1</td><td class="center">+1</td><td class="center">-4</td><td class="center">+2</td><td class="center">8-16 ft.</td><td class="center">500-4,000 lbs.</td><td class="center">10 ft.</td><td class="center">10 ft.</td><td class="center">x2</td></tr>
<tr><td>Medium</td><td class="center">+0</td><td class="center">+0</td><td class="center">+0</td><td class="center">+0</td><td class="center">4-8 ft.</td><td class="center">60-500 lbs.</td><td class="center">5 ft.</td><td class="center">5 ft.</td><td class="center">x1</td></tr>
<tr class="odd-row"><td>Small</td><td class="center">+1</td><td class="center">-1</td><td class="center">+4</td><td class="center">-1</td><td class="center">2 ft.-4 ft.</td><td class="center">8-60 lbs.</td><td class="center">5 ft.</td><td class="center">5 ft.</td><td class="center">x3/4</td></tr>
<tr><td>Tiny</td><td class="center">+2</td><td class="center">-2</td><td class="center">+8</td><td class="center">-2</td><td class="center">1-2 ft.</td><td class="center">1-8 lbs.</td><td class="center">2.5 ft.</td><td class="center">0 ft.</td><td class="center">x1/2</td></tr>
<tr class="odd-row"><td>Diminutive</td><td class="center">+4</td><td class="center">-4</td><td class="center">+12</td><td class="center">-4</td><td class="center">6 in-1 ft.</td><td class="center">0.25-1 lb.</td><td class="center">1 ft.</td><td class="center">0 ft.</td><td class="center">x1/4</td></tr>
<tr><td>Fine</td><td class="center">+8</td><td class="center">-8</td><td class="center">+16</td><td class="center">-8</td><td class="center">3 in-6 in.</td><td class="center">0.9-0.1 lb.</td><td class="center">6 in.</td><td class="center">0 ft.</td><td class="center">x1/8</td></tr></table>

<p>A creature's size affects certain traits:</p>
<p><b><a href="Combat.php#AttackBonus">Attack Modifier</a>:</b> Larger creatures are easier to notice and hit relative to smaller ones, while smaller creatures are harder to notice and hit. Apply the combat modifier for the creature's size to both its <a href="Combat.php#AttackBonus">attack rolls</a> and <a href="Combat.php#BaseDefense">Base Defense</a>. These modifiers cancel out for creatures of the same size, who attack and defend normally against each other.</p>
<p><b><a href="Combat.php#ManeuverBonus">Maneuver Modifier</a>:</b> Larger creatures have an advantage in trying to perform maneuvers like grapple or disarm against smaller opponents. In addition to the modifier to maneuver checks, a larger creature can grapple more opponents of a smaller size: double the number of opponents the creature can grapple at once per size category the attacker is larger than the defenders. So a medium attacker can grapple one medium opponent, two small opponents (one under each arm, for example), four tiny opponents, and so forth. See <a href="Combat.php#ManeuverBonus">Maneuver Bonus</a>.</p>
<p><b><a href="Skills.php?Name=Stealth">Stealth</a> Modifier:</b> Larger creatures have a harder time sneaking around, while smaller creatures have an easier time remaining unseen and unheard. Apply this modifier to <a href="Skills.php?Name=Stealth">Stealth</a> checks made at this size.</p>
<p><b><a href="CombatDamage">Toughness Modifier</a>:</b> Larger creatures are tougher than smaller creatures with the same Constitution. Apply the Toughness modifier for the creature's size category to its Toughness saving throws.</p>
<p><b>Height and Weight:</b> These are typical values for creatures of the given size. Some creatures may be wider than tall, or extraordinarily light for their size, and thus have values outside these ranges.</p>
<p><b>Space:</b> A normal (medium-sized) creature is assumed to occupy a roughly 5-ft.- by-5-ft. space. Larger and smaller creatures occupy more or less space, as shown on the Size table.</p>
<p><b>Reach:</b> A normal (medium-sized) creature has a 5 ft. reach, which means the creature can make a melee attack at any target up to 5 ft. away. Larger and smaller creatures have a longer or shorter reach, as shown on the Size table.</p>
<p><b><a href="PlayingPhysical.php#Carrying">Carrying Capacity</a>:</b> Larger creatures can lift and carry more, while smaller creatures can lift and carry less. Larger creatures gain an increase in effective Strength for carrying capacity: +5 points (a doubling in capacity) per size category. Smaller creatures' carrying capacities are multiplied by the value in this column. So a tiny creature with Strength +0 has a heavy load of (100 x 1/2) or 50 lbs.</p>

</body>
</html>