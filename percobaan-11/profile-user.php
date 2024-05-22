<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MdwiTech | Profile User</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    session_start();
    include_once "header.php";
    include_once "connection.php";

    ?>
    <main class="wrapper">
        <?php
        include_once "sidebar.php";
        ?>
        <section class="content">
            <div class="title">
                <h1>Profile User</h1>
                <p>Ini adalah halaman profile user</p>
            </div>
            <div class="user-information">
                <table class="user-table">
                    <tr>
                        <th>NRP</th>
                        <td><?= $_SESSION['nrp'] ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?= $_SESSION['nama'] ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?= $_SESSION['alamat'] ?></td>
                    </tr>
                    <tr>
                        <th>Tempat dan Tanggal Lahir</th>
                        <td><?= $_SESSION['ttl'] ?></td>
                    </tr>
                    <tr>
                        <th>No. HP</th>
                        <td><?= $_SESSION['no_hp'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $_SESSION['email'] ?></td>
                    </tr>
                </table>
                <div class="">
                    <img class="img-profile" src="1-2-discord.png" alt="">
                </div>
            </div>
        </section>
    </main>
</body>

</html>