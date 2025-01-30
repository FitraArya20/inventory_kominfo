<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}
include "../includes/header.php";
?>

<h2>Selamat Datang di Dashboard</h2>
<p>Kelola data barang dengan mudah.</p>

<?php include "../includes/footer.php"; ?>
