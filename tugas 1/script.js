document.getElementById('btn-load').addEventListener('click', function() {
    var tombol = this;
    tombol.innerHTML = 'Memuat Data...';
    
    // Inisialisasi Native AJAX (XMLHttpRequest)
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'data.php', true);
    
    xhr.onload = function() {
        if (this.status == 200) {
            // Memasukkan hasil HTML dari PHP ke dalam div
            document.getElementById('ajax-content').innerHTML = this.responseText;
            // Menyembunyikan tombol setelah data berhasil dimuat
            tombol.style.display = 'none';
        } else {
            tombol.innerHTML = 'Gagal memuat. Coba lagi.';
        }
    };
    
    // Kirim permintaan ke server
    xhr.send();
});