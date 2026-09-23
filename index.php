<?php
    //ini adalah variabel PHP
    $nama_sistem = "Safari Bank Enterprise";
    $tahun = date("Y");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safari Bank - Solusi Finansial Anda</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Selamat Datang di <?php echo $nama_sistem;?></h1>
    <a href="profile.html" class="text-decoration-none text-success fw-bold mb-4 d-inline-block">
        Profil Developer ->
    </a>
    <p>Safari Bank adalah solusi finansial terpercaya untuk kebutuhan perbankan Anda. Kami berusaha memberikan layanan terbaik dengan berbagai produk dan layanan yang sesuai dengan kebutuhan Anda.</p>

    <div class="product-grid">
        <div class="product-card">
            <h2>Tabungan Safari</h2>
            <p>Buka rekening tabungan dengan bunga kompetitif dan layanan perbankan digital yang mudah digunakan.</p>
            <a href="#" id="btn-tabungan" class="btn btn-success w-100 mt-auto rounded-pill">Ajukan Sekarang</a>
        </div>
        <div class="product-card">
            <h2>Kartu Kredit Safari</h2>
            <p>Dapatkan kartu kredit dengan berbagai keuntungan, termasuk cashback dan reward points.</p>
            <a href="#" id="btn-kartu-kredit" class="btn btn-success w-100 mt-auto rounded-pill">Ajukan Sekarang</a>
        </div>
        <div class="product-card">
            <h2>Pinjaman Pribadi</h2>
            <p>Ajukan pinjaman pribadi dengan proses cepat dan suku bunga yang bersaing.</p>
            <a href="#" id="btn-pinjaman" class="btn btn-success w-100 mt-auto rounded-pill">Ajukan Sekarang</a>
        </div>
        <div class="product-card">
            <h2>Investasi Safari</h2>
            <p>Mulai investasi Anda dengan berbagai pilihan produk investasi yang aman dan menguntungkan.</p>
            <a href="#" id="btn-investasi" class="btn btn-success w-100 mt-auto rounded-pill">Ajukan Sekarang</a>
        </div>

    <script src="script.js"></script>
    
</body>
</html>