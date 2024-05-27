<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = './uploads/' . basename($file);

    if (file_exists($filePath)) {
        $fileType = mime_content_type($filePath);
        $fileSize = filesize($filePath);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . $fileSize);

        readfile($filePath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
