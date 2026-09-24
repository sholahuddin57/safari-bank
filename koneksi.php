<?php
// 1. Menyiapkan kredensial (kunci) bawaan pabrik dari XAMPP
$host = "localhost";
$user = "root";      // Username default XAMPP adalah 'root'
$pass = "";          // Password default XAMPP dibiarkan kosong
$db   = "safari_bank"; // Nama database yang kamu buat di phpMyAdmin

// 2. Membangun jembatan koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// 3. Control Structure (If-Else): Mengecek apakah jembatan berhasil dibangun
if (!$koneksi) {
    // Jika gagal (tanda seru berarti 'tidak/gagal'), hentikan proses dan tampilkan error
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    // Jika berhasil, tampilkan pesan sukses
   // echo "Koneksi ke pangkalan data Safari Bank sukses!";
}
?>