<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
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

        .thank-you-text {
            text-align: center;
            margin-top: 20px;
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

    <!-- Video and Thank You Message Section -->
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
                    <div class="thank-you-text">
                        <h3>Terima kasih telah mengisi pengaduan!</h3>
                        <a href="index.php" class="btn btn-md btn-primary mt-3">Kembali ke Halaman Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
