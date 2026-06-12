<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembuat Web - Lost & Found</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(180deg, #0f0f0f, #1a1a1a);
            color: white;
        }

        /* NAVBAR (BIAR SAMA) */
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

        /* HEADER */
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

        /* card team */
        .team-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.1);
            transition: 0.3s;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .profile-img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid rgba(0,230,118,0.5);
        }

        .role {
            color: #00e676;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .desc {
            color: #bbb;
            font-size: 0.85rem;
        }

        /* button */
        .btn-back {
            border: 1px solid #00e676;
            color: #00e676;
            border-radius: 30px;
            padding: 10px 25px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: #00e676;
            color: black;
        }
    </style>
</head>
<body>

<!-- navbar -->
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

<!-- header -->
<section class="about-header">
    <h1>Tim Pengembang</h1>
    <p>Orang-orang di balik website Lost & Found</p>
</section>

<!-- team -->
<div class="container pb-5">
    <div class="row justify-content-center g-4">

        <div class="col-md-3">
            <div class="team-card">
                <img src="img/Kepin.jpeg" class="profile-img">
                <h5 class="fw-bold">Kepin Danendra Rizkullah</h5>
                <div class="role">Developer Team</div>
                <p class="desc mt-2">Tukang Buat PHP dan Database Web Dan UI Designer</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="team-card">
                <img src="img/azzam.jpeg" class="profile-img">
                <h5 class="fw-bold">Azzam Nasuha Mulyono</h5>
                <div class="role">Developer Team</div>
                <p class="desc mt-2">Tukang Buat PHP dan Database Web Dan UI Designer</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="team-card">
                <img src="img/akhdan.jpeg" class="profile-img">
                <h5 class="fw-bold">Akhdan Rosyad Wicaksono</h5>
                <div class="role">Developer Team </div>
                <p class="desc mt-2">Tukang Buat PHP dan Database Web Dan UI Designer</p>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="index.php" class="btn btn-back">← Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>