<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Contact</title>
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
    <h2>Kontak Bisnis - MS Access</h2>
    <br />
    <div class="">
        <a href="./add-contact.php">Tambah Kontak</a>
    </div>
    <br />
    <table border='1'>
        <tr>
            <th>No </th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Alamat Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        include_once 'connection.php';
        $no = 1;
        $sql = "SELECT id, first_name, last_name, email FROM users";
        $result = $db_conn->query($sql);
        while ($row = $result->fetch()) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td class="center-item">
                    <a class="show" href="./show-contact.php?id=<?php echo $row[0] ?>">Detail</a>
                    <a class="edit" href="./edit-contact.php?id=<?php echo $row[0] ?>">Edit</a>
                    <a class="delete" href="./delete-contact.php?id=<?php echo $row[0] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        echo "</table>";
        ?>
</body>

</html>