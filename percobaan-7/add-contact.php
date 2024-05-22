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
        textarea {
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
    <form action="./post-add-contact.php" method="post" enctype="multipart/form-data">
        <h2>Form Tambah Kontak</h2>
        <div class="row">
            <div class="">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="Masukkan Nama Depan">
            </div>
            <div class="">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Masukkan Nama Belakang">
            </div>
            <div class="">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email">
            </div>
            <div class="">
                <label for="company">Company</label>
                <input type="text" name="company" id="company" placeholder="Masukkan Nama Perusahaan">
            </div>
            <div class="">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" placeholder="Masukkan Posisi">
            </div>
            <div class="">
                <label for="website">Website</label>
                <input type="text" name="website" id="website" placeholder="Masukkan Website">
            </div>
            <div class="">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" placeholder="Masukkan Kategori">
            </div>
            <div class="">
                <label for="street">Street</label>
                <input type="text" name="street" id="street" placeholder="Masukkan Alamat Jalan">
            </div>
            <div class="">
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="Masukkan Kota">
            </div>
            <div class="">
                <label for="province">Province</label>
                <input type="text" name="province" id="province" placeholder="Masukkan Provinsi">
            </div>
            <div class="">
                <label for="postal_code">Postal Code</label>
                <input type="text" name="postal_code" id="postal_code" placeholder="Masukkan Kode Pos">
            </div>
            <div class="">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" placeholder="Masukkan Negara">
            </div>
            <div class="">
                <label for="office_phone">Office Phone</label>
                <input type="text" name="office_phone" id="office_phone" placeholder="Masukkan Nomor Telepon Kantor">
            </div>
            <div class="">
                <label for="home_phone">Home Phone</label>
                <input type="text" name="home_phone" id="home_phone" placeholder="Masukkan Nomor Telepon Rumah">
            </div>
            <div class="">
                <label for="cell_phone">Cell Phone</label>
                <input type="text" name="cell_phone" id="cell_phone" placeholder="Masukkan Nomor Telepon Seluler">
            </div>
            <div class="">
                <label for="fax_number">Fax Number</label>
                <input type="text" name="fax_number" id="fax_number" placeholder="Masukkan Nomor Fax">
            </div>
            <div class="">
                <label for="notes">Notes</label>
                <textarea name="notes" id="notes" placeholder="Masukkan Catatan"></textarea>
            </div>
            <div class="">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo">
            </div>
        </div>
        <div class="action">
            <button type="submit">Submit</button>
            <a href="./index.php" class="cancel">Cancel</a>
        </div>
    </form>
</body>

</html>