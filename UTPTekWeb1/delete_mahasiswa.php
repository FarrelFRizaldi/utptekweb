<?php
include "koneksi.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $query = "DELETE FROM mahasiswa WHERE id = ?";

   
    $stmt = mysqli_prepare($conn, $query);

   
    mysqli_stmt_bind_param($stmt, "i", $id);

    
    if (mysqli_stmt_execute($stmt)) {
        
        header("Location: index.php");
        exit();
    } else {
        
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

   
    mysqli_stmt_close($stmt);
} else {
   
    echo "ID tidak tersedia";
}
?>
