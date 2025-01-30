<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}
include "../includes/header.php";
?>

<h2>Barang Masuk</h2>
<p>Daftar barang yang masuk ke gudang.</p>

<?php include "../includes/footer.php"; ?>
