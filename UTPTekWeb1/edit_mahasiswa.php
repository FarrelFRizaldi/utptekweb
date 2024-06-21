<?php
include "koneksi.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
    $data = mysqli_fetch_array($query);
} else {
    
    echo "ID mahasiswa tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Form Edit Data
                    </div>
                    <div class="card-body">
                        <form action="update_mahasiswa.php" method="post">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" class="form-control">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                             </div>
                            <div class="form-group">
                                <label for="NPM">Npm</label>
                                <input type="text" name="NPM" value="<?php echo $data['NPM']; ?>" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="Email" value="<?php echo $data['Email']; ?>" class="form-control">
                             </div>

                             <button type="submit" class="btn btn-success">Simpan Perubahan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
