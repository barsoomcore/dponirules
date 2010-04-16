<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Sub-Types: ".$querylist{1}."</title>";
}
else {
	echo "<title>Creatures: Sub-Types</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/CreaturesSubTypesScript.php"); ?> 

<h1>Creature Sub-Types</h1>

<?php

MenuList ("Creature", "Data/CreaturesList.data", "Creatures.php"); 

if ($querylist{1} != "") { 
    CreaturesSubTypesList($querylist{0}, $querylist{1});
}
else {
	
	echo "<p>Sub-types provide specific details on a creature's nature, including its movement, combat statistics and so on. Sub-types are used to distinguish particular creatures within a given <a href=\"CreaturesTypes.php\">type</a>. Below is a list of all the possible sub-types:";
	CreaturesSubTypesList("Name", "All");}

?>


</div>
</body>
</html>