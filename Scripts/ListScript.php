<?php

//this script includes functions to create the drop-down menus as required.

function MenuList($type, $sourcefile, $scriptfile, $field = "Name", $term = "All") {
    
    // this function creates a drop-down list of Names based on the file
    // specified in $sourcefile
    
    // it will also create drop-downs of subsets based on the search criteria
    // specified in $field and $term if any.

    $dataFromFile = GetListing($sourcefile, $field, $term);
    
    foreach ($dataFromFile as $entry) 
    {
    
        if ($entry{0} != "Name") 
        {
            $namearray[] = $entry{0};
        }
    }
    
    $vowels = array ("A", "a", "E", "e", "I", "i", "O", "o", "U", "u");
    $article = "a";
    if ($type[0] == in_array($type[0], $vowels)) {$article = "an";}
    
    
    // create the drop-down list. This uses the "Jumpto" function
    // defined in JumpMenu.js
    
    print "<div class=\"dropdown\">";
    print "<form name=\"Menu\">";
    print "<select name=\"jumpmenu\" onChange=\"jumpto(document.Menu.jumpmenu.options[document.Menu.jumpmenu.options.selectedIndex].value)\">";
    
    print "<option>Select $article $type</option>";
    
    while (list($key, $value) = each($namearray)) {
        echo "<option value=\"$scriptfile?Name=$value\" name=\"$value\">$value</option>";
    }
    
    print "</select></form></div>";
    
}

function GetListing($sourcefile, $field, $term) {

    // this function reads through the data file specified in $sourcefile
    // and returns a set of arrays containing all entries that match the 
    // search criteria specified in $field and $term
    
    // open the file and feed it into $datafile

    $datafile = fopen($sourcefile,"r");
    
    // room for some error handling one day...
    
    while (!feof ($datafile)) {
    
        // feed each line of the file into $line
        
        $line = fgets($datafile);
                
        // explode the line along the "|" symbol and feed the results into $eachline
        
        $eachline[] = explode ("|", $line);
    }
    
    // we've gotten all the data from the file, so close it
    
    fclose($datafile);
    
    // $eachline contains an array for every line in the datafile
    // The first array is the reference for the file format, so we
    // match $field in that array to get the key for the matching
    // value and store that in $key
    
    $key = array_search($field, $eachline[0]);
    
    // $key now contains the number of the array entry that matches $field
    // We now go through all the other entries looking for elements of that
    // number that match $term
    
    foreach($eachline as $listing) 
    {
        // if the specified $term is All then just throw 'em all into the result
        
        if ($term == "All")
        {
            if ($listing[0] != "Name")
            {
                $selectedData[] = $listing;
            }
        }
        
        // otherwise, we only grab those ones where the array item whose key matches
        // $key and whose value matches $term
        
        elseif ($term == $listing[$key])
        {
            $selectedData[] = $listing;
        }
    }
    
    // and we return the set of arrays that match our search to the calling function
    
    return ($selectedData);
}

?>