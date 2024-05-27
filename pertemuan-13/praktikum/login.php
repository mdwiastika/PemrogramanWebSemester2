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
        <form action="./post-login.php" method="POST">
            <h2>Form Login</h2>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit">Sign In</button>
            <p class="link-text">Belum Punya akun? <a href="./register.php">Klik Di sini</a></p>
        </form>
    </main>
</body>

</html>