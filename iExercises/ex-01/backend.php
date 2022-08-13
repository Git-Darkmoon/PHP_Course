<?php

    if(isset($_POST["submit"])) {
        echo "User: ";
        echo $_POST["name"];
        echo "<br>";
        echo "Age: ";
        echo $_POST["age"];
        echo "<br>";
        echo "Email: ";
        echo $_POST["email"];
        echo "<br>";
        echo "Phone: ";
        echo $_POST["phone"];
        echo "<br>";
    }
?>