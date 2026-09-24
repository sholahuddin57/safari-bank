const btnTabungan = document.getElementById('btn-tabungan');
const btnKartuKredit = document.getElementById('btn-kartu-kredit');
const btnPinjaman = document.getElementById('btn-pinjaman');
const btnInvestasi = document.getElementById('btn-investasi');

function tampilkanNotifikasi(event, namaProduk) {
    event.preventDefault(); // Mencegah aksi default dari tombol
    alert(`Terima kasih telah mengajukan ${namaProduk}. Tim kami akan segera menghubungi Anda untuk proses selanjutnya.`);
}

btnTabungan.addEventListener('click', function(e)  {
    tampilkanNotifikasi(e, 'Tabungan Safari');
});

btnKartuKredit.addEventListener('click', function(e)  {
    tampilkanNotifikasi(e, 'Kartu Kredit Safari');
});

btnPinjaman.addEventListener('click', function(e)  {
    tampilkanNotifikasi(e, 'Pinjaman Safari');
});

btnInvestasi.addEventListener('click', function(e)  {
    tampilkanNotifikasi(e, 'Investasi Safari');
});

// Upgrade Fungsi dengan Fetch API (Modern JavaScript)
function tampilkanNotifikasi(event, namaProduk) {
    event.preventDefault(); // Mencegah lompat ke atas
    
    // Siapkan paket data yang akan dikirim
    const formData = new FormData();
    formData.append('nama_produk', namaProduk);

    // Kirim data ke PHP di belakang layar menggunakan Fetch
    fetch('proses_pengajuan.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(hasil => {
        if(hasil === "Sukses") {
            alert(`Terima kasih! Pengajuan ${namaProduk} Anda telah masuk ke database kami.`);
        } else {
            alert("Mohon maaf, terjadi kesalahan pada sistem bank kami.");
        }
    });
}