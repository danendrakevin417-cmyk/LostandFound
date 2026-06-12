<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Admin - Lost & Found</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(180deg, #0f0f0f, #1a1a1a);
            color: white;
        }

        .custom-navbar {
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(12px);
            padding: 18px 0;
        }

        .logo-text {
            font-family: 'Orbitron', sans-serif;
            color: white;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .nav-btn {
            padding: 8px 18px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.85rem;
        }

        .outline-btn {
            border: 1px solid rgba(255,255,255,0.4);
            color: white;
        }

        .outline-btn:hover {
            background: #00e676;
            color: black;
        }

        .about-header {
            text-align: center;
            padding: 120px 20px 60px;
        }

        .about-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 0 0 15px rgba(0,230,118,0.3);
        }

        .about-header p {
            color: #aaa;
        }

        .info-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .role {
            color: #00e676;
            font-weight: 600;
        }

        .btn-back {
            border: 1px solid #00e676;
            color: #00e676;
            border-radius: 30px;
            padding: 10px 25px;
        }

        .btn-back:hover {
            background: #00e676;
            color: black;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <span class="me-2">⚠️</span>
            <span class="logo-text">LostFound</span>
        </a>

        <div class="ms-auto">
            <a href="index.php" class="nav-btn outline-btn">Beranda</a>
        </div>
    </div>
</nav>

<!-- HEADER -->
<section class="about-header">
    <h1>Tentang Admin</h1>
    <p>Peran dan fungsi admin dalam sistem Lost & Found</p>
</section>

<!-- CONTENT -->
<div class="container pb-5">
    <div class="row justify-content-center g-4">

        <div class="col-md-6">
            <div class="info-card">
                <h5 class="fw-bold">Apa itu Admin?</h5>
                <p class="mt-2 text-secondary">
                    Admin adalah pihak yang bertanggung jawab dalam mengelola sistem Lost & Found.
                    Admin memiliki akses penuh untuk memantau, mengatur, dan memastikan semua laporan berjalan dengan baik.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="info-card">
                <h5 class="fw-bold">Tugas Admin</h5>
                <ul class="mt-2 text-secondary">
                    <li>Mengelola laporan barang hilang & ditemukan</li>
                    <li>Memverifikasi keakuratan data</li>
                    <li>Mengubah status (Hilang, Ditemukan, Diklaim)</li>
                    <li>Menghapus data yang tidak valid</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="info-card">
                <h5 class="fw-bold">Sistem Kerja</h5>
                <p class="mt-2 text-secondary">
                    Setiap laporan yang masuk akan disimpan dalam database.
                    Admin kemudian akan mengelola status laporan tersebut sesuai kondisi nyata di lapangan.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="info-card">
                <h5 class="fw-bold">Tujuan Sistem</h5>
                <p class="mt-2 text-secondary">
                    Sistem ini dibuat untuk membantu pengguna menemukan barang yang hilang
                    dengan lebih cepat dan terorganisir melalui pengelolaan admin.
                </p>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="index.php" class="btn btn-back">← Kembali ke beranda</a>
    </div>
</div>

</body>
</html>