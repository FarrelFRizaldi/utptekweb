<?php
include "koneksi.php";

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$query = "INSERT INTO mahasiswa(nama, npm, email) VALUES ('$nama', '$npm', '$email')";

if (mysqli_query($conn, $query)) {
    echo "Data Berhasil Ditambahkan";
    header("location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
