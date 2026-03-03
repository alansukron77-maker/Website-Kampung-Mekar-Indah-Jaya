

<?php
include "config.php";
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $qry = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($qry) > 0){
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
