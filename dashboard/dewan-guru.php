<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewan Guru - YPOK</title>
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
        .structure-section {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 40px;
        }
        .structure-title {
            color: #1976d2;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
        }
        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }
        .level {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            width: 100%;
        }
        .position-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
            min-width: 250px;
            max-width: 300px;
        }
        .position-card:hover {
            border-color: #1976d2;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(25, 118, 210, 0.1);
        }
        .position-card.ketua {
            border-color: #d32f2f;
            background: linear-gradient(135deg, #ffebee 0%, #f8f9fa 100%);
        }
        .position-card.wakil {
            border-color: #f57c00;
            background: linear-gradient(135deg, #fff3e0 0%, #f8f9fa 100%);
        }
        .position-card.sekretaris {
            border-color: #388e3c;
            background: linear-gradient(135deg, #e8f5e8 0%, #f8f9fa 100%);
        }
        .position-card.bendahara {
            border-color: #7b1fa2;
            background: linear-gradient(135deg, #f3e5f5 0%, #f8f9fa 100%);
        }
        .position-title {
            color: #1976d2;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .position-card.ketua .position-title {
            color: #d32f2f;
        }
        .position-card.wakil .position-title {
            color: #f57c00;
        }
        .position-card.sekretaris .position-title {
            color: #388e3c;
        }
        .position-card.bendahara .position-title {
            color: #7b1fa2;
        }
        .person-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }
        .person-title {
            color: #666;
            margin-bottom: 15px;
            font-style: italic;
        }
        .person-details {
            font-size: 0.9rem;
            color: #555;
            line-height: 1.5;
        }
        .contact-info {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0;
        }
        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        .contact-item a {
            color: #1976d2;
            text-decoration: none;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }
        .regional-section {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 40px;
        }
        .regional-title {
            color: #1976d2;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .regional-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .regional-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid #1976d2;
            transition: all 0.3s ease;
        }
        .regional-card:hover {
            box-shadow: 0 8px 25px rgba(25, 118, 210, 0.1);
            transform: translateY(-3px);
        }
        .regional-card h4 {
            color: #1976d2;
            font-size: 1.2rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        .regional-card .coordinator {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .regional-card .contact {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        .regional-card .contact a {
            color: #1976d2;
            text-decoration: none;
        }
        .regional-card .contact a:hover {
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
            .hero-title {
                font-size: 2.2rem;
            }
            .level {
                gap: 15px;
            }
            .position-card {
                min-width: 280px;
                max-width: 100%;
            }
            .regional-grid {
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
            <input type="text" class="search-box" placeholder="Pencarian...">
            <button class="masuk-btn">Masuk</button>
        </div>
    </div>

    <div class="hero-section">
        <h1 class="hero-title">Dewan Guru YPOK</h1>
        <p class="hero-subtitle">Struktur kepemimpinan dan koordinator regional Yayasan Pendidikan Olahraga Karate</p>
    </div>

    <div class="container">
        <!-- Struktur Dewan Guru Pusat -->
        <div class="structure-section">
            <h2 class="structure-title">Struktur Dewan Guru Pusat</h2>
            <div class="org-chart">
                <!-- Level 1: Ketua -->
                <div class="level">
                    <div class="position-card ketua">
                        <div class="position-title">Ketua Dewan Guru</div>
                        <div class="person-name">Kyoshi Bambang Sutrisno</div>
                        <div class="person-title">Dan IX (9th Dan)</div>
                        <div class="person-details">
                            Pendiri dan Ketua Umum YPOK<br>
                            Mengajar karate sejak 1985
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:ketua@ypok.or.id">ketua@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567880">+62 812-3456-7880</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Level 2: Wakil Ketua -->
                <div class="level">
                    <div class="position-card wakil">
                        <div class="position-title">Wakil Ketua Dewan Guru</div>
                        <div class="person-name">Sensei Agus Wijayanto</div>
                        <div class="person-title">Dan VIII (8th Dan)</div>
                        <div class="person-details">
                            Koordinator Program Nasional<br>
                            Pengalaman mengajar 20+ tahun
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:wakil@ypok.or.id">wakil@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567881">+62 812-3456-7881</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Level 3: Sekretaris & Bendahara -->
                <div class="level">
                    <div class="position-card sekretaris">
                        <div class="position-title">Sekretaris</div>
                        <div class="person-name">Sensei Sri Wahyuni</div>
                        <div class="person-title">Dan VII (7th Dan)</div>
                        <div class="person-details">
                            Koordinator Administrasi<br>
                            Spesialis dokumentasi & arsip
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:sekretaris@ypok.or.id">sekretaris@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567882">+62 812-3456-7882</a>
                            </div>
                        </div>
                    </div>

                    <div class="position-card bendahara">
                        <div class="position-title">Bendahara</div>
                        <div class="person-name">Sensei Dedi Kurniawan</div>
                        <div class="person-title">Dan VII (7th Dan)</div>
                        <div class="person-details">
                            Koordinator Keuangan<br>
                            Lulusan Akuntansi, pengalaman 15+ tahun
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:bendahara@ypok.or.id">bendahara@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567883">+62 812-3456-7883</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Level 4: Koordinator Bidang -->
                <div class="level">
                    <div class="position-card">
                        <div class="position-title">Koordinator Kurikulum</div>
                        <div class="person-name">Sensei Ahmad Rizki</div>
                        <div class="person-title">Dan VI (6th Dan)</div>
                        <div class="person-details">
                            Pengembangan materi pembelajaran<br>
                            Standarisasi teknik karate
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:kurikulum@ypok.or.id">kurikulum@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567884">+62 812-3456-7884</a>
                            </div>
                        </div>
                    </div>

                    <div class="position-card">
                        <div class="position-title">Koordinator Pelatihan</div>
                        <div class="person-name">Sensei Sari Indrawati</div>
                        <div class="person-title">Dan VI (6th Dan)</div>
                        <div class="person-details">
                            Program sertifikasi pelatih<br>
                            Workshop dan seminar
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:pelatihan@ypok.or.id">pelatihan@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567885">+62 812-3456-7885</a>
                            </div>
                        </div>
                    </div>

                    <div class="position-card">
                        <div class="position-title">Koordinator Kompetisi</div>
                        <div class="person-name">Sensei Yoga Prasetyo</div>
                        <div class="person-title">Dan VI (6th Dan)</div>
                        <div class="person-details">
                            Penyelenggaraan turnamen<br>
                            Pembinaan atlet nasional
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                📧 <a href="mailto:kompetisi@ypok.or.id">kompetisi@ypok.or.id</a>
                            </div>
                            <div class="contact-item">
                                📱 <a href="tel:+6281234567886">+62 812-3456-7886</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Koordinator Regional -->
        <div class="regional-section">
            <h2 class="regional-title">Koordinator Regional</h2>
            <div class="regional-grid">
                <div class="regional-card">
                    <h4>Regional Jawa</h4>
                    <div class="coordinator">Sensei Bambang Suryadi, S.Pd</div>
                    <div class="contact">📧 <a href="mailto:jawa@ypok.or.id">jawa@ypok.or.id</a></div>
                    <div class="contact">📱 <a href="tel:+6281234567890">+62 812-3456-7890</a></div>
                    <div class="contact">🎯 Dan VI - 6 Provinsi - 45+ Cabang</div>
                </div>

                <div class="regional-card">
                    <h4>Regional Sumatera</h4>
                    <div class="coordinator">Sensei Muhammad Fadli, S.Pd</div>
                    <div class="contact">📧 <a href="mailto:sumatera@ypok.or.id">sumatera@ypok.or.id</a></div>
                    <div class="contact">📱 <a href="tel:+6281234567800">+62 812-3456-7800</a></div>
                    <div class="contact">🎯 Dan V - 10 Provinsi - 28+ Cabang</div>
                </div>

                <div class="regional-card">
                    <h4>Regional Kalimantan</h4>
                    <div class="coordinator">Sensei Eko Prasetyo, S.Pd</div>
                    <div class="contact">📧 <a href="mailto:kalimantan@ypok.or.id">kalimantan@ypok.or.id</a></div>
                    <div class="contact">📱 <a href="tel:+6281234567810">+62 812-3456-7810</a></div>
                    <div class="contact">🎯 Dan V - 5 Provinsi - 18+ Cabang</div>
                </div>

                <div class="regional-card">
                    <h4>Regional Sulawesi</h4>
                    <div class="coordinator">Sensei Andi Rahman, S.Pd</div>
                    <div class="contact">📧 <a href="mailto:sulawesi@ypok.or.id">sulawesi@ypok.or.id</a></div>
                    <div class="contact">📱 <a href="tel:+6281234567820">+62 812-3456-7820</a></div>
                    <div class="contact">🎯 Dan V - 6 Provinsi - 22+ Cabang</div>
                </div>

                <div class="regional-card">
                    <h4>Regional Papua</h4>
                    <div class="coordinator">Sensei Yosef Wenda, S.Pd</div>
                    <div class="contact">📧 <a href="mailto:papua@ypok.or.id">papua@ypok.or.id</a></div>
                    <div class="contact">📱 <a href="tel:+6281234567830">+62 812-3456-7830</a></div>
                    <div class="contact">🎯 Dan IV - 6 Provinsi - 12+ Cabang</div>
                </div>

                <div class="regional-card">
                    <h4>Regional Nusa Tenggara & Maluku</h4>
                    <div class="coordinator">Sensei Made Wiraguna, S.Pd</div>
                    <div class="contact">📧 <a href="mailto:nusatenggara@ypok.or.id">nusatenggara@ypok.or.id</a></div>
                    <div class="contact">📱 <a href="tel:+6281234567840">+62 812-3456-7840</a></div>
                    <div class="contact">🎯 Dan V - 5 Provinsi - 15+ Cabang</div>
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
</body>
</html>
