<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Using Powers</title><?php include ("Scripts/HeaderScript.php"); ?>

<?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/PowersScript.php"); ?>

<h1>Using Powers</h1>

<?php MenuList("Power", "Data/PowersList.data", "Powers.php"); ?>

<p>Whether the careful application of a focused mind, the ability to call up the spirits of angry ancestors or the long and arduous path of arcane study, the islands are home to many strange and inexplicable powers.</p><p>Heroes in these lands often make use of such powers, which are adjudicated with a few reasonably simple rules:</p>

<h2>Powers: The Basics</h2>

<h3>Key Ability</h3>

<p>When your character first begins using powers, you must choose one of the mental attributes to serve as your character's key ability: Intelligence, Wisdom or Charisma. This ability will be used to determine your character's potency with their powers.</p>

<h3>Power Ranks</h3>

<p>Any <a href="Roles.php">role</a> that is able to use powers has a number of power ranks, listed in the <a href="Roles.php">role</a> description itself. Characters who start play as <a href="RolesAdept.php">adepts</a> start with four power ranks, while characters who start as <a href="RolesGeneralist.php">generalists</a> start with three. <a href="RolesAdept.php">Adepts</a> gain another power rank every level; <a href="RolesGeneralist.php">generalists</a> proceed a little slower.</p>

<p>Power ranks are used to determine your <em>Power Bonus</em>, your <em>Power Save Difficulty</em> and will often have an effect on how potent your powers can be manifested. You can also spend power ranks to improve your Resilience roll.</p>

<h3>Power Bonus</h3>

<p>Your maximum Power Bonus is normally equal to your total ranks + your key ability (some feats or items may provide you with an additional bonus). If you use ranks to improve your Resilience roll, they must be subtracted from all other uses, including your Power Bonus.</p>

<p class="notation">Max Power Bonus = Power ranks + Key Ability + other modifiers</p>

<p>Whenever a power description directs you to make a power check, you make a roll modified by your Power Bonus.</p>

<h3>Power Save Difficulty</h3>

<p>Whenever someone makes a saving throw against your powers, the Difficulty they need to succeed on is equal to 9 + half your ranks (round down) + your key ability. Again, if you use ranks to improve your Resilience roll, this decreases your Save Difficulty.</p>

<p class="notation">Max Power Save Difficulty = 9 + 1/2 Power Ranks + Key Ability</p>

<a name="Resilience"><h3>Resilience Roll</h3></a>

<p>Some powers are <em>fatiguing</em>. Whenever you use a fatiguing power, you have to make a Resilience roll in order to avoid taking <a href="CombatDamage.php#NonLethalDamage">non-lethal damage</a>. A Resilience roll is a special Wisdom check against a Difficulty of 15. You can improve your Resilience roll by using power ranks: every two ranks you use on your Resilience roll increases your bonus by +1. Ranks you spend in this fashion do not contribute to either your Power Bonus or your Power Save Difficulty, and all qualities of the power are calculated using the reduced number of ranks.</p><p>You must spend at least one rank on the power itself; you cannot spend all ranks on improving your Resilience roll.</p>

<p class="notation">Resilience Roll: Wis vs Difficulty 15</p>

<p>If you fail your Resilience roll, your power manifests normally, but you must take a level of <a href="CombatDamage.php#NonLethalDamage">non-lethal damage</a>. Mark off the next highest level of non-lethal damage on your character sheet and carry on, unless the one you just marked off is <a href="PlayingConditions.php?Name=Unconscious">unconscious</a> in which case the power does not manifest and you fall over.</p>

<h3>Example</h3>

<p>Kana the Dino Master wants to compel the mighty T-Rex to carry her through the jungle. She is using the <a href="Powers.php?Name=Dominate">Dominate</a> power, which is fatiguing, so she'll need to make a Resilience roll to avoid damage. As a 10th-level adept she has 13 power ranks, and she has +4 Charisma, which makes her normal Power Save Difficulty (9 + (13/2) + 4 =) 19. But she only has a +2 Wisdom and she really doesn't want to fall over, AND she reckons the T-Rex is pretty easily wiled, so she decides to put six of her power ranks into her Resilience roll. That reduces her Power Save Difficulty to (9 + (7/2) +4 =) 16, but improves her Resilience roll from +2 to +5 (with the additional +3 from the six ranks).</p><p>That means she has to get a 10 on her Resilience roll to avoid a level of damage, and the T-Rex (with a +8 Will save) needs to get an 8.</p><p>Looks like the smart money's on Kana getting pretty tired if she doesn't want to end up as a T-Rex appetizer.</p>

<a name="Range"><h2>Range</h2></a>
<p>Some powers have specific limitations on the range at which they can be used and these limits are noted in the power description. Other powers are assumed to operate at normal line of sight.</p>

<a name="Familiarity"><h3>Familiarity</h3></a>
<p>Some powers are easier to use on more familiar subjects. For any power that mentions a familiarity modifier, determine the relationship between yourself and the target on the <b>Familiarity</b> table below and apply the appropriate modifier to the Difficulty of the power check. For example, using the <a href="Powers.php?Name=Mind%20Link">Mind Link</a> power on a "Somewhat Familiar" target increases the difficulty of the power check to establish contact by +15.</p>

<table class="last-row">
	<th width="15%">Familiarity</th><th width="10%" class="center">Difficulty</th><th>Definition</th>
	<tr class="odd-row"><td>Present</td><td class="center">+0</td><td>A subject visible to the naked eye or in physical or mental contact with the adept.</td></tr>
	<tr><td>Very Familiar</td><td class="center">+5</td><td>A subject currently seen or sensed through another power, a close friend or relative, an item made by you or owned and used for at least a year, a place where you spent at least a year's time</td></tr>
	<tr class="odd-row"><td>Familiar</td><td class="center">+10</td><td>A subject you have been acquainted with for at least three months, a casual friend.</td></tr>
	<tr><td>Somewhat Familiar</td><td class="center">+15</td><td>A subject you have been acquainted with for at least a week, reading someone else's memory of a familiar subject.</td></tr>
	<tr class="odd-row"><td>Casually Familiar</td><td class="center">+20</td><td>A subject you have been acquainted with only briefly, reading someone else's memory of a somewhat familiar subject.</td></tr>
	<tr><td>Slightly Familiar</td><td class="center">+25</td><td>A subject you have only seen briefly or had described to you in detail.</td></tr>
</table>

<h2>Time</h2>
<h3>Extended Casting Time</h3>
<p>In DINO-PIRATES OF NINJA ISLAND, magical effects are complicated but made easier if the caster can take their time. Casters gain a bonus of +1 on their <a href="#Resilience">Resilience</a> rolls whenever they can move the casting time of their power up by one category on the list below:</p>
<ol>
	<li>Free action</li>
	<li>Move action</li>
	<li>Standard action</li>
	<li>Full-round action</li>
	<li>One minute</li>
	<li>One hour</li>
	<li>One day</li>
</ol>
<p>Spending more time does require concentration, however. A caster taking more time to attempt a power must maintain their concentration and is subject to <a href="Skills.php?Name=Concentration">Concentration</a> checks as per the <a href="Skills.php?Name=Concentration">Concentration</a> skill. So damage, motion, grappling and environmental conditions can all compel the caster to make a <a href="Skills.php?Name=Concentration">Concentration</a> check during the casting attempt.</p>
<p>If the <a href="Skills.php?Name=Concentration">Concentration</a> check fails, the power use is wasted and the caster must make an immediate <a href="#Resilience">Resilience</a> roll without the bonus supplied by the extended casting time.</p>

<h3>Reduced Casting Time</h3>
<p>Sometimes you're in a hurry. Just like skill checks, powers can take the <a href="BasicsChecks.php#Challenges">Fast Task challenge</a> in order to reduce the time spent. Such powers are used as though you had 5 less ranks than you do, thus affecting both your power check (-5) and your power save difficulty (-2). Any other effects of the power that depend on ranks all operate at 5 less than your actual ranks.</p>

<h2>Multiple Targets</h2>
<p>Most powers only affect a single target, but it is possible to expand your power use to affect multiple targets simultaneously. This requires time, skill and effort.</p>

<p>A character attempting to use a power on more than one subject at once increases the power check and Resilience roll Difficulties by +2 for every additional target. So, affecting three subjects at once is +4 on the power check and Resilience roll Difficulties. If the power does not require a check, then reduce the power's saving throw Difficulty by 2 per additional subject. Additionally, the power requires a full-round action to use. If the power normally requires a full-round action or more, then it requires an additional full-round action.</p>

<p>The various subjects must all be within range. If the power requires mental contact, then the user must be in mental contact with all subjects. The Narrator has the final say on whether a power can affect more than one subject at a time and, if so, how many.</p>

<p>The <a href="Feats.php?Name=Widen%20Power">Widen Power</a> feat also allows an adept to affect more than one target with a power at once. Using the <a href="Feats.php?Name=Widen%20Power">Widen Power</a> feat does not require more time for the power, nor does it reduce the power save Difficulty.</p>