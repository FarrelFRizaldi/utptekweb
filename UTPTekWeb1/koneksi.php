<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_nama = "utptekweb1";

$conn = mysqli_connect($host, $user, $pass, $db_nama);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
