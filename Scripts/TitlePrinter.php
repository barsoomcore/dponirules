<?php

function PrintTitle ($defaultTitle)
{
	
	if ($querylist{0} == "Name") {
		print "<title>".$querylist{1}."</title>";
	}
	else {
		echo "<title>".$defaultTitle."</title>";
	}
}

?>