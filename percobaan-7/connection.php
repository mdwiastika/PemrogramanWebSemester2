<?php
$db = 'C:\laragon\www\pemrograman-web\percobaan-7\contact2.accdb';
$db_username = '';
$db_password = '';
if (!file_exists($db)) {
    die("Error finding access database");
}
$db_conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db; 
Uid=$db_username; Pwd=$db_password;");
