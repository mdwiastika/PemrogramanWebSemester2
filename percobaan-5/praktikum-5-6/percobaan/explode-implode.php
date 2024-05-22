<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = "Selamat datang di PENS";
    print_r(explode(" ", $str));
    $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
    echo implode(" ", $arr);
    ?>
</body>

</html>