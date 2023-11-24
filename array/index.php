<?php 

echo "<p>By definition, an array is a list of elements.
PHP provides you with two types of arrays: indexed and associative.
</p>";

echo "<p>The keys of the indexed array are integers that start at 0. Typically, 
you use indexed arrays when you want to access the elements by their positions.</p>";

echo "<p>The keys of an associative array are strings. And you use associative
 arrays when you want to access elements by string keys.</p>";

echo "<h2>CREATING ARRAYS</h2>";

echo "<p>In PHP, you can use the array() construct or [] syntax to define an array. The [] syntax is shorter and more convenient.</p>";

$empty_array = array();

//$scores = array(2,6,3,5);

$example_array = [];

//$scores = [0, 6, 4, 8, 7, 2, 1];

//To show the contents of an array, you use the var_dump() function.
//var_dump($scores);

//Or you can use the print_r() function
//print_r($scores);

//It’s more convenient to define a function that prints out an array like this:

function print_array($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$data = [5, 6, 8, 4, 7, 3, 9];

print_array($data);

//Accessing array elements

$score = [6, 4, 3, 1, 5, 0];

echo $score[4];

//Adding an element to the array
$score[] = 6;
//But doing this, you have to calculate the new index manually. It is not practical

