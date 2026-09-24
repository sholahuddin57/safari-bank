<?php
// 1. Panggil koneksi database
include 'koneksi.php';

// 2. Tangkap ID yang dikirim lewat URL (metode GET)
if (isset($_GET['id'])) {
    $id_target = $_GET['id'];
    
    // 3. Siapkan query mutlak untuk menghapus data berdasarkan ID
    $query = "DELETE FROM pengajuan WHERE id = '$id_target'";
    
    // 4. Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika sukses, lempar / kembalikan Admin ke halaman dashboard secara otomatis
        header("Location: admin.php");
    } else {
        echo "Gagal menghapus data.";
    }
}
?>