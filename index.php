<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <?php
        echo("hello world");
        echo "<h1>Hello people</h1>";
        echo "<p>This is my site</p>";
        echo "<hr>";
 
        //define(nombre, valor constante)= sintaxis de una constante
        define('constante', 'este es el valor de la constante');
        echo constante;

        echo "<hr>";
        echo "<h2>variables</h2>";

        $characterName = "john";
        var_dump($characterName);
        $characterAge = 40;

        echo "there once was a man named $characterName <br>";
        echo "he was" . " " . $characterAge  . " ". "years old";

        echo "<hr>";
        echo "<h2>data types</h2>";

        //$phrase = "plain text";
        $numbers = 25; //integer
        $gpa = 3.7; // floating point numbers
        var_dump($gpa);
        $isUgly = true; // boolean
        $value = null; //null

        echo "<hr>";
        echo "<h2>working with strings</h2>";

        //trings functions
        $phrase = "freeCodeCamp <br>";
        //strtoupper=  uppercase string
        echo strtoupper($phrase); 
        echo "<br>";
        // strlen= gives u the lenght of the string
        echo strlen($phrase);
        echo "<br>";
        //[]=index
        echo $phrase[3]; 
        echo "<br>";
        //$phrase[2] = "B"; // u can modify individual characters
        echo $phrase;
        //str_replace= Replace all occurrences of the search string with the replacement string
        echo str_replace("freeCodeCamp", "panda", $phrase); //function that allow u to modify the string
        echo "<br>";
        //substr=Return part of a string
        echo substr($phrase, 8, 3);

        echo "<hr>";
        echo "<h2>working with numbers</h2>";
        //PHP MATH FUNCTIONS
        //integer number
        echo 25;
        echo "<br>";
        //float number
        echo 32.54;
        echo "<br>";
        //MODULUS operator is goin to divide 35/4 and is going to give us the remainder
        echo 10 % 3;
        echo "<br>";

        //INCREMENTOS
        $num=20;
        $num++; // ++ ads 1 to num
        echo $num;
        echo "<br>";
        $num += 30;// += ads 30 to the var
        echo $num;

        echo "<br>";
        //max will tell u witch num is bigger
        echo max(32, 45);

        echo "<hr>";
        echo "<br>";

        $first = 53;
        $last = 78;

        //COMPARADOR <=>

        //si num de izq es < a print -1
        // cero si = 
        // 1 si izq es > a der
        var_dump($first <=> $last);

        



    ?>
    
    <h2>GETTING USER INPUT</h2>

    <form action="index.php" method="get">
        NAME:<input type="text" name="name">
        <input type="submit">
    </form>
    <br>

    <?php 
    
    echo $_GET["name"];
    
    ?>
















</body>
</html>