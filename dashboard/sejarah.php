<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - YPOK</title>
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
            padding: 100px 0;
            text-align: center;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        .container-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        .timeline-section {
            padding: 80px 0;
            background: white;
        }
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 50px;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #1976d2;
            border-radius: 2px;
        }
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            height: 100%;
            width: 4px;
            background: #1976d2;
            transform: translateX(-50%);
        }
        .timeline-item {
            position: relative;
            margin: 50px 0;
            width: 50%;
        }
        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
            padding-right: 40px;
        }
        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
            padding-left: 40px;
        }
        .timeline-content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }
        .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            right: -15px;
            top: 30px;
            width: 0;
            height: 0;
            border: 15px solid transparent;
            border-left-color: #f8f9fa;
        }
        .timeline-item:nth-child(even) .timeline-content::after {
            content: '';
            position: absolute;
            left: -15px;
            top: 30px;
            width: 0;
            height: 0;
            border: 15px solid transparent;
            border-right-color: #f8f9fa;
        }
        .timeline-year {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #1976d2;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 1.1rem;
            z-index: 2;
        }
        .timeline-title {
            color: #1976d2;
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .timeline-description {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }
        .founders-section {
            background: #f8f9fa;
            padding: 80px 0;
        }
        .founders-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        .founder-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .founder-card:hover {
            transform: translateY(-10px);
        }
        .founder-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #e3f2fd;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #1976d2;
        }
        .founder-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .founder-title {
            color: #1976d2;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .founder-description {
            color: #666;
            line-height: 1.6;
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
                font-size: 2.5rem;
            }
            .timeline::before {
                left: 30px;
            }
            .timeline-item {
                width: 100%;
                left: 0 !important;
                text-align: left !important;
                padding-left: 70px !important;
                padding-right: 0 !important;
            }
            .timeline-content::after {
                left: -15px !important;
                right: auto !important;
                border-left-color: transparent !important;
                border-right-color: #f8f9fa !important;
            }
            .timeline-year {
                left: 30px;
                transform: translateX(-50%);
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
                <a href="javascript:void(0)" class="nav-item active">Tentang Kami <span class="dropdown-arrow">▼</span></a>
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
            <a href="berita.php" class="nav-item">Berita</a>
            <a href="hubungi-kami.php" class="nav-item">Hubungi Kami</a>
        </div>
        <div class="search-section">
            <input type="text" class="search-box" placeholder="Pencarian...">
            <button class="masuk-btn">Masuk</button>
        </div>
    </div>

    <div class="hero-section">
        <div class="container-content">
            <h1 class="hero-title">Sejarah YPOK</h1>
            <p class="hero-subtitle">Perjalanan panjang Yayasan Pendidikan Olahraga Karate dalam mengembangkan pendidikan karate di Indonesia</p>
        </div>
    </div>

    <div class="timeline-section">
        <div class="container-content">
            <h2 class="section-title">Perjalanan Sejarah</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2005</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Awal Mula PPOK</h3>
                        <p class="timeline-description">
                            Pada tanggal 1 Juli 2005, Idris Buhang Olii DAN III No Sabuk Hitam Internasional No. ID 2-0064 JKA, seorang atlet karateka di Era 80-an dengan Nomor Majelis Sabuk Hitam (MSH) Nasional 1407 bersama istrinya Nur Maryam, AMd.Keb, mengajukan ide pembentukan Program Pendidikan Olah Raga Karate (PPOK) di sekolah-sekolah kepada Dinas Pendidikan DKI Jakarta.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">2006</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">SK INKAI Pusat</h3>
                        <p class="timeline-description">
                            Mengingat murid yang begitu banyak, Pengurus INKAI Pusat menerbitkan SK Kepengurusan Program Pendidikan Olah Raga Karate (PPOK) dengan No.17/SK/INPUS/VII/2006, yang ditandatangani oleh Ketua Umum INKAI Pusat Jenderal TNI (Purn.) Ryamizard Ryacudu, dan Sekjen INKAI Pusat Prof. DR. Hermawan Sulistyo.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">2007</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Pengakuan Dinas Pendidikan</h3>
                        <p class="timeline-description">
                            Dinas Pendidikan Dasar Provinsi DKI Jakarta merespon positif dengan menerbitkan Surat No. 54/1.851.5 Tahun 2007, yang ditandatangani oleh Kepala Dinas Pendidikan Dasar Provinsi DKI Jakarta Prof. Dr. Hj. Sylviana Murni, S.H., M.Si.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">2009</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Perluasan Program</h3>
                        <p class="timeline-description">
                            Terbit Surat Kepala Dinas Pendidikan Provinsi DKI Jakarta No. 4502/1.857.21 tentang Program Pendidikan Olahraga Karate, yang memungkinkan program masuk ke Taman Kanak-Kanak, Sekolah Dasar, Sekolah Menengah Pertama, dan Sekolah Menengah Atas.
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">2013</div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Transformasi menjadi YPOK</h3>
                        <p class="timeline-description">
                            Pergantian nama dari PPOK menjadi YPOK diprakarsai oleh Idris Olii, dengan tujuan agar organisasi memiliki legalitas berbadan hukum. Hal ini memungkinkan yayasan untuk berkoordinasi dan bekerja sama dengan instansi terkait, pemerintah, serta sponsorship dengan status legal yang jelas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="founders-section">
        <div class="container-content">
            <h2 class="section-title">Pendiri YPOK</h2>
            <div class="founders-grid">
                <div class="founder-card">
                    <div class="founder-avatar">🥋</div>
                    <h3 class="founder-name">Idris Buhang Olii</h3>
                    <p class="founder-title">Pendiri & Ketua YPOK</p>
                    <p class="founder-description">
                        DAN III No Sabuk Hitam Internasional No. ID 2-0064 JKA, atlet karateka di Era 80-an dengan Nomor Majelis Sabuk Hitam (MSH) Nasional 1407. Pencetus ide pembentukan program pendidikan karate di sekolah-sekolah.
                    </p>
                </div>
                <div class="founder-card">
                    <div class="founder-avatar">👩‍⚕️</div>
                    <h3 class="founder-name">Nur Maryam, AMd.Keb</h3>
                    <p class="founder-title">Co-Founder YPOK</p>
                    <p class="founder-description">
                        Istri dari Idris Buhang Olii yang turut serta dalam merumuskan konsep dan ide pembentukan Program Pendidikan Olah Raga Karate (PPOK) yang kemudian berkembang menjadi YPOK.
                    </p>
                </div>
            </div>
        </div>
    </div>

        </a>

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
</body>
</html>
