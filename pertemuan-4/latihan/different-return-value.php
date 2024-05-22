<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Different Return Value</h2>
    <?php
    function addNumbers(float $a, float $b): int
    {
        return (int)($a + $b);
    }
    echo addNumbers(1.2, 5.2);
    ?>
</body>

</html>