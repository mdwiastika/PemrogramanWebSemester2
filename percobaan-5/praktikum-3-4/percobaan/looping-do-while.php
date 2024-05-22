<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Do While</title>
</head>

<body>
    <?php
    $number_iterate = 6;
    do {
        echo "Angka : $number_iterate</br>";
        $number_iterate++;
    } while ($number_iterate <= 5);
    ?>
</body>

</html>