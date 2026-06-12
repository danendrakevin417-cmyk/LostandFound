<?php include 'db.php'; ?>

<!-- menghubungkan file database -->

<!DOCTYPE html>
<html lang="id">
<head>

    <!-- pengaturan karakter website -->

    <meta charset="UTF-8">

    <!-- supaya tampilan responsive di hp -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- judul halaman web -->

    <title>Lost & Found - Cari & Laporkan</title>

    <!-- bootstrap css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- font utama -->

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- font logo -->

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

    <!-- icon bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>

        /* style body awal */

        /*bjbj*/

        body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background:#fafafa;
    }

    
   

 
        /* background utama website */

        body { 
            background: linear-gradient(180deg, #0084ffff 50%, #49df3bff 100%);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #333;
        }
        
       
/* style menu navbar */

.menu-center .nav-link {
    color: #ddd;
    font-size: 0.9rem;
    margin: 0 15px;
    position: relative;
    transition: 0.3s;
}


/* efek hover menu */

.menu-center .nav-link:hover {
    color: #07e676;
}


/* garis animasi bawah menu */

.menu-center .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 0%;
    height: 2px;
    background: #00e676;
    transition: 0.3s;
}

/* animasi garis muncul */

.menu-center .nav-link:hover::after {
    width: 100%;
}


/* menu aktif */

.menu-center .nav-link.active {
    color: #00e676;
}

/* garis menu aktif */

.menu-center .nav-link.active::after {
    width: 100%;
}


/* tampilan dropdown */

.dropdown-menu {
    background: rgba(0,0,0,0.8);
    border: none;
    backdrop-filter: blur(10px);
}

/* isi dropdown */

.dropdown-item {
    color: #fff;
    transition: 0.3s;
}

/* hover dropdown */

.dropdown-item:hover {
    background: #00e676;
    color: black;
}

/* navbar utama */

.custom-navbar {
    background: rgba(15, 15, 15, 0.6);
    backdrop-filter: blur(12px);
    padding: 18px 0;
    transition: 0.3s;
}


/* tulisan logo */

.logo-text {
    font-family: 'Orbitron', sans-serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: #fff;
    letter-spacing: 2px;
}

/* icon logo */

.logo-icon {
    font-size: 1.3rem;
    margin-right: 8px;
}


/* efek hover logo */

.navbar-brand:hover .logo-text {
    color: #00e676;
    text-shadow: 0 0 8px #00e676;
}


/* tombol navbar */

.nav-btn {
    padding: 8px 18px;
    font-size: 0.85rem;
    border-radius: 20px;
    text-decoration: none;
    transition: 0.3s;
}


/* tombol transparan */

.soft-btn {
    background: rgba(255,255,255,0.1);
    color: #fff;
}

.soft-btn:hover {
    background: rgba(255,255,255,0.2);
}


/* tombol putih */

.outline-btn {
    background: #ffffff;
    color: #111;
    border: none;
    font-weight: 500;
}

/* hover tombol putih */

.outline-btn:hover {
    background: #00e676;
    color: black;
}


/* navbar saat discroll */

.custom-navbar.scrolled {
    background: rgba(0,0,0,0.9);
    box-shadow: 0 5px 20px rgba(0,0,0,0.4);
}

        /* bagian hero utama */

        .hero-section {
            padding: 60px 0;
            background: linear-gradient(180deg, #2563EB 50%, ##2563EB 100%);
            border-bottom: 4px solid #0084ffff;
            margin-bottom: 40px;
        }

        /* style video hero */

.hero-video {
    position: relative;
    height: 85vh; 
    overflow: hidden;
    color: white;
}

/* efek gradasi bawah video */

.hero-video::after {
    content: "";
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 120px;
    background: linear-gradient(to bottom, transparent, #0f0f0f);
    z-index: 2;
}

/* video background */

.bg-video {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    top: 0;
    left: 0;
    z-index: 1;
}

/* overlay gelap */

.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 2;
}

/* isi hero */

.hero-content {
    position: relative;
    z-index: 3;
    top: 50%;
    transform: translateY(-50%);
    max-width: 700px;
}

/* judul hero */

.hero-content h1 {
    font-size: 3rem;
    font-weight: 700;
}

/* warna span hero */

.hero-content h1 span {
    color: #00e676;
}

/* deskripsi hero */

.hero-content p {
    margin: 20px 0;
    color: #ddd;
}

/* tombol hero */

.hero-buttons .btn {
    margin-right: 10px;
    padding: 12px 25px;
    border-radius: 10px;
}

/* tombol utama */

.btn-main {
    background: #00e676;
    color: black;
    font-weight: 600;
}

/* hover tombol utama */

.btn-main:hover {
    background: #00c853;
}

/* statistik hero */

.hero-stats {
    display: flex;
    gap: 40px;
    margin-top: 30px;
    font-size: 0.9rem;
    opacity: 0.9;
}

/* angka statistik */

.hero-stats strong {
    font-size: 1.5rem;
}

/* ukuran hero video */

.hero-video {
    position: relative;
    height: 90vh;
    overflow: hidden;
    color: white;
    margin-bottom: -80px;
}


/* container pencarian */

.search-container {
    max-width: 500px;
    margin: 30px auto 50px;
}


/* box pencarian */

.search-box {
    background: #fff;
    border-radius: 50px;
    padding: 8px;
    display: flex;
    align-items: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* input search */

.search-box input {
    border: none;
    outline: none;
    flex: 1;
    padding: 12px 20px;
    border-radius: 50px;
    font-size: 0.95rem;
}

/* tombol search */

.search-box button {
    background: #00e676;
    border: none;
    padding: 10px 18px;
    border-radius: 50px;
    font-weight: 600;
    color: black;
    transition: 0.3s;
}

/* hover tombol search */

.search-box button:hover {
    background: #00c853;
}

/* input bootstrap */

.form-control-lg {
    background: white;
    border: 1px solid #ddd;
    color: #333;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

/* placeholder input */

.form-control-lg::placeholder {
    color: #aaa;
}


/* section isi barang */

.content-section {
    background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 100%);
    padding-top: 140px;
    padding-bottom: 80px;
    position: relative;
    color: #fff;
}


/* efek glow section */

.content-section::before {
    content: "";
    position: absolute;
    top: -80px;
    left: 0;
    width: 100%;
    height: 150px;
    background: radial-gradient(circle, rgba(0,230,118,0.15) 0%, transparent 70%);
}

/* judul section */

.content-section h2 {
    color: #fff;
}

/* paragraf section */

.content-section p {
    color: #aaa;
}

/* judul daftar barang */

.section-title {
    font-size: 2.3rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 10px;
}

/* subtitle daftar barang */

.section-subtitle {
    font-size: 1rem;
    color: #cccccc; 
    opacity: 0.9;
}  
       
/* card barang */

.card-custom {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    border: none;
    transition: 0.3s;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    color: #222;

    height: 100%;
    display: flex;
    flex-direction: column;
}

/* isi body card */

.card-body {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

/* footer website */

footer {
    background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
    color: #ccc;
    text-align: center;
    padding: 15px 10px;
    font-size: 14px;
    border-top: 1px solid #333;
}

/* paragraf footer */

footer p {
    margin: 0;
}

/* hover footer */

footer:hover {
    background: linear-gradient(135deg, #252525, #333);
    transition: 0.3s;
}

/* bagian bawah card */

.card-bottom {
    margin-top: auto;
}

/* tombol whatsapp */

.btn-wa-icon {
    width: 38px;
    height: 38px;
    background: #25D366;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 18px;
    transition: 0.3s;
}


/* hover tombol wa */

.btn-wa-icon:hover {
    background: #1ebe5d;
    transform: scale(1.1);
}

/* efek hover card */

.card-custom:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* judul card */

.card-custom h5 {
    color: #111;
    font-weight: 600;
} 

/* deskripsi card */

.card-custom p {
    color: #666;
}

/* container gambar */

.img-container {
    height: 200px;
    background: #f1f1f1;
}

/* gambar barang */

.img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
      
        /* badge status barang */

        .badge-status {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 8px 15px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 1px;
        }

        /* warna badge barang hilang */

        .bg-lost { background-color: #fc0707ff; color: white; }

        /* warna badge barang ditemukan */

        .bg-found { background-color: #00c811ff; color: white; }

        /* tombol report */

        .btn-report {
            padding: 12px 25px;
            border-radius: 12px;
            font-weight: 600;
            transition: 0.3s;
        }

        /* tombol warning */

        .btn-warning { background-color: #3106f1ff; border: none; color: white; }

        /* hover tombol warning */

        .btn-warning:hover { background-color: #0df834ff; box-shadow: 0 5px 15px rgba(21, 255, 0, 0.99); }
        
        /* indikator scroll */

        .scroll-indicator {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    z-index: 5;
    color: #ccc;
    font-size: 0.85rem;
}

/* icon scroll */

.scroll-indicator span {
    display: block;
    width: 20px;
    height: 20px;
    margin: 0 auto 5px;
    border-bottom: 3px solid #00e676;
    border-right: 3px solid #00e676;
    transform: rotate(45deg);
    animation: scrollDown 1.5s infinite;
}

/* animasi scroll */

@keyframes scrollDown {
    0% { opacity: 0; transform: rotate(45deg) translate(-5px,-5px); }
    50% { opacity: 1; }
    100% { opacity: 0; transform: rotate(45deg) translate(5px,5px); }
}

/* garis animasi menu */

.menu-center .nav-link::after {
    content: "";
    position: absolute;
    left: 50%;
    bottom: -5px;
    width: 0%;
    height: 2px;
    background: #00e676;
    transition: 0.3s;
    transform: translateX(-50%);
}
    </style>
</head>

<body>


<!-- bagian navbar -->

<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">

        <!-- logo website -->

        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <span class="logo-icon">⚠️</span>
            <span class="logo-text">LostFound</span>
        </a>

        <!-- menu navbar -->

        <ul class="navbar-nav mx-auto menu-center">

    <!-- tombol home -->

    <li class="nav-item">
        <a class="nav-link <?php if(!isset($_GET['filter'])) echo 'active'; ?>" href="index.php">
            Home
        </a>
    </li>

    <!-- tombol barang hilang -->

    <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['filter']) && $_GET['filter']=='lost') echo 'active'; ?>" 
           href="index.php?filter=lost">
           Barang Hilang
        </a>
    </li>

    <!-- tombol barang temuan -->

    <li class="nav-item">
        <a class="nav-link <?php if(isset($_GET['filter']) && $_GET['filter']=='found') echo 'active'; ?>" 
           href="index.php?filter=found">
           Barang Temuan
        </a>
    </li>

</ul>
        
        <div class="d-flex align-items-center gap-3">

            <!-- tombol pembuat web -->

            <a href="about.php" class="nav-btn soft-btn">Pembuat Web</a>

            <!-- dropdown admin -->

            <div class="dropdown">
                <button class="nav-btn outline-btn dropdown-toggle" data-bs-toggle="dropdown">
                    Admin
                </button>

                <!-- isi dropdown admin -->

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="Tentangadmin.php">!</a></li>
                </ul>
            </div>

        </div>

    </div>
</nav>

<!-- section hero video -->

<section class="hero-video">

    <!-- video background -->

    <video autoplay muted loop playsinline class="bg-video">
        <source src="video/abbs.mp4" type="video/mp4">
    </video>

    <!-- overlay gelap -->

    <div class="overlay"></div>

    <!-- isi hero -->

    <div class="hero-content container">

        <!-- judul utama -->

        <h1>
            Temukan Barang Anda yang <span>Hilang</span>
        </h1>

        <!-- deskripsi -->

        <p>
            Laporkan barang hilang atau bantu orang lain menemukan barang mereka dengan mudah dan cepat.
        </p>

        <!-- tombol hero -->

        <div class="hero-buttons">

           <!-- tombol lapor kehilangan -->

           <a href="lapor.php?status=lost" class="btn btn-main">
    + Laporkan Kehilangan
</a>

<!-- tombol lapor temuan -->

<a href="lapor.php?status=found" class="btn btn-outline-light">
    + Lapor Temuan
</a>
        </div>

        <!-- statistik website -->

        <div class="hero-stats">
            <div><strong>500+</strong><br>Barang Hilang</div>
            <div><strong>300+</strong><br>Barang Ditemukan</div>
            <div><strong>95%</strong><br>Berhasil Kembali</div>
        </div>
    </div>

    <!-- indikator scroll -->

    <div class="scroll-indicator">
    <span></span>
    <p>Lihat barang di bawah</p>
</div>

</section>

<!-- section isi barang -->

<div class="content-section">
    <div class="container">

        <!-- judul daftar barang -->

        <div class="text-center mb-5">
    <h2 class="section-title">Daftar Barang Terbaru</h2>

<p class="section-subtitle">
    Temukan atau bantu kembalikan barang yang hilang
</p>
</div>

    <!-- form pencarian -->

    <div class="search-container">

    <form method="GET">

    <!-- menyimpan filter -->

    <input type="hidden" name="filter" value="<?php echo isset($_GET['filter']) ? $_GET['filter'] : ''; ?>">
       
    <div class="search-box">

            <!-- input search -->

            <input type="text" name="search"
                placeholder="Cari dompet, kunci, laptop..."
                value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">

            <!-- tombol cari -->

            <button type="submit">Cari</button>
        </div>
    </form>
</div>

    <div class="row">

        <?php

       /* mengambil keyword search */

       $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

/* mengambil filter */

$filter = isset($_GET['filter']) ? $_GET['filter'] : '';

/* query awal */

$query = "SELECT * FROM posts WHERE claimed = 0";

/* filter barang hilang */

if($filter == 'lost') {
    $query .= " AND status='lost'";
}

/* filter barang ditemukan */

elseif($filter == 'found') {
    $query .= " AND status='found'";
}

/* sistem search */

if(!empty($search)) {
    $query .= " AND (title LIKE '%$search%' OR description LIKE '%$search%')";
}

/* urutkan terbaru */

$query .= " ORDER BY created_at DESC";

/* menjalankan query */

$result = mysqli_query($conn, $query);

        $result = mysqli_query($conn, $query);

        /* cek data tersedia */

        if(mysqli_num_rows($result) > 0) {

            /* looping data */

            while($row = mysqli_fetch_assoc($result)) {

                /* menentukan warna status */

                $status_class = ($row['status'] == 'lost') ? 'bg-lost' : 'bg-found';

                /* menentukan text status */

                $status_text = ($row['status'] == 'lost') ? 'Hilang' : 'Ditemukan';
        ?>

        <!-- kolom card -->

        <div class="col-md-4 mb-4">

    <!-- card barang -->

    <div class="card card-custom position-relative">

        <!-- badge status -->

        <span class="badge-status <?php echo $status_class; ?>">
            <?php echo $status_text; ?>
        </span>

        <!-- gambar barang -->

        <div class="img-container">

            <!-- cek gambar tersedia -->

            <?php if($row['image'] && file_exists("img/" . $row['image'])): ?>

                <img src="img/<?php echo $row['image']; ?>" alt="Barang">

            <!-- jika gambar tidak ada -->

            <?php else: ?>

                <div class="text-muted text-center p-4">
                    <span style="font-size: 40px;">📷</span><br>
                    <small>Foto tidak tersedia</small>
                </div>

            <?php endif; ?>

        </div>

        <!-- isi card -->

        <div class="card-body p-4">

            <!-- judul barang -->

            <h5 class="fw-bold mb-2">
                <?php echo $row['title']; ?>
            </h5>

            <!-- deskripsi barang -->

            <p class="text-muted small mb-3">
                <?php echo substr($row['description'], 0, 80); ?>...
            </p>

            <!-- bagian bawah card -->

            <div class="card-bottom d-flex justify-content-between align-items-center pt-2 border-top">

                <!-- tanggal upload -->

                <small class="text-secondary">
                    📅 <?php echo date('d M Y', strtotime($row['created_at'])); ?>
                </small>

                <!-- tombol whatsapp -->

                <?php if(!empty($row['phone'])): ?>

                    <a href="https://wa.me/<?php echo $row['phone']; ?>" 
                       target="_blank"
                       class="btn-wa-icon">

                        <i class="bi bi-whatsapp"></i>

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>
</div>

        <?php 

            } 

        } else {

            /* jika barang kosong */

            echo "<div class='text-center py-5'><h5 class='text-muted'>Barang tidak ditemukan...</h5></div>";
        }

        ?>

    </div>
</div>
    </div>
    </div>

<!-- footer website -->

<footer>
    <p>© 2026 Lost & Found Final Project ICT ABBS Sukoharjo X-1 Team = 
   </p>
</footer>

<!-- efek navbar saat scroll -->

<script>
window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".custom-navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
});
</script>

<!-- scroll otomatis ke bawah -->

<script>
document.querySelector(".scroll-indicator").addEventListener("click", function() {
    window.scrollTo({
        top: window.innerHeight,
        behavior: "smooth"
    });
});
</script>

<!-- bootstrap javascript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>