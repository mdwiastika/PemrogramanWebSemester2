<?php
include_once 'connect.php';
$nrp = $_GET['nrp'];
$sql = "DELETE FROM mahasiswa WHERE nrp = '$nrp'";
$result = pg_query($conn, $sql);
if ($result) {
    header('Location: ./index.php');
} else {
    echo "Error: " . $sql . "<br>" . pg_last_error($conn);
}
