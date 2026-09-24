<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_target = $_GET['id'];
    
    // Perintah sakti untuk mengubah data (Update)
    $query = "UPDATE pengajuan SET status = 'Disetujui' WHERE id = '$id_target'";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: admin.php"); // Lempar kembali ke dashboard
    } else {
        echo "Gagal mengubah status.";
    }
}
?>