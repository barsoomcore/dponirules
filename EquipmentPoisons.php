<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Poisons</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>POISONS</h1>

<p>Both natives and ninjas make extensive use of poisons in their weapons and attacks. Very few poisons are of the "instant-death" variety; those that exist are very expensive and difficult to acquire. Any character with the <a href="Skills.php?Name=Craft">Craft (poison)</a> skill can attempt to make at least one of the following poisons if they succeed at the necessary <a href="EquipmentWealth.php">Wealth</a> and <a href="Skills.php?Name=Craft">Craft (poison)</a> checks.</p>

<h2>Effects of Poison</h2>

<p>When a target is affected by a poison, that target makes an immediate Fortitude save against the listed Difficulty for the poison. If that save is failed, then at the listed Initial Onset Time from the poisoning the target suffers the listed Initial Damage. At that time the target makes a second Fortitude save at the same Difficulty, and again, if this save is failed, the target will take the listed Secondary Damage at the Secondary Onset Time.

<p>Note that very few poisons will kill a normal person in a short enough time to be useful in combat situations. Most poisons are used to weaken enemies and make them easier to kill.</p>

<h2>Making Poisons</h2>

<p>Characters can learn one poison from the list below for every rank of <a href="Skills.php?Name=Craft">Craft (poison)</a> they possess. Note that some poisons have more than one entry, corresponding to different delivery types; each such entry counts as a separate poison.</p>

<table class="last-row"><th>Name</th><th class="center"><a href="Skills.php?Name=Craft">Craft (poison)</a> Difficulty</th><th>Type</th><th class="center">Save Difficulty</th><th class="center">Initial Damage</th><th class="center">Secondary Damage</th><th>Initial Onset</th><th>Secondary Onset</th><th>Cost</th>
	<tr class="odd-row"><td>Amanita</td><td class="center">9</td><td>Ingested</td><td class="center">11</td><td class="center">3 Con</td><td class="center">3 Con</td><td>6 hours</td><td>24 hours</td><td class="center">4</td></tr>
	<tr><td>Arsenic</td><td class="center">11</td><td>Ingested</td><td class="center">13</td><td class="center">1 Str</td><td class="center">2 Con</td><td>2 hours</td><td>1 minute</td><td class="center">6</td></tr>
	<tr class="odd-row"><td>Belladonna</td><td class="center">11</td><td>Ingested</td><td class="center">13</td><td class="center">2 Con</td><td class="center">4 Con</td><td>10 minutes</td><td>1 minute</td><td class="center">8</td></tr>
	<tr><td>Black Widow</td><td class="center">12</td><td>Injury</td><td class="center">10</td><td class="center">1 Dex</td><td class="center">1 Dex</td><td>5 minutes</td><td>4 hours</td><td class="center">3</td></tr>
	<tr class="odd-row"><td>Botulin</td><td class="center">14</td><td>Ingested</td><td class="center">16</td><td class="center">2 Con</td><td class="center">2 Con</td><td>3 hours</td><td>3 days</td><td class="center">4</td></tr>
	<tr><td>Cobra Venom</td><td class="center">16</td><td>Injury</td><td class="center">14</td><td class="center">2 Str</td><td class="center">2 Con</td><td>10 minutes</td><td>1 minute</td><td class="center">3</td></tr>
	<tr class="odd-row"><td>Curare</td><td class="center">19</td><td>Injury</td><td class="center">17</td><td class="center">4 Dex</td><td class="center">4 Dex</td><td>Instantaneous</td><td>10 minutes</td><td class="center">15</td></tr>
	<tr><td>Cyanide</td><td class="center">22</td><td>Ingested</td><td class="center">20</td><td class="center">3 Con</td><td class="center">4 Con</td><td>1 hour</td><td>10 minutes</td><td class="center">16</td></tr>
	<tr class="odd-row"><td>Cyanide</td><td class="center">27</td><td>Injury</td><td class="center">21</td><td class="center">4 Con</td><td class="center">2 Con</td><td>5 rounds</td><td>10 minutes</td><td class="center">22</td></tr>
	<tr><td>Digitalis</td><td class="center">16</td><td>Ingested</td><td class="center">18</td><td class="center">2 Con</td><td class="center">2 Con</td><td>30 minutes</td><td>1 minute</td><td class="center">6</td></tr>
	<tr class="odd-row"><td>Dumb Cane</td><td class="center">10</td><td>Ingested</td><td class="center">12</td><td class="center">1 Con</td><td class="center">2 Con</td><td>30 minutes</td><td>1 minute</td><td class="center">4</td></tr>
	<tr><td>Fugu Toxin</td><td class="center">22</td><td>Ingested</td><td class="center">24</td><td class="center">3 Con</td><td class="center">3 Con</td><td>2 hours</td><td>24 hours</td><td class="center">25</td></tr>
	<tr class="odd-row"><td>Fugu Toxin</td><td class="center">21</td><td>Injury</td><td class="center">19</td><td class="center">2 Str</td><td class="center">3 Str</td><td>Instantaneous</td><td>1 minute</td><td class="center">8</td></tr>
	<tr><td>Hemlock</td><td class="center">9</td><td>Ingested</td><td class="center">11</td><td class="center">3 Con</td><td class="center">1 Con</td><td>1 hour</td><td>1 minute</td><td class="center">3</td></tr>
	<tr class="odd-row"><td>Poison dart frog</td><td class="center">22</td><td>Injury</td><td class="center">20</td><td class="center">3 Dex</td><td class="center">3 Dex</td><td>5 rounds</td><td>1 minute</td><td class="center">25</td></tr>
	<tr><td>Ricin</td><td class="center">20</td><td>Ingested</td><td class="center">22</td><td class="center">3 Str</td><td class="center">4 Con</td><td>1 day</td><td>3 days</td><td class="center">8</td></tr>
	<tr class="odd-row"><td>Salamander toxin</td><td class="center">12</td><td>Contact</td><td class="center">10</td><td class="center">2 Str</td><td class="center">2 Str</td><td>30 minutes</td><td>1 minute</td><td class="center">2</td></tr>
	<tr><td>Shellfish Toxin</td><td class="center">24</td><td>Injury</td><td class="center">22</td><td class="center">1 Str, 3 Con</td><td class="center">2 Str</td><td>Instantaneous</td><td>1 minute</td><td class="center">12</td></tr>
	<tr class="odd-row"><td>Shellfish Toxin</td><td class="center">16</td><td>Ingested</td><td class="center">18</td><td class="center">1 Str, 2 Con</td><td class="center">1 Str</td><td>30 minutes</td><td>1 minute</td><td class="center">8</td></tr>
	<tr><td>Stone fish toxin</td><td class="center">17</td><td>Injury</td><td class="center">15</td><td class="center">2 Con</td><td class="center">1 Con</td><td>Instantaneous</td><td>3 hours</td><td class="center">6</td></tr>
	<tr class="odd-row"><td>Tarantula</td><td class="center">12</td><td>Injury</td><td class="center">10</td><td class="center">1 Dex</td><td class="center">1 Dex</td><td>2 hours</td><td>3 days</td><td class="center">3</td></tr>
	<tr><td>Wolfsbane</td><td class="center">11</td><td>Ingested</td><td class="center">13</td><td class="center">1 Con</td><td class="center">4 Con</td><td>30 minutes</td><td>1 minute</td><td class="center">5</td></tr>
</table>

<h2>Using Poisons</h2>
<p>Anytime a character fails a <a href="Skills.php?Name=Craft">Craft (poison)</a> check by 10 or more, they have inadverdently poisoned themselves with a full dose of whatever poison they are working with.</p>

<p>Weapons can only be envenomed with either a Contact or an Injury poison. The only weapons that can be envenomed are masterwork <a href="EquipmentWeapons.php?Name=Bow">arrows</a>, masterwork <a href="EquipmentWeapons.php?Name=Crossbow">crossbow bolts</a>, masterwork <a href="EquipmentWeapons.php?Name=Javelin">javelins</a>, <a href="EquipmentWeapons.php?Name=Shuriken">shuriken</a>, <a href="EquipmentWeapons.php?Name=Mouth%20Darts">mouth darts</a>, <a href="EquipmentWeapons.php?Name=Blowgun">blowgun darts</a>, <a href="EquipmentWeapons.php?Name=Kakute">kakute</a>, <a href="EquipmentWeapons.php?Name=Nekote">nekote</a> and masterwork <a href="EquipmentWeapons.php?Name=Knife">knives</a>.</p>

<p>It is not straightforward to properly and safely envenom a weapon. A character without ranks in <a href="Skills.php?Name=Craft">Craft (poison)</a> will unknowningly fail to properly dose their weapon half the time, resulting in the poison having no effect on the target. In such a case, when an envenomed weapon is used in a successful attack, roll a d20 and if the result is 10 or less, the poison has no effect. In addition, all characters must make a Dex check against a Difficulty 15 to safely apply the poison. It is possible to take 10 on this check, but not 20. Failing this check means the character has poisoned themselves with a full dose of the poison while handling the weapon.</p>

<p>A character with ranks in <a href="Skills.php?Name=Craft">Craft (poison)</a> can make a Difficulty 5 <a href="Skills.php?Name=Craft">Craft (poison)</a> check in order to envenom a weapon. A successful check means the weapon holds a full dose of poison. Characters with ranks in <a href="Skills.php?Name=Craft">Craft (poison)</a> never unknowingly fail to properly dose their weapon. A character with ranks in <a href="Skills.php?Name=Craft">Craft (poison)</a> can add their ranks to their Dex check to avoid poisoning themselves.</p>

<p>Envenoming a weapon takes one minute for an untrained person, and 30 seconds for someone with ranks in <a href="Skills.php?Name=Craft">Craft (poison)</a>. A character can use the the "Fast Craft" challenge on this check if they wish, reducing the time to either three rounds (with a +5 on the Difficulty) or one round (with a +10 on the Difficulty). The Difficulty for accidental poisoning rises at the same rate as the <a href="Skills.php?Name=Craft">Craft (poison)</a> check.</p>

</div>
</body>
</html>