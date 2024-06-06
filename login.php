<?php
session_start();
include "config/koneksi.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

if ($ketemu > 0) {
    // Jika username ditemukan
    if ($r['password'] == $pass) {
        // Jika password sesuai
        $_SESSION['username'] = $r['username'];
        $_SESSION['password'] = $r['password'];
        $_SESSION['nama_lengkap'] = $r['nama_lengkap'];
        header("location: index.php");
    } else {
        // Jika password salah
        $_SESSION['error_message'] = "PASSWORD SALAH!";
        $_SESSION['error_description'] = "Password yang Anda masukkan salah.";
        header("location: index.php");
    }
} else {
    // Jika username tidak ditemukan
    $_SESSION['error_message'] = "USERNAME DAN PASSWORD SALAH!";
    $_SESSION['error_description'] = "Username dan password yang Anda masukkan salah.";
    header("location: index.php");
}
?>