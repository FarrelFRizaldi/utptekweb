<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengaduan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Pengaduan
                    </div>
                    <div class="card-body">
                        <form action="simpan_pengaduan.php" method="post">
                            <div class="form-group">
                                <label for="Kategori">Kategori</label>
                                <select name="Kategori" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Fasilitas">Fasilitas</option>
                                    <option value="Kinerja Dosen">Kinerja Dosen</option>
                                    <option value="Keamanan">Keamanan</option>
                                    <option value="Akademik">Akademik</option>
                                    <!-- Add more categories as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Deskripsi">Deskripsi</label>
                                <textarea name="Deskripsi" class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
