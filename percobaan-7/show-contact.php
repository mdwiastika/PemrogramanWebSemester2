<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Detail Contact</title>
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
        textarea {
            padding: 8px;
            width: 95%;
        }

        button {
            padding: 8px;
            padding-top: 18px;
            width: 100%;
            background-color: orange;
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

        textarea {
            width: 200%;
        }

        .row-outside {
            display: grid;
            grid-template-columns: 1fr 2fr;
            column-gap: 20px;
        }

        img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php
    include_once 'connection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $db_conn->query($sql);
    $row = $result->fetch();
    ?>
    <form>
        <h2>Detail Kontak</h2>
        <input type="hidden" name="id" id="id" value="<?= $row[0] ?>">
        <div class="row-outside">
            <div class="">
                <?php
                if ($row[18] != null) {
                ?>
                    <img src="./uploads/<?= $row[18] ?>" alt="Photo Profile">
                <?php
                } else {
                ?>
                    <img src="./uploads/default-profile2.png" alt="Photo Profile">
                <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" readonly name="first_name" id="first_name" value="<?= $row[1] ?>" placeholder="Masukkan Nama Depan">
                </div>
                <div class="">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" readonly name="last_name" id="last_name" value="<?= $row[2] ?>" placeholder="Masukkan Nama Belakang">
                </div>
                <div class="">
                    <label for="email">Email</label>
                    <input type="email" readonly name="email" id="email" value="<?= $row[3] ?>" placeholder="Masukkan Email">
                </div>
                <div class="">
                    <label for="company">Perusahaan</label>
                    <input type="text" readonly name="company" id="company" value="<?= $row[4] ?>" placeholder="Masukkan Perusahaan">
                </div>
                <div class="">
                    <label for="position">Jabatan</label>
                    <input type="text" readonly name="position" id="position" value="<?= $row[5] ?>" placeholder="Masukkan Jabatan">
                </div>
                <div class="">
                    <label for="website">Website</label>
                    <input type="text" readonly name="website" id="website" value="<?= $row[6] ?>" placeholder="Masukkan Website">
                </div>
                <div class="">
                    <label for="category">Kategori</label>
                    <input type="text" readonly name="category" id="category" value="<?= $row[7] ?>" placeholder="Masukkan Kategori">
                </div>
                <div class="">
                    <label for="street">Jalan</label>
                    <input type="text" readonly name="street" id="street" value="<?= $row[8] ?>" placeholder="Masukkan Jalan">
                </div>
                <div class="">
                    <label for="city">Kota</label>
                    <input type="text" readonly name="city" id="city" value="<?= $row[9] ?>" placeholder="Masukkan Kota">
                </div>
                <div class="">
                    <label for="province">Provinsi</label>
                    <input type="text" readonly name="province" id="province" value="<?= $row[10] ?>" placeholder="Masukkan Provinsi">
                </div>
                <div class="">
                    <label for="postal_code">Kode Pos</label>
                    <input type="text" readonly name="postal_code" id="postal_code" value="<?= $row[11] ?>" placeholder="Masukkan Kode Pos">
                </div>
                <div class="">
                    <label for="country">Negara</label>
                    <input type="text" readonly name="country" id="country" value="<?= $row[12] ?>" placeholder="Masukkan Negara">
                </div>
                <div class="">
                    <label for="office_phone">Telepon Kantor</label>
                    <input type="text" readonly name="office_phone" id="office_phone" value="<?= $row[13] ?>" placeholder="Masukkan Telepon Kantor">
                </div>
                <div class="">
                    <label for="home_phone">Telepon Rumah</label>
                    <input type="text" readonly name="home_phone" id="home_phone" value="<?= $row[14] ?>" placeholder="Masukkan Telepon Rumah">
                </div>
                <div class="">
                    <label for="cell_phone">Telepon Seluler</label>
                    <input type="text" readonly name="cell_phone" id="cell_phone" value="<?= $row[15] ?>" placeholder="Masukkan Telepon Seluler">
                </div>
                <div class="">
                    <label for="fax_number">Nomor Fax</label>
                    <input type="text" readonly name="fax_number" id="fax_number" value="<?= $row[16] ?>" placeholder="Masukkan Nomor Fax">
                </div>
                <div class="">
                    <label for="notes">Catatan</label>
                    <textarea name="notes" readonly id="notes" cols="30" rows="10" placeholder="Masukkan Catatan"><?= $row[17] ?></textarea>
                </div>
            </div>
        </div>
        <div class="action">
            <a href="./index.php" class="cancel">Kembali</a>
        </div>
    </form>
</body>

</html>