<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MdwiTech | Form Login</title>
    <link rel="stylesheet" href="style-form.css" />
</head>

<body>
    <?php
    include_once "connection.php";
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        header('Location: ./index.php');
    } else {
        session_destroy();
    }
    ?>
    <main>
        <form action="./post-register.php" method="POST">
            <h2>Form Register</h2>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan Email" required>
            </div>
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
            </div>
            <div>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" placeholder="Masukkan Nrp" required>
            </div>
            <div>
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div>
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" name="ttl" id="ttl" placeholder="Masukkan Tanggal Lahir" required>
            </div>
            <div>
                <label for="no_hp">Nomor HP</label>
                <input type="text" name="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" required>
            </div>
            <button type="submit">Sign Up</button>
            <p class="link-text">Sudah punya akun? <a href="./login.php">Klik Di sini</a></p>
        </form>
    </main>
</body>

</html>