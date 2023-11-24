<?php

// WHILE

//The while statement executes a code block as long as an expression is true
//First, PHP evaluates the expression. If the result is true, PHP executes the statement
//Then, PHP re-evaluates the expression again. If it’s still true, PHP executes the statement again. However, if the expression is false, the loop ends.

$total = 0;
$number = 1;

while ($number <= 10) {
    $total += $number;
    $number++;// se va sumando 1, 2, 3, 4, 5...
}

echo $total;
echo "<br>";

$score = 0;
$points = 5;

while ($points <= 30) :
    $score += $points;
    $points++;
endwhile;

echo $score;
echo "<br>";
//DO WHILE
//The PHP do while statement allows you to execute a code block repeatedly based on a Boolean expression. 

$i = 0;

do {
    echo $i;
} while ($i > 10);
echo "<br>";

$a = 10;

do {
    echo $a . "<br>";
    $a--;
} while ($a > 0);