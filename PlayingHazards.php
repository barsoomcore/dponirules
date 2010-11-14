<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Hazards</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>HAZARDS AND ENVIRONMENT</h1>
<p>Heroes may encounter any number of dangerous environments and hazards in their travels. This section looks at these hazards and how to handle them in game terms.</p>

<h2>Acid</h2>
<p>Corrosive acids deal +4 damage per round of exposure, except in the case of total immersion (such as into a vat of acid), which deals +20 damage per round. An attack with acid, such as from a hurled vial or a monster's acidic spittle, counts as a round of exposure.</p>

<p>The fumes from most acids are poisonous. Those who come close enough to a large body of acid to dunk a creature in it must make a Difficulty 13 Fortitude save or take 1 point of Constitution damage. All such characters must make a second save 1 minute later or take another 1 point of Constitution damage.</p>

<p><a name="Cold">Creatures immune to acid's</a> caustic properties might still drown in it if they are totally immersed and need to breathe (see <a href="#Suffocation">Suffocation</a>).</p>

<h2>Cold</h2>
<p>An unprotected character in cold weather must make a Fortitude save (Difficulty 15, + 1 per previous check) or receive a level of <a href="PlayingFatigue">fatigue</a>. Additional failed saves cause further levels of <a href="PlayingFatigue">fatigue</a>. Once a character is <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, failed saves cause the character to become <a href="PlayingConditions.php?Name=Disabled">disabled</a>, then <a href="PlayingConditions.php?Name=Dying">dying</a>.</p>

<p>Characters may make Survival checks to receive a bonus on this saving throw (see the skill's description for further information). Characters in cold weather (below 40* F) make a Fortitude save each hour. In conditions of severe cold or exposure (below 0* F), an unprotected character must make a Fortitude save once every 10 minutes. Characters in severe cold conditions wearing winter clothing only need check once per hour for cold damage.</p>

<p>Extreme cold (below -20* F) deals +2 lethal damage per minute in addition to requiring a Fortitude save every minute. Winter clothing makes the damage non-lethal and reduces the Fortitude save to every 10 minutes.</p>

<h2>Ice</h2>
<p>Characters walking on ice move slower (see <a href="PlayingPhysical.php#HamperedMovement">Hampered Movement</a>) and the Difficulties for <a href="Skills.php?Name=Acrobatics">Acrobatics</a> and <a href="Skills.php?Name=Climb">Climb</a> checks increase by +5. Characters in prolonged contact with ice may run the risk of taking damage from the cold.</p>

<h2>Darkness</h2>
<p>Characters with normal vision or the <a href="Feats.php?Name=Night%20Vision">Night Vision</a> feat can be rendered completely blind by putting out the lights. Torches or lanterns can be blown out by sudden gusts of wind. Even supernatural light sources can be dispelled or countered.</p>

<p>For purposes of the following points, a blinded creature is one who simply can't see through the surrounding darkness.</p>

<ul>
	<li>Creatures blinded by darkness lose the ability to deal extra damage due to precision (for example, a <a href="CombatModifiers.php?Name=Surprise%20Attack">surprise attack</a>).</li>
	<li>Blinded creatures are hampered in their movement (see <a href="PlayingPhysical.php#HamperedMovement">Hampered Movement</a>). Blinded creatures can't move all out or charge.</li>
	<li>All opponents have total <a href="CombatModifiers.php?Name=Concealment">concealment</a> from a blinded creature, so the blinded creature has a 50 percent miss chance in combat. A blinded creature must first pinpoint the location of an opponent in order to attack the right area; if the blinded creature launches an attack without pinpointing its foe, it attacks a random area within range.</li>
	<li>A blinded creature cannot use its <a href="Combat.php#Dodge">Dodge</a> or <a href="Combat.php#Parry">Parry</a> and takes a -2 penalty to its <a href="Combat.php#BaseDefense">base Defense</a>.</li>
	<li>A blinded creature takes a -4 penalty on <a href="Skills.php?Name=Search">Search</a> checks and most <a href="Skills.php?Ability=Str">Strength-</a> and <a href="Skills.php?Ability=Dex">Dexterity-based skill</a> checks, including any with an armor check penalty. A creature blinded by darkness automatically fails any skill check relying on vision.</li>
	<li>A creature blinded by darkness can make a <a href="Skills.php?Name=Notice">Notice</a> check as a free action each round in order to locate foes by hearing (Difficulty equal to opponents' <a href="Skills.php?Name=Stealth">Stealth</a> checks). A successful check lets a blinded character hear an unseen creature "over there somewhere." It's almost impossible to pinpoint the exact location of an unseen creature. A Notice check that beats the Difficulty by 20 reveals the unseen creature's location (but the creature still has total <a href="CombatModifiers.php?Name=Concealment">concealment</a> from the blinded character).</li>
	<li>If a blinded creature is struck by an unseen foe, the blinded character pinpoints the location of the attacker (until the unseen creature moves, of course).</li>
	<li>A creature with the <a href="CreaturesTraits.php?Name=Scent">scent</a> ability automatically pinpoints unseen creatures within 5 feet of its location.</li>
</ul>

<h2>Falling</h2>
<p>The basic rule for falling damaging is simple: +2 damage per 10 feet fallen, to a maximum of +40 (at 200 feet).</p>

<p>If a character deliberately jumps instead of merely slipping or falling, the damage is the same but with a +2 bonus on the Toughness save. A Difficulty 15 <a href="Skills.php?Name=Acrobatics">Acrobatics</a> or <a href="Skills.php?Name=Jump">Jump</a> check grants an additional +2 bonus.</p>

<p>Falls onto yielding surfaces (soft ground, mud) do 2 points less damage. This reduction is cumulative with Toughness save bonuses from deliberate falls and skill checks. Falls into water do 4 points less damage.</p>

<p>Characters who deliberately dive into water take no damage on a successful Difficulty 15 <a href="Skills.php?Name=Acrobatics">Acrobatics</a> or <a href="Skills.php?Name=Swim">Swim</a> check, so long as the water is at least 10 feet deep for every 30 feet fallen. However, the Difficulty of the check increases by 5 for every 50 feet of the dive. A failed check results in normal falling damage.</p>

<h2>Falling Objects</h2>
<p>Just as characters take damage when they fall more than 10 feet, they also take damage when hit by falling objects. Objects that fall upon characters deal damage based on their weight and the distance they have fallen.</p>

<p>For each 100 pounds of an object's weight, the object deals +1 damage, provided it falls at least 10 feet. Distance also comes into play, adding an additional +2 damage for every 10-foot increment it falls beyond the first (to a maximum of +40 damage).</p>

<p>Objects smaller than 100 pounds also deal damage when dropped, but they must fall farther to deal the same damage as larger ones. For every halving of weight, the object must fall for an additional 10 feet to cause +1 damage. So a 25 lb. object must fall 30 feet to inflict damage.</p>

<p>Objects weighing less than 1 pound do not deal damage to those they land upon, no matter how far they have fallen.</p>

<h2>Heat</h2>
<p>An unprotected character in hot weather must make a Fortitude save (Difficulty 15, + 1 per previous check) or take a <a href="PlayingConditions.php?Name=Bruised">Bruised</a> condition. Additional failed saves cause further <a href="PlayingConditions.php?Name=Bruised">Bruised</a> conditions. Once a character is <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, failed saves cause the character to become <a href="PlayingConditions.php?Name=Disabled">disabled</a>, then <a href="PlayingConditions.php?Name=Dying">dying</a>. Characters may make <a href="Skills.php?Name=Survival">Survival</a> checks to receive a bonus on this saving throw.</p>

<p>In very hot conditions (above 90* F), the save is once per hour. In severe heat (above 110* F), a character must make a Fortitude save once every 10 minutes. Extreme heat (air temperature over 140* F, fire, boiling water, lava) deals lethal damage. Breathing air in these temperatures deals +2 lethal damage per minute. In addition, a character must make a Fortitude save against heat exposure every 5 minutes.</p>

<p>Boiling water deals +2 scalding damage, unless the character is fully immersed, in which case it deals +20 damage per round.</p>

<h2>Catching on Fire</h2>
<p>Characters touching a fire source might find their clothes, hair, or equipment on fire. Those at risk of catching fire are allowed a Difficulty 15 Reflex save to avoid this fate. If a character's clothes or hair catch fire, he takes +2 damage immediately. In each subsequent round, the burning character must make another Reflex saving throw. Failure means he takes another +2 damage that round. Success means the fire has gone out.</p>

<p>A character on fire may automatically extinguish the flames by jumping into enough water to douse himself. If no body of water is at hand, rolling on the ground or smothering the fire with cloaks or the like permits the character another save with a +4 bonus.</p>

<p>Those unlucky enough to have their clothes or equipment catch fire must make Difficulty 15 Reflex saves for each item, using the character's Reflex save bonus. Failing the save means the item takes the same amount of damage as the character.</p>

<h2>Smoke</h2>
<p>A character breathing heavy smoke must make a Fortitude save each round (Difficulty 15, +1 per previous check) or spend that round choking and coughing. A character who chokes for 2 consecutive rounds is <a href="PlayingConditions.php?Name=Winded"winded</a>. If accumulated fatigue renders the character <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, he may suffocate (see <a href="#Suffocation">Suffocation</a>).</p>

<p>Smoke obscures vision, giving <a href="CombatModifiers.php?Name=Concealment">concealment</a> (20 percent miss chance) to characters within it.</p>

<h2>Starvation and Dehydration</h2>
<p>Characters might find themselves without food or water and with no means to obtain them. In normal climates, Medium characters need at least a gallon of fluids and about a pound of food per day to avoid starvation. (Small characters need half as much.) In very hot climates, characters need two or three times as much water to avoid dehydration.</p>

<p>A character can go without water for 36 hours plus twice his Constitution score. After this time, the character must make a Constitution check each hour (Difficulty 10, +1 for each previous check) or take a <a href="PlayingConditions.php?Name=Bruised">Bruised</a> condition. Once <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, the character is <a href="PlayingConditions.php?Name=Disabled">disabled</a> if he fails another Constitution check, then <a href="PlayingConditions.php?Name=Dying">dying</a>.</p>

<p><a name="Suffocation">A character can go without food</a> for 3 days, in growing discomfort. After this time, the character must make a Constitution check each day (Difficulty 10, +1 for each previous check) or take a <a href="PlayingConditions.php?Name=Bruised">Bruised</a> condition. Once <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, the character is <a href="PlayingConditions.php?Name=Disabled">disabled</a> if he fails another Constitution check, then <a href="PlayingConditions.php?Name=Dying">dying</a></p>

<p>Fatigue from thirst or starvation cannot be recovered until the character gets food or water.</p>

<h2>Suffocation</h2>
<p>A character with no air to breathe can hold her breath for 2 minutes (20 rounds), plus or minus a number of rounds equal to her Constitution score times 4. So a Constitution +2 character can hold her breath for 28 rounds, while a Constitution -2 character can only hold her breath for 12 rounds. After this period of time, the character must make a Difficulty 10 Constitution check in order to continue holding her breath. The check must be repeated each round, with the Difficulty increasing by +1 for each previous success.</p>

<p>When the character fails one of these Constitution checks, she begins to suffocate. In the first round, she falls <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>. In the following round, she is <a href="PlayingConditions.php?Name=Dying">dying</a>. In the third round, she suffocates and dies.</p>

<h3>Slow Suffocation</h3>
<p>A normal character can breathe easily for 6 hours in a sealed chamber measuring 10 feet on a side. After that time, the character suffers a <a href="PlayingConditions.php?Name=Bruised">Bruised</a> condition every 15 minutes. Once <a href="PlayingConditions.php?Name=Unconscious">unconscious</a>, the character suffocates and dies. Each additional character or significant fire source (a torch, for example) proportionally reduces the time the air will last. Small characters consume half as much air as normal characters. A larger volume of air, of course, lasts for a longer time.</p>

<h2>Water</h2>
<p>Any character can wade in relatively calm water that isn't over his head, no check required. Swimming in calm water only requires <a href="Skills.php?Name=Swim">Swim</a> skill checks with a Difficulty of 10. Trained swimmers can just take 10. (Remember, however, that armor or heavy gear makes any attempt at swimming much more difficult.)</p>

<p>By contrast, fast-moving water is much more dangerous. On a successful Difficulty 15 <a href="Skills.php?Name=Swim">Swim</a> check, it deals +0 non-lethal damage per round. On a failed check, the character must make another check that round to avoid going under. Very deep water is not only generally pitch black, posing a navigational hazard, but worse, it deals +2 water pressure damage per minute for every 100 feet the character is below the surface. A successful Fortitude save (Difficulty 15, +1 for each previous check) means the diver takes no damage in that minute. Very cold water deals also deals cold damage (see <a href="#Cold">Cold</a>).</p>

<h3>Drowning</h3>
<p>Air-breathers under water must hold their breath to avoid suffocation (see <a href="#Suffocation">Suffocation</a>).</p>

</div>
</body>
</html>