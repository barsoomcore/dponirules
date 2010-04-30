<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Combat</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>
<?php include ("Scripts/CombatActionsScript.php"); ?>


<h1>COMBAT</h1>
<p>Combat is played out in rounds, and in each round everybody acts in turn in a regular cycle. Combat usually runs in the following way.</p>
<ol>
    <li>Each combatant starts the battle <a href="PlayingConditions.php?Name=Flat-Footed">flat-footed</a>. Once a combatant acts, he or she is no longer <a href="PlayingConditions.php?Name=Flat-Footed">flat-footed</a>.
    <li>The Narrator determines which characters are aware of their opponents at the start of the battle. If some but not all of the combatants are aware of their opponents, a surprise round happens before regular rounds begin. The combatants who are aware of their opponents can act in the surprise round, so they roll for <a href="CombatInitiative.php">initiative</a>. In <a href="CombatInitiative.php">initiative</a> order (highest to lowest), combatants who started the battle aware of their opponents each take one move or attack action. Combatants who were unaware don't get to act in the surprise round. If no one or everyone starts the battle aware, there is no surprise round.
    <li>Combatants who have not yet rolled <a href="CombatInitiative.php">initiative</a> do so. All combatants are now ready to begin their first regular round.
    <li>Combatants act in <a href="CombatInitiative.php">initiative</a> order, each choosing at least one <a href="CombatActions.php?Time=Standard">standard action</a> and one <a href="CombatActions.php?Time=Move">move action</a>.
    <li>When everyone has had a turn, the combatant with the highest <a href="CombatInitiative.php">initiative</a> acts again, and steps 4 and 5 repeat until combat ends.
</ol>

<h2>Combat Statistics</h2>
<p>This section summarizes the fundamental combat statistics. The numbers involved are:</p>
<ul>
	<li><a href="#CombatBonus">Combat Bonus</a></li>
	<li><a href="#AttackBonus">Attack Bonus</a></li>
	<li><a href="#ManeuverBonus">Maneuver Bonus</a></li>
	<a name="CombatBonus"><li><a href="#Damage">Damage</a></li></a>
	<li><a href="#BaseDefense">Base Defense</a></li>
	<li><a href="#Dodge">Dodge</a></li>
	<li><a href="#Parry">Parry</a></li>
	<li><a href="#SavingThrows">Saving Throws</a></li>
</ul>

<a name="AttackBonus"><h3>Combat Bonus</h3></a>
<p>Your combat bonus is the fundamental number upon which your effectiveness in combat is determined. Your combat bonus is based on your <a href="Roles.php">role(s) and level</a> and applies to your <a href="#AttackBonus">Attack Bonus</a>, <a href="#ManeuverBonus">Maneuver Bonus</a>, and your <a href="#BaseDefense">Base Defense</a>.</p>

<h3>Attack Bonus</h3></a>
<p>Use your attack bonus whenever you want to strike your opponent and deal damage. To make an attack you roll a d20 and add our attack bonus. If your result meets or exceeds your opponent's <a href="#BaseDefense">Defense</a> (or <a href="#Dodge">Dodge</a> or <a href="#Parry">Parry</a>, if the opponent is using them), you score a hit and may deal damage. A character's attack bonus is:</p>
<p class="notation">Combat Bonus + Dexterity + Attack Size Modifier + Miscellaneous Modifiers - range penalty</p>

<a href="#CombatBonus"><h5>Combat Bonus</h5></a>
<p>Your skill in combat, based on your <a href="Roles.php">role(s) and level</a>, determines your basic ability to successfully strike a target.</p>

<h5>Dexterity</h5>
<p>Speed, agility, and accuracy make it easier to hit the target. You add your character's Dexterity score to your combat bonus to reflect this.</p>

<h5>Attack Size Modifier</h5>
<p>Smaller targets are harder to hit, while larger targets are easier. A <a href="CharGenSize.php#SizeTable">size-based Attack Modifier</a> is used to reflect this. This bonus applies to both your attack bonus and your <a href="#BaseDefense">Base Defense</a> Since the same Attack Modifier applies to two opponents of the same size, they strike each other normally. </p>

<h5>Miscellaneous Modifiers</h5>
<p>The circumstances of your attack may involve a modifier to your attack bonus. Attacking while prone, for example, imposes a -4 penalty on melee attack rolls. See <a href="CombatModifiers.php">Combat Modifiers</a> for a detailed list of modifiers. In addition, a number of <a href="Feats.php">feats</a> can modify your attack bonus, such as <a href="Feats.php?Name=Attack%20Focus">Attack Focus</a>.</p>

<h5>Range Penalty</h5>
<p>The range penalty for a ranged weapon depends on what weapon the character is using and how far away the target is. All <a href="EquipmentWeapons.php?Range=Ranged">ranged weapons and thrown weapons</a> have a range increment. Any attack from a distance of less than one range increment is not penalized for range. However, each full range increment causes a cumulative -2 penalty on the attack roll. A thrown weapon has a maximum range of five range increments. Ranged weapons that fire projectiles can shoot up to ten increments.</p>

<a name="ManeuverBonus"><h5>Automatic Hits and Misses</h5></a>
<p>A natural 1 (the d20 comes up 1) on the attack roll is always a miss. A natural 20 (the d20 comes up 20) is always a hit. A natural 20 is also always a threat-a possible critical hit.</p>

<h3>Maneuver Bonus</h3>

<p>Use your maneuver bonus whenever you want to make a special sort of combat action: <a href="CombatActions.php?Name=Trip">trip</a> or <a href="CombatActions.php?Name=Disarm">disarm</a> your opponent, to <a href="CombatActions.php?Name=Grapple">grapple</a> with him or <a href="CombatActions.php?Name=Bull%20Rush">push him backwards</a> or other such maneuvers. To make one of these maneuvers you roll a d20 and add your maneuver bonus. A character's maneuver bonus is:</p>

<p class="notation">Combat Bonus + Strength + Special Size Modifier + Miscellaneous Modifiers</p>

<p>The maneuver roll is made against a Difficulty of 10 plus the target's maneuver bonus:</p>

<p class="notation">Maneuver Difficulty = 10 + Maneuver Bonus</p>

<p>Only creatures with an Intelligence of -3 or greater can attempt maneuvers at all. Creatures with an Intelligence of -4 or less have a Maneuver Bonus, to use in determining their Maneuver Difficulty (calculated as usual), but they cannot attempt special maneuvers themselves.</p>

<p>The following actions use the maneuver bonus:

<?php ActionTitleList("Type", "Maneuver"); ?></p>

<a href="#CombatBonus"><h5>Combat Bonus</h5></a>
<p>Your skill in combat, based on your <a href="Roles.php">role(s) and level</a>, determines your basic ability to successfully perform maneuvers in combat.</p>

<h5>Strength</h5>
<p>Power and force make it easier to overwhelm your opponent, so you add your strength to all maneuver rolls.</p>

<h5>Maneuver Size Modifier</h5>
<p>Larger creatures can more easily dominate smaller creatures. A special <a href="CharGenSize.php#SizeTable">size-based Maneuver Modifier</a> is used to reflect this.</p>

<h5>Miscellaneous Modifiers</h5>
<p>The circumstances of your maneuver may involve a modifier to your maneuver bonus. Attempting a <a href="CombatActions.php?Name=Grapple">grapple</a> without both hands free, for example, imposes a -4 penalty on your maneuver roll. See <a href="CombatModifiers.php">Combat Modifiers</a> for a detailed list of modifiers. In addition, any <a href="Feats.php">feats</a> that modify your <a href="#AttackBonus">attack bonus</a> with the weapon you are using to perform the maneuver (if any) also affect your maneuver bonus (both for attempting maneuvers and resisting them).</p>

<h5><a name="Damage">Automatic Hits and Misses</a></h5>
<p>A natural 1 (the d20 comes up 1) on the maneuver roll is always a failure, regardless of the target's Maneuver Difficulty. A natural 20 (the d20 comes up 20) is likewise always a success.</p>

<h3>Damage</h3>
<p>When you hit with an attack, you may deal damage. Each attack has a damage bonus. This is typically a <a href="EquipmentWeapons.php">weapon's</a> damage modified by your Strength. However, some attacks have a fixed damage.</p>

<p class="notation">Damage Bonus = Weapon Damage + Strength</p>

<h5>Weapon Damage</h5>
<p><a href="EquipmentWeapons.php">Weapons</a> have a damage modifier, showing how much damage they inflict. Most projectile weapons inflict a fixed damage bonus. Melee and thrown weapons add the wielder's Strength score to their damage.</p>

<h5>Strength</h5>
<p>Your Strength measures how hard you can hit, so your Strength score applies to damage when you attack unarmed or with a melee or thrown weapon.</p>

<h5>Lethal and Non-lethal Damage</h5>
<p>Damage comes in two types: lethal and non-lethal. Lethal damage does lasting injury and can kill. Non-lethal damage can <a href="PlayingConditions.php?Name=Stunned">stun</a> and cause <a href="PlayingConditions.php?Name=Unconscious">unconsciousness</a>, but causes no serious injury. Some attacks can only deal non-lethal damage; attacks that deal lethal damage can always deal non-lethal damage at the wielder's discretion.</p>

<h5>Critical Hits</h5>
<p>When you make an attack roll and get a natural 20 (the d20 actually shows 20), you have scored a threat. The hit might be a critical hit (sometimes called a crit). To find out whether it's a critical hit, make another attack roll, using the same attack bonus. If this second roll equals or exceeds the target's <a href="#BaseDefense">Defense</a> (or <a href="#Dodge">Dodge</a> or <a href="#Parry">Parry</a>), the attack is a critical hit. If not, the attack still hits, but as a normal attack, not a critical hit. A critical hit increases the attack's damage according to the type of weapon or attack. If unspecified, a critical hit increases damage by +3.</p>

<a name="BaseDefense"><h5>Increased Threat Range</h5></a>
<p>Characters with the <a href="Feats.php?Name=Improved%20Critical">Improved Critical</a> feat can score a threat on a natural result less than 20. Some weapons have higher multipliers or threat ranges; see the <a href="EquipmentWeapons.php">Weapons list</a>. Any attack roll that doesn't result in a hit is not a threat. Only natural 20s always hit.</p>

<h3>Base Defense</h3>
<p>When not actively defending themselves (but still able to react and move), a hero has to rely on her Base Defense. This is used whenever a character is not aware of the incoming attack (for example, when they are <a href="PlayingConditions.php?Name=Flat-Footed">flat-footed</a>). Opponents attacking a <a href="PlayingConditions.php?Name=Flat-Footed">flat-footed</a> hero must exceed her Base Defense in order to strike her. A character's Base Defense is equal to:</p>
<p class="notation">10 + Combat Bonus + Attack Size Modifier</p>

<a href="#CombatBonus"><h5>Combat Bonus</h5></a>
<p>Your skill in combat allows you to avoid attacks, so you add your combat bonus to your defense. If you can't move, you can't use your combat bonus. For example, you lose your bonus if you're bound or unable to move. </p>

<h5>Attack Size Modifier</h5>
<p>The bigger an opponent is, the easier it is to hit in combat. The smaller it is, the harder it is to hit. The same <a href="CharGenSize.php#SizeTable">Attack Modifier for size</a> applies to your Base Defense as to your <a href="#AttackBonus">attack bonus</a>. Since this same modifier applies to attack rolls a creature doesn't have a hard time attacking another creature of the same size.</p>

<h3>Dodge and Parry</h3>
<p>These two values represent two different ways of avoiding incoming attacks. Any character who is aware of their opponent and able to act can choose either of these values against the attack. Dodge can be used against both melee and ranged attacks, whereas Parry can only be used against melee attacks.</p>
<p>You can choose either value against every attack you face in a round, and may choose a different value against different attacks; so for example, if you are fired upon by a bow-wielding native, you can choose to Dodge that attack, and in the same round if a knife-wielding madman attacks you, you can choose to Parry that attack. <a name="Dodge">Your opponents </a>must meet or exceed whichever value you choose in order to strike you.</p>
<p>All <a href="CombatModifiers.php">modifiers</a> that apply to your Defense apply to your Base Defense, your Dodge and your Parry.</p>

<h3>Dodge</h3>
<p>When a character is aware of an attack, they can actively attempt to avoid it. This is not an action; the character can choose to use their Dodge against any incoming attack. An opponent trying to strike the hero needs to meet or 	exceed their Dodge value with an attack roll in order to score a hit. Characters cannot use Dodge when they are <a href="PlayingConditions.php?Name=Flat-Footed">flat-footed</a> or unable to move. A character's Dodge value is equal to:</p>

<p class="notation">Base Defense + Dexterity + Miscellaneous Modifiers</p>

<a href="#BaseDefense"><h5>Base Defense</h5></a>
<p>Your Base Defense determines your starting point.</p>

<h5>Dexterity</h5>
<p>Since Dodge represents your ability to avoid incoming attacks, your speed and agility are applied.</p>

<a name="Parry"><h5>Miscellaneous Modifiers</h5></a>
<p>There are a number of <a href="Feats.php">feats</a> (most particularly <a href="Feats.php?Name=Dodge%20Focus">Dodge Focus</a>) that affect your Dodge value. In addition, circumstances might grant you a bonus to your Dodge.</p>

<h3>Parry</h3>
<p>When a character is aware of an attack and able to react, they can actively attempt to block it. This is not an action; the character can choose to use their Parry against any incoming melee attack. An opponent trying to strike the hero needs to meet or exceed their Parry value with an attack roll in order to score a hit. Characters cannot use Parry when they are <a href="PlayingConditions.php?Name=Flat-Footed">flat-footed</a> or unable to move, or against ranged attacks. A character's Parry value is equal to:</p>

<p class="notation">Base Defense + Strength + Miscellaneous Modifiers</p>

<a href="#BaseDefense"><h5>Base Defense</h5></a>
<p>Here it is again. This number's important, you know.</p>

<h5>Strength</h5>
<p>When blocking an attack, your ability to withstand incoming force is critical, so you apply your Strength to your Parry value.</p>

<a name="SavingThrows"><h5>Miscellaneous Modifiers</h5></a>
<p>Any modifiers that affect your <a href="#AttackBonus">attack bonus</a> with the weapon you are using to parry also apply to your Parry.</p>

<h3>Saving Throws</h3>
<p>When you’re subjected to a potentially harmful effect, you get a saving throw to avoid or reduce it. Like an attack roll or check, a saving throw is a d20 roll plus a bonus based on an ability score and other modifiers.</p>

<p>Your saving throw is equal to the following:</p>

<p class="notation">Saving Throw = Dd20 + Base Save Bonus + Ability Score + Miscellaneous Modifiers </p>

<p>The Difficulty for a save is based on the attack itself. The four different kinds of saving throws are the following:</p>

<h5>Toughness</h5>
<p>Toughness is your ability to resist physical punishment and direct damage. Your Toughness saving throw equals your Constitution score, modified by <a href="Feats.php">feats</a> like <a href="Feats.php?Name=Defensive%20Roll">Defensive Roll</a> and <a href="Feats.php?Name=Tough">Tough</a>, plus any armor you are wearing.</p>

<h5>Fortitude</h5>
<p>Your ability to resist attacks against your vitality and health, such as poison and disease is your Fortitude. You apply your Constitution score to your Fortitude saving throws.</p>

<h5>Reflex</h5>
<p>This is your ability to avoid harm through reaction time and agility, including dodging explosions and crashes. You apply your Dexterity score to Reflex saving throws.</p>

<h5>Will</h5>
<p>Will is your resistance to mental influence and domination as well as certain powers. You apply your Wisdom score to your Will saving throws.</p>

</div>
</body>
</html>