<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Foreach</title>
</head>

<body>
    <?php
    $colors = array("merah", "hijau", "biru", "kuning");
    foreach ($colors as $key => $color) {
        $key++;
        echo "$key. $color</br>";
    }
    ?>
</body>

</html>