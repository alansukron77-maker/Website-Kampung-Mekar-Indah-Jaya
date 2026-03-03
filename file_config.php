<?php
$koneksi = mysqli_connect("localhost", "root", "", "absensi_kelurahan");

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
