<?php
$current_url = $_SERVER['REQUEST_URI'];
$current_url = explode('/', $current_url);
$current_url = $current_url[count($current_url) - 1];
?>

<nav class="sidebar">
    <ul class="sidebar-list">
        <li class="sidebar-item"><a class="<?= $current_url == 'index.php' ? 'active' : '' ?>" href="./index.php">Overview</a></li>
        <li class="sidebar-item"><a class="<?= $current_url == 'profile-user.php' ? 'active' : '' ?>" href="./profile-user.php">Profile User</a></li>
        <li class="sidebar-item"><a class="<?= $current_url == 'data-mahasiswa.php' ? 'active' : '' ?>" href="./data-mahasiswa.php">Data Mahasiswa</a></li>
        <li class="sidebar-item"><a class="<?= $current_url == 'data-tugas.php' ? 'active' : '' ?>" href="./index.php">Data Tugas</a></li>
    </ul>
</nav>