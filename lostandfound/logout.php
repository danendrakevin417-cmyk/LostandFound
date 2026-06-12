<?php
session_start();
// Menghapus semua data session
session_destroy();
// Mengarahkan langsung ke halaman utama (index.php)
header("Location: index.php");
exit();
?>