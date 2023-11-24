<?php

require_once('clases/People.php');

$people1 = new People;

$people1->name = "monfer";
$people1->surname = "campos";
$people1->age = 29;

//var_dump($people1);

$people2 = new People;

$people2->name = "alan";
$people2->surname = "ceron";
$people2->age = 37;

//var_dump($people2);

echo "el nombre de la persona 2 es : " . $people2->name;
echo "<br>";
echo "el nombre de la persona 1 es : " . $people1->name;