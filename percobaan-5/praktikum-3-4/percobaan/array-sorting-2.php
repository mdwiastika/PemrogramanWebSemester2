<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    $arrlength = count($numbers);
    for ($x = 0; $x <  $arrlength; $x++) {
        echo "<p>$numbers[$x]</p>";
        echo "<br>";
    }
    ?>
</body>

</html>