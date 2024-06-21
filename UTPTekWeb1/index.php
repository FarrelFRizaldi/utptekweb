<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengaduan Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio (adjust as needed) */
            margin-bottom: 50px; /* Spacing from the content above */
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .section-content {
            margin-bottom: 50px; /* Adjust spacing between sections */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header p-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <h1 class="h3">Sistem Pengaduan Mahasiswa</h1>
                </div>
                <nav>
                    <a href="#home" class="me-3">Home</a>
                    <a href="#profile" class="me-3">Profile</a>
                    <a href="#pengaduan" class="me-3">Report</a>
                    <a href="#about" class="me-3">About</a>
                </nav>
            </div>
        </div>
        <div class="avatar-container">
            <img src="images\LOGO UNIVERSITAS PAKUAN.png" alt="University Logo" class="avatar">
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="home-section section-content">
        <div class="container">
            <h2>Welcome to Pakuan University</h2>
            <img src="images\gedung-unpak1.jpg" alt="University Building">
        </div> 
    </section>

    <!-- Data Mahasiswa -->
    <section id="profile" class="mt-5 section-content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Mahasiswa
                </div>
                <div class="card-body">
                    <a href="tambah_mahasiswa.php" class="btn btn-md btn-success">Tambah Data</a>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "koneksi.php";

                            $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
                            while($data = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>" . $data['Nama'] . "</td>";
                                echo "<td>" . $data['NPM'] . "</td>";
                                echo "<td>" . $data['Email'] . "</td>";
                                echo "<td>";
                                echo "<a href='edit_mahasiswa.php?id=" . $data['id'] . "' class='btn btn-sm btn-primary'>Edit</a> ";
                                echo "<a href='delete_mahasiswa.php?id=" . $data['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Pengaduan -->
    <section id="pengaduan" class="mt-5 section-content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Pengaduan
                </div>
                <div class="card-body">
                    <a href="tambah_pengaduan.php" class="btn btn-md btn-success">Tambah Pengaduan</a>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM pengaduan";
                            $result = mysqli_query($conn, $query);

                            while ($data = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $data['id'] . "</td>";
                                echo "<td>" . $data['Kategori'] . "</td>";
                                echo "<td>" . $data['Deskripsi'] . "</td>";
                                echo "<td>";
                                echo "<a href='edit_pengaduan.php?id=" . $data['id'] . "' class='btn btn-sm btn-primary'>Edit</a> ";
                                echo "<a href='delete_pengaduan.php?id=" . $data['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="mt-5 section-content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Tentang Sistem Pengaduan Mahasiswa Universitas Pakuan
                </div>
                <div class="card-body">
                    <p>
                        Selamat datang di Aplikasi Sistem Pengaduan Mahasiswa Universitas Pakuan.
                    </p>
                    <p>
                        Aplikasi ini dirancang untuk memberikan saluran komunikasi yang efektif dan efisien antara mahasiswa dan pihak universitas.
                    </p>
                    <p>
                        Melalui aplikasi ini, mahasiswa dapat menyampaikan berbagai macam pengaduan, saran, dan masukan terkait pengalaman mereka di kampus
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="video-container">
                        <video id="promo-video" controls autoplay>
                            <source src="videos/Company Profile Universitas Pakuan.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Sistem Pengaduan Mahasiswa Universitas Pakuan. All rights reserved.</p>
                <p>Follow us on:</p>
                <ul class="list-inline social-icons">
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/official_unpak/" target="_blank"><i class="bi bi-instagram"> Instagram Official Unpak </i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/unpak/" target="_blank"><i class="bi bi-facebook"> Facebook Official Unpak </i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/c/UNPAKTV/videos" target="_blank"><i class="bi bi-youtube"> Youtube Official Unpak </i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://x.com/official_unpak" target="_blank"><i class="bi bi-twitter"> Twitter Official Unpak </i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap Icons CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
