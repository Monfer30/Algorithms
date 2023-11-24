<?php

// FOR
//The for statement allows you to execute a code block repeatedly.

// for (start; condition; increment) {
//	 statement;
// }

// The start is evaluated once when the loop starts.

//The condition is evaluated once in each iteration. If the condition is true,
//the statement in the body is executed. Otherwise, the loop ends.

//The increment expression is evaluated once after each iteration.

$price = 0;

for ($i = 1; $i <= 10; $i++) { 
    $price += $i;
}

echo $price;

echo "<br>";

$filas = 10;

//for ($a = 1; $a <= $filas; $a++) { 
//    for ($b = 1; $b <= $a; $b++) { 
//        echo "*";
//    }
//    echo "<br>";
//}

//forma simplificada

for ($a = 1; $a <= $filas; $a++) { 
    echo str_repeat("*", $a) . "<br>";
}

//FOREACH
//The foreach statement iterates over all elements in an array, one at a time.
// It starts with the first element and ends with the last one. Therefore, 
//you don’t need to know the number of elements in an array upfront.

$names = ['victor', 'laura', 'tessa', 'joe', 'carlos', 'eben', 'raul'];

foreach ($names as $name) {
    echo $name . "<br>";
}