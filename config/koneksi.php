<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_cftongkol";

$conn = mysqli_connect($server, $username, $password, $database);
// if (mysqli_connect_errno()) {
//     echo "Koneksi gagal: " . mysqli_connect_error();
//     exit();
// } else {
//     echo "Koneksi success";
// }

// mysqli_connect($server, $username, $password) or die("Koneksi gagal");
// mysqli_select_db(mysqli_connect($server, $username, $password), $database) or die("Maaf, Database tidak bisa dibuka");

?>