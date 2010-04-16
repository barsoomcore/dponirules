<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Damage</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>DAMAGE</h1>
<p>DINO-PIRATES OF NINJA ISLAND uses a Damage Track to record a character's health. Whenever a character is struck by an attack, that character rolls their Toughness save against the total Damage of the attack. This is a roll of a d20 plus the character's Toughness save bonus against a base damage of 15 plus the attacker's Damage bonus. If the Toughness save fails to match or exceed the total Damage, the character is injured, with the degree of injury depending on the amount by which the Toughness save missed the total Damage.</p>

<p class="notation">Toughness Save = d20 + Constitution + Feats + Modifiers</p>

<p class="notation">Total Damage = 15 + Weapon Damage Bonus + Strength + Feats + Modifiers</p>

<p>For every five points by which the Toughness save missed, the injury suffered is increased by one along the standard scale of <a href="PlayingConditions.php?Name=Hurt">Hurt</a>, <a href="PlayingConditions.php?Name=Wounded">Wounded</a>, <a href="PlayingConditions.php?Name=Disabled">Disabled</a> and <a href="PlayingConditions.php?Name=Dying">Dying</a>.</p>

<p>Each Damage result has a number of boxes to be checked off. There are 3 <a href="PlayingConditions.php?Name=Hurt">Hurt</a> boxes, 2 <a href="PlayingConditions.php?Name=Wounded">Wounded</a> boxes, 1 <a href="PlayingConditions.php?Name=Disabled">Disabled</a> box and 1 <a href="PlayingConditions.php?Name=Dying">Dying</a> box. If a target suffers a result for which all boxes are already checked off, check off the next highest result. Note that boxes may be checked off at a higher level even if lower level boxes are still open due to the severity by which the Toughness save failed: thus if a character has suffered NO damage but misses a Toughness save by 15, they still take the <a href="PlayingConditions.php?Name=Dying">Dying</a> condition (and mark an "X" in the Dying box) even if every other box below that is open.</p>

<p>Here is the standard DPoNI character sheet's Damage Track:</p>

<a name="NonLethalDamage"><img src="/dponiwiki/media/images/DPoNIDamage.png"></a>

<p>Note that there's also a box for "<a href="PlayingConditions.php?Name=Dead">Dead</a>" even though, well, if you check that one off, you're dead. But we thought you'd appreciate the drama of the gesture.</p>

<h2>Non-lethal Damage</h2>
<p>Non-lethal damage uses the same damage track, but with different results - <a href="PlayingConditions.php?Name=Bruised">Bruised</a>, <a href="PlayingConditions.php?Name=Dazed">Dazed</a>, <a href="PlayingConditions.php?Name=Staggered">Staggered</a> and <a href="PlayingConditions.php?Name=Unconscious">Unconscious</a>. Lethal damage always includes the corresponding non-lethal damage. For example, this means that <a href="PlayingConditions.php?Name=Disabled">Disabled</a> characters are also <a href="PlayingConditions.php?Name=Staggered">Staggered</a>, and therefore lose one full-round action after suffering a <a href="PlayingConditions.php?Name=Disabled">Disabled</a> result.</p>

<p>If the target suffers non-lethal damage, mark it on the damage track with a "/" (and lethal damage as "X"). Non-lethal damage comes always on top of lethal damage, and overflows to the next damage level. Eg., if you have 2 <a href="PlayingConditions.php?Name=Hurt">Hurt</a> marks, and suffer 2 <a href="PlayingConditions.php?Name=Bruised">Bruised</a> results, mark 1 <a href="PlayingConditions.php?Name=Bruised">Bruised</a>. The second <a href="PlayingConditions.php?Name=Bruised">Bruised</a> overflows into the next level - mark 1 <a href="PlayingConditions.php?Name=Dazed">Dazed</a>.</p>

<p>When you suffer additional lethal damage, put it into the free boxes. If there are no free boxes on a given level, convert the non-lethal damage marks into the lethal. In the above example you have 2 <a href="PlayingConditions.php?Name=Hurt">Hurt</a> marks, 1 <a href="PlayingConditions.php?Name=Bruised">Bruised</a> mark and 1 <a href="PlayingConditions.php?Name=Dazed">Dazed</a> mark. If you suffer 3 <a href="PlayingConditions.php?Name=Hurt">Hurt</a> results, 2 of them overflow into <a href="PlayingConditions.php?Name=Wounded">wounded</a> level. You will have additionately 1 remaining <a href="PlayingConditions.php?Name=Dazed">Dazed</a> mark. The <a href="PlayingConditions.php?Name=Bruised">Bruised</a> mark was converted into <a href="PlayingConditions.php?Name=Hurt">Hurt</a>.</p>

<p>You don't have to erase and re-draw every mark on your Damage track. A non-lethal mark can be transformed into a lethal one by drawing an crisscrossing line to create an X.</p>

<h2>Getting Knocked Out</h2>
<p>Bad guys very often look to deal non-lethal damage in DPoNI, and as a result, characters getting knocked <a href="PlayingConditions.php?Name=Unconscious">unconscious</a> ought to be more common in this game than in many other RPGs. This enables the GM to worry less about relative power ratings -- if the heroes run into someone much more powerful than they are, and refuse to run away, well, the campaign doesn't grind to a halt. <a name="ImpossibleToughnessSaves">They just wake up</a> in prison with a gloating bad guy (and almost certainly a bumbling prison guard or two, if not a sympathetic princess or a mysterious fellow prisoner...).</p>

<p>To make this outcome easier, all weapons that normally deal only lethal damage can always deal non-lethal damage at the user's desire, at no penalty on the <a href="Combat.php#AttackBonus">attack roll</a>.</p>

<h2>Impossible Toughness Saves</h2>
<p>A natural 20 on a Toughness save never results in damage beyond <a href="PlayingConditions.php?Name=Bruised">bruised</a> or <a href="PlayingConditions.php?Name=Hurt">hurt</a>, no matter how much the Toughness save was missed by. Even in cases where a result of 20 + the character's Toughness save would not be enough to avoid higher damage, on a natural 20, fate intervenes and spares the character anything other than a slight injury.</p>

<h2>Damage Conditions</h2>
<p>Damaged characters can suffer from any of seven conditions given on the Damage Track and described on the <a href="PlayingConditions.php">Conditions page</a>.<p>

<ul>
	<li><a href="PlayingConditions.php?Name=Bruised">Bruised</a></li>
	<li><a href="PlayingConditions.php?Name=Hurt">Hurt</a></li>
	<li><a href="PlayingConditions.php?Name=Dazed">Dazed</a></li>
	<li><a href="PlayingConditions.php?Name=Staggered">Staggered</a></li>
	<a name="Recovery"><li><a href="PlayingConditions.php?Name=Unconscious">Unconscious</a></li></a>
	<li><a href="PlayingConditions.php?Name=Wounded">Wounded</a></li>
	<li><a href="PlayingConditions.php?Name=Disabled">Disabled</a></li>
	<li><a href="PlayingConditions.php?Name=Dying">Dying</a></li>
	<li><a href="PlayingConditions.php?Name=Dead">Dead</a></li>
</ul>

<h2>Recovery</h2>
<p>Recovering from damage requires a Constitution check (Difficulty 10). You recover from the worst damage condition only. A successful check transforms a lethal damage mark into non-lethal damage or erases a non-lethal damage mark, while an unsuccessful check means there is no significant improvement for that time period. One recovery check removes or transforms only one mark. You remove the mark of the lowest level present, lethal before non-lethal. Eg - <a href="PlayingConditions.php?Name=Wounded">wounded</a> before <a href="PlayingConditions.php?Name=Hurt">hurt</a>, <a href="PlayingConditions.php?Name=Disabled">disabled</a> before <a href="PlayingConditions.php?Name=Staggered">staggered</a>.</p>

<p>You can make a single recovery check at the end of any <a href="BasicsTime.php">scene</a>. Note that at the end of a scene you automatically recover any <a href="PlayingConditions.php?Name=Bruised">Bruised</a>, <a href="PlayingConditions.php?Name=Hurt">Hurt</a>, <a href="PlayingConditions.php?Name=Dazed">Dazed</a>, <a href="PlayingConditions.php?Name=Staggered">Staggered</a>, and<a href="PlayingConditions.php?Name=Unconscious">Unconscious</a> conditions, so the single recovery check is only needed if you have suffered a worse condition.</p>

<p>You can spend <a href="BasicsConviction.php">a Conviction point</a> to get an immediate recovery check DURING a scene from any damage, rather than having to wait. You can also spend <a href="BasicsConviction.php">Conviction</a> on your recovery check (which usually ensures passing it). Note that because you can only spend one <a href="BasicsConviction.php">Conviction</a> point per round unless <a href="PlayingConditions.php?Name=Disabled">disabled</a>, you can't do both (gain a recovery check AND spend <a href="BasicsConviction.php">Conviction</a> on the check). <a href="BasicsConviction.php">Conviction</a> can be spent for recovery from both lethal and non-lethal damage; the character, as usual, rolls a recovery check for his worst damage condition.</p>

<p><a href="PlayingConditions.php?Name=Bruised">Bruised</a> and <a href="PlayingConditions.php?Name=Dazed">dazed</a> conditions fade automatically at a rate of one per minute. <a href="RolesWarrior.php">Warriors</a> can use their role's core ability to spend a <a href="BasicsConviction.php">Conviction point</a> to erase all <a href="PlayingConditions.php?Name=Bruised">bruised</a> and <a href="PlayingConditions.php?Name=Hurt">hurt</a> conditions at any time, even during combat.</p>

<p><a name="Objects">Remember that until you remove the worse condition</a>, you cannot attempt recovery from the lesser condition. Eg you cannot recover from <a href="PlayingConditions.php?Name=Bruised">bruised</a>, <a href="PlayingConditions.php?Name=Dazed">dazed</a> and <a href="PlayingConditions.php?Name=Hurt">hurt</a> conditions if you are <a href="PlayingConditions.php?Name=Wounded">wounded</a>. The <a href="RolesWarrior.php">Warrior</a> core ability is an exception to this rule.</p>

<h2>Damaging an Object</h2>
<p>Objects are easier to hit than characters because they usually don't move, but many are tough enough to shrug off damage.</p>

<h3>Object Defense and Bonuses to Attack</h3>
<p>Objects are harder or easier to hit depending on several factors.</p>
<ul>
	<li><b>Held Objects:</b> Striking a held object is a <a href="CombatActions.php?Name=Sunder">Sunder</a> attempt and should be resolved according to the Sunder rules.</li>
	<li><b>Carried or Worn Objects:</b> Objects carried or worn by a character have a base Defense equal to the character's <a href="Combat.php#BaseDefense">Defense</a> + the object's size modifier.</li>
	<li><b>Immobile Objects:</b> Immobile objects have a <a href="Combat.php#BaseDefense">Defense</a> of 5 + the object's size modifier. Adjacent attacks get a +4 bonus to hit immobile objects. (If you take a full-round action to aim, you get an automatic hit with an adjacent attack or a +5 bonus with a ranged attack.)</li>
</ul>

<h3>Ineffective Attacks</h3>
<p>The Narrator may determine certain attacks just can't effectively damage certain objects. For example, you will have a hard time breaking open an iron door with a knife, or cutting a rope with a club. In these cases, the Narrator may rule that you inflict no damage to the object at all.</p>

<h3>Effective Attacks</h3>
<p>The Narrator may rule certain attacks are especially effective against some objects. For example, it's easy to light a curtain on fire or rip a piece of cloth. In these cases, the Narrator may increase your damage bonus against the object (or apply a penalty to its Toughness save) or simply say the object is automatically destroyed by a successful attack.</p>

<h3>Object Toughness</h3>
<p>Each object has a Toughness score representing how well it resists damage. An object's Toughness works like a character's Toughness. To determine how much damage an object takes from an attack, roll d20 + Toughness against a Difficulty of 10 + the attack's <a href="Combat.php#Damage">damage bonus</a>. The Toughness scores given on the Substance Toughness table are for approximately 1 inch of the material. Heavier objects increase their Toughness by +1 per doubling in thickness, so a foot-thick stone wall has a Toughness of 12 (base Toughness 8, +4 for approximately four doubling of thickness). Characters can attempt to break through heavier objects a little at a time, rather than all at once, such as chipping away at a stone wall inch by inch.</p>

<table class="last-row" width="300px"><th>Substance</th><th class="center">Toughness</th>
<tr class="odd-row"><td>Paper</td><td class="center">-10</td></tr>
<tr><td>Glass</td><td class="center">0</td></tr>
<tr class="odd-row"><td>Ice</td><td class="center">0</td></tr>
<tr><td>Paper</td><td class="center">0</td></tr>
<tr class="odd-row"><td>Rope</td><td class="center">0</td></tr>
<tr><td>Soil</td><td class="center">2</td></tr>
<tr class="odd-row"><td>Wood</td><td class="center">5</td></tr>
<tr><td>Stone</td><td class="center">8</td></tr>
<tr class="odd-row"><td>Iron</td><td class="center">10</td></tr>
<tr><td>Steel</td><td class="center">15</td></tr></table> 

<h3>Damage to Objects</h3>
<p>Objects suffer both non-lethal and lethal damage as lethal, but ignore non-lethal damage with a bonus less than their Toughness. A "wounded" object is damaged and suffers a 1 point reduction in Toughness. A "disabled" object is badly damaged. Disabled equipment and devices no longer function, while disabled barriers have holes punched through them. A "dying" object is destroyed. Damaged and disabled objects can be repaired. It's up to the Narrator whether or not a destroyed object is repairable; if it is, the Difficulty of the <a href="Skills.php?Name=Craft">Craft</a> check is the same as for creating an entirely new item.</p>

<h3>Breaking Items</h3>
<p>In the case of a character trying to break something outright, such as smashing down a door or snapping bonds, make a Strength check with a Difficulty of 20 + the object's Toughness. Success destroys the object, while failure does no damage. The only difference between this and attacking an object is the character can't slowly wear down an object's Toughness in this way.</p>

</div>
</body>
</html>