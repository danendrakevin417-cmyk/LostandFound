<?php

// memulai session login

session_start();

/* koneksi database */

include 'db.php';

/* variable error */

$error = "";

/* cek apakah tombol login ditekan */

if (isset($_POST['login'])) {

    /* mengambil username */

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    /* enkripsi password */

    $password = md5($_POST['password']);
    
    /* query cek akun admin */

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    
    /* jika login berhasil */

    if (mysqli_num_rows($query) > 0) {

        /* membuat session admin */

        $_SESSION['admin'] = $username;

        /* pindah ke dashboard admin */

        header("Location: admin.php");

        exit();

    } else {

        /* pesan error login */

        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<!-- pengaturan karakter -->

<meta charset="UTF-8">

<!-- responsive mobile -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- judul halaman -->

<title>Login Admin - Lost & Found</title>

<!-- bootstrap css -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- font utama -->

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<!-- font logo -->

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">

<style>

/* style body utama */

body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: linear-gradient(180deg, #0f0f0f, #1a1a1a);
    color: white;
    margin: 0;
    min-height: 100vh;
}

/* navbar atas */

.custom-navbar {
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(12px);
    padding: 15px 0;
}

/* tulisan logo */

.logo-text {
    font-family: 'Orbitron', sans-serif;
    color: white;
    font-weight: 700;
    letter-spacing: 2px;
}

/* wrapper login */

.login-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px 15px 40px;
}

/* card login */

.login-card {
    width: 100%;
    max-width: 400px;
    padding: 35px;
    border-radius: 20px;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
    
    margin-top: 40px;
    margin-bottom: 40px;
}

/* judul login */

.login-card h4 {
    font-weight: 700;
}

/* input form */

.form-control {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.1);
    color: white;
    border-radius: 10px;
}

/* placeholder input */

.form-control::placeholder {
    color: #aaa;
}

/* efek focus input */

.form-control:focus {
    border-color: #00e676;
    box-shadow: 0 0 10px rgba(0,230,118,0.3);
    background: rgba(255,255,255,0.1);
    color: white;
}

/* tombol login */

.btn-login {
    background: #00e676;
    color: black;
    font-weight: 600;
    border-radius: 10px;
    transition: 0.3s;
}

/* hover tombol login */

.btn-login:hover {
    background: #00c853;
    box-shadow: 0 0 15px rgba(0,230,118,0.5);
}

/* box error */

.alert {
    background: rgba(255,0,0,0.1);
    border: none;
    color: #ff6b6b;
}

/* link kembali */

.back-link {
    color: #aaa;
    font-size: 0.85rem;
}

/* hover link kembali */

.back-link:hover {
    color: #00e676;
}

</style>
</head>

<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg fixed-top custom-navbar">

    <div class="container">

        <!-- logo website -->

        <a class="navbar-brand d-flex align-items-center" href="index.php">

            <span class="me-2">⚠️</span>

            <span class="logo-text">LostFound</span>

        </a>

    </div>

</nav>

<!-- section login -->

<div class="login-wrapper">

    <!-- card login -->

    <div class="login-card text-center">

        <!-- icon dan judul -->

        <div class="mb-4">

            <div style="font-size: 40px;">🔐</div>

            <h4 class="mt-2">Admin Login</h4>

            <p class="text-muted small">Masuk ke dashboard admin</p>

        </div>

        <!-- menampilkan error -->

        <?php if($error): ?>

            <div class="alert py-2 small">

                <?php echo $error; ?>

            </div>

        <?php endif; ?>

        <!-- form login -->

        <form method="POST">

            <!-- input username -->

            <div class="mb-3 text-start">

                <label class="form-label small">Username</label>

                <input type="text" 
                       name="username" 
                       class="form-control" 
                       placeholder="Masukkan username" 
                       required>

            </div>

            <!-- input password -->

            <div class="mb-4 text-start">

                <label class="form-label small">Password</label>

                <input type="password" 
                       name="password" 
                       class="form-control" 
                       placeholder="Masukkan password" 
                       required>

            </div>

            <!-- tombol login -->

            <button type="submit" 
                    name="login" 
                    class="btn btn-login w-100 mb-3">

                Masuk

            </button>

            <!-- link kembali -->

            <a href="index.php" class="text-decoration-none back-link">

                ← Kembali ke Beranda

            </a>

        </form>

    </div>

</div>

</body>
</html>