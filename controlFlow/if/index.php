<?php

// IF STATEMENT

//The if statement allows you to execute a statement if an expression evaluates to true

$is_admin = true;

if ($is_admin)//(expression)
    echo "welcome";//(statement)

echo "<br>";    
// CURLY BRACES

// if u want to execute multiple statements in the if block,
//u can use curly braces

$can_edit = false;

if ( $is_admin) {
    echo "welcome again";
    $can_edit = true;
}
echo "<br>";
//It’s possible to nest an if statement inside another if statement

$can_approve = true;

if ($is_admin) {
	echo 'Welcome, admin!';
	if ($can_approve) {
		echo 'Please approve the pending items';
	}
}

echo "<br>";

// IF ELSE

//The if statement allows you to execute one or more statements when an expression is true
//Sometimes, you want to execute another code block if the expression is false. To do that, you add the else clause to the if statement

$is_authenticated = false;

if ($is_authenticated) {
    echo "welcome back";
} else {
    echo "you are NOT authorized to access this page";
}
echo "<br>";
//ELSE IF

//The elseif is a combination of if and else

$x = 10;
$y = 20;

if ($x > $y) {
    $message = "x is greater than y";
} elseif ($x < $y) {
    $message = "x is less than y";
} else {
    $message = "x is equal to y";
}

echo $message;

echo "<br>";

$juice = "pinaple";
$food = "pancakes";

if ($juice == "pinaple" && $food == "salad") :
    $order = "breakfast ready";
elseif ($juice == "melon" && $food == "pancakes") :
    $order = "order num 2 ready";
else:
    $order = "wrong order";
endif;

echo $order;
echo "<br>";

// TERNARY OPERATOR

//The ternary operator is a shorthand for the if...else statement

//$result = condition ? value1 : value2;

$logged_in = false;

$title = $logged_in ? 'logout' : 'login';

echo $title;

echo "<br>";

//$result = $initial ?: $default;
//If $initial is true, PHP assigns the value of the $initial to the $result variable. Otherwise, it assigns the $default to the $result variable

