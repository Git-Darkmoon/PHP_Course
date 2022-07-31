<?php

//  --------- Variable Rules ---------  
/*
The variable types are the same as all languages.
- Variables MUST BE prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Pepe";
$age = 30;
$state = "Alive";
echo "${name} is ${age}, state: ${state}";

/* To create constants:
define("VAR_NAME",VALUE)*/

define("GENRE","Male");
define("PORT",5500);

echo PORT;


?>