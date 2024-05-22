<?php
$directory = "uploads/";
if (isset($_POST['upload'])) {
    $filename = $_FILES['userfile']['name'];
    $filetmp = $_FILES['userfile']['tmp_name'];
    $filetype = $_FILES['userfile']['type'];
    $filepath = $directory . $filename;
    $filesize = $_FILES['userfile']['size'];
    $result = move_uploaded_file($filetmp, $filepath);
    if ($result) {
        echo "File uploaded successfully";
    } else {
        echo "Failed to upload file";
    }
}
