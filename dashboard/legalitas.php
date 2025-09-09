<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legalitas - YPOK</title>
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
        .legal-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        .legal-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-left: 5px solid #1976d2;
            transition: all 0.3s ease;
        }
        .legal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }
        .legal-card h3 {
            color: #1976d2;
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        .legal-item {
            background: #f8f9fa;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            border-left: 3px solid #e0e0e0;
        }
        .legal-item h4 {
            color: #333;
            font-size: 1.1rem;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .legal-item p {
            color: #666;
            margin: 5px 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        .legal-item .status {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 8px;
        }
        .status.aktif {
            background: #e8f5e8;
            color: #388e3c;
        }
        .status.perpanjangan {
            background: #fff3e0;
            color: #f57c00;
        }
        .download-btn {
            background: #1976d2;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s;
            margin-top: 10px;
        }
        .download-btn:hover {
            background: #1565c0;
            color: white;
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
            .legal-grid {
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
                <a href="javascript:void(0)" class="nav-item active">Organisasi <span class="dropdown-arrow">▼</span></a>
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
        <h1 class="hero-title">Legalitas YPOK</h1>
        <p class="hero-subtitle">Dokumen resmi dan legalitas Yayasan Pendidikan Olahraga Karate</p>
    </div>

    <div class="container">
        <div class="legal-grid">
            <div class="legal-card">
                <h3>📋 Akta Pendirian Yayasan</h3>
                <div class="legal-item">
                    <h4>Akta Notaris Pendirian YPOK</h4>
                    <p><strong>Nomor:</strong> 45/2005</p>
                    <p><strong>Tanggal:</strong> 15 Agustus 2005</p>
                    <p><strong>Notaris:</strong> Ny. Siti Rahma Dewi, S.H., M.Kn</p>
                    <p><strong>Tempat:</strong> Jakarta Pusat</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
                <div class="legal-item">
                    <h4>Perubahan Anggaran Dasar</h4>
                    <p><strong>Nomor:</strong> 12/2015</p>
                    <p><strong>Tanggal:</strong> 10 Juni 2015</p>
                    <p><strong>Perubahan:</strong> Penambahan wilayah kerja nasional</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
            </div>

            <div class="legal-card">
                <h3>🏛️ Kemenkumham</h3>
                <div class="legal-item">
                    <h4>SK Kemenkumham Pengesahan</h4>
                    <p><strong>Nomor:</strong> AHU-0012345.AH.01.04.Tahun 2005</p>
                    <p><strong>Tanggal:</strong> 25 Agustus 2005</p>
                    <p><strong>Status:</strong> Yayasan berbadan hukum</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
                <div class="legal-item">
                    <h4>Perubahan Data Yayasan</h4>
                    <p><strong>Nomor:</strong> AHU-0067890.AH.01.04.Tahun 2020</p>
                    <p><strong>Tanggal:</strong> 5 Maret 2020</p>
                    <p><strong>Perubahan:</strong> Alamat kantor dan susunan pengurus</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
            </div>

            <div class="legal-card">
                <h3>💼 NPWP & Perpajakan</h3>
                <div class="legal-item">
                    <h4>NPWP Yayasan</h4>
                    <p><strong>Nomor:</strong> 01.234.567.8-901.000</p>
                    <p><strong>Nama WP:</strong> Yayasan Pendidikan Olahraga Karate</p>
                    <p><strong>Status:</strong> Wajib Pajak Aktif</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
                <div class="legal-item">
                    <h4>PKP (Pengusaha Kena Pajak)</h4>
                    <p><strong>Nomor:</strong> 01.234.567.8-901.000</p>
                    <p><strong>Tanggal Efektif:</strong> 1 Januari 2010</p>
                    <p><strong>Status:</strong> PKP Aktif</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
            </div>

            <div class="legal-card">
                <h3>🏅 Kemenpora</h3>
                <div class="legal-item">
                    <h4>SK Akreditasi Organisasi Olahraga</h4>
                    <p><strong>Nomor:</strong> 0123/KEMENPORA/X/2018</p>
                    <p><strong>Tanggal:</strong> 15 Oktober 2018</p>
                    <p><strong>Masa Berlaku:</strong> 15 Oktober 2023</p>
                    <span class="status perpanjangan">PERPANJANGAN</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
                <div class="legal-item">
                    <h4>Terdaftar di Data Induk Olahraga</h4>
                    <p><strong>Nomor Registrasi:</strong> DIO-KAR-2018-001</p>
                    <p><strong>Cabang Olahraga:</strong> Karate</p>
                    <p><strong>Tingkat:</strong> Nasional</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
            </div>

            <div class="legal-card">
                <h3>🥋 FORKI</h3>
                <div class="legal-item">
                    <h4>SK Pengakuan FORKI Pusat</h4>
                    <p><strong>Nomor:</strong> 089/FORKI/SK/XI/2005</p>
                    <p><strong>Tanggal:</strong> 20 November 2005</p>
                    <p><strong>Status:</strong> Anggota resmi FORKI</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
                <div class="legal-item">
                    <h4>Pembaruan Keanggotaan FORKI</h4>
                    <p><strong>Nomor:</strong> 156/FORKI/SK/VII/2020</p>
                    <p><strong>Tanggal:</strong> 12 Juli 2020</p>
                    <p><strong>Masa Berlaku:</strong> 12 Juli 2025</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
            </div>

            <div class="legal-card">
                <h3>📄 Dokumen Pendukung</h3>
                <div class="legal-item">
                    <h4>Sertifikat ISO 9001:2015</h4>
                    <p><strong>Nomor:</strong> ISO-YPK-2022-001</p>
                    <p><strong>Tanggal:</strong> 8 Maret 2022</p>
                    <p><strong>Scope:</strong> Manajemen pelatihan karate</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
                </div>
                <div class="legal-item">
                    <h4>HKI Merk YPOK</h4>
                    <p><strong>Nomor:</strong> IDM000567890</p>
                    <p><strong>Tanggal:</strong> 22 April 2019</p>
                    <p><strong>Masa Berlaku:</strong> 22 April 2029</p>
                    <span class="status aktif">AKTIF</span>
                    <br><a href="javascript:void(0)" class="download-btn">📥 Download PDF</a>
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
