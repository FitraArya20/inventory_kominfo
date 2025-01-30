<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}
include "../includes/header.php";
?>

<h2>Data Supplier</h2>
<p>Daftar supplier barang.</p>

<?php include "../includes/footer.php"; ?>
