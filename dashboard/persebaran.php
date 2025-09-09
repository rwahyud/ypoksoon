<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persebaran YPOK - Indonesia</title>
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
        .hero-section {
            background: linear-gradient(135deg, #1976d2 0%, #42a5f5 100%);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .hero-title {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 40px;
        }
        .persebaran-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }
        .persebaran-content h2 {
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: 700;
            line-height: 1.2;
        }
        .persebaran-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .persebaran-item {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.1rem;
            color: #333;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .persebaran-item:hover {
            background: #f8f9fa;
            padding-left: 10px;
            border-radius: 8px;
            border-bottom: 1px solid transparent;
        }
        .item-number {
            font-weight: 700;
            color: #1976d2;
            font-size: 1.3rem;
            min-width: 30px;
        }
        .item-text {
            font-weight: 500;
            flex: 1;
        }
        .item-arrow {
            color: #1976d2;
            font-size: 1.2rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .persebaran-item:hover .item-arrow {
            opacity: 1;
        }
        .persebaran-map {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .map-image {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
        }
        .detail-section {
            background: #fff;
            margin-top: 40px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        .detail-header {
            background: #1976d2;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .detail-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        .detail-subtitle {
            opacity: 0.9;
            font-size: 1.1rem;
        }
        .province-tabs {
            display: flex;
            flex-wrap: wrap;
            background: #f8f9fa;
            padding: 20px;
            gap: 10px;
            justify-content: center;
        }
        .province-tab {
            background: white;
            border: 2px solid #e0e0e0;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            color: #666;
        }
        .province-tab:hover {
            border-color: #1976d2;
            color: #1976d2;
        }
        .province-tab.active {
            background: #1976d2;
            border-color: #1976d2;
            color: white;
        }
        .province-content {
            padding: 40px;
            display: none;
        }
        .province-content.active {
            display: block;
        }
        .province-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        .info-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid #1976d2;
        }
        .info-card h4 {
            color: #1976d2;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        .info-card p {
            color: #666;
            line-height: 1.6;
            margin: 8px 0;
        }
        .cities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        .city-card {
            background: white;
            border: 2px solid #e8f4fd;
            border-radius: 12px;
            padding: 25px;
            transition: all 0.3s ease;
        }
        .city-card:hover {
            border-color: #1976d2;
            box-shadow: 0 8px 25px rgba(25, 118, 210, 0.1);
            transform: translateY(-3px);
        }
        .city-name {
            color: #1976d2;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .contact-info {
            margin-bottom: 12px;
        }
        .contact-label {
            font-weight: 600;
            color: #333;
            display: inline-block;
            width: 80px;
        }
        .contact-value {
            color: #666;
        }
        .contact-phone {
            color: #25d366;
            text-decoration: none;
        }
        .contact-phone:hover {
            text-decoration: underline;
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
                padding: 40px 20px;
            }
            .persebaran-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            .persebaran-content h2 {
                font-size: 1.8rem;
            }
            .persebaran-item {
                justify-content: flex-start;
                text-align: left;
            }
            .hero-title {
                font-size: 2.2rem;
            }
            .province-tabs {
                justify-content: flex-start;
                overflow-x: auto;
                flex-wrap: nowrap;
                padding: 20px 10px;
            }
            .province-tab {
                min-width: 120px;
                flex-shrink: 0;
            }
            .province-info {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .cities-grid {
                grid-template-columns: 1fr;
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
            <input type="text" class="search-box" placeholder="Cari provinsi atau kota...">
            <button class="masuk-btn">Masuk</button>
        </div>
    </div>

    <div class="hero-section">
        <h1 class="hero-title">Persebaran YPOK di Indonesia</h1>
        <p class="hero-subtitle">Jaringan Yayasan Pendidikan Olahraga Karate tersebar di seluruh nusantara untuk memajukan karate Indonesia</p>
    </div>

    <div class="container">
        <div class="persebaran-grid">
            <div class="persebaran-content">
                <h2>Persebaran di Seluruh Penjuru di Indonesia</h2>
                <div class="persebaran-list">
                    <div class="persebaran-item" onclick="showProvince('jawa')">
                        <span class="item-number">1.</span>
                        <span class="item-text">Pulau Jawa</span>
                        <span class="item-arrow">→</span>
                    </div>
                    <div class="persebaran-item" onclick="showProvince('sumatera')">
                        <span class="item-number">2.</span>
                        <span class="item-text">Pulau Sumatera</span>
                        <span class="item-arrow">→</span>
                    </div>
                    <div class="persebaran-item" onclick="showProvince('kalimantan')">
                        <span class="item-number">3.</span>
                        <span class="item-text">Pulau Kalimantan</span>
                        <span class="item-arrow">→</span>
                    </div>
                    <div class="persebaran-item" onclick="showProvince('sulawesi')">
                        <span class="item-number">4.</span>
                        <span class="item-text">Pulau Sulawesi</span>
                        <span class="item-arrow">→</span>
                    </div>
                    <div class="persebaran-item" onclick="showProvince('papua')">
                        <span class="item-number">5.</span>
                        <span class="item-text">Pulau Papua</span>
                        <span class="item-arrow">→</span>
                    </div>
                    <div class="persebaran-item" onclick="showProvince('nusa')">
                        <span class="item-number">6.</span>
                        <span class="item-text">Kepulauan Nusa Tenggara dan Maluku</span>
                        <span class="item-arrow">→</span>
                    </div>
                </div>
            </div>
            <div class="persebaran-map">
                <img src="../assets/images/peta_indo_background-removebg-preview.png" alt="Peta Indonesia" class="map-image">
            </div>
        </div>
    </div>

    <!-- Detail Section -->
    <div class="detail-section">
        <div class="detail-header">
            <h2 class="detail-title">Informasi Kontak YPOK Regional</h2>
            <p class="detail-subtitle">Pilih provinsi untuk melihat informasi kontak dan cabang YPOK di wilayah tersebut</p>
        </div>

        <div class="province-tabs">
            <div class="province-tab active" onclick="showProvince('jawa')">Jawa</div>
            <div class="province-tab" onclick="showProvince('sumatera')">Sumatera</div>
            <div class="province-tab" onclick="showProvince('kalimantan')">Kalimantan</div>
            <div class="province-tab" onclick="showProvince('sulawesi')">Sulawesi</div>
            <div class="province-tab" onclick="showProvince('papua')">Papua</div>
            <div class="province-tab" onclick="showProvince('nusa')">Nusa Tenggara & Maluku</div>
        </div>

        <!-- Pulau Jawa -->
        <div class="province-content active" id="jawa">
            <div class="province-info">
                <div class="info-card">
                    <h4>Koordinator Regional Jawa</h4>
                    <p><strong>Nama:</strong> Sensei Bambang Suryadi, S.Pd</p>
                    <p><strong>Jabatan:</strong> Koordinator Regional Jawa</p>
                    <p><strong>Phone:</strong> <a href="tel:+6281234567890" class="contact-phone">+62 812-3456-7890</a></p>
                    <p><strong>Email:</strong> jawa@ypok.or.id</p>
                </div>
                <div class="info-card">
                    <h4>Wilayah Cakupan</h4>
                    <p>6 Provinsi di Pulau Jawa</p>
                    <p>45+ Cabang Aktif</p>
                    <p>2,500+ Anggota Terdaftar</p>
                    <p>150+ Pelatih Bersertifikat</p>
                </div>
            </div>
            <div class="cities-grid">
                <div class="city-card">
                    <div class="city-name">DKI Jakarta</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Ahmad Rizki</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567891" class="contact-phone">+62 812-3456-7891</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">8 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Jawa Barat</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Dedi Kurniawan</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567892" class="contact-phone">+62 812-3456-7892</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">12 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Jawa Tengah</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Sari Indrawati</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567893" class="contact-phone">+62 812-3456-7893</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">10 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">DI Yogyakarta</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Yoga Prasetyo</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567894" class="contact-phone">+62 812-3456-7894</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">6 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Jawa Timur</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Agus Wijayanto</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567895" class="contact-phone">+62 812-3456-7895</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">14 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Banten</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Rina Marlina</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567896" class="contact-phone">+62 812-3456-7896</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">5 Lokasi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Sumatera -->
        <div class="province-content" id="sumatera">
            <div class="province-info">
                <div class="info-card">
                    <h4>Koordinator Regional Sumatera</h4>
                    <p><strong>Nama:</strong> Sensei Muhammad Fadli, S.Pd</p>
                    <p><strong>Jabatan:</strong> Koordinator Regional Sumatera</p>
                    <p><strong>Phone:</strong> <a href="tel:+6281234567800" class="contact-phone">+62 812-3456-7800</a></p>
                    <p><strong>Email:</strong> sumatera@ypok.or.id</p>
                </div>
                <div class="info-card">
                    <h4>Wilayah Cakupan</h4>
                    <p>10 Provinsi di Pulau Sumatera</p>
                    <p>28+ Cabang Aktif</p>
                    <p>1,800+ Anggota Terdaftar</p>
                    <p>95+ Pelatih Bersertifikat</p>
                </div>
            </div>
            <div class="cities-grid">
                <div class="city-card">
                    <div class="city-name">Sumatera Utara</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Andi Hakim</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567801" class="contact-phone">+62 812-3456-7801</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">6 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Sumatera Barat</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Yudi Pratama</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567802" class="contact-phone">+62 812-3456-7802</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">4 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Riau</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Budi Santoso</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567803" class="contact-phone">+62 812-3456-7803</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Sumatera Selatan</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Hendra Wijaya</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567804" class="contact-phone">+62 812-3456-7804</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">5 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Lampung</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Maya Sari</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567805" class="contact-phone">+62 812-3456-7805</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Aceh</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Cut Nyak Dien</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567806" class="contact-phone">+62 812-3456-7806</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Kalimantan -->
        <div class="province-content" id="kalimantan">
            <div class="province-info">
                <div class="info-card">
                    <h4>Koordinator Regional Kalimantan</h4>
                    <p><strong>Nama:</strong> Sensei Eko Prasetyo, S.Pd</p>
                    <p><strong>Jabatan:</strong> Koordinator Regional Kalimantan</p>
                    <p><strong>Phone:</strong> <a href="tel:+6281234567810" class="contact-phone">+62 812-3456-7810</a></p>
                    <p><strong>Email:</strong> kalimantan@ypok.or.id</p>
                </div>
                <div class="info-card">
                    <h4>Wilayah Cakupan</h4>
                    <p>5 Provinsi di Pulau Kalimantan</p>
                    <p>18+ Cabang Aktif</p>
                    <p>1,200+ Anggota Terdaftar</p>
                    <p>65+ Pelatih Bersertifikat</p>
                </div>
            </div>
            <div class="cities-grid">
                <div class="city-card">
                    <div class="city-name">Kalimantan Barat</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Riko Pramana</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567811" class="contact-phone">+62 812-3456-7811</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">4 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Kalimantan Tengah</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Dayat Kurniawan</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567812" class="contact-phone">+62 812-3456-7812</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Kalimantan Selatan</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Bayu Aditya</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567813" class="contact-phone">+62 812-3456-7813</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">4 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Kalimantan Timur</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Indah Permata</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567814" class="contact-phone">+62 812-3456-7814</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">5 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Kalimantan Utara</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Fajar Ramadhan</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567815" class="contact-phone">+62 812-3456-7815</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">2 Lokasi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Sulawesi -->
        <div class="province-content" id="sulawesi">
            <div class="province-info">
                <div class="info-card">
                    <h4>Koordinator Regional Sulawesi</h4>
                    <p><strong>Nama:</strong> Sensei Andi Rahman, S.Pd</p>
                    <p><strong>Jabatan:</strong> Koordinator Regional Sulawesi</p>
                    <p><strong>Phone:</strong> <a href="tel:+6281234567820" class="contact-phone">+62 812-3456-7820</a></p>
                    <p><strong>Email:</strong> sulawesi@ypok.or.id</p>
                </div>
                <div class="info-card">
                    <h4>Wilayah Cakupan</h4>
                    <p>6 Provinsi di Pulau Sulawesi</p>
                    <p>22+ Cabang Aktif</p>
                    <p>1,500+ Anggota Terdaftar</p>
                    <p>78+ Pelatih Bersertifikat</p>
                </div>
            </div>
            <div class="cities-grid">
                <div class="city-card">
                    <div class="city-name">Sulawesi Selatan</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Andi Sulthan</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567821" class="contact-phone">+62 812-3456-7821</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">6 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Sulawesi Utara</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Grace Tumanggor</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567822" class="contact-phone">+62 812-3456-7822</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">4 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Sulawesi Tengah</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Wahyu Hidayat</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567823" class="contact-phone">+62 812-3456-7823</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Sulawesi Tenggara</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei La Ode Syamsul</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567824" class="contact-phone">+62 812-3456-7824</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Gorontalo</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Rahmat Hidayat</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567825" class="contact-phone">+62 812-3456-7825</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">2 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Sulawesi Barat</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Arif Maulana</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567826" class="contact-phone">+62 812-3456-7826</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">4 Lokasi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Papua -->
        <div class="province-content" id="papua">
            <div class="province-info">
                <div class="info-card">
                    <h4>Koordinator Regional Papua</h4>
                    <p><strong>Nama:</strong> Sensei Yosef Wenda, S.Pd</p>
                    <p><strong>Jabatan:</strong> Koordinator Regional Papua</p>
                    <p><strong>Phone:</strong> <a href="tel:+6281234567830" class="contact-phone">+62 812-3456-7830</a></p>
                    <p><strong>Email:</strong> papua@ypok.or.id</p>
                </div>
                <div class="info-card">
                    <h4>Wilayah Cakupan</h4>
                    <p>6 Provinsi di Papua</p>
                    <p>12+ Cabang Aktif</p>
                    <p>800+ Anggota Terdaftar</p>
                    <p>45+ Pelatih Bersertifikat</p>
                </div>
            </div>
            <div class="cities-grid">
                <div class="city-card">
                    <div class="city-name">Papua</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Albertus Kaba</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567831" class="contact-phone">+62 812-3456-7831</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">4 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Papua Barat</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Melky Kalaibin</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567832" class="contact-phone">+62 812-3456-7832</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Papua Selatan</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Daniel Kogoya</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567833" class="contact-phone">+62 812-3456-7833</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">2 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Papua Tengah</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Yusak Tabuni</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567834" class="contact-phone">+62 812-3456-7834</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">1 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Papua Pegunungan</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Markus Wanma</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567835" class="contact-phone">+62 812-3456-7835</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">1 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Papua Barat Daya</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Fredrik Korain</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567836" class="contact-phone">+62 812-3456-7836</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">1 Lokasi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nusa Tenggara & Maluku -->
        <div class="province-content" id="nusa">
            <div class="province-info">
                <div class="info-card">
                    <h4>Koordinator Regional Nusa Tenggara & Maluku</h4>
                    <p><strong>Nama:</strong> Sensei Made Wiraguna, S.Pd</p>
                    <p><strong>Jabatan:</strong> Koordinator Regional NTT & Maluku</p>
                    <p><strong>Phone:</strong> <a href="tel:+6281234567840" class="contact-phone">+62 812-3456-7840</a></p>
                    <p><strong>Email:</strong> nusatenggara@ypok.or.id</p>
                </div>
                <div class="info-card">
                    <h4>Wilayah Cakupan</h4>
                    <p>5 Provinsi Kepulauan</p>
                    <p>15+ Cabang Aktif</p>
                    <p>950+ Anggota Terdaftar</p>
                    <p>52+ Pelatih Bersertifikat</p>
                </div>
            </div>
            <div class="cities-grid">
                <div class="city-card">
                    <div class="city-name">Bali</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei I Gede Sutrisna</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567841" class="contact-phone">+62 812-3456-7841</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">5 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Nusa Tenggara Barat</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Lalu Hendra</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567842" class="contact-phone">+62 812-3456-7842</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Nusa Tenggara Timur</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Yohannes Bani</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567843" class="contact-phone">+62 812-3456-7843</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">3 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Maluku</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Reza Latuconsina</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567844" class="contact-phone">+62 812-3456-7844</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">2 Lokasi</span>
                    </div>
                </div>
                <div class="city-card">
                    <div class="city-name">Maluku Utara</div>
                    <div class="contact-info">
                        <span class="contact-label">PIC:</span>
                        <span class="contact-value">Sensei Khalid Abduh</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Phone:</span>
                        <a href="tel:+6281234567845" class="contact-phone">+62 812-3456-7845</a>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Cabang:</span>
                        <span class="contact-value">2 Lokasi</span>
                    </div>
                </div>
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
        function showProvince(provinceName) {
            // Hide all province content
            const allContents = document.querySelectorAll('.province-content');
            allContents.forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all tabs
            const allTabs = document.querySelectorAll('.province-tab');
            allTabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Show selected province content
            const selectedContent = document.getElementById(provinceName);
            if (selectedContent) {
                selectedContent.classList.add('active');
            }

            // Add active class to corresponding tab
            const selectedTab = document.querySelector(`.province-tab[onclick="showProvince('${provinceName}')"]`);
            if (selectedTab) {
                selectedTab.classList.add('active');
            }

            // Scroll to detail section
            document.querySelector('.detail-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Search functionality
        document.querySelector('.search-box').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cityCards = document.querySelectorAll('.city-card');
            
            cityCards.forEach(card => {
                const cityName = card.querySelector('.city-name').textContent.toLowerCase();
                const picName = card.querySelector('.contact-value').textContent.toLowerCase();
                
                if (cityName.includes(searchTerm) || picName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
