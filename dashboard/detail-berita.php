<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - YPOK</title>
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
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .breadcrumb {
            margin-bottom: 30px;
            color: #666;
            font-size: 0.9rem;
        }
        .breadcrumb a {
            color: #1976d2;
            text-decoration: none;
        }
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        .article-header {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .article-category {
            background: #e53935;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 15px;
        }
        .article-title {
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.3;
            font-weight: 700;
        }
        .article-meta {
            display: flex;
            gap: 20px;
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .article-content {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        .article-content p {
            line-height: 1.8;
            margin-bottom: 20px;
            color: #333;
            font-size: 1.1rem;
        }
        .article-content h3 {
            color: #1976d2;
            font-size: 1.5rem;
            margin: 30px 0 15px 0;
        }
        .article-content ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        .article-content li {
            margin-bottom: 8px;
            line-height: 1.6;
        }
        .related-news {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .related-news h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .related-item {
            display: flex;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .related-item:last-child {
            border-bottom: none;
        }
        .related-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }
        .related-content h4 {
            color: #333;
            font-size: 1rem;
            margin-bottom: 5px;
            line-height: 1.3;
        }
        .related-content p {
            color: #666;
            font-size: 0.85rem;
            margin: 0;
        }
        .related-content a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }
        .related-content a:hover {
            color: #1976d2;
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
        @media (max-width: 900px) {
            .header {
                flex-direction: column;
                gap: 15px;
            }
            .nav-menu {
                flex-wrap: wrap;
                justify-content: center;
            }
            .container {
                padding: 0 15px;
            }
            .article-header, .article-content {
                padding: 20px;
            }
            .article-title {
                font-size: 1.8rem;
            }
            .article-meta {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo-section">
            <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Logo YPOK" class="logo">
            <div class="logo-text">YPOK</div>
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
            <input type="text" class="search-box" placeholder="Pencarian...">
            <button class="masuk-btn">Masuk</button>
        </div>
    </div>

    <div class="container">
        <div class="breadcrumb">
            <a href="beranda.php">Beranda</a> > <a href="berita.php">Berita</a> > Detail Berita
        </div>

        <?php
        // Simulasi data berita berdasarkan ID
        $berita_id = isset($_GET['id']) ? $_GET['id'] : '1';
        
        $berita_data = [
            '1' => [
                'kategori' => 'UTAMA',
                'judul' => 'YPOK Raih Prestasi Internasional di Kejuaraan Karate Asia 2025',
                'tanggal' => '5 September 2025',
                'penulis' => 'Tim Redaksi YPOK',
                'gambar' => '../assets/images/peta indo background.jpg',
                'konten' => [
                    'Atlet binaan Yayasan Pendidikan Olahraga Karate (YPOK) kembali mengharumkan nama Indonesia di kancah internasional. Dalam ajang Kejuaraan Karate Asia 2025 yang diselenggarakan di Bangkok, Thailand, atlet YPOK berhasil meraih medali emas dalam kategori kata senior putra.',
                    
                    'Prestasi gemilang ini diraih oleh Muhammad Rizki Pratama, atlet karate binaan YPOK yang telah menggeluti olahraga karate selama lebih dari 10 tahun. Rizki berhasil mengalahkan pesaing-pesaing tangguh dari berbagai negara Asia dalam pertandingan yang berlangsung sangat ketat.',
                    
                    '"Ini adalah hasil dari latihan keras dan dukungan penuh dari YPOK. Saya sangat bangga bisa mengharumkan nama Indonesia di tingkat Asia," ujar Rizki setelah meraih kemenangan.',
                    
                    'Ketua YPOK, Dr. Ahmad Subekti, mengungkapkan rasa bangganya terhadap prestasi yang diraih. "Prestasi ini membuktikan bahwa sistem pembinaan yang kami terapkan di YPOK sudah tepat sasaran. Kami akan terus mengembangkan program-program untuk menghasilkan atlet-atlet berkualitas tinggi."',
                    
                    'Kejuaraan Karate Asia 2025 diikuti oleh lebih dari 500 atlet dari 25 negara di Asia. Indonesia mengirimkan total 15 atlet yang berlaga di berbagai kategori, dan berhasil meraih 3 medali: 1 emas, 1 perak, dan 1 perunggu.',
                    
                    'Dengan prestasi ini, Rizki otomatis lolos ke Kejuaraan Dunia Karate yang akan diselenggarakan di Tokyo, Jepang pada bulan November 2025. YPOK berkomitmen untuk memberikan dukungan penuh dalam persiapan menghadapi kompetisi tingkat dunia tersebut.'
                ]
            ],
            '2' => [
                'kategori' => 'KERJASAMA',
                'judul' => 'Kerjasama YPOK dengan KORMI dalam Pengembangan Atlet Muda',
                'tanggal' => '3 September 2025',
                'penulis' => 'Humas YPOK',
                'gambar' => '../assets/images/kormi.png',
                'konten' => [
                    'Yayasan Pendidikan Olahraga Karate (YPOK) resmi menjalin kerjasama strategis dengan Komite Olahraga Rekreasi Masyarakat Indonesia (KORMI) untuk pengembangan atlet karate muda di Indonesia.',
                    
                    'Penandatanganan nota kesepahaman dilakukan di kantor pusat KORMI Jakarta, yang dihadiri oleh Ketua YPOK Dr. Ahmad Subekti dan Ketua Umum KORMI Prof. Dr. Mulyana, M.Pd.',
                    
                    'Program kerjasama ini mencakup beberapa aspek penting dalam pengembangan karate nasional, antara lain sistem pelatihan berkelanjutan, kompetisi berjenjang, dan program beasiswa untuk atlet berprestasi.',
                    
                    '"Melalui kerjasama ini, kami optimis dapat mencetak lebih banyak atlet karate yang siap bersaing di tingkat internasional," ungkap Dr. Ahmad Subekti.',
                    
                    'KORMI sebagai induk organisasi olahraga rekreasi masyarakat memberikan dukungan penuh terhadap program-program YPOK, terutama dalam hal penyediaan fasilitas latihan dan penyelenggaraan kompetisi.',
                    
                    'Kerjasama ini diharapkan dapat memberikan dampak positif bagi perkembangan karate Indonesia dan melahirkan atlet-atlet yang mampu mengharumkan nama bangsa di kancah internasional.'
                ]
            ],
            '3' => [
                'kategori' => 'PELATIHAN',
                'judul' => 'Program Pelatihan Pelatih Karate Tingkat Nasional Dimulai',
                'tanggal' => '1 September 2025',
                'penulis' => 'Divisi Pelatihan YPOK',
                'gambar' => '../assets/images/LOGO YPOK NO BACKGROUND.png',
                'konten' => [
                    'YPOK mengawali bulan September dengan meluncurkan Program Pelatihan Pelatih Karate Tingkat Nasional yang diikuti oleh 50 pelatih dari seluruh Indonesia.',
                    
                    'Program yang berlangsung selama 2 minggu ini bertujuan untuk meningkatkan kualitas pelatih karate di Indonesia sekaligus menyeragamkan metode pelatihan yang diterapkan di berbagai daerah.',
                    
                    'Materi pelatihan meliputi teknik-teknik dasar karate, metodologi pelatihan modern, psikologi olahraga, dan manajemen kompetisi. Para peserta juga akan mendapatkan sertifikasi yang diakui secara nasional.',
                    
                    '"Pelatih yang berkualitas adalah kunci utama dalam mencetak atlet-atlet berprestasi. Melalui program ini, kami ingin memastikan standar pelatihan karate di Indonesia semakin meningkat," jelas Koordinator Program, Sensei Budi Hartono.',
                    
                    'Program ini menghadirkan instruktur-instruktur berpengalaman dari Jepang dan Korea Selatan, serta master karate Indonesia yang telah berpengalaman puluhan tahun.',
                    
                    'Diharapkan setelah program ini berakhir, para peserta dapat menjadi pioneer dalam pengembangan karate di daerah masing-masing dengan menerapkan ilmu yang telah diperoleh.'
                ]
            ],
            '4' => [
                'kategori' => 'SEMINAR',
                'judul' => 'Seminar Nasional Karate dan Pengembangan Karakter Anak',
                'tanggal' => '28 Agustus 2025',
                'penulis' => 'Tim Akademik YPOK',
                'gambar' => '../assets/images/peta indo background.jpg',
                'konten' => [
                    'YPOK menyelenggarakan Seminar Nasional bertema "Karate sebagai Media Pengembangan Karakter Anak" yang dihadiri oleh lebih dari 200 peserta dari kalangan pendidik, orang tua, dan praktisi karate.',
                    
                    'Seminar yang berlangsung di Jakarta Convention Center ini menghadirkan narasumber kompeten dari berbagai bidang, termasuk psikolog anak, ahli pendidikan karakter, dan master karate internasional.',
                    
                    'Dr. Siti Nurhaliza, M.Psi, selaku psikolog anak, menjelaskan bahwa karate memiliki kontribusi besar dalam pembentukan karakter anak, terutama dalam hal disiplin, rasa hormat, dan kepercayaan diri.',
                    
                    '"Karate bukan hanya tentang teknik bertarung, tetapi lebih kepada pembentukan mental dan karakter yang kuat. Nilai-nilai yang diajarkan dalam karate sangat relevan dengan pendidikan karakter yang dibutuhkan anak-anak zaman sekarang," ungkap Dr. Siti.',
                    
                    'Seminar ini juga membahas metodologi pengajaran karate untuk anak-anak, cara memotivasi anak dalam berlatih, dan strategi mengintegrasikan nilai-nilai karate dalam kehidupan sehari-hari.',
                    
                    'Para peserta mendapatkan wawasan baru tentang potensi karate sebagai sarana pendidikan holistik yang tidak hanya mengembangkan aspek fisik, tetapi juga mental dan spiritual anak.'
                ]
            ],
            '5' => [
                'kategori' => 'PENGHARGAAN',
                'judul' => 'YPOK Terima Penghargaan dari Kemenpora untuk Prestasi Olahraga',
                'tanggal' => '25 Agustus 2025',
                'penulis' => 'Humas YPOK',
                'gambar' => '../assets/images/Kemenpora_Logo.png',
                'konten' => [
                    'Yayasan Pendidikan Olahraga Karate (YPOK) meraih penghargaan bergengsi dari Kementerian Pemuda dan Olahraga (Kemenpora) atas kontribusinya dalam memajukan prestasi olahraga karate Indonesia.',
                    
                    'Penghargaan "Outstanding Achievement in Sports Development" diserahkan langsung oleh Menteri Pemuda dan Olahraga, Dito Ariotedjo, dalam acara Anugerah Olahraga Indonesia 2025 di Istora Senayan, Jakarta.',
                    
                    'YPOK dinilai telah berhasil mencetak atlet-atlet karate berprestasi yang mengharumkan nama Indonesia di berbagai kompetisi internasional selama 5 tahun terakhir.',
                    
                    '"Penghargaan ini adalah pengakuan atas kerja keras seluruh keluarga besar YPOK. Kami berterima kasih kepada Kemenpora yang telah memberikan dukungan selama ini," ungkap Dr. Ahmad Subekti saat menerima penghargaan.',
                    
                    'Dalam sambutannya, Menpora Dito Ariotedjo mengapresiasi program-program inovatif yang dikembangkan YPOK, termasuk sistem pembinaan atlet dari usia dini hingga senior.',
                    
                    '"YPOK telah membuktikan diri sebagai organisasi yang mampu mengembangkan potensi atlet secara optimal. Prestasi ini harus menjadi motivasi untuk terus berkarya dan mengharumkan nama Indonesia," kata Menpora.',
                    
                    'Penghargaan ini semakin memperkuat posisi YPOK sebagai salah satu organisasi olahraga terdepan di Indonesia dalam bidang karate.'
                ]
            ]
        ];
        
        $berita = isset($berita_data[$berita_id]) ? $berita_data[$berita_id] : $berita_data['1'];
        ?>

        <div class="article-header">
            <div class="article-category"><?php echo $berita['kategori']; ?></div>
            <h1 class="article-title"><?php echo $berita['judul']; ?></h1>
            <div class="article-meta">
                <div class="meta-item">
                    <span>📅</span>
                    <span><?php echo $berita['tanggal']; ?></span>
                </div>
                <div class="meta-item">
                    <span>✍️</span>
                    <span><?php echo $berita['penulis']; ?></span>
                </div>
                <div class="meta-item">
                    <span>👁️</span>
                    <span>1,234 views</span>
                </div>
            </div>
            <img src="<?php echo $berita['gambar']; ?>" alt="<?php echo $berita['judul']; ?>" class="article-image">
        </div>

        <div class="article-content">
            <?php foreach($berita['konten'] as $paragraf): ?>
                <p><?php echo $paragraf; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="related-news">
            <h3>Berita Terkait</h3>
            <div class="related-item">
                <img src="../assets/images/kormi.png" alt="Berita Terkait" class="related-image">
                <div class="related-content">
                    <h4><a href="detail-berita.php?id=2">Kerjasama YPOK dengan KORMI dalam Pengembangan Atlet Muda</a></h4>
                    <p>3 September 2025</p>
                </div>
            </div>
            <div class="related-item">
                <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Berita Terkait" class="related-image">
                <div class="related-content">
                    <h4><a href="detail-berita.php?id=3">Program Pelatihan Pelatih Karate Tingkat Nasional Dimulai</a></h4>
                    <p>1 September 2025</p>
                </div>
            </div>
            <div class="related-item">
                <img src="../assets/images/peta indo background.jpg" alt="Berita Terkait" class="related-image">
                <div class="related-content">
                    <h4><a href="detail-berita.php?id=4">Seminar Nasional Karate dan Pengembangan Karakter Anak</a></h4>
                    <p>28 Agustus 2025</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <!-- Back Button -->
    <a href="berita.php" class="back-btn" title="Kembali ke Berita">
        ←
    </a>

    <!-- WhatsApp Floating Button -->
    <a href="http://wa.me/6285173132266" target="_blank" class="whatsapp-btn" title="Chat via WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 2.079.549 4.088 1.595 5.855L0 24l6.335-1.652c1.746.943 3.71 1.444 5.682 1.444 6.621 0 11.988-5.367 11.988-11.988C23.988 5.367 18.621.017 12.017.017zM12.017 21.956c-1.737 0-3.449-.419-4.938-1.215l-.354-.21-3.675.961.982-3.584-.231-.367c-.881-1.401-1.347-3.028-1.347-4.694 0-5.464 4.441-9.905 9.905-9.905 2.648 0 5.135 1.031 7.006 2.902 1.871 1.871 2.902 4.358 2.902 7.006-.017 5.464-4.458 9.905-9.922 9.905zm5.434-7.417c-.297-.149-1.758-.868-2.031-.967-.272-.099-.471-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.884-.788-1.482-1.761-1.656-2.058-.173-.297-.019-.458.13-.606.134-.133.297-.347.446-.521.149-.173.198-.297.297-.495.099-.198.05-.372-.025-.521-.074-.149-.669-1.612-.917-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.57-.01-.198 0-.521.074-.794.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
        </svg>
    </a>
</body>
</html>
