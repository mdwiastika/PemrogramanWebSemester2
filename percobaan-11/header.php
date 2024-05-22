<?php
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    header('Location: ./login.php');
}
?>
<header>
    <div class="">
        <h2>Selamat Datang, <?= $_SESSION['username'] ?></h2>
    </div>
    <ul class="nav-list">
        <li class="nav-item"><input class="search-input" type="text" name="search" id="search" placeholder="Search Here.."></li>
        <li class="nav-item"><a href="./index.php">Dashboard</a></li>
        <li class="nav-item"><a href="./show-contact.php">Profile</a></li>
        <li class="nav-item"><a href="./logout.php">Logout</a></li>
    </ul>
</header>