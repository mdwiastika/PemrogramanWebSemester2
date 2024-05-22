<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $directory = "uploads/";
    if (isset($_POST['upload'])) {
        $filename = $_FILES['userfile']['name'];
        $tmpname = $_FILES['userfile']['tmp_name'];
        $filesize = $_FILES['userfile']['size'];
        $filetype = $_FILES['userfile']['type'];
        $filepath = $directory . $filename;
        $result = move_uploaded_file($tmpname, $filepath);
        $content = $result;
        if (!$result) {
            echo "File uploaded failed!";
            exit;
        }
        include_once "connection.php";
        $filename = addslashes($filename);
        $filepath = addslashes($filepath);
        $query = "INSERT INTO upload (name, size, type, path, content) VALUES ('$filename', '$filesize', '$filetype', '$filepath', '$result')";
        $result = pg_query($conn, $query);
        if (!$result) {
            echo "Query failed!";
            exit;
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Form Upload</h2>
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="hidden" name="upload" value="Upload">
        <div>
            <label for="userfile">Upload</label>
            <input type="file" name="userfile" id="userfile" placeholder="Masukkan Userfile" required>
        </div>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>

</html>