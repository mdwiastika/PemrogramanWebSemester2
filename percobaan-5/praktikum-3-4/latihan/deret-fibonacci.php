<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $count = 10;
    for ($iterate_fibonacci = 0; $iterate_fibonacci < $count; $iterate_fibonacci++) {
        if ($iterate_fibonacci == 0) {
            $arr_fibonacci[$iterate_fibonacci] = 0;
        } else if ($iterate_fibonacci == 1) {
            $arr_fibonacci[$iterate_fibonacci] = 1;
        } else {
            $arr_fibonacci[$iterate_fibonacci] = $arr_fibonacci[$iterate_fibonacci - 1] + $arr_fibonacci[$iterate_fibonacci - 2];
        }
    }
    echo "<h2>";
    for ($iterate_print = 0; $iterate_print < $count; $iterate_print++) {
        echo $arr_fibonacci[$iterate_print] . " ";
    }
    echo "</h2>";
    ?>
</body>

</html>