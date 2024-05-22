<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $time = Date("H");
    echo "<h2>Waktu di server komputer adalah $time</h2>";
    echo "<p>Pesan untuk anda: </p>";
    if ($time < "10") {
        echo "Selamat Pagi!";
    } elseif ($time < "14") {
        echo "Selamat Siang!";
    } elseif ($time < "18") {
        echo "Selamat Sore!";
    } else {
        echo "Have a good night!";
    }
    ?>
</body>

</html>