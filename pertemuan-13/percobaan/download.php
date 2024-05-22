<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Download</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once "connection.php";
    $query = "SELECT id, name, path FROM upload";
    $result = pg_query($conn, $query);
    if (pg_num_rows($result) == 0) {
        echo "Database Kosong";
    } else {
        while (list($id, $name, $path) = pg_fetch_array($result)) {
    ?>
            <a href="<?= $path ?>"><?= $name ?></a><br>
    <?php
        }
    }
    ?>
</body>

</html>