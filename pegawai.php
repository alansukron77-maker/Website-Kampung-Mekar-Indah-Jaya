<html><body>PEGAWAI</body></html>

<?php
include "config.php";
session_start();

$data = mysqli_query($koneksi, "SELECT * FROM pegawai");
?>

