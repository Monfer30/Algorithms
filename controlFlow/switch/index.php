<?php

//SWITCH
//The switch statement compares an expression with the value in each case

$role = "subscriber";

$message = "";

switch ($role) {
    case 'admin':
        $message = "welcome, admin!";
        break;
    case 'editor':
        $message = "welcome! you have some pending articles to edit";
        break;
    case 'author':
        $message = "welcome! do you want to publish the article?";
    case 'subscriber':
        $message = "welcome! check out some new articles";
        break;        
    default:
        $message = "you are not authorized to access this page";
        break;
}

echo $message;
