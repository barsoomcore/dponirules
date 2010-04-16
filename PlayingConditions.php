<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
<?php

$query = urldecode($_SERVER['QUERY_STRING']);
if ($$query{0} == 0) {$querylist = (explode ("=", $query)); } 

if ($querylist{1} != "") {
	echo "<title>Conditions: ".$querylist{1}."</title>";
}
else {
	echo "<title>Playing: Conditions</title>";
}
 
include ("Scripts/HeaderScript.php"); 
 
?><?php include ("Scripts/Menu.php"); ?> 
<?php include ("Scripts/PlayingConditionsScript.php"); ?>

<h1>CONDITIONS</h1>

<?php

MenuList("Condition", "Data/ConditionsList.data", "PlayingConditions.php");

if ($querylist{1} != "") { 
    ConditionList($querylist{0}, $querylist{1});
}
else {
	
	echo "<p>This section describes the different adverse conditions that can affect characters. If multiple conditions apply to a character, apply all of their effects. If effects conflict, apply the most severe.</p>";
	ConditionList("Name", "All");}

?>


</div>
</body>
</html>