<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>

<style>
	#statblocktable { margin-left: auto; margin-right: auto }
</style>
<script type="text/javascript" src="/dponiwiki/media/scripts/jquerymin.js"></script>
<script type="text/javascript" src="/dponiwiki/media/scripts/dponi_statblock.js"></script>

<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Creatures: ".$querylist{1}."</title>";
}
else {
	echo "<title>Creatures</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?>
<?php include ("Scripts/CreaturesScript.php") ?> 

<script type="text/javascript">
	$(document).ready(function(){
		if ("<?php print $querylist{1}; ?>"){
			var data = <?php CreaturesJSON ($querylist{0}, $querylist{1}); ?>;
			var creature = new DPoNIStatblock(data.fields, data.role_name, "#statblock", data.npc_name);
			
			creature.display();
			$('#title').html(data.npc_name);
			$('#description').html(data.description);
			$('#details').html(data.details);
		}
	});
</script>

<h1 id="title">CREATURES</h1>

<?php MenuList ("Creature", "Data/CreaturesList.data", "Creatures.php"); ?>

<p id="description"></p>
<div id="statblock"></div>
<div id="details">
	<p>Below is a brief list of some of the sorts of creatures heroes might encounter as they voyage through the jungle-infested islands of the DINO-PIRATES. Of course, many islands remain unexplored and home to unknown creatures, so this list is by no means exhaustive.</p>
	
	
	<?php CreaturesTable ("Name", "All"); ?>
	
	<h2 style="clear:left;padding-top:2em">Creature Descriptions</h2>
	<p>Each creature is organized in the same general format, as described in the following text. Much of the information on a creature is condensed into a creature statistics block, the contents of which are explained below. </p>
	<p>Each creature in this section is given in the same general format, and includes the following information:</p>
	
	<h3>Level</h3>
	<p>Creatures have levels much like heroes and other characters do. However, most creatures do not have <a href="Roles.php">roles</a> or, more precisely, "creature" is their role in the story. Creature level can be treated much like role level in most ways, and is used to determine many of the creature's capabilities, just like role level for heroes.</p>
	<p>A creature's level also serves as a rough guideline of what sort of challenge it should pose to the heroes. Generally, a creature the same level as the heroes should pose a reasonable challenge, while a lower-level creature is less of a threat and a higher-level creature is a more serious challenge. A creature more than two levels higher than the heroes may be too great of a challenge at the heroes' present level.</p>
	
	<h3><a href="Roles.php">Role</a></h3>
	<p>While most creatures do not have roles (apart from being creatures), some can acquire levels in one or more of the heroic roles (<a href="RolesAdept.php">adept</a>, <a href="RolesExpert.php">expert</a>, <a href="RolesWarrior.php">warrior</a>, <a href="RolesGeneralist.php">generalist</a>). Role levels apply to creatures the same way they do to others and creatures gain the usual benefits of the role, including <a href="Combat.php">combat</a> and <a href="BasicsSavingThrows.php">saving throw modifiers</a>, <a href="Skills.php">skills</a>, and <a href="Feats.php">feats</a>. Some capabilities may be of more or less use to certain creatures, and the Narrator decides which <a href="Skills.php">skills</a> or <a href="Feats.php">feats</a>, for example, a particular creature may acquire and use.</p>
	
	<h3><a href="CreaturesTypes.php">Type</a> & <a href="CreaturesSubTypes.php">Subtype</a></h3>
	<p>A creature's <a href="CreaturesTypes.php">type</a> has a significant effect on its capabilities. <a href="CreaturesTypes.php">Type</a> essentially serves as the creature's role. Note that 1st-level creatures with a heroic <a href="Roles.php">role</a> determine their <a href="Combat.php#CombatBonus">combat bonus</a>, <a href="BasicsSavingThrows.php">saves</a>, <a href="Skills.php">skills</a> and <a href="Feats.php">feats</a> according to their heroic <a href="Roles.php">role</a> alone (as heroes do). Monsters with multiple levels in any given creature <a href="CreaturesTypes.php">type</a> that gain levels in a heroic <a href="Roles.php">role</a> do so using <a href="RolesAdvancement.php">the rules for multi-role heroes</a>.</p>
	
	<h4>Creature <a href="CreaturesSubTypes.php">Subtypes</a></h4>
	<p><a href="CreaturesSubTypes.php">Subtypes</a> are descriptors added on to a creature type in parentheses. Not all creatures have a <a href="CreaturesSubTypes.php">subtype</a>, while others have multiple <a href="CreaturesSubTypes.php">subtypes</a>.</p>
	
	<h3>Movement</h3>
	<p>A creature's movement speed is the amount of distance it can cover in one <a href="CombatActions.php">move action</a>. If a creature wears <a href="EquipmentArmor.php">armor</a> that reduces its speed, this is indicated along with a note specifying the  <a href="EquipmentArmor.php">armor</a> type; the creature's base unarmored speed follows.</p>
	<p>If the creature has other modes of movement, these are given after the main entry. Unless noted otherwise, such modes of movement are natural, not powers.</p>
	<p><b>Burrow:</b> The creature can tunnel through dirt but not through rock, unless the descriptive text says otherwise.</p>
	<p><b>Climb:</b> A creature with a climb speed has a +8 bonus on <a href="Skills.php?Name=Climb">Climb</a> checks. The creature must make a <a href="Skills.php?Name=Climb">Climb</a> check to climb any wall or slope with a Difficulty greater than 0, but it can always take 10, even if rushed or threatened while climbing. The creature climbs at the given speed. If it attempts an accelerated climb, it moves at double the given climb speed (or its normal land speed, whichever is less) and makes a single <a href="Skills.php?Name=Climb">Climb</a> check at a -5 penalty. Creatures cannot move all out while climbing. The creature can use its <a href="Combat.php#Dodge">Dodge</a> (if any) while climbing, and opponents get no special bonus on their attack rolls against a climbing creature.</p>
	<p><b>Fly:</b> A creature with a fly speed can move through the air at the indicated speed if carrying no more than a <a href="PlayingPhysical.php#Carrying">light load</a>. (Note that medium armor does not necessarily constitute a medium load.) All fly speeds include a parenthetical note indicating maneuverability, as follows:</p>
	<ul>
		<li><b>Perfect:</b> The creature can perform almost any aerial maneuver it wishes.</li>
		<li><b>Good:</b> The creature is very agile in the air (like a housefly or a hummingbird), but cannot change direction as readily as those with perfect maneuverability.</li>
		<li><b>Average:</b> The creature can fly as adroitly as a small bird.</li>
		<li><b>Poor:</b> The creature flies as well as a very large bird.</li>
		<li><b>Clumsy:</b> The creature can barely maneuver at all.</li>
	</ul>
	<p>Flying creatures can make dive attacks. A dive attack works like a <a href="CombatActions.php?Name=Charge">charge</a>, but the diving creature must move a minimum of 30 feet. Creatures can <a href="CombatActions.php?Name=Move%20All%20Out">move all out</a> while flying, provided they fly in a relatively straight line.</p>
	<p><b>Swim:</b> A creature with a swim speed can move through water at the given speed without making <a href="Skills.php?Name=Swim">Swim</a> checks. It gains a +8 bonus on any <a href="Skills.php?Name=Swim">Swim</a> check to perform some special action or avoid a hazard. The creature can always take 10, even if distracted or endangered when swimming. Creatures can <a href="CombatActions.php?Name=Move%20All%20Out">move all out</a> while swimming, provided they swim in a straight line.</p>
	
	<h3><a href="BasicsAbilities.php">Abilities</a></h3>
	<p>Creatures have the same ability scores as heroes: Strength (Str), Dexterity (Dex), Constitution (Con), Intelligence (Int), Wisdom (Wis), and Charisma (Cha), although some creatures lack certain ability scores, as outlined in <a href="BasicsAbilities.php#Nonexistent">the "Nonexistent Abilities" section</a>.</p>
	
	<h4>Intelligence</h4>
	<p>A creature can speak all the languages mentioned in its descriptive text. Any creature with an Intelligence score of -3 or higher understands at least one language.</p>
	
	<h3><a href="Skills.php">Skills</a></h3>
	<p>This section lists the creature's <a href="Skills.php">skills</a> along with skill modifiers, including adjustments for ability scores and any bonuses from feats or other traits.</p>
	
	<h3><a href="Feats.php">Feats</a></h3>
	<p>This section lists any <a href="Feats.php">feats</a> the creature may have. Creatures must meet the feat's prerequisites like characters must.</p>
	
	<a name="BonusFeats"><h4>Bonus Feats</h4></a>
	<p>Some creatures receive bonus feats based on their <a href="CreaturesTypes.php">type</a>.</p>
	
	<h3><a href="CreaturesTraits.php">Traits</a></h3>
	<p>Creatures often have various special <a href="CreaturesTraits.php">traits</a> listed in their statistics and described here.</p>
	
	<h3><a href="Combat.php">Combat</a></h3>
	<p>This section lists the creature's <a href="Combat.php#AttackBonus">attack bonus</a>, <a href="Combat.php#ManeuverBonus">maneuver bonus</a>, <a href="Combat.php#Damage">damage</a>, <a href="Combat.php#BaseDefense">Defense</a>, and <a href="CombatInitiative.php">initiative bonus</a>, modified by the creature's other traits, as appropriate.</p>
	
	<h3><a href="BasicsSavingThrows.php">Saving Throws</a></h3>
	<p>The creature's Toughness, Fortitude, Reflex, and Will saving throws are listed here. The modifiers take into account all of the creature's other traits.</p>
	
	<h3><a href="BasicsConviction.php">Conviction</a></h3>
	<p>Creatures generally have no <a href="BasicsConviction.php">Conviction</a> points, but can gain <a href="BasicsConviction.php">Conviction</a> by taking levels in a heroic <a href="Roles.php">role</a>, in which case the creature acquires the same <a href="BasicsConviction.php">Conviction</a> as a hero of that level. This is ignored if the Narrator has determined that a particular creature is a <a href="CombatModifiers.php?Name=Minions">minion</a>, since minions don't have <a href="BasicsConviction.php">Conviction</a>.</p>
	
	<h3><a href="BasicsReputation.php">Reputation</a></h3>
	<p>A creature usually has a <a href="BasicsReputation.php">Reputation</a> bonus of +0 but may increase the bonus by taking levels in a heroic <a href="Roles.php">role</a>. The Narrator may decide certain creatures have a higher <a href="BasicsReputation.php">Reputation</a> bonus, as suits the story.</p>
</div>

</div>
</body>
</html>