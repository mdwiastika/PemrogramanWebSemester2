<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    session_start();
    include_once "header.php";
    ?>
    <main class="wrapper">
        <?php
        include_once "sidebar.php";
        ?>
        <section class="content">
            <h1>Dashboard</h1>
            <p>Selamat datang di dashboard</p>
        </section>
    </main>
</body>

</html>