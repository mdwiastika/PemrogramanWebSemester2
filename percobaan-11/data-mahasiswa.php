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
            <h1>Data Mahasiswa</h1>
            <p>Check Your Data!!</p>
            <br />
            <br />
            <table border='1' class="mahasiswa-table">
                <tr>
                    <th>No </th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include_once 'connection.php';
                $no = 1;
                $sql = "SELECT * FROM users";
                $result = pg_query($conn, $sql);
                while ($row = pg_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nrp']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td class="center-item">
                            <a href="./show-mahasiswa.php?nrp=<?php echo $row['nrp']; ?>" class="show">Show</a>
                        </td>
                    </tr>
                <?php
                }
                echo "</table>";
                ?>
        </section>
    </main>
</body>

</html>