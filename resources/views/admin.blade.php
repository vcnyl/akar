<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Mahasiswa TI POLIWANGI</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-6">
                    <div class="logo">Portofolio Mahasiswa TI POLIWANGI</div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="search-box">
                        <!-- Tempatkan kotak pencarian di sini -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari...">
                            <button class="btn btn-success" type="button">Cari</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 ml-auto">
                <a href="/Export Excel">
                    <img src="icon-download.png" alt="Logo unduh" class="unduh-image">
                </a>
                </div>
                <div class="col-md-1 col-6">
                    <div class="profile-logo" onclick="toggleSidebar()">
                        <!-- Tempatkan gambar logo profil di sini -->
                        <img src="logo-profile.png" alt="Logo Profil">
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="sidebar" id="sidebar">
        <button class="sidebar-close" onclick="toggleSidebar()">✖</button>
        <div class="sidebar-header">
            <img src="logo-profile.png" alt="Logo Profil">
                <p>ADMIN</p>
                <p>362155401034</p>
        </div>
        <hr style="border-bottom: 7px solid #D9D9D9; width: 100%;">
        <ul class="menu">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Karya</a></li>
            <li><a href="#">Prestasi</a></li>
            <li><a href="#">Pelatihan</a></li>
            <li><a href="#">Cetak Portofolio</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <div class="karya-container">
        <!-- Kotak Karya 1 -->
        <div class="karya-box">
            <div class="karya-content">
                <img src="fotomhs.jpeg" alt="Karya 1" class="karya-image">
                <h3 class="karya-title">Moh. Syafa Rendy Ardana Aditya</h3>
                <button class="btn btn-primary">Lihat Detail</button>
            </div>
        </div>
        <div class="karya-box">
            <div class="karya-content">
                <img src="fotomhs.jpeg" alt="Karya 1" class="karya-image">
                <h3 class="karya-title">Moh. Syafa Rendy Ardana Aditya</h3>
                <button class="btn btn-primary">Lihat Detail</button>
            </div>
        </div>
        <div class="karya-box">
            <div class="karya-content">
                <img src="fotomhs.jpeg" alt="Karya 1" class="karya-image">
                <h3 class="karya-title">Moh. Syafa Rendy Ardana Aditya</h3>
                <button class="btn btn-primary">Lihat Detail</button>
            </div>
        </div>
        <div class="karya-box">
            <div class="karya-content">
                <img src="fotomhs.jpeg" alt="Karya 1" class="karya-image">
                <h3 class="karya-title">Moh. Syafa Rendy Ardana Aditya</h3>
                <button class="btn btn-primary">Lihat Detail</button>
            </div>
        </div>
        <div class="karya-box">
            <div class="karya-content">
                <img src="fotomhs.jpeg" alt="Karya 1" class="karya-image">
                <h3 class="karya-title">Moh. Syafa Rendy Ardana Aditya</h3>
                <button class="btn btn-primary">Lihat Detail</button>
            </div>
        </div>
        <div class="karya-box">
            <div class="karya-content">
                <img src="fotomhs.jpeg" alt="Karya 1" class="karya-image">
                <h3 class="karya-title">Moh. Syafa Rendy Ardana Aditya</h3>
                <button class="btn btn-primary">Lihat Detail</button>
            </div>
        </div>
        <!-- Tambahkan kotak karya lainnya di sini jika diperlukan -->
    </div>

    <script src="scripts.js"></script>

</body>
</html>