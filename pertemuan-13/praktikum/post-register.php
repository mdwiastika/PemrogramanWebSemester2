<?php
include_once 'connection.php';
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql = "INSERT INTO users (nrp, nama, alamat, ttl, no_hp, username, password, email) VALUES ('$nrp', '$nama', '$alamat', '$ttl', '$no_hp', '$username', '$password', '$email')";
$result = pg_query($conn, $sql);
if ($result) {
    header('Location: ./login.php');
} else {
    echo "Error: " . $sql . "<br>" . pg_last_error($conn);
    header('Location: ./register.php');
}
