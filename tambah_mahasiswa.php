<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Data Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Form Tambah Data
                        </div>
                        <div class="card-body">
                            <form action="tambah_aksi.php" method="post">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" name="nama" id="Nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="NPM">NPM</label>
                                    <input type="text" name="npm" id="NPM" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" name="email" id="Email" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
