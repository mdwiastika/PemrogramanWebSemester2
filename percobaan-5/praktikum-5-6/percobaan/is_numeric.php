<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $condition_true = is_numeric(1);
    $condition_false = is_numeric("Marcel");
    var_dump(["1" => $condition_true, "Marcel" => $condition_false]);
    ?>
</body>

</html>