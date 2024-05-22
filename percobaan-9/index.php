<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Mahasiswa</title>
    <style>
        body {
            font-family: cursive;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #1E0342;
            background-color: wheat;
        }

        table {
            background-color: #F6F5F2;
            padding: 20px 20px 20px 20px;
            border-radius: 5px;
            width: 80%;
        }

        th {
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        a {
            padding: 6px 18px;
            background-color: #0E46A3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .edit {
            background-color: orange;
        }

        .delete {
            background-color: crimson;
        }

        .show {
            background-color: #121481;
        }

        .center-item {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <br />
    <div class="">
        <a href="./add-mahasiswa.php">Tambah Mahasiswa</a>
    </div>
    <br />
    <table border='1'>
        <tr>
            <th>No </th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php
        include_once 'connect.php';
        $no = 1;
        $sql = "SELECT * FROM mahasiswa";
        $result = pg_query($conn, $sql);
        while ($row = pg_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nrp']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
                <td class="center-item">
                    <a href="./edit-mahasiswa.php?nrp=<?php echo $row['nrp']; ?>" class="edit">Edit</a>
                    <a href="./delete-mahasiswa.php?nrp=<?php echo $row['nrp']; ?>" class="delete">Delete</a>
                    <a href="./show-mahasiswa.php?nrp=<?php echo $row['nrp']; ?>" class="show">Show</a>
                </td>
            </tr>
        <?php
        }
        echo "</table>";
        ?>
</body>

</html>