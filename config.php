<?php
$host = "localhost";
$user = "admin"; 
$pass = "0192023a7bbd73250516f069df18b500";    
$db   = "absensi_kelurahan";

// Coba koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Jika gagal
if(!$koneksi){
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit;
}
?>
