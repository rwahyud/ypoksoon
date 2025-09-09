<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YPOK - Yayasan Pendidikan Olahraga Karate</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            height: 100vh;
            overflow: hidden;
        }
        
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            height: 100vh;
        }
        
        /* Left Section - Karate Artistic Image */
        .left-section {
            background: url('../assets/images/first page .jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
            /* Fallback untuk debugging */
            background-color: #2d3748;
        }
        
        .karate-artistic {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0,0,0,0.1), rgba(0,0,0,0.05));
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding-bottom: 40px;
        }
        
        .karate-silhouette {
            position: relative;
            z-index: 2;
            color: rgba(255,255,255,0.9);
            text-align: center;
            font-size: 1.2rem;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 0 2px 4px rgba(0,0,0,0.7);
        }
        
        /* Right Section - Content */
        .right-section {
            background: #f8f9fa;
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 40px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 80px;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: contain;
            background: white;
            padding: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border: 2px solid #e9ecef;
        }
        
        .logo-text {
            color: #2c3e50;
            font-weight: bold;
            font-size: 1.2rem;
            letter-spacing: 1px;
        }
        
        .menu-btn {
            background: #1a365d;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }
        
        .menu-btn:hover {
            background: #2d3748;
            transform: translateY(-1px);
        }
        
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 500px;
        }
        
        .subtitle {
            color: #e53e3e;
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 30px;
            letter-spacing: 0.5px;
        }
        
        .title {
            color: #2d3748;
            font-size: 3.2rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 50px;
            letter-spacing: -1px;
        }
        
        .beranda-btn {
            background: #2d3748;
            color: white;
            border: none;
            padding: 18px 45px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            align-self: flex-start;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            box-shadow: 0 8px 25px rgba(45,55,72,0.3);
            position: relative;
            overflow: hidden;
        }
        
        .beranda-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .beranda-btn:hover::before {
            left: 100%;
        }
        
        .beranda-btn:hover {
            background: #1a202c;
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(45,55,72,0.4);
        }
        
        @keyframes float {
            0%, 100% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            50% {
                transform: translate(-50%, -50%) rotate(180deg);
            }
        }
        
        /* Page transition effects */
        .page-transition {
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-out {
            animation: fadeOut 0.5s ease-out forwards;
        }
        
        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-20px);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                grid-template-rows: 40vh 60vh;
            }
            
            .left-section {
                order: 1;
            }
            
            .right-section {
                order: 2;
                padding: 30px 20px;
            }
            
            .title {
                font-size: 2.5rem;
            }
            
            .beranda-btn {
                width: 100%;
                text-align: center;
            }
            
            .header {
                margin-bottom: 40px;
            }
            
            .logo {
                width: 60px;
                height: 60px;
            }
        }
        
        @media (max-width: 480px) {
            .right-section {
                padding: 20px 15px;
            }
            
            .title {
                font-size: 2rem;
                line-height: 1.2;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .beranda-btn {
                padding: 15px 35px;
                font-size: 1rem;
            }
        }
        
        /* Loading overlay */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1a202c, #2d3748);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }
        
        .loading-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }
        
        .loading-content {
            text-align: center;
            color: white;
        }
        
        .loading-logo {
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            background-image: url('../assets/images/logo_orang_ypok-removebg-preview.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            animation: slideUpFadeIn 1.5s ease-out, pulse 2s ease-in-out 1.5s infinite;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .loading-text {
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            animation: slideUpFadeIn 1.5s ease-out 0.5s;
            opacity: 0;
            animation-fill-mode: forwards;
            background: linear-gradient(45deg, #fff, #e2e8f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .loading-subtitle {
            font-size: 1rem;
            font-weight: 300;
            letter-spacing: 1px;
            margin-top: 10px;
            opacity: 0.8;
            animation: slideUpFadeIn 1.5s ease-out 1s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        /* Loading progress bar */
        .loading-progress {
            width: 200px;
            height: 3px;
            background: rgba(255,255,255,0.2);
            border-radius: 3px;
            margin: 30px auto 0;
            overflow: hidden;
            animation: slideUpFadeIn 1.5s ease-out 1.5s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .loading-progress-bar {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #4299e1, #63b3ed);
            border-radius: 3px;
            animation: progressBar 2s ease-out 1.5s forwards;
        }
        
        @keyframes slideUpFadeIn {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes progressBar {
            0% {
                width: 0%;
            }
            100% {
                width: 100%;
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.8;
            }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-content">
            <div class="loading-logo"></div>
            <div class="loading-text">YPOK</div>
            <div class="loading-subtitle">Yayasan Pendidikan Olahraga Karate</div>
            <div class="loading-progress">
                <div class="loading-progress-bar"></div>
            </div>
        </div>
    </div>

    <div class="container page-transition">
        <!-- Left Section - Karate Artistic -->
        <div class="left-section">
            <div class="karate-artistic">
                <div class="karate-silhouette">Karate Indonesia</div>
            </div>
        </div>
        
        <!-- Right Section - Content -->
        <div class="right-section">
            <!-- Header -->
            <div class="header">
                <div class="logo-container">
                    <img src="../assets/images/LOGO YPOK NO BACKGROUND.png" alt="Logo YPOK" class="logo" 
                         onerror="this.style.display='none'; this.parentNode.innerHTML += '<div class=\'logo\' style=\'display:flex;align-items:center;justify-content:center;background:#1a365d;color:white;font-weight:bold;\'>YPOK</div>'">
                </div>
                <button class="menu-btn" onclick="showMenu()">Masuk</button>
            </div>
            
            <!-- Main Content -->
            <div class="main-content">
                <div class="subtitle">Legal Foundation - Karate Sport Education</div>
                <h1 class="title">YAYASAN PENDIDIKAN OLAHRAGA KARATE</h1>
                <a href="beranda.php" class="beranda-btn" onclick="navigateToBeranda(event)">BERANDA</a>
            </div>
        </div>
    </div>

    <script>
        // Hide loading screen after page loads
        window.addEventListener('load', function() {
            // Tunggu sampai semua animasi loading selesai (3 detik total)
            setTimeout(() => {
                document.getElementById('loadingOverlay').classList.add('hidden');
                setTimeout(() => {
                    document.getElementById('loadingOverlay').style.display = 'none';
                }, 500);
            }, 2500); // Increased timing to show full animation
        });

        // Navigate to Beranda with smooth transition
        function navigateToBeranda(event) {
            event.preventDefault();
            
            // Add fade out effect
            const container = document.querySelector('.container');
            container.classList.add('fade-out');
            
            // Show loading overlay
            const loadingOverlay = document.getElementById('loadingOverlay');
            loadingOverlay.style.display = 'flex';
            loadingOverlay.classList.remove('hidden');
            
            // Navigate after animation
            setTimeout(() => {
                window.location.href = 'beranda.php';
            }, 600);
        }

        // Menu function
        function showMenu() {
            const menuItems = [
                {name: 'Beranda', url: 'beranda.php'},
                {name: 'Tentang Kami', url: 'tentang-kami.php'},
                {name: 'Hubungi Kami', url: 'hubungi-kami.php'}
            ];
            
            let menuText = 'Pilih Halaman:\n\n';
            menuItems.forEach((item, index) => {
                menuText += `${index + 1}. ${item.name}\n`;
            });
            
            const choice = prompt(menuText + '\nMasukkan nomor pilihan (1-3):');
            
            if (choice && choice >= 1 && choice <= 3) {
                const selectedItem = menuItems[choice - 1];
                
                // Add transition effect
                const container = document.querySelector('.container');
                container.classList.add('fade-out');
                
                setTimeout(() => {
                    window.location.href = selectedItem.url;
                }, 500);
            }
        }

        // Prevent right-click context menu (optional)
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Add keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                const berandaBtn = document.querySelector('.beranda-btn');
                berandaBtn.click();
            }
        });

        // Console log for debugging
        console.log('YPOK First Page loaded successfully');
        console.log('Navigation: Click BERANDA button to continue to main website');
    </script>
</body>
</html>
