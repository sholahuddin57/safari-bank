<?php
// 1. Panggil koneksi database
include 'koneksi.php';

// 2. Ambil semua data dari tabel pengajuan
$query = "SELECT * FROM pengajuan ORDER BY tanggal_pengajuan DESC";
$hasil = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Safari Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <h2 class="mb-4 text-success fw-bold">Dashboard Admin Safari Bank</h2>
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>No ID</th>
                            <th>Nama Produk</th>
                            <th>Waktu Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // 3. Looping (Perulangan) untuk mencetak baris tabel sebanyak data di database
                        while ($baris = mysqli_fetch_assoc($hasil)) {
                            echo "<tr>";
                            echo "<td>" . $baris['id'] . "</td>";
                            echo "<td>" . $baris['nama_produk'] . "</td>";
                            echo "<td>" . $baris['tanggal_pengajuan'] . "</td>";
                            // 4. Tambahkan tombol hapus dengan parameter ID
                            echo "<td>
                                <a href='hapus.php?id=" . $baris['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?');\">Hapus</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-outline-secondary mt-3">Kembali ke Beranda Depan</a>
            </div>
        </div>
    </div>
</body>
</html> 