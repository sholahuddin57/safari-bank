<?php
// 1. Panggil jembatan koneksi
include 'koneksi.php';

// 2. Mengecek apakah ada data 'nama_produk' yang dikirim
if (isset($_POST['nama_produk'])) {
    // 3. Tangkap datanya
    $produk = $_POST['nama_produk'];
    
    // 4. Buat query SQL untuk memasukkan data (persis seperti yang kamu coba di phpMyAdmin)
    $query = "INSERT INTO pengajuan (nama_produk) VALUES ('$produk')";
    
    // 5. Eksekusi query dan berikan jawaban sukses/gagal
    if (mysqli_query($koneksi, $query)) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
}
?>