<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Creature Types: ".$querylist{1}."</title>";
}
else {
	echo "<title>Creature Types</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?>
<?php include ("Scripts/Menu.php"); ?>
<?php include ("Scripts/CreaturesTypesScript.php"); ?> 
<h1>CREATURE TYPES</h1>

<?php

if ($querylist{1} != "") 
{ 
    MenuList ($querylist{1}, "Data/CreaturesList.data", "Creatures.php", "Type", $querylist{1});
    CreaturesTypeList($querylist{0}, $querylist{1});
}
else {
	echo "<p>A creature's Type is what determines the creature's abilities, skills, feats and other statistics. All creatures have one Type. Note that 1st-level creatures with a heroic role determine their combat bonus, saves, skills and feats according to their heroic role alone (as heroes do). Monsters with multiple levels in any given creature type that gain levels in a heroic role do so using <a href=\"RolesAdvancement.php\">the rules for mixed-role heroes</a>.</p>";
	echo "<p>The creature types are as follows:</p>";
	CreaturesTypeNames();
	echo "<h2>Creature Type Table</h2>";
	echo "<p>Calculate a creature's saving throws and combat bonus using the Creature Types Table below.</p>";
	echo "<a Name=\"CreatureTable\"><h5>Table: Creature Save and Combat Bonuses</h5></a><table class=\"last-row\" cellpadding=0 cellspacing=0 width=\"100%\"><th>Creature's Level</th><th>Good Save Bonus </th><th>Normal Save Bonus </th><th>Combat Bonus Level x3/4</th><th>Combat Bonus Level x1</th><th>Combat Bonus Level x1/2</th><tr class=\"odd-row\"><td>1 or less</td><td>+2</td><td>+0</td><td>+0</td><td>+1</td><td>+0</tr></td><tr><td>2</td><td>+3</td><td>+0</td><td>+1</td><td>+2</td><td>+0</tr></td><tr class=\"odd-row\"><td>3</td><td>+3</td><td>+1</td><td>+2</td><td>+3</td><td>+1</tr></td><tr><td>4</td><td>+4</td><td>+1</td><td>+3</td><td>+4</td><td>+1</tr></td><tr class=\"odd-row\"><td>5</td><td>+4</td><td>+1</td><td>+3</td><td>+5</td><td>+2</tr></td><tr><td>6</td><td>+5</td><td>+2</td><td>+4</td><td>+6</td><td>+2</tr></td><tr class=\"odd-row\"><td>7</td><td>+5</td><td>+2</td><td>+5</td><td>+7</td><td>+3</tr></td><tr><td>8</td><td>+6</td><td>+2</td><td>+6</td><td>+8</td><td>+4</tr></td><tr class=\"odd-row\"><td>9</td><td>+6</td><td>+3</td><td>+6</td><td>+9</td><td>+4</tr></td><tr><td>10</td><td>+7</td><td>+3</td><td>+7</td><td>+10</td><td>+5</tr></td><tr class=\"odd-row\"><td>11</td><td>+7</td><td>+3</td><td>+8</td><td>+11</td><td>+5</tr></td><tr><td>12</td><td>+8</td><td>+4</td><td>+9</td><td>+12</td><td>+6</tr></td><tr class=\"odd-row\"><td>13</td><td>+8</td><td>+4</td><td>+9</td><td>+13</td><td>+6</tr></td><tr><td>14</td><td>+9</td><td>+4</td><td>+10</td><td>+14</td><td>+7</tr></td><tr class=\"odd-row\"><td>15</td><td>+9</td><td>+5</td><td>+11</td><td>+15</td><td>+7</tr></td><tr><td>16</td><td>+10</td><td>+5</td><td>+12</td><td>+16</td><td>+8</tr></td><tr class=\"odd-row\"><td>17</td><td>+10</td><td>+5</td><td>+12</td><td>+17</td><td>+8</tr></td><tr><td>18</td><td>+11</td><td>+6</td><td>+13</td><td>+18</td><td>+9</tr></td><tr class=\"odd-row\"><td>19</td><td>+11</td><td>+6</td><td>+14</td><td>+19</td><td>+9</tr></td><tr><td>20</td><td>+12</td><td>+6</td><td>+15</td><td>+20</td><td>+10</tr></td></table><p>Combat Bonus Level x3/4:</b> Use this column for <a href=\"CreaturesTypes.php?Name=Aberration\">aberrations</a>, <a href=\"CreaturesTypes.php?Name=Animal\">animals</a>, <a href=\"CreaturesTypes.php?Name=Construct\">constructs</a>, <a href=\"CreaturesTypes.php?Name=Humanoid\">humanoids</a>, <a href=\"CreaturesTypes.php?Name=Ooze\">oozes</a>, <a href=\"CreaturesTypes.php?Name=Plant\">plants</a>, and <a href=\"CreaturesTypes.php?Name=Vermin\">vermin</a>.</p><p>Combat Bonus level x1:</b> Use this column for <a href=\"CreaturesTypes.php?Name=Dragon\">dragons</a>, <a href=\"CreaturesTypes.php?Name=Supernatural%20Beast\">supernatural beasts</a>, <a href=\"CreaturesTypes.php?Name=Monstrous%20Humanoid\">monstrous humanoids</a>, and <a href=\"CreaturesTypes.php?Name=Spirit\">spirits</a>.</p><p>Combat Bonus Level x1/2:</b> Use this column for <a href=\"CreaturesTypes.php?Name=Fey\">fey</a> and <a href=\"CreaturesTypes.php?Name=Undead\">undead</a>.</p>";
}

?>

</div>
</body>
</html>