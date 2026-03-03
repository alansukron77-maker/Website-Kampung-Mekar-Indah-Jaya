<html><body>LAPORAN</body>

<?php
include "config.php";

$data = mysqli_query($koneksi, "
    SELECT absensi.*, pegawai.nama
    FROM absensi
    LEFT JOIN pegawai ON pegawai.id = absensi.pegawai_id
    ORDER BY absensi.id DESC
");
?>


</html>