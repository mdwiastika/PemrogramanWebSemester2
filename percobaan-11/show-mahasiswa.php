<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <style>
        body {
            font-family: cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #1E0342;
            background-color: wheat;
        }

        form {
            background-color: #9AC8CD;
            padding: 40px;
            border-radius: 5px;
            min-width: 400px;
            box-shadow: #0E46A3 1px 1px 3px 1px;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 4px;
            font-size: 0.9em;
            font-weight: 700;
            letter-spacing: 0.1em;
        }

        input,
        textarea,
        select {
            padding: 8px;
            width: 95%;
        }

        button {
            padding: 8px;
            width: 100%;
            background-color: limegreen;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .cancel {
            padding: 4px;
            width: 100%;
            background-color: #141E46;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .action {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        h2 {
            text-align: center;
        }

        .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            column-gap: 20px;
        }
    </style>
</head>

<body>
    <?php
    $nrp = $_GET['nrp'];
    $sql = "SELECT * FROM mahasiswa WHERE nrp = '$nrp' LIMIT 1";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_assoc($result);
    ?>
    <form>
        <h2>Show Kontak</h2>
        <div class="row">
            <div class="">
                <label for="nrp">NRP: </label>
                <input type="number" readonly value="<?= $row['nrp'] ?>" name="nrp" id="nrp" required>
            </div>
            <div class="">
                <label for="nama">Nama: </label>
                <input type="text" readonly name="nama" value="<?= $row['nama'] ?>" id="nama" required>
            </div>
            <div class="">
                <label for="agama">Agama: </label>
                <input type="text" readonly name="agama" value="<?= $row['agama'] ?>" id="agama" required>
            </div>
            <div class="">
                <label for="umur">Umur: </label>
                <input type="number" readonly name="umur" value="<?= $row['umur'] ?>" id="umur" required>
            </div>
            <div class="">
                <label for="alamat">Alamat: </label>
                <textarea readonly name="alamat" id="alamat" required><?= $row['alamat'] ?></textarea>
            </div>
            <div class="">
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <select readonly name="jenis_kelamin" id="jenis_kelamin">
                    <option value="Laki-Laki" <?= $row['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= $row['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
        </div>
        <div class="action">
            <a href="./data-mahasiswa.php" class="cancel">Cancel</a>
        </div>
    </form>
</body>

</html>