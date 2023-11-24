<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>example</title>
</head>
<body>
    <h1>Recommended books</h1>

    <?php

        $books =
        [
            "androids",
            "the langoliers",
            "hail mary"
        ];

    ?>

    <ul>
        <?php foreach($books as $book)
        {
            echo "<li>$book</li>";
        }

        ?>    
    </ul>

    
</body>
</html>