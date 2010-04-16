<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Reputation</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>REPUTATION</h1>

<p>Reputation is the record of a character's fame, a measurement of how well known they are and how likely they are to be recognized. A character's Reputation can go up or down over the course of a game, as outlined below, but it can never fall below the minimum Reputation for their level.</p>
<p>A character's minimum Reputation score is their level divided by 5, rounded down. Under no circumstances can a character's Reputation fall below the minimum for their level (even if they take the <a href="Feats.php?Name=Low%20Profile">Low Profile</a> feat).</p>
<p class="notation">Minimum Reputation = Character Level / 5 (round down)</p>
<p>The higher a character's Reputation, the more famous (or perhaps infamous) they are, and the more likely they are to be recognized.</p>

<h2>Using Reputation</h2>
<h3>Disguise and Gather Information</h3>
<p>One of the downsides of Reputation is that it makes you easier to recognize and find out about. Characters attempting to see through your <a href="Skills.php?Name=Disguise">Disguise</a> attempts gain a bonus to their <a href="Skills.php?Name=Notice">Notice</a> checks equal to your Reputation. Likewise, any attempts to use <a href="Skills.php?Name=Gather%20Information">Gather Information</a> to find out about you get to add your Reputation to the <a href="Skills.php?Name=Gather%20Information">Gather Information</a> check.</p>

<h3>Reputation Checks</h3>
<p>Once per encounter, you can use your Reputation to gain an "automatic success" with one of your interaction skills (<a href="Skills.php?Name=Bluff">Bluff</a>, <a href="Skills.php?Name=Diplomacy">Diplomacy</a>, <a href="Skills.php?Name=Gather%20Information">Gather Information</a>, <a href="Skills.php?Name=Intimidate">Intimidate</a> and <a href="Skills.php?Name=Perform">Perform</a>). To do so, you have to make a successful Reputation check: roll a d20 and add your Reputation (and other modifiers) and equal or exceed a Difficulty of 5 plus the target's level and Wisdom.</p>
<p class="notation">Reputation Check: d20 + Reputation + modifiers</p>
<p class="notation">Reputation Check Difficulty: 5 + target's level* + target's Wisdom</p>
<p>*Note that <a href="CombatModifiers.php?Name=Minions">Minions</a> and <a href="RolesOrdinaries.php">Ordinaries</a> add only half their level to the Difficulty.</p>
<p>On a successful Reputation check, you can use any interaction skill against the target as if you had just rolled a 20 on the die. You apply your normal skill modifiers to that result to determine the actual outcome of the skill use.</p>
<p><b>Modifiers:</b> Characters attempting to make Reputation checks in combat take a -10 penalty on their check.</p>

<h4>Failed Reputation Checks</h4>
<p>If the Reputation check is UNsuccessful, all your interaction skills against that target suffer a -2 penalty for the duration of the encounter.</p>

<h4>Using Reputation Against Groups</h4>
<p>You may only impress one heroic character with a single Reputation check, but you can affect groups of <a href="CombatModifiers.php?Name=Minions">Minions</a> or <a href="RolesOrdinaries.php">Ordinaries</a>. A group uses the highest level of all the characters in the group, and the highest Wisdom modifier, even if these are two different characters. The difficulty of such a Reputation check is modified by the size of the group:</p>
<table class="last-row" width="300px">
	<th class="center">Number<br />in Group</th><th class="center">Bonus to Reputation<br /> check Difficulty</th>
	<tr class="odd-row"><td class="center">3-5</td><td class="center">+1</td></tr>
	<tr><td class="center">6-10</td><td class="center">+2</td></tr>
	<tr class="odd-row"><td class="center">11-20</td><td class="center">+3</td></tr>
	<tr><td class="center">21-50</td><td class="center">+4</td></tr>
	<tr class="odd-row"><td class="center">51-100</td><td class="center">+5</td></tr>
	<tr><td class="center">101-200</td><td class="center">+6</td></tr>
</table>
<p>Every one hundred individuals in excess of 200 adds a further +1 to the Difficulty of the Reputation check.</p>

<h3>Taking Advantage of Reputation</h3>
<p>Characters may choose to take advantage of another's Reputation. To do so, the character spends a <a href="BasicsConviction.php">Conviction</a> point and selects a target character as a free action. For the rest of that encounter, that character has a bonus to resist any of the target's interaction skills equal to the target's Reputation bonus. Any <a href="CombatModifiers.php?Name=Minions">Minions</a> of the character gain a similar bonus to their rolls to resist the target's interaction skills. The target may spend a <a href="BasicsConviction.php">Conviction</a> point to end this effect.</p>
<p>In addition, the target cannot make a Reputation check against the character who spent the <a href="BasicsConviction.php">Conviction</a> point this encounter, even if the target spends a <a href="BasicsConviction.php">Conviction</a> point to end the bonus to resist interaction skills. If these two characters meet again in a separate encounter, either may attempt Reputation checks against each other as normal, and all interaction skill checks are made without penalty. <a href="CombatModifiers.php?Name=Minions">Minions</a> of the character who spent the <a href="BasicsConviction.php">Conviction</a> point are not immune to Reputation checks from the target.</p>
<p>When confronting a group, a character may choose to take advantage of one member's Reputation as above. They can apply the target's Reputation to their efforts to resist interaction skill checks made by any member of the group, but unlike the target other group members may make Reputation checks against the character who spent the <a href="BasicsConviction.php">Conviction</a> point. Only the target character may spend a <a href="BasicsConviction.php">Conviction</a> point to end the bonus to resist interaction skills.</p>

<h2>Losing Reputation</h2>
<p>The more you try to trade on your reputation, the less valuable it becomes. Characters can lose their reputation even as they try to use it.</p>
<p>If the Difficulty of a Reputation check is higher than your current Reputation, your Reputation decreases by one after you make the check (unless you have the minimum Reputation for your level, in which case it remains at that level). If the Difficulty of the Reputation check is higher than 15, your Reputation decreases by one after you make the check. If both of these conditions are true, your Reputation decreases by two. Your Reputation can never decrease below your minimum. Your Reputation decreases regardless of whether or not the Reputation check succeeds.</p>

<h2>Gaining Reputation</h2>
<p>Characters gain reputation in one of two ways: either by employing their professional skill in order to gain in recognition, or by earning Reputation awards through daring feats of bravery or skull-duggery.</p>

<h3>Professional Skills</h3>
<p>A character can choose to use their professional skill to improve their Reputation rather than their <a href="EquipmentWealth.php">Wealth</a> when they gain a level.</p>

<h3>Reputation Awards</h3>
<p>Characters can gain Reputation awards through adventuring just as they can gain <a href="EquipmentWealth.php">Wealth</a> awards.</p>

<!-- <p>Reputation is used to determine whether another character (a GM character) recognizes a character. Those who recognize the hero are more likely to help the hero or do what he or she asks, provided the reputation has a positive connotation to the character who recognizes the hero. A high Reputation bonus also makes it difficult for the hero to mask his or her identity.</p>
<p>Most of the time, a hero doesn't decide to use his or her reputation. The GM decides when a hero's reputation can be relevant to a scene or encounter. At the moment it becomes relevant, the GM makes a Reputation check for a GM character who might be influenced in some fashion due to the hero's fame or notoriety, as detailed below.</p>

<h2>Fame and Infamy</h2>
<p>Most characters with a high Reputation bonus (+4 or higher) are considered well known within their profession or social circle. Whether this has a positive or negative connotation depends on the point of view of the person who recognizes the hero. </p>
<p>When a character has a positive opinion of a hero's reputation, the hero is considered to be famous by that character. Fame, when recognized, provides a bonus to certain Charisma-based skill checks.</p>
<p>When a character has a negative opinion of a hero's reputation, the hero is considered to be infamous by that character. Also, at the GM's option, a hero might be considered infamous in certain situations due to events that have transpired in the campaign.</p>
<p>Infamy, when recognized, provides a penalty to certain Charisma-based skill checks.</p>

<h2>Using the Reputation Bonus</h2>

<h3>Being Recognized</h3>
<p>Whenever the GM decides that a character's reputation can be a factor in an encounter, the GM makes a Reputation check (DC 25) for the GM character involved. A Reputation check is 1d20 + the hero's Reputation bonus + the GM character's Int modifer. (Some <a href="Skills.php?Name=Knowledge">Knowledge</a> skill modifiers might apply instead of the Int modifier, if the hero would be well known in the field covered by the <a href="Skills.php?Name=Knowledge">Knowledge</a> skill.) Modifiers to the Reputation check depend on the hero and the GM character in question, as shown below. Note that if the GM character has no possible way of recognizing a hero, then the Reputation check automatically fails.</p>
<p>If the GM character succeeds at the Reputation check, he or she recognizes the hero. This provides a +4 bonus or a -4 penalty on checks involving the following skills for the duration of the encounter: <a href="Skills.php?Name=Bluff">Bluff</a>, <a href="Skills.php?Name=Diplomacy">Diplomacy</a>, <a href="Skills.php?Name=Gather%20Information">Gather Information</a>, <a href="Skills.php?Name=Intimidate">Intimidate</a>, and <a href="Skills.php?Name=Perform">Perform</a>.</p>

<table cellpadding=0 cellspacing=0 width=50%>
<th>Reputation Check</th><th>Situation Modifier</th>
<tr class="odd-row">
    <td>The hero is famous, known far and wide with either a positive or negative connotation</td><td>+10</td></tr>
<tr>
    <td>GM character is part of the hero's professional or social circle</td><td>+5</td></tr>
<tr class="odd-row">
    <td>The hero has some small amount of fame or notoriety</td><td>+2</td></tr>
</table>

<p>The GM must decide that a character's fame or infamy can come into play in a given situation to make a Reputation check necessary. A character who doesn't know, or know of, the hero can't be influenced by his or her reputation.</p> -->

</div>
</body>
</html>