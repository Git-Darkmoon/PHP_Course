<?php
    $users = ["Albert","Steward","Laureen"];

    // Get the length.
    echo "Users registered: " . count($users) . "<br>";

    // Search for a specific element:
    var_dump(in_array("Laureen",$users));

    // Add to array:
    array_push($users,"Howard");
    array_unshift($users,"Leonard");

    // Remove from array:
    array_pop($users);

    // Merge two arrays, with JS spread operator:
    $vegetables = ["lettuce","tomato","corn","carrot"];
    $fruits = ["apple","coconut","pear","banana"];

    $eatables = [...$vegetables,...$fruits];
    echo "<br><br>";    
    print_r($eatables);
?>