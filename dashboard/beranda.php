<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - YPOK</title>
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
        .welcome-section {
            background: linear-gradient(135deg, #f0f2f5 0%, #e8eaed 100%);
            text-align: center;
            padding: 40px 20px;
            margin-bottom: 0;
        }
        .welcome-title {
            color: #666;
            font-size: 2rem;
            font-weight: 400;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }
        .welcome-subtitle {
            color: #888;
            font-size: 1.2rem;
            font-weight: 300;
        }
        .trusted-section {
            background: #fff;
            text-align: center;
            padding: 30px 20px;
            margin: 0;
        }
        .trusted-text {
            color: #666;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            position: relative;
        }
        .trusted-text::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 2px;
            background: #1976d2;
            border-radius: 1px;
        }
        .trusted-logos {
            display: flex;
            justify-content: center;
            gap: 30px;
            align-items: center;
        }
        .trusted-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: contain;
            filter: grayscale(30%);
            transition: all 0.3s ease;
            background: #f8f9fa;
            padding: 5px;
        }
        .trusted-logo:hover {
            filter: grayscale(0%);
            transform: scale(1.1);
        }
        .news-section {
            background: #fff;
            padding: 40px 0;
        }
        .section-title {
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .news-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        .news-tabs {
            display: flex;
            gap: 10px;
        }
        .tab-btn {
            background: #f0f0f0;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            color: #666;
            transition: all 0.3s ease;
        }
        .tab-btn.active {
            background: #1976d2;
            color: #fff;
        }
        .tab-btn:hover {
            background: #e3f2fd;
            color: #1976d2;
        }
        .tab-btn.active:hover {
            background: #1565c0;
            color: #fff;
        }
        .trusted-logos {
            display: flex;
            justify-content: center;
            gap: 40px;
            align-items: center;
        }
        .trusted-logos img {
            height: 60px;
            opacity: 0.8;
        }
        .news-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        .news-title {
            background: #d0d0d0;
            color: #666;
            padding: 15px 30px;
            border-radius: 25px;
            display: inline-block;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
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
        .news-card.featured {
            position: relative;
        }
        .news-image {
            position: relative;
            height: 250px;
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
        .news-content {
            padding: 25px;
        }
        .news-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
            display: block;
        }
        .news-title-item {
            color: #333;
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .news-excerpt {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
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
        .side-news {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .side-news .news-card {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
        }
        .news-image-small {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }
        .news-image-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .news-content-small {
            flex: 1;
        }
        .news-title-small {
            color: #333;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .read-more-small {
            color: #1976d2;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .read-more-small:hover {
            color: #1565c0;
        }
        .news-footer {
            text-align: center;
            margin-top: 30px;
        }
        .view-all-news {
            background: #1976d2;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
            display: inline-block;
        }
        .view-all-news:hover {
            background: #1565c0;
        }
        .about-section {
            background: #f8f9fa;
            padding: 50px 0;
            margin-top: 30px;
        }
        .container-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 30px;
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
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        .about-text h3 {
            color: #1976d2;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        .about-text p {
            color: #666;
            line-height: 1.8;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }
        .highlights {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .highlight-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        .highlight-item:hover {
            transform: translateY(-5px);
        }
        .highlight-icon {
            font-size: 2.5rem;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e3f2fd;
            border-radius: 50%;
        }
        .highlight-content h4 {
            color: #333;
            margin-bottom: 5px;
            font-size: 1.2rem;
        }
        .highlight-content p {
            color: #666;
            margin: 0;
            font-size: 0.95rem;
        }
        .about-image {
            text-align: center;
            position: relative;
        }
        .about-image img {
            width: 200px;
            height: 200px;
            object-fit: contain;
            margin-bottom: 30px;
        }
        .stats-box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
        .stat-item {
            background: white;
            padding: 25px 15px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            text-align: center;
        }
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #1976d2;
            margin-bottom: 5px;
        }
        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }
        .mission-section {
            padding: 50px 0;
            background: linear-gradient(135deg, #f0f0f0 0%, #e8e8e8 100%);
            color: #333;
        }
        .mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: stretch;
        }
        .mission-card {
            background: rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .mission-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }
        .mission-card p {
            line-height: 1.8;
            color: #555;
            font-size: 1.1rem;
        }
        .mission-card ul {
            list-style: none;
            padding: 0;
        }
        .mission-card li {
            padding: 8px 0;
            position: relative;
            padding-left: 25px;
            color: #555;
        }
        .mission-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #2ecc71;
            font-weight: bold;
        }
        .mission-card {
            background: rgba(255,255,255,0.1);
            padding: 40px 35px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            display: flex;
            flex-direction: column;
            min-height: 280px;
        }
        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            justify-content: center;
        }
        .card-icon {
            font-size: 3.5rem;
            flex-shrink: 0;
        }
        .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%;
            text-align: center;
        }
        .mission-card h3 {
            font-size: 2rem;
            margin: 0;
            color: #1976d2;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .mission-card p {
            line-height: 1.8;
            color: #666;
            font-size: 1.1rem;
            margin: 0;
            flex-grow: 1;
        }
        .mission-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            text-align: left;
            width: 100%;
        }
        .mission-card li {
            padding: 12px 0;
            position: relative;
            padding-left: 30px;
            color: #666;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 8px;
        }
        .mission-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #1976d2;
            font-weight: bold;
            font-size: 1.2rem;
        }
        /* Indonesia Section */
        .indonesia-section {
            padding: 40px 0;
            background: #f8f9fa;
        }
        .indonesia-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        .indonesia-content h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: 700;
            line-height: 1.2;
        }
        .indonesia-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .indonesia-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.1rem;
            color: #333;
            padding: 12px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .item-number {
            font-weight: 700;
            color: #1976d2;
            font-size: 1.2rem;
            min-width: 25px;
        }
        .item-text {
            font-weight: 500;
        }
        .indonesia-map {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .map-image {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
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
            .news-section {
                padding: 0 20px;
            }
            .news-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .side-news .news-card {
                flex-direction: column;
                text-align: center;
            }
            .news-image-small {
                width: 100%;
                height: 150px;
            }
            .about-grid, .mission-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .mission-card {
                min-height: auto;
                padding: 30px 25px;
            }
            .card-header {
                flex-direction: column;
                gap: 10px;
                margin-bottom: 20px;
            }
            .card-content {
                min-height: auto;
            }
            .card-icon {
                font-size: 3rem;
            }
            .indonesia-grid {
                grid-template-columns: 1fr;
                gap: 30px;
                text-align: center;
            }
            .indonesia-content h2 {
                font-size: 1.8rem;
            }
            .indonesia-item {
                justify-content: flex-start;
                text-align: left;
            }
            .container-content {
                padding: 0 20px;
            }
            .stats-box {
                grid-template-columns: 1fr;
            }
            .footer-content {
                grid-template-columns: 1fr;
                gap: 20px;
                text-align: center;
            }
            .footer-logo {
                justify-self: center;
            }
        }

        /* Footer Styles */
        .footer {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 40px 0 20px 0;
            margin-top: 0;
        }
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 40px;
            align-items: start;
        }
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .footer-logo img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }
        .footer-logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }
        .footer-info {
            text-align: center;
        }
        .footer-info h3 {
            color: #fff;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        .footer-address {
            color: #bdc3c7;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .footer-contact {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 15px;
        }
        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #bdc3c7;
            font-size: 0.9rem;
        }
        .footer-contact-icon {
            width: 16px;
            height: 16px;
            fill: #3498db;
        }
        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #95a5a6;
            font-size: 0.9rem;
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
            <a href="beranda.php" class="nav-item active">Beranda</a>
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
            <a href="berita.php" class="nav-item">Berita</a>
            <a href="hubungi-kami.php" class="nav-item">Hubungi Kami</a>
        </div>
        <div class="search-section">
            <input type="text" class="search-box" placeholder="Pencarian...">
            <button class="masuk-btn">Masuk</button>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="welcome-section">
        <h1 class="welcome-title">Selamat Datang di Website Resmi YPOK</h1>
        <p class="welcome-subtitle">Yayasan Pendidikan Olahraga Karate</p>
    </div>

    <!-- Trusted Section -->
    <div class="trusted-section">
        <div class="trusted-text">Trusted By</div>
        <div class="trusted-logos">
            <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="YPOK Logo" class="trusted-logo">
            <img src="../assets/images/kormi.png" alt="KORMI Logo" class="trusted-logo">
        </div>
    </div>

    <!-- News Section -->
    <div class="news-section">
        <div class="container-content">
            <div class="news-header">
                <h2 class="section-title">Berita Terakhir</h2>
            </div>
        
        <!-- News Grid -->
        <div class="news-grid">
            <div class="main-news">
                <div class="news-card featured">
                    <div class="news-image">
                        <img src="../assets/images/peta indo background.jpg" alt="Berita Utama">
                        <div class="news-badge">UTAMA</div>
                    </div>
                    <div class="news-content">
                        <span class="news-date">5 September 2025</span>
                        <h3 class="news-title-item">YPOK Raih Prestasi Internasional di Kejuaraan Karate Asia 2025</h3>
                        <p class="news-excerpt">Atlet binaan YPOK berhasil meraih medali emas dalam kategori kata senior putra pada Kejuaraan Karate Asia yang diselenggarakan di Bangkok, Thailand...</p>
                        <a href="detail-berita.php?id=1" class="read-more">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            
            <div class="side-news">
                <div class="news-card">
                    <div class="news-image-small">
                        <img src="../assets/images/kormi.png" alt="Berita 1">
                    </div>
                    <div class="news-content-small">
                        <span class="news-date">3 September 2025</span>
                        <h4 class="news-title-small">Kerjasama YPOK dengan KORMI dalam Pengembangan Atlet Muda</h4>
                        <a href="detail-berita.php?id=2" class="read-more-small">Baca Selengkapnya</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <div class="news-image-small">
                        <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Berita 2">
                    </div>
                    <div class="news-content-small">
                        <span class="news-date">1 September 2025</span>
                        <h4 class="news-title-small">Program Pelatihan Pelatih Karate Tingkat Nasional Dimulai</h4>
                        <a href="detail-berita.php?id=3" class="read-more-small">Baca Selengkapnya</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <div class="news-image-small">
                        <img src="../assets/images/peta indo background.jpg" alt="Berita 3">
                    </div>
                    <div class="news-content-small">
                        <span class="news-date">28 Agustus 2025</span>
                        <h4 class="news-title-small">Seminar Nasional Karate dan Pengembangan Karakter Anak</h4>
                        <a href="detail-berita.php?id=4" class="read-more-small">Baca Selengkapnya</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <div class="news-image-small">
                        <img src="../assets/images/Kemenpora_Logo.png" alt="Berita 4">
                    </div>
                    <div class="news-content-small">
                        <span class="news-date">25 Agustus 2025</span>
                        <h4 class="news-title-small">YPOK Terima Penghargaan dari Kemenpora untuk Prestasi Olahraga</h4>
                        <a href="detail-berita.php?id=5" class="read-more-small">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- View All News Button -->
        <div class="news-footer">
            <a href="berita.php" class="view-all-news">Lihat Semua Berita</a>
        </div>
        </div>
    </div>

    <!-- About YPOK Section -->
    <div class="about-section">
        <div class="container-content">
            <h2 class="section-title">Tentang YPOK</h2>
            <div class="about-grid">
                <div class="about-text">
                    <h3>Yayasan Pendidikan Olahraga Karate</h3>
                    <p>Yayasan Pendidikan Olahraga Karate (YPOK) adalah organisasi yang berkomitmen dalam mengembangkan pendidikan karate di Indonesia. Didirikan dengan visi untuk memajukan karateka yang profesional dan berkualitas tinggi.</p>
                    
                    <div class="highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">🥋</div>
                            <div class="highlight-content">
                                <h4>Pendidikan Berkualitas</h4>
                                <p>Program pendidikan karate yang terstruktur dan profesional</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">🏆</div>
                            <div class="highlight-content">
                                <h4>Prestasi Nasional</h4>
                                <p>Menghasilkan atlet-atlet karate berprestasi tingkat nasional</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon">🎯</div>
                            <div class="highlight-content">
                                <h4>Visi Misi Jelas</h4>
                                <p>Memajukan karateka profesional dengan karakter yang kuat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="YPOK Logo">
                    <div class="stats-box">
                        <div class="stat-item">
                            <div class="stat-number">2005</div>
                            <div class="stat-label">Tahun Berdiri</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">18+</div>
                            <div class="stat-label">Tahun Pengalaman</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Siswa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission & Vision Section -->
    <div class="mission-section">
        <div class="container-content">
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="card-header">
                        <div class="card-icon">🎯</div>
                        <h3>Visi</h3>
                    </div>
                    <div class="card-content">
                        <p>Menjadi yayasan pendidikan karate terdepan yang menghasilkan karateka berkualitas tinggi, berkarakter kuat, dan berprestasi di tingkat nasional maupun internasional.</p>
                    </div>
                </div>
                <div class="mission-card">
                    <div class="card-header">
                        <div class="card-icon">🚀</div>
                        <h3>Misi</h3>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li>Menyelenggarakan pendidikan karate yang berkualitas</li>
                            <li>Mengembangkan karakter dan mental yang kuat</li>
                            <li>Membangun jaringan kerjasama dengan berbagai institusi</li>
                            <li>Menghasilkan atlet karate berprestasi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Indonesia Coverage Section -->
    <div class="indonesia-section">
        <div class="container-content">
            <div class="indonesia-grid">
                <div class="indonesia-content">
                    <h2>Persebaran di Seluruh Penjuru di Indonesia</h2>
                    <div class="indonesia-list">
                        <div class="indonesia-item">
                            <span class="item-number">1.</span>
                            <span class="item-text">Pulau Jawa</span>
                        </div>
                        <div class="indonesia-item">
                            <span class="item-number">2.</span>
                            <span class="item-text">Pulau Sumatera</span>
                        </div>
                        <div class="indonesia-item">
                            <span class="item-number">3.</span>
                            <span class="item-text">Pulau Kalimantan</span>
                        </div>
                        <div class="indonesia-item">
                            <span class="item-number">4.</span>
                            <span class="item-text">Pulau Sulawesi</span>
                        </div>
                        <div class="indonesia-item">
                            <span class="item-number">5.</span>
                            <span class="item-text">Pulau Papua</span>
                        </div>
                        <div class="indonesia-item">
                            <span class="item-number">6.</span>
                            <span class="item-text">Kepulauan Nusa Tenggara dan Maluku</span>
                        </div>
                    </div>
                </div>
                <div class="indonesia-map">
                    <img src="../assets/images/peta_indo_background-removebg-preview.png" alt="Peta Indonesia" class="map-image">
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <!-- Back Button -->
    <a href="firstpage.php" class="back-btn" title="Kembali">
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
