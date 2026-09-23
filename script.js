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