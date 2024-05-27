<?php
include_once "connection.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = pg_query($conn, $sql);
if (pg_num_rows($result) > 0) {
    $row = pg_fetch_assoc($result);
    session_start();
    $_SESSION['nrp'] = $row['nrp'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['alamat'] = $row['alamat'];
    $_SESSION['ttl'] = $row['ttl'];
    $_SESSION['no_hp'] = $row['no_hp'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('Location: ./index.php');
} else {
    header('Location: ./login.php');
}
