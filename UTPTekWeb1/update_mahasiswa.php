<?php
include "koneksi.php";

$id = $_POST['id'];
$npm = $_POST['NPM'];
$nama = $_POST['Nama'];
$email = $_POST['Email'];

echo "ID: " . $id . "<br>";
echo "NPM: " . $npm . "<br>";
echo "Nama: " . $nama . "<br>";
echo "Email: " . $email . "<br>";

$query = "UPDATE mahasiswa SET NPM='$npm', Nama='$nama', Email='$email' WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    echo "Data Berhasil Diupdate";
    header("location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
