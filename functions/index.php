<?php

//A function is a named block of code that performs a specific task

function welcome()
{
    echo "welcome";
}

welcome();

echo "<br>";

function welcome_user($user) 
{
    echo "welcome " . $user;
}

welcome_user('monfer');

// BUILT-IN FUNCTIONS
//PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

//The strict declaration forces things to be used in the intended way.
//To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

