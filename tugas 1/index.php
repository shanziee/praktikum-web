<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Web - Tugas Praktikum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="cv-container">
        
        <div class="left-column">
            <img src="foto.jpg" alt="Foto Profil" class="profile-img">
            
            <p class="summary">
                Mahasiswa Ilmu Komputer yang antusias dengan pengembangan web. Mampu menganalisa dan berpikir kritis sebelum mengambil keputusan. Mencari kesempatan untuk berkembang dan bertumbuh di Perusahaan Teknologi.
            </p>

            <div class="section">
                <h3 class="section-title"><i class="fas fa-graduation-cap"></i> RIWAYAT PENDIDIKAN</h3>
                <div class="item">
                    <h4>Universitas Fauget</h4>
                    <p>2020 - Sekarang, S1 Ilmu Komputer</p>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title"><i class="fas fa-cogs"></i> KETERAMPILAN TEKNIS</h3>
                <ul class="skills-list">
                    <li>Menguasai HTML, CSS, JS</li>
                    <li>PHP & AJAX Native</li>
                    <li>Python (AI / Machine Learning)</li>
                    <li>Pemrosesan Data Berbasis Web</li>
                </ul>
            </div>

            <div class="section">
                <h3 class="section-title"><i class="fas fa-users"></i> KETERAMPILAN NON-TEKNIS</h3>
                <ul class="skills-list">
                    <li>Komunikasi</li>
                    <li>Kolaborasi dalam tim</li>
                    <li>Berpikir kritis</li>
                    <li>Manajemen waktu</li>
                </ul>
            </div>
        </div>

        <div class="right-column">
            <div class="header">
                <h1>NAMA KAMU</h1>
                <h2>Mahasiswa / Web Developer</h2>
            </div>

            <div class="contact-info">
                <div class="contact-item"><i class="fas fa-phone"></i> +62 812-3456-7890</div>
                <div class="contact-item"><i class="fas fa-home"></i> Jl. Contoh Alamat No. 123, Kota</div>
                <div class="contact-item"><i class="fas fa-envelope"></i> emailmu@student.ac.id</div>
            </div>

            <div class="section-right">
                <h3 class="title-right"><i class="fas fa-sitemap icon-circle"></i> PENGALAMAN ORGANISASI</h3>
                <div class="timeline">
                    <h4>Anggota - Himpunan Mahasiswa</h4>
                    <p class="date">Januari 2022 - Sekarang</p>
                    <ul>
                        <li>Bertanggung jawab terhadap kegiatan divisi teknologi.</li>
                        <li>Berkolaborasi dengan alumni untuk menyelenggarakan acara networking lokal.</li>
                    </ul>
                </div>
            </div>

            <div class="section-right">
                <h3 class="title-right"><i class="fas fa-briefcase icon-circle"></i> PENGALAMAN KERJA / PROYEK</h3>
                
                <div id="ajax-content">
                    <p style="font-style: italic; color: #7f8c8d; font-size: 14px; margin-left: 14px;">
                        Klik tombol di bawah untuk memuat data dari database (Simulasi PHP).
                    </p>
                </div>
                
                <button id="btn-load">Muat Data Proyek (AJAX)</button>
            </div>
        </div>

    </div>
    
    <script src="script.js"></script>
</body>
</html>