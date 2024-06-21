<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kategori = $_POST['Kategori'];
    $deskripsi = $_POST['Deskripsi'];

    $query = "INSERT INTO pengaduan (Kategori, Deskripsi) VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $kategori, $deskripsi);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request method.";
}
?>
