<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload & Download</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_GET['id'])) {
        include_once 'connection.php';
        $id = $_GET['id'];
        $query = "SELECT name, type, size, path FROM upload WHERE id = '$id'";
        $result = pg_query($conn, $query);
        if (!$result) {
            echo "Query failed!";
            exit;
        }
        list($name, $type, $size, $path) = pg_fetch_array($result);
        header("Content-Disposition: attachment; filename=$name");
        header("Content-length: $size");
        header("Content-type: $type");
        readfile($path);
        echo $content;
        exit;
    }

    include_once "header.php";
    ?>
    <main class="wrapper">
        <section class="content">
            <div class="flex">
                <form action="upload.php" style="width: 10rem;" method="post" enctype="multipart/form-data">
                    <h2 class="title">Form Upload</h2>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <input type="hidden" name="upload" value="Upload">
                    <div>
                        <label for="userfile">Upload</label>
                        <input type="file" name="userfile" id="userfile" placeholder="Masukkan Userfile" required>
                    </div>
                    <div>
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="description" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                    <button type="submit" name="upload">Upload</button>
                </form>
            </div>
            <div class="table-file">
                <table class="file-table">
                    <tr>
                        <th>No</th>
                        <th>Name File</th>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Description</th>
                        <th>Download</th>
                    </tr>
                    <?php
                    include_once "connection.php";
                    $query = "SELECT id, path, name, type, size, content FROM upload";
                    $result = pg_query($conn, $query);
                    if (pg_num_rows($result) == 0) {
                        echo "Database Kosong";
                    } else {
                        $no = 0;
                        while (list($id, $path, $name, $type, $size, $content) = pg_fetch_array($result)) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $name ?></td>
                                <td><?= $type ?></td>
                                <td><?= $size ?></td>
                                <td><?= $content ?></td>
                                <td><a class="button-link" href="download.php?file=<?= urlencode($path) ?>">Download</a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </section>
    </main>
</body>

</html>