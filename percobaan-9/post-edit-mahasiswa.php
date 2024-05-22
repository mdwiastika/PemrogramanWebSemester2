<?php
include_once 'connect.php';
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$sql = "UPDATE mahasiswa SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', agama = '$agama', umur = '$umur', alamat = '$alamat' WHERE nrp = '$nrp'";
$result = pg_query($conn, $sql);
if ($result) {
    header('Location: ./index.php');
} else {
    echo "Error: " . $sql . "<br>" . pg_last_error($conn);
}
