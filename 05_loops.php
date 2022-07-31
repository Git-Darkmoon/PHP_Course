<?php
    // For loops, same syntax as JAVA.

    for ($i = 0;$i <= 10;$i++) {
        echo "<b>Number:</b> ${i}. <br>";
    }
    //  Same for the While Loop

    /* For the forEach:

        foreach($array as $iterableVar) {
            //code to be executed.
        }
    */
    
    echo "<br><br>";
    $users = ["Pedro","James","Stewart"];

    foreach($users as $i) {
        echo "User: ${i}<br>";
    }
?>