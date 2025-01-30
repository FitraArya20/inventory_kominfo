<?php
session_start();
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: pages/dashboard.php");
    exit;
} else {
    header("Location: pages/login.php");
    exit;
}
?>
