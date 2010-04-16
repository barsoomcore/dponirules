<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Weapons: ".$querylist{1}."</title>";
}
else {
	echo "<title>Weapons</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/WeaponsScript.php"); ?> 

<h1>WEAPONS</h1>

<?php

if ($querylist{1} != "") { 

	if ($querylist{0} == "Type" or $querylist{0} == "Range") {
		echo "<h2>";
		echo $querylist{1};
		echo " Weapons</h2>";
	}
	
    if ($querylist{0} == "Range") {
    	WeaponsList("", "All", $querylist{1});
    }
    
    else if ($querylist{0} == "Type") {
    	WeaponsList("Type", $querylist{1}, $querylist{2});
    }
    
	else {
    	WeaponDetail($querylist{0}, $querylist{1});
    }
}

else {
	
	echo "<p>Amongst the overgrown islands and treacherous waters lurk many fearsome foes. Prudent adventurers cover themselves in as much lethal hardware as they can possibly carry. Below are lists of Stuff Fer Killing.</p><p>There are four classes of weapons: <a href=\"EquipmentWeapons.php?Type=Simple\">simple</a>, <a href=\"EquipmentWeapons.php?Type=Martial\">martial</a>, <a href=\"EquipmentWeapons.php?Type=Ninja\">ninja</a> and <a href=\"EquipmentWeapons.php?Type=Exotic\">exotic</a>. <i>Simple</i> weapons can be used by anyone without training. <i>Martial</i> weapons require either the <a href=\"Feats.php?Name=Martial%20Weapon%20Training\">Martial Weapon Training</a> or the <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> feats. Characters without either of those feats suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons. <i>Ninja</i> weapons require the <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> feat. Characters without this feat suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons. Each <i>exotic</i> weapon requires a separate <a href=\"Feats.php?Name=Exotic%20Weapon%20Training\">Exotic Weapon Training</a> feat. Characters without the appropriate feat suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.";
	echo "<h2>Melee Weapons</h2>";
	echo "<p>For them up-close and personal moments. Melee weapons with a listed Range Increment can be thrown.</p>";
	echo "<h3>Simple Weapons</h3>"; 
	echo "<p>These weapons can be used by anyone, whether or not they've had any training in the killin' arts.</p>";
		WeaponsList("Type", "Simple", "Melee");
	echo "<h3>Martial Weapons</h3>"; 
	echo "<p>Only characters with the <a href=\"Feats.php?Name=Martial%20Weapon%20Training\">Martial Weapon Training</a> or <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> feats can use these weapons without penalty. Characters without either of these feats suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.</p>";
		WeaponsList("Type", "Martial", "Melee");
	echo "<h3>Ninja Weapons</h3>";
	echo "<p>Only characters with the <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> feat can use these weapons without penalty. Characters without this feat suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.</p>";
		WeaponsList("Type", "Ninja", "Melee");
	echo "<h3>Exotic Weapons</h3>";
	echo "<p>Each of these weapons requires a different <a href=\"Feats.php?Name=Exotic%20Weapon%20Training\">Exotic Weapon Training</a> feat in order to use properly. Characters without the appropriate feat suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.</p>";
		WeaponsList("Type", "Exotic", "Melee");
		
	echo "<h2>Ranged Weapons</h2>";
	echo "<p>Sometimes you just need a little distance.</p>";
	echo "<h3>Simple Weapons</h3>"; 
	echo "<p>These weapons can be used by anyone, whether or not they've had any training in the killin' arts.</p>";
		WeaponsList("Type", "Simple", "Ranged");
	echo "<h3>Martial Weapons</h3>"; 
	echo "<p>Only characters with the <a href=\"Feats.php?Name=Martial%20Weapon%20Training\">Martial Weapon Training</a> or <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> feats can use these weapons without penalty. Characters without either of these feats suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.</p>";
		WeaponsList("Type", "Martial", "Ranged");
	echo "<h3>Ninja Weapons</h3>";
	echo "<p>Only characters with the <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> feat can use these weapons without penalty. Pesky ninjas. Characters without this feat suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.</p>";
		WeaponsList("Type", "Ninja", "Ranged");
	echo "<h3>Exotic Weapons</h3>";
	echo "<p>Each of these weapons requires a different <a href=\"Feats.php?Name=Exotic%20Weapon%20Training\">Exotic Weapon Training</a> feat in order to use properly. Characters without the appropriate feat suffer a -4 penalty on all <a href=\"Combat.php#AttackBonus\">attack rolls</a> and <a href=\"Combat.php#ManeuverBonus\">maneuver rolls</a> with any of these weapons.</p>";
		WeaponsList("Type", "Exotic", "Ranged");
	echo "<h2><a name=\"CombiningImprovedStrikeWeapons\">Combining Improved Strike Weapons</a></h2>";
	echo "<p><a href=\"EquipmentWeapons.php?Name=Armoured%20Gloves\">Armoured gloves</a>, <a href=\"EquipmentWeapons.php?Name=Bagh%20Nakh\">bagh nakh</a>, <a href=\"EquipmentWeapons.php?Name=Palm%20Claws\">palm claws</a> and <a href=\"EquipmentWeapons.php?Name=Wrist%20Knife\">wrist knives</a> can all be worn in certain combinations. The only limitation is that bagh nakh and palm claws cannot be worn simultaneously. The damage bonus of these weapons stacks if the user has the <a href=\"Feats.php?Name=Improved%20Strike\">Improved Strike</a> feat; otherwise, the user must choose from one attack to the next which weapon he will use to inflict damage.</p>";
	echo "<p>Note that without <a href=\"Feats.php?Name=Ninja%20Weapon%20Training\">Ninja Weapon Training</a> the user will have a -4 on their attack rolls with the <a href=\"EquipmentWeapons.php?Name=Bagh%20Nakh\">bagh nakh</a> or the <a href=\"EquipmentWeapons.php?Name=Palm%20Claws\">palm claws</a>, and without <a href=\"Feats.php?Name=Exotic%20Weapon%20Training\">Exotic Weapon Training (wrist knife)</a> the user will have a -4 on their attack rolls with the wrist knife. A user with <a href=\"Feats.php?Name=Improved%20Strike=\">Improved Strike</a> but without the appropriate Weapon Training feat takes that -4 penalty on all attacks if they wish to stack the damage bonus of those weapons.</p>";
	echo "<p><a href=\"EquipmentWeapons.php?Name=Raptor%20Claws\">Raptor claws</a> cannot be used in this fashion.</p>";
	
}
	
?>


</div>
</body>
</html>