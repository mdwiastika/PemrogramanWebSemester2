<?php
include_once "connection.php";
$directory = "uploads/";
$filename = $_FILES['userfile']['name'];
$tmpname = $_FILES['userfile']['tmp_name'];
$filesize = $_FILES['userfile']['size'];
$filetype = $_FILES['userfile']['type'];
$filepath = $directory . $filename;
$result = move_uploaded_file($tmpname, $filepath);
$content = $_POST['description'];
$query = "INSERT INTO upload (name, size, type, path, content) VALUES ('$filename', '$filesize', '$filetype', '$filepath', '$content')";
$result = pg_query($conn, $query);
if (!$result) {
    echo "Query failed!";
    exit;
} else {
    header("Location: index.php");
}
