<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "<p style='color: $favcolor;'> Warna terpilih MERAH! </p>";
            break;
        case "blue":
            echo "<p style='color: $favcolor;'> Warna terpilih BIRU! </p>";
            break;
        case "green":
            echo "<p style='color: $favcolor;'> Warna terpilih HIJAU! </p>";
            break;
        default:
            echo "Coba lagi!";
    }
    ?>
</body>

</html>