<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}
include "../includes/header.php";
?>

<h2>Barang Keluar</h2>
<p>Daftar barang yang keluar dari gudang.</p>

<?php include "../includes/footer.php"; ?>
