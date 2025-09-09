<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - YPOK</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #f5f5f5;
        }
        .header {
            background: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo-section {
            display: flex;
            align-items: center;
        }
        .logo {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }
        .logo-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }
        .nav-menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }
        .nav-item {
            color: #666;
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .nav-item:hover {
            background: #f0f0f0;
            color: #333;
        }
        .nav-item.active {
            background: #e3f2fd;
            color: #1976d2;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown .nav-item {
            display: flex;
            align-items: center;
            white-space: nowrap;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            top: 100%;
            left: 0;
        }
        .dropdown-content a {
            color: #666;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 0.9rem;
            border-bottom: 1px solid #f0f0f0;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
            color: #333;
        }
        .dropdown-content a:last-child {
            border-bottom: none;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-arrow {
            margin-left: 5px;
            font-size: 0.7rem;
            transition: transform 0.3s;
        }
        .dropdown:hover .dropdown-arrow {
            transform: rotate(180deg);
        }
        .search-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .search-box {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
            width: 200px;
        }
        .masuk-btn {
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 8px 25px;
            font-size: 1rem;
            cursor: pointer;
        }
        .back-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 60px;
            height: 60px;
            background: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
        }
        .back-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
            background: #555;
            color: white;
        }
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background: #25d366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .whatsapp-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }
        .whatsapp-btn svg {
            width: 30px;
            height: 30px;
            fill: white;
        }
        .hero-section {
            background: linear-gradient(135deg, #1976d2 0%, #1565c0 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        .container-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        .news-section {
            padding: 80px 0;
            background: white;
        }
        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }
        .filter-tab {
            padding: 12px 25px;
            border: 2px solid #e0e0e0;
            background: white;
            color: #666;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .filter-tab:hover, .filter-tab.active {
            border-color: #1976d2;
            background: #1976d2;
            color: white;
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .news-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .news-card:hover .news-image img {
            transform: scale(1.05);
        }
        .news-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #e53935;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        .news-badge.prestasi {
            background: #4caf50;
        }
        .news-badge.kerjasama {
            background: #ff9800;
        }
        .news-badge.program {
            background: #9c27b0;
        }
        .news-badge.penghargaan {
            background: #f44336;
        }
        .news-content {
            padding: 25px;
        }
        .news-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
            display: block;
        }
        .news-title {
            color: #333;
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 15px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .news-excerpt {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .read-more {
            color: #1976d2;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s ease;
        }
        .read-more:hover {
            color: #1565c0;
        }
        .read-more::after {
            content: '→';
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        .read-more:hover::after {
            transform: translateX(5px);
        }
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
        }
        .pagination a {
            padding: 12px 16px;
            border: 1px solid #ddd;
            color: #666;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .pagination a:hover, .pagination a.active {
            background: #1976d2;
            color: white;
            border-color: #1976d2;
        }
        .featured-news {
            background: #f8f9fa;
            padding: 50px 0;
            margin-bottom: 30px;
        }
        .featured-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .featured-image {
            height: 300px;
            overflow: hidden;
        }
        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .featured-content {
            padding: 40px;
        }
        .featured-badge {
            background: #e53935;
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 20px;
        }
        .featured-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        .featured-excerpt {
            color: #666;
            line-height: 1.8;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }
        .featured-date {
            color: #999;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        @media (max-width: 900px) {
            .header {
                flex-direction: column;
                gap: 15px;
            }
            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }
            .container-content {
                padding: 0 20px;
            }
            .hero-title {
                font-size: 2.2rem;
            }
            .news-grid {
                grid-template-columns: 1fr;
            }
            .featured-card {
                grid-template-columns: 1fr;
                gap: 0;
            }
            .featured-content {
                padding: 30px 20px;
            }
            .featured-title {
                font-size: 1.5rem;
            }
            .filter-tabs {
                gap: 10px;
                margin: 0 20px 50px;
            }
            .filter-tab {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-section">
            <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Logo YPOK" class="logo">
            <div class="logo-text">YPOK<br></div>
        </div>
        <div class="nav-menu">
            <a href="beranda.php" class="nav-item">Beranda</a>
            <div class="dropdown">
                <a href="javascript:void(0)" class="nav-item">Tentang Kami <span class="dropdown-arrow">▼</span></a>
                <div class="dropdown-content">
                    <a href="sejarah.php">Sejarah</a>
                    <a href="persebaran.php">Persebaran</a>
                    <a href="dewan-guru.php">Dewan Guru</a>
                    <a href="https://docs.google.com/spreadsheets/d/12LQLs7GE0KgU6T9Mvo6VGo-0JlXRfGVgda4lpl2Uvs4/edit?usp=drivesdk">MSH</a>
                    <a href="https://docs.google.com/spreadsheets/d/1SGjmWMlxHCTvJUvWXEqZAwZXpita_toFBfbewIiIjHQ/edit?usp=drivesdk">KYU</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="javascript:void(0)" class="nav-item">Organisasi <span class="dropdown-arrow">▼</span></a>
                <div class="dropdown-content">
                    <a href="legalitas.php">Legalitas</a>
                    <a href="adrt.php">ADRT</a>
                    <a href="peraturan-organisasi.php">Peraturan Organisasi</a>
                    <a href="kurikulum.php">Kurikulum</a>
                </div>
            </div>
            <a href="berita.php" class="nav-item active">Berita</a>
            <a href="hubungi-kami.php" class="nav-item">Hubungi Kami</a>
        </div>
        <div class="search-section">
            <input type="text" class="search-box" placeholder="Pencarian berita...">
            <button class="masuk-btn">Masuk</button>
        </div>
    </div>

    <div class="hero-section">
        <div class="container-content">
            <h1 class="hero-title">Berita YPOK</h1>
            <p class="hero-subtitle">Ikuti perkembangan terbaru dari Yayasan Pendidikan Olahraga Karate</p>
        </div>
    </div>

    <!-- Featured News -->
    <div class="featured-news">
        <div class="container-content">
            <div class="featured-card">
                <div class="featured-image">
                    <img src="../assets/images/peta indo background.jpg" alt="Berita Utama">
                </div>
                <div class="featured-content">
                    <span class="featured-badge">BERITA UTAMA</span>
                    <span class="featured-date">5 September 2025</span>
                    <h2 class="featured-title">YPOK Raih Prestasi Internasional di Kejuaraan Karate Asia 2025</h2>
                    <p class="featured-excerpt">
                        Tim atlet binaan YPOK berhasil meraih prestasi membanggakan dalam Kejuaraan Karate Asia 2025 yang diselenggarakan di Bangkok, Thailand. Dua atlet YPOK meraih medali emas dalam kategori kata senior putra dan kumite junior putri, menunjukkan kualitas pelatihan yang diberikan oleh YPOK telah mencapai standar internasional.
                    </p>
                    <a href="detail-berita.php?id=1" class="read-more">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="news-section">
        <div class="container-content">
            <!-- News Grid -->
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/kormi.png" alt="Kerjasama KORMI">
                        <div class="news-badge kerjasama">KERJASAMA</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">3 September 2025</span>
                        <h3 class="news-title">Kerjasama YPOK dengan KORMI dalam Pengembangan Atlet Muda</h3>
                        <p class="news-excerpt">YPOK menjalin kerjasama strategis dengan KORMI untuk mengembangkan program pembinaan atlet muda karate di seluruh Indonesia. Program ini akan melibatkan pelatih bersertifikat internasional.</p>
                        <a href="detail-berita.php?id=2" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Program Pelatihan">
                        <div class="news-badge program">PROGRAM</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">1 September 2025</span>
                        <h3 class="news-title">Program Pelatihan Pelatih Karate Tingkat Nasional Dimulai</h3>
                        <p class="news-excerpt">YPOK meluncurkan program pelatihan untuk calon pelatih karate tingkat nasional. Program ini bertujuan untuk meningkatkan kualitas pelatih karate di Indonesia.</p>
                        <a href="detail-berita.php?id=3" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/peta indo background.jpg" alt="Seminar Nasional">
                        <div class="news-badge program">PROGRAM</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">28 Agustus 2025</span>
                        <h3 class="news-title">Seminar Nasional Karate dan Pengembangan Karakter Anak</h3>
                        <p class="news-excerpt">YPOK mengadakan seminar nasional tentang peran karate dalam pengembangan karakter anak. Seminar dihadiri oleh para ahli pendidikan dan psikologi anak.</p>
                        <a href="detail-berita.php?id=4" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/Kemenpora_Logo.png" alt="Penghargaan Kemenpora">
                        <div class="news-badge penghargaan">PENGHARGAAN</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">25 Agustus 2025</span>
                        <h3 class="news-title">YPOK Terima Penghargaan dari Kemenpora untuk Prestasi Olahraga</h3>
                        <p class="news-excerpt">Kementerian Pemuda dan Olahraga memberikan penghargaan kepada YPOK atas kontribusinya dalam mengembangkan olahraga karate di Indonesia.</p>
                        <a href="detail-berita.php?id=5" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Turnamen Nasional">
                        <div class="news-badge prestasi">PRESTASI</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">20 Agustus 2025</span>
                        <h3 class="news-title">Turnamen Nasional Karate Junior YPOK Cup 2025</h3>
                        <p class="news-excerpt">YPOK menyelenggarakan turnamen nasional karate untuk kategori junior dengan peserta dari 25 provinsi di Indonesia. Turnamen ini menjadi ajang pencarian bakat muda.</p>
                        <a href="detail-berita.php?id=1" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/kormi.png" alt="Workshop Teknik">
                        <div class="news-badge program">PROGRAM</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">15 Agustus 2025</span>
                        <h3 class="news-title">Workshop Teknik Karate Modern untuk Pelatih YPOK</h3>
                        <p class="news-excerpt">Para pelatih YPOK mengikuti workshop teknik karate modern yang dipimpin oleh master karate dari Jepang. Workshop berlangsung selama 3 hari.</p>
                        <a href="detail-berita.php?id=2" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/peta indo background.jpg" alt="Expansion Program">
                        <div class="news-badge program">PROGRAM</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">10 Agustus 2025</span>
                        <h3 class="news-title">Ekspansi Program YPOK ke 10 Kota Baru di Indonesia</h3>
                        <p class="news-excerpt">YPOK mengumumkan rencana ekspansi program pendidikan karate ke 10 kota baru di Indonesia, termasuk Surabaya, Medan, dan Makassar.</p>
                        <a href="detail-berita.php?id=3" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Anniversary">
                        <div class="news-badge prestasi">PRESTASI</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">5 Agustus 2025</span>
                        <h3 class="news-title">Peringatan 20 Tahun YPOK: Dari PPOK Hingga Menjadi Yayasan Terkemuka</h3>
                        <p class="news-excerpt">YPOK merayakan 20 tahun perjalanannya dari PPOK hingga menjadi yayasan pendidikan karate terkemuka di Indonesia dengan berbagai prestasi membanggakan.</p>
                        <a href="detail-berita.php?id=4" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">
                        <img src="../assets/images/Kemenpora_Logo.png" alt="Program Sekolah">
                        <div class="news-badge kerjasama">KERJASAMA</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">1 Agustus 2025</span>
                        <h3 class="news-title">Kerjasama dengan 50 Sekolah untuk Program Ekstrakurikuler Karate</h3>
                        <p class="news-excerpt">YPOK menandatangani MoU dengan 50 sekolah di Jakarta untuk mengembangkan program ekstrakurikuler karate sebagai bagian dari pendidikan karakter siswa.</p>
                        <a href="detail-berita.php?id=5" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="javascript:void(0)">←</a>
                <a href="javascript:void(0)" class="active">1</a>
                <a href="javascript:void(0)">2</a>
                <a href="javascript:void(0)">3</a>
                <a href="javascript:void(0)">4</a>
                <a href="javascript:void(0)">5</a>
                <a href="javascript:void(0)">→</a>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <!-- Back Button -->
    <a href="beranda.php" class="back-btn" title="Kembali">
        ←
    </a>

    <!-- WhatsApp Floating Button -->
    <a href="http://wa.me/6285173132266" target="_blank" class="whatsapp-btn" title="Chat via WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 2.079.549 4.088 1.595 5.855L0 24l6.335-1.652c1.746.943 3.71 1.444 5.682 1.444 6.621 0 11.988-5.367 11.988-11.988C23.988 5.367 18.621.017 12.017.017zM12.017 21.956c-1.737 0-3.449-.419-4.938-1.215l-.354-.21-3.675.961.982-3.584-.231-.367c-.881-1.401-1.347-3.028-1.347-4.694 0-5.464 4.441-9.905 9.905-9.905 2.648 0 5.135 1.031 7.006 2.902 1.871 1.871 2.902 4.358 2.902 7.006-.017 5.464-4.458 9.905-9.922 9.905zm5.434-7.417c-.297-.149-1.758-.868-2.031-.967-.272-.099-.471-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.884-.788-1.482-1.761-1.656-2.058-.173-.297-.019-.458.13-.606.134-.133.297-.347.446-.521.149-.173.198-.297.297-.495.099-.198.05-.372-.025-.521-.074-.149-.669-1.612-.917-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.57-.01-.198 0-.521.074-.794.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
        </svg>
    </a>

    <script>
        // Filter functionality
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all tabs
                document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // Here you would typically filter the news cards based on the selected category
                // For demo purposes, we'll just show all cards
            });
        });

        // Search functionality
        document.querySelector('.search-box').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const newsCards = document.querySelectorAll('.news-card');
            
            newsCards.forEach(card => {
                const title = card.querySelector('.news-title').textContent.toLowerCase();
                const excerpt = card.querySelector('.news-excerpt').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
