<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}
include "../includes/header.php";
?>

<h2>Barang Dipinjam</h2>
<p>Daftar barang yang sedang dipinjam.</p>

<?php include "../includes/footer.php"; ?>
