<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #27374D;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        form {
            padding: 2rem;
            border-radius: 0.5rem;
            background-color: #9DB2BF;
            box-shadow: 1px 1px 4px #22B7E9;
        }

        button {
            background-color: #526D82;
            padding: 0.6rem 1.5rem;
            border-radius: 0.25rem;
            border: 0;
            color: white;
            margin: 0.5rem;
            font-size: 0.8em;
            font-weight: 600;
        }

        .form-control {
            padding: 0.5rem;
        }

        .form-control label {
            display: block;
            font-weight: 600;
            color: black;
        }

        .form-control input {
            width: 300px;
            height: 30px;
            color: #526D82;
            font-weight: 600;
            border: 0;
            padding: 0.2rem 0.9rem;
            margin-top: 0.2rem;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['nama']) && $_GET['nama'] == "0") {
        $nama_str = "<p style='color:red'>Nama Belum Diisi !</p>";
    } else {
        $nama_str = "";
    }
    ?>
    <form action="validation-input.php" method="POST">
        <div class="form-control">
            <label for="nama">Nama</label>
            <input type="text" placeholder="Masukkan Nama" id="nama" name="nama">
            <h4><?= $nama_str ?></h4>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>