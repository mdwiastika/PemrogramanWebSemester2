<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loosely Typed Language</title>
</head>

<body>
    <?php
    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, 10);
    ?>
</body>

</html>