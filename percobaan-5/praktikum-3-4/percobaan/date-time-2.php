<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set("Asia/Jakarta");
    echo "Sekarang waktu Jakarta : " . date("h:i:sa");
    echo "<br />";
    date_default_timezone_set("Asia/Tokyo");
    echo "Sekarang waktu Tokyo : " . date("h:i:sa");
    echo "<br />";
    date_default_timezone_set("America/New_York");
    echo "Sekarang waktu New York : " . date("h:i:sa");
    ?>
</body>

</html>