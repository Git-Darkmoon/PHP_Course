<?php
    // Same conditional syntax as JavaScript:

    $dayHour = date("H");

    if ($dayHour >= 12) {
        echo "${dayHour} PM";
    } else {
        echo "${dayHour} AM";
    }
    
    // The switch also exists
?>