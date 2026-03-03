<html><body>DASHBOARD</body></html>

<?php
include "config.php";
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>
