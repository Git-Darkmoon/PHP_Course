<?php

    if(isset($_POST["submit"])) {
        $name =  filter_input(INPUT_POST,"name", FILTER_SANITIZE_SPECIAL_CHARS);
        $age =  filter_input(INPUT_POST,"age", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "User: ${name}<br>Age: ${age}";
    }
?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <h2 class="title">Enter your data</h2>
    <div>
        <label for="">Name:</label>
        <input type="text" name="name" id="" />
    </div>
    <div>
        <label for="">Age:</label>
        <input type="number" name="age" id="" />
    </div>
    <input type="submit" name="submit" />
</form>