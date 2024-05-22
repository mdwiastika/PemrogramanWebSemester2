<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Post</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #F8F6E3;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        form {
            padding: 2rem;
            border-radius: 0.5rem;
            background-color: #97E7E1;
            box-shadow: 1px 1px 4px #22B7E9;
        }

        button {
            background-color: #7AA2E3;
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
        }

        .form-control input {
            width: 300px;
            height: 30px;
            color: #7AA2E9;
            font-weight: 600;
            border: 0;
            padding: 0.2rem 0.9rem;
            margin-top: 0.2rem;
        }
    </style>
</head>

<body>
    <form action="user-handler.php" method="POST">
        <div class="form-control">
            <label for="nama">Nama</label>
            <input type="text" placeholder="Masukkan Nama" id="nama" name="nama">
        </div>
        <div class="form-control">
            <label for="alamat">Alamat</label>
            <input type="text" placeholder="Masukkan Alamat" id="alamat" name="alamat">
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" placeholder="Masukkan Email" id="email" name="email">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>