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
        echo "
            <html lang='en'>
            <head>
                <title>Login Gagal ! - T-corn</title>
                <link href='css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css' rel='stylesheet'>
                <link rel='stylesheet' href='aset/cinta.css'>
                <link href='css/main.css' rel='stylesheet' type='text/css' media='all'/>
                <link rel='stylesheet' href='aset/bootstrap.css'>
            </head>
            <body>
                <br>
                <br>
                <div class='errorpage'>
                    <center>
                        <div class='danger'>
                            <i class='fa fa-exclamation-triangle'></i>
                        </div>
                        <br>
                        <h1>PASSWORD SALAH!</h1>
                        Password yang Anda masukkan salah.
                        <br>
                        <br>
                        <input name='submit' id='submitku' type=submit style='padding: 6px 12px;' value='ULANGI LAGI' onclick=location.href='formlogin'></a>
                        <br>
                    </center>
                </div>
                <script  src='animasi/login/index.js'></script>
            </body>
            </html>
        ";
    }
} else {
    // Jika username tidak ditemukan
    echo "
        <html lang='en'>
        <head>
            <title>Login Gagal ! - T-corn</title>
            <link href='css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css' rel='stylesheet'>
            <link rel='stylesheet' href='aset/cinta.css'>
            <link href='css/main.css' rel='stylesheet' type='text/css' media='all'/>
            <link rel='stylesheet' href='aset/bootstrap.css'>
        </head>
        <body>
            <br>
            <br>
            <div class='errorpage'>
                <center>
                    <div class='danger'>
                        <i class='fa fa-exclamation-triangle'></i>
                    </div>
                    <br>
                    <h1>USERNAME DAN PASSWORD SALAH!</h1>
                    Username dan password yang Anda masukkan salah.
                    <br>
                    <br>
                    <input name='submit' id='submitku' type=submit style='padding: 6px 12px;' value='ULANGI LAGI' onclick=location.href='formlogin'></a>
                    <br>
                </center>
            </div>
            <script  src='animasi/login/index.js'></script>
        </body>
        </html>
    ";
}
?>