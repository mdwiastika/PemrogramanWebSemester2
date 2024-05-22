<?php
$server_name = "localhost";
$user_name = "postgres";
$password = "postgres";
$db_name = "pemrograman_web";
$conn = pg_connect("host=$server_name dbname=$db_name user=$user_name password=$password");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
