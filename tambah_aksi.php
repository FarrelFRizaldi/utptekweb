<?php
include "koneksi.php";

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];

$query = "INSERT INTO mahasiswa (Nama, NPM, Email) VALUES ('$nama', '$npm', '$email')";

if ($conn->query($query)) {
    echo "Data Berhasil";
    header("Location: index.php");
} else {
    echo "Data Gagal";
}
?>
