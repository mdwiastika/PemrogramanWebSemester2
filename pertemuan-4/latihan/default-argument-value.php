<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Argument Value</title>
</head>

<body>
    <?php
    function setHeight(int $minHeight = 50)
    {
        echo "The height is: $minHeight </br>";
    }
    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
    ?>
</body>

</html>