<?php
include "koneksi.php";

$kategori_id = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$query = "INSERT INTO pengaduan (kategori_id, deskripsi) VALUES ('$kategori_id', '$deskripsi')";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Pengaduan berhasil ditambahkan');window.location='index.php';</script>";
} else {
    echo "<script>alert('Pengaduan gagal ditambahkan');window.location='tambah_pengaduan.php';</script>";
}
?>
