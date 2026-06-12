<?php 

/* koneksi database */

include 'db.php'; 


/* cek apakah tombol submit ditekan */

if (isset($_POST['submit'])) {

    /* mengambil input nama barang */

    $title = mysqli_real_escape_string($conn, $_POST['title']);

    /* mengambil input deskripsi */

    $description = mysqli_real_escape_string($conn, $_POST['description']);

    /* mengambil status laporan */

    $status = $_POST['status'];

    /* mengambil nomor whatsapp */

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    /* mengambil nama file gambar */

    $image = $_FILES['image']['name'];

    /* lokasi upload gambar */

    $target = "img/" . basename($image);

    /* query tambah laporan */

    $query = "INSERT INTO posts (user_id, title, description, image, status, claimed, phone) 
              VALUES (1, '$title', '$description', '$image', '$status', 0, '$phone')";

    /* menjalankan query */

    if (mysqli_query($conn, $query)) {

        /* upload gambar jika ada */

        if ($image) { 
            move_uploaded_file($_FILES['image']['tmp_name'], $target); 
        }

        /* alert berhasil */

        echo "<script>alert('Laporan berhasil dikirim!'); window.location='index.php';</script>";
    }
}
?>

<?php

/* mengambil status dari url */

$status_fixed = isset($_GET['status']) ? $_GET['status'] : '';

?>

<!DOCTYPE html>
<html lang="id">
<head>

<!-- pengaturan karakter -->

<meta charset="UTF-8">

<!-- judul halaman -->

<title>Buat Laporan - Lost & Found</title>

<!-- bootstrap css -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>

/* background utama */

body {
    margin: 0;
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 100%);
    color: #fff;
}

/* box form */

.form-box {
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.4);
    border: 1px solid rgba(255,255,255,0.08);
}

/* judul form */

.form-title {
    font-weight: 700;
    margin-bottom: 25px;
}

/* style input dan select */

.form-control, .form-select {
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.1);
    color: #fff;
    border-radius: 12px;
    padding: 12px;
}

/* placeholder input */

.form-control::placeholder {
    color: #aaa;
}

/* efek focus input */

.form-control:focus, .form-select:focus {
    border-color: #00e676;
    box-shadow: 0 0 10px rgba(0,230,118,0.3);
    background: rgba(255,255,255,0.08);
    color: #fff;
}

/* label form */

label {
    font-weight: 600;
    margin-bottom: 5px;
}

/* tombol utama */

.btn-main {
    background: #00e676;
    border: none;
    color: black;
    font-weight: 600;
    padding: 12px;
    border-radius: 12px;
    transition: 0.3s;
}

/* hover tombol utama */

.btn-main:hover {
    background: #00c853;
    transform: scale(1.03);
}

/* tombol batal */

.btn-cancel {
    background: rgba(255,255,255,0.1);
    color: #ddd;
    border-radius: 12px;
}

/* hover tombol batal */

.btn-cancel:hover {
    background: rgba(255,255,255,0.2);
}

/* posisi form di tengah */

.wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
}

</style>
</head>

<body>

<!-- wrapper utama -->

<div class="wrapper">

<div class="container">

    <div class="row justify-content-center">

        <!-- ukuran form -->

        <div class="col-md-6">

            <!-- box form -->

            <div class="form-box">

                <!-- judul halaman -->

                <h4 class="form-title">📝 Buat Laporan</h4>

                <!-- form laporan -->

                <form method="POST" enctype="multipart/form-data">

                    <!-- pilihan jenis laporan -->

                    <div class="mb-3">

                        <label>Jenis Laporan</label>

                        <?php

/* mengambil status dari url */

$status_fixed = isset($_GET['status']) ? $_GET['status'] : '';

?>

<!-- select jenis laporan -->

<select name="status" class="form-select" required>

<!-- jika status lost -->

<?php if($status_fixed == 'lost'): ?>

    <option value="lost" selected>Saya Kehilangan Barang</option>

<!-- jika status found -->

<?php elseif($status_fixed == 'found'): ?>

    <option value="found" selected>Saya Menemukan Barang</option>

<!-- jika tidak ada status -->

<?php else: ?>

    <option value="lost">Saya Kehilangan Barang</option>
    <option value="found">Saya Menemukan Barang</option>

<?php endif; ?>

</select>

                    </div>

                    <!-- input nama barang -->

                    <div class="mb-3">

                        <label>Nama Barang</label>

                        <input type="text" 
                               name="title" 
                               class="form-control" 
                               placeholder="Contoh: Dompet Hitam" 
                               required>

                    </div>

                    <!-- input deskripsi -->

                    <div class="mb-3">

                        <label>Deskripsi & Lokasi</label>

                        <textarea name="description" 
                                  class="form-control" 
                                  rows="3" 
                                  placeholder="Jelaskan detail & lokasi..." 
                                  required></textarea>

                    </div>

                    <!-- input whatsapp -->

                    <div class="mb-3">

                        <label>Nomor WhatsApp</label>

                        <input type="text" 
                               name="phone" 
                               class="form-control" 
                               placeholder="628xxxxxxxxxx" 
                               required>

                    </div>

                    <!-- upload foto -->

                    <div class="mb-4">

                        <label>Foto Barang</label>

                        <input type="file" 
                               name="image" 
                               class="form-control">

                    </div>

                    <!-- tombol kirim -->

                    <button type="submit" 
                            name="submit" 
                            class="btn btn-main w-100">

                        Kirim Laporan

                    </button>

                    <!-- tombol batal -->

                    <a href="index.php" class="btn btn-cancel w-100 mt-2">

                        Batal

                    </a>

                </form>

            </div>

        </div>

    </div>

</div>

</div>

</body>
</html>