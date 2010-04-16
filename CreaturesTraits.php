<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Traits: ".$querylist{1}."</title>";
}
else {
	echo "<title>Creatures: Traits</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/CreaturesTraitsScript.php"); ?>

<h1>TRAITS</h1>

<?php MenuList("Trait", "Data/CreaturesTraitsList.data", "CreaturesTraits.php");

if ($querylist{1} != "") { 
    TraitsList($querylist{0}, $querylist{1});
}
else {

	echo "<p>A creature's traits describe all its special abilities, including attacks, defenses, immunities and other such things. A creature may have any number of traits. The traits found amongst creatures of the islands are listed below:</p>";
	TraitsList("Name", "All");}

?>

</div>
</body>
</html>