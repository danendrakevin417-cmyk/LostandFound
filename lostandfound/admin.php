<?php

// memulai session login admin

session_start();

/* menghubungkan database */

include 'db.php';

/* cek apakah admin sudah login */

if(!isset($_SESSION['admin'])) header("Location: login.php");

// update status laporan

if(isset($_POST['update_status'])) {

    /* mengambil id laporan */

    $id = intval($_POST['id']);

    /* mengambil status baru */

    $status = $_POST['status'];

    /* jika status diklaim */

    if($status == 'claimed'){

        mysqli_query($conn, "UPDATE posts SET claimed=1 WHERE id=$id");

    } else {

        /* update status biasa */

        mysqli_query($conn, "UPDATE posts SET status='$status', claimed=0 WHERE id=$id");
    }
}

// hapus laporan

if(isset($_GET['delete'])){

    /* mengambil id */

    $id = intval($_GET['delete']);

    /* query hapus */

    mysqli_query($conn, "DELETE FROM posts WHERE id=$id");
}

// mengambil total barang hilang

$count_lost = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM posts WHERE status='lost' AND claimed=0"))['total'];

/* mengambil total barang ditemukan */

$count_found = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM posts WHERE status='found' AND claimed=0"))['total'];

/* mengambil total barang diklaim */

$count_claimed = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM posts WHERE claimed=1"))['total'];

?>

<!DOCTYPE html>
<html lang="id">
<head>

    <!-- pengaturan karakter -->

    <meta charset="UTF-8">

    <!-- responsive mobile -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- judul halaman admin -->

    <title>Admin Dashboard - Lost & Found</title>
    
    <!-- bootstrap css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- font utama -->

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icon -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>

        /* warna utama website */

        :root {
            --primary-maroon: #800000;
            --light-bg: #f8f9fa;
            --white: #ffffff;
            --text-dark: #2d3436;
        }

        /* style body */

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
        }

        /* navbar admin */

        .navbar {
            background: var(--white);
            border-bottom: 1px solid #e0e0e0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        /* logo navbar */

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-maroon) !important;
        }

        /* card statistik */

        .stat-card {
            background: var(--white);
            border: none;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        /* hover card statistik */

        .stat-card:hover {
            transform: translateY(-5px);
        }

        /* container tabel */

        .table-container {
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            margin-top: 30px;
            border: 1px solid #eee;
        }

        /* tabel utama */

        .table {
            margin-bottom: 0;
        }

        /* bagian header tabel */

        .table thead {
            background: #f1f3f5;
            color: #636e72;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        /* isi tabel */

        .table td {
            vertical-align: middle;
            padding: 18px 15px;
            border-color: #f1f3f5;
        }

        /* preview gambar barang */

        .img-preview {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #eee;
        }

        /* style select status */

        .form-select-custom {
            background-color: #fff;
            color: var(--text-dark);
            border: 1px solid #ced4da;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        /* tombol update */

        .btn-update {
            background: var(--primary-maroon);
            color: white;
            border: none;
            padding: 7px 15px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
        }

        /* hover tombol update */

        .btn-update:hover {
            background: #a00000;
            color: white;
        }

        /* tombol logout */

        .btn-logout {
            background: #fff;
            color: var(--primary-maroon);
            border: 2px solid var(--primary-maroon);
            padding: 8px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            transition: 0.3s;
        }

        /* hover tombol logout */

        .btn-logout:hover {
            background: var(--primary-maroon);
            color: #fff;
        }

        /* badge info */

        .badge-info {
            font-size: 11px;
            background: #f1f3f5;
            color: #636e72;
            padding: 4px 8px;
            border-radius: 5px;
        }

    </style>
</head>

<body>

<!-- navbar admin -->

<nav class="navbar navbar-expand-lg mb-5 sticky-top">

    <div class="container">

        <!-- logo admin -->

        <a class="navbar-brand" href="#">
            <i class="bi bi-shield-check me-2"></i>ADMIN LOST&FOUND
        </a>

        <!-- tombol logout -->

        <a href="logout.php" class="btn-logout">Keluar</a>

    </div>

</nav>

<!-- container utama -->

<div class="container pb-5">

    <!-- row statistik -->

    <div class="row g-4 mb-2">

        <!-- card barang hilang -->

        <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex align-items-center">

                    <div class="rounded-circle bg-danger bg-opacity-10 p-3 me-3">
                        <i class="bi bi-search text-danger fs-4"></i>
                    </div>

                    <div>
                        <div class="small text-secondary fw-semibold">Barang Hilang</div>
                        <h2 class="fw-bold m-0 text-dark"><?php echo $count_lost; ?></h2>
                    </div>

                </div>

            </div>

        </div>

        <!-- card barang ditemukan -->

        <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex align-items-center">

                    <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                        <i class="bi bi-box-seam text-success fs-4"></i>
                    </div>

                    <div>
                        <div class="small text-secondary fw-semibold">Ditemukan</div>
                        <h2 class="fw-bold m-0 text-dark"><?php echo $count_found; ?></h2>
                    </div>

                </div>

            </div>

        </div>

        <!-- card barang selesai -->

        <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex align-items-center">

                    <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                        <i class="bi bi-check2-circle text-primary fs-4"></i>
                    </div>

                    <div>
                        <div class="small text-secondary fw-semibold">Selesai/Diklaim</div>
                        <h2 class="fw-bold m-0 text-dark"><?php echo $count_claimed; ?></h2>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- container tabel laporan -->

    <div class="table-container">

        <!-- header tabel -->

        <div class="p-3 border-bottom bg-white d-flex justify-content-between align-items-center">

            <h5 class="m-0 fw-bold">
                <i class="bi bi-table me-2"></i>Daftar Laporan
            </h5>

            <span class="badge-info">Update status secara manual</span>

        </div>

        <!-- responsive tabel -->

        <div class="table-responsive">

            <table class="table">

                <!-- kepala tabel -->

                <thead>

                    <tr>
                        <th class="ps-4">Item</th>
                        <th>Keterangan</th>
                        <th>Ubah Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>

                </thead>

                <!-- isi tabel -->

                <tbody>

                    <?php

                    /* mengambil semua data */

                    $res = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");

                    /* cek apakah data ada */

                    if(mysqli_num_rows($res) > 0) {

                        /* looping data */

                        while($row = mysqli_fetch_assoc($res)) {

                    ?>

                    <tr>

                        <!-- gambar barang -->

                        <td class="ps-4">

                            <img src="img/<?php echo $row['image']; ?>" 
                                 class="img-preview" 
                                 onerror="this.src='https://via.placeholder.com/60'">

                        </td>

                        <!-- detail barang -->

                        <td>

                            <div class="fw-bold text-dark">
                                <?php echo $row['title']; ?>
                            </div>

                            <div class="text-muted small">
                                <i class="bi bi-whatsapp"></i> <?php echo $row['phone']; ?>
                            </div>

                        </td>

                        <!-- form update status -->

                        <td>

                            <form method="POST" class="d-flex gap-2">

                                <!-- id laporan -->

                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                                <!-- pilihan status -->

                                <select name="status" class="form-select-custom">

                                    <option value="lost" <?php if($row['status']=='lost' && !$row['claimed']) echo 'selected'; ?>>
                                        🚨 Hilang
                                    </option>

                                    <option value="found" <?php if($row['status']=='found' && !$row['claimed']) echo 'selected'; ?>>
                                        📦 Ditemukan
                                    </option>

                                    <option value="claimed" <?php if($row['claimed']) echo 'selected'; ?>>
                                        ✅ Diklaim
                                    </option>

                                </select>

                                <!-- tombol update -->

                                <button type="submit" name="update_status" class="btn-update">
                                    Update
                                </button>

                            </form>

                        </td>

                        <!-- tombol hapus -->

                        <td class="text-center">

                            <a href="?delete=<?php echo $row['id']; ?>" 
                               class="btn btn-sm btn-outline-danger border-0" 
                               onclick="return confirm('Hapus laporan ini?')">

                                <i class="bi bi-trash3-fill"></i>

                            </a>

                        </td>

                    </tr>

                    <?php 

                        } 

                    } else {

                        /* jika data kosong */

                        echo "<tr><td colspan='4' class='text-center py-5 text-muted'>Belum ada laporan masuk.</td></tr>";
                    }

                    ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>