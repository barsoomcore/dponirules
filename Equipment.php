<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Equipment Basics</title>
<?php include ("Scripts/HeaderScript.php"); ?>
<?php include ("Scripts/Menu.php"); ?>


<h1>EQUIPMENT BASICS</h1>

<h2>On-Hand Objects</h2>
<p>Heroes in DINO-PIRATES OF NINJA ISLAND do not make exhaustive lists of their possessions. They're far too busy doing incredibly cool stuff to worry about the contents of their pockets and purses. Basically, if it's a normal sort of everyday object, you have it. Don't abuse this rule, but don't make a big deal out of it, either.</p>
<p>That said, if the GM feels there might be some doubt as to whether or not a hero has a given object, that character can make a <a href="EquipmentWealth.php">Wealth</a> check to see if he or she has it on hand, as long as the object has a purchase Difficulty of 10 or lower. The <a href="EquipmentWealth.php">Wealth</a> check works the same as for buying the object, except that the character takes a -10 penalty on the check, and he or she can't take 10 or take 20. If the character succeeds, his or her <a href="EquipmentWealth.php">Wealth</a> bonus is unaffected, even if the object's purchase Difficulty is higher than his or her <a href="EquipmentWealth.php">Wealth</a> bonus.</p>
<p>Still, even with this rule, don't be dumb about it.</p>

<a name="Mastercraft"><h2>Mastercraft Objects</h2></a>
<p><a href="EquipmentWeapons.php">Weapons</a>, <a href="EquipmentArmor.php">armor</a>, and some other types of equipment can be constructed as mastercraft objects. The exceptional quality of these objects provides the user a bonus on <a href="Combat.php#AttackBonus">attack rolls</a>, <a href="Combat.php#BaseDefense">Defense</a>, or some other characteristic that improves when the object is used.</p>
<p>A mastercraft object that provides a +1 bonus can usually be purchased on the open market as a custom version of a common object. The increased cost of such an object adds +3 to the purchase Difficulty.</p>
<p>Mastercraft objects with a bonus of +2 or +3 are not common and are generally not for sale. If a mastercraft +2 object could be found for purchase, its cost would add +6 to the normal purchase Difficulty. The cost of a mastercraft +3 object would add +9 to the normal purchase Difficulty.</p>

<h3>Special Mastercraft Weapons</h3>
<p>Because the mastercraft property can apply to nearly any quality of an object, some weapons can be made that have special properties for those who know how to make use of them.</p>
<p><b>Hooked:</b> Any <a href="EquipmentWeapons.php?Type=Martial=Melee">martial</a> or <a href="EquipmentWeapons.php?Type=Simple=Melee">simple</a> melee weapon can have a hook added to it as a standard mastercraft property (+3 purchase Difficulty). A hooked weapon requires an <a href="Feats.php?Name=Exotic%20Weapon%20Training">Exotic Weapon Training</a> feat to gain any benefit from, but a character who does take <a href="Feats.php?Name=Exotic%20Weapon%20Training">Exotic Weapon Training</a> for the hooked version of their weapon can make <a href="CombatActions.php?Name=Disarm">disarm</a> and <a href="CombatActions.php?Name=Trip">trip</a> attempts with a +2 bonus, just as though they had the <a href="Feats.php?Name=Improved%20Disarm">Improved Disarm</a> and <a href="Feats.php?Name=Improved%20Trip">Improved Trip</a> feats. This weapon bonus stacks with those feats. A weapon that already provides such a bonus cannot have this property.</p>
<p><b>Flashy:</b> Any <a href="EquipmentWeapons.php?Type=Martial=Melee">martial</a> or <a href="EquipmentWeapons.php?Type=Simple=Melee">simple</a> melee weapon can have tassels or rings added to it so that it dazzles and surprises the enemy. A flashy weapon provides a +2 bonus on <a href="CombatActions.php?Name=Feint">feint</a> actions using <a href="Skills.php?Name=Bluff">Bluff</a>, <a href="Skills.php?Name=Intimidate">Intimidate</a> or <a href="Skills.php?Name=Perform">Perform</a> with that weapon.</p>
<p><b>Hold-Out:</b> Any Small or smaller <a href="EquipmentWeapons.php?Type=Martial">martial</a> or <a href="EquipmentWeapons.php?Type=Simple">simple</a> weapon can have this property. Hold-out weapons can more easily be concealed and can be drawn so quickly that a character can surprise their opponents. A hold-out weapon does not suffer the normal -4 penalty on <a href="Skills.php?Name=Sleight%20of%20Hand">Sleight of Hand</a> checks to be concealed as a normal weapon concealed for Quick Draw (see below). In addition, a character with the <a href="Feats.php?Name=Quick%20Draw">Quick Draw</a> feat can draw a hold-out weapon and make a <a href="CombatModifiers.php?Name=Surprise%20Attack">surprise attack</a>, even against an opponent aware of them who has already acted (if that opponent is not aware of the concealed weapon).</p>

<h2>Concealed Weapons and Objects</h2>
<p>Oftentimes heroes will want to have a few more options about them than is evident to others. Use the <a href="Skills.php?Name=Sleight%20of%20Hand">Sleight of Hand</a> skill to attempt to conceal an object.</p>
<p>Drawing a concealed weapon is more difficult than drawing a regularly holstered weapon, and normally requires an <a href="CombatActions.php">standard action</a>. Keeping the weapon in an easier-to-draw position makes concealing it more difficult, imposing a -2 penalty on the <a href="Skills.php?Name=Sleight%20of%20Hand">Sleight of Hand</a> check, as shown on the table below.</p>

<h3>Size and Concealment</h3>
<p>The object's size affects the check result, as shown on Table: Concealing Weapons and Objects. The type of holster used or clothing worn, and any attempt to make a weapon easier to draw, can also affect the check.</p>


<table class="last-row" cellpadding=0 cellspacing=0 width="60%">
<th>Condition</th><th class="center"><a href="Skills.php?Name=Sleight of Hand">Sleight of Hand</a> Modifier</th>
<tr><td><i>Size of weapon or object</i></td></tr>
<tr class="odd-row"><td>Tiny (a ring or similar)</td><td class="center">+6</td></tr>
<tr><td>Small (hand-sized)</td><td class="center">+0</td></tr>
<tr class="odd-row"><td>Bigger than your hand</td><td class="center">-2</td></tr>
<tr><td>Bigger than your head</td><td class="center">-4</td></tr>
<tr class="odd-row"><td>Bigger than your torso</td><td class="center">can't conceal </td></tr>
<tr><td>Clothing is especially loose or bulky</td><td class="center">+2</td></tr>
<tr class="odd-row"><td>Clothing is specifically modified for concealing object (mastercraft clothing)</td><td class="center">+2</td></tr>
<tr><td>Weapon is carried in concealed carry holster</td><td class="center">+4</td></tr>
<tr class="odd-row"><td>Weapon can be drawn normally</td><td class="center">-2</td></tr>
<tr><td>Weapon can be drawn as free action with <a href="Feats.php?Name=Quick%20Draw">Quick Draw</a> feat</td><td class="center">-4</td></tr>
</table>

</div>
</body>
</html>