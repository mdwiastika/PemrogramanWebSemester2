<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo substr("Hello world", 6);
    echo "</br>";
    echo substr_count("Hello world. The world is nice", "world");
    echo "</br>";
    echo substr_replace("Hello", "world", 0);
    ?>
</body>

</html>