<?php
include_once 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
$db_conn->query($sql);
header('Location: index.php');
