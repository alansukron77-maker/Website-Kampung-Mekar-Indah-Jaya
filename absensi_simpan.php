<?php
include "config.php";

$pegawai_id = $_POST['pegawai_id'];
$tanggal    = date("Y-m-d");
$jam        = date("H:i:s");

$lat = $_POST['latitude'];
$lon = $_POST['longitude'];

$foto = "";
if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){
    $namaFoto = time()."_".$_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$namaFoto);
    $foto = $namaFoto;
}

mysqli_query($koneksi,"INSERT INTO absensi (pegawai_id, tanggal, jam, foto, latitude, longitude)
VALUES ('$pegawai_id', '$tanggal', '$jam', '$foto', '$lat', '$lon')");

header("Location: laporan.php");
?>

