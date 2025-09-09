# 🥋 YPOK - Yayasan Pendidikan Olahraga Karate

[![Website](https://img.shields.io/badge/Website-Live-green)](http://localhost:8000)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-yellow)](LICENSE)

> Website resmi YPOK (Yayasan Pendidikan Olahraga Karate) Indonesia - Platform digital untuk informasi, edukasi, dan komunikasi komunitas karate nasional.

## 📋 Deskripsi

YPOK adalah website resmi Yayasan Pendidikan Olahraga Karate yang menyediakan informasi lengkap tentang:
- Profil organisasi dan sejarah
- Program pendidikan karate
- Persebaran dojo di seluruh Indonesia
- Berita dan artikel karate
- Informasi kontak dan komunikasi

## ✨ Fitur Utama

### 🎯 **Landing Page (First Page)**
- Loading screen dengan animasi logo YPOK yang bergerak dari bawah ke atas
- Design split-screen dengan gambar karate artistik
- Navigasi smooth transition ke halaman utama
- Responsive design untuk semua perangkat

### 🏠 **Halaman Beranda**
- Hero section dengan visi dan misi
- Cards layout dengan glassmorphism effect
- Informasi profil organisasi
- Social media integration (Instagram & WhatsApp)

### 📖 **Halaman Konten**
- **Tentang Kami**: Sejarah, visi, misi, dan profil lengkap
- **Persebaran**: Peta dojo YPOK di seluruh Indonesia
- **Berita**: Artikel dan update terkini dunia karate
- **Hubungi Kami**: Form kontak dan informasi komunikasi

### 🎨 **Design System**
- Modern glassmorphism UI/UX
- Consistent color palette (Blue & Red theme)
- Smooth animations dan transitions
- Mobile-first responsive design
- Clean typography hierarchy

## 🚀 Teknologi

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP 8.2+
- **Server**: Apache/XAMPP, Nginx, atau PHP built-in server
- **Database**: File-based (no database required)
- **Icons**: SVG dan Font Icons
- **Deployment**: Vercel, Netlify, shared hosting

## 📁 Struktur Proyek

```
web-ypok/
├── assets/
│   └── images/              # Gambar dan logo
│       ├── first page .jpg
│       ├── LOGO YPOK NO BACKGROUND.png
│       ├── logo_orang_ypok-removebg-preview.png
│       └── ...
├── dashboard/               # Halaman utama website
│   ├── firstpage.php       # Landing page dengan loading screen
│   ├── beranda.php         # Homepage utama
│   ├── tentang-kami.php    # Halaman profil
│   ├── persebaran.php      # Peta persebaran dojo
│   ├── berita.php          # Halaman berita
│   ├── hubungi-kami.php    # Halaman kontak
│   └── ...
├── includes/               # Components dan utilities
│   ├── header.php
│   ├── footer.php
│   └── ...
├── index.php              # Entry point (redirect ke firstpage)
└── README.md            # Documentation
```

## 🛠️ Instalasi & Setup

### 1. **Clone Repository**
```bash
git clone https://github.com/rwahyud/ypoksoon.git
cd ypoksoon
```

### 2. **Local Development**

#### Menggunakan XAMPP:
```bash
# Copy project ke htdocs
cp -r ypoksoon /xampp/htdocs/web-ypok

# Start Apache di XAMPP Control Panel
# Akses: http://localhost/web-ypok
```

#### Menggunakan PHP Built-in Server:
```bash
cd web-ypok
php -S localhost:8000
# Akses: http://localhost:8000
```

### 3. **Production Deployment**

#### Vercel (Recommended):
```bash
# Install Vercel CLI
npm i -g vercel

# Deploy
vercel --prod
```

#### Shared Hosting:
1. Upload semua file ke public_html/
2. Pastikan PHP 7.4+ tersedia
3. Set permissions file sesuai hosting requirements

## 🎨 Kustomisasi

### **Mengubah Logo**
```php
// File: dashboard/firstpage.php
// Ganti path logo di loading screen:
background-image: url('../assets/images/logo_anda.png');

// File: includes/header.php  
// Ganti logo di header:
<img src="../assets/images/logo_anda.png" alt="Logo">
```

### **Mengubah Warna Theme**
```css
/* File: dashboard/firstpage.php atau file CSS */
:root {
  --primary-color: #1976d2;    /* Biru utama */
  --secondary-color: #e53935;  /* Merah aksen */
  --background-color: #f8f9fa; /* Background */
}
```

### **Social Media Links**
```php
// File: includes/footer.php
// Update link Instagram dan WhatsApp:
<a href="https://instagram.com/username_anda">
<a href="https://wa.me/nomor_whatsapp_anda">
```

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px  
- **Desktop**: > 1024px

## 🔧 Troubleshooting

### **Gambar Tidak Muncul**
```bash
# Periksa path gambar
ls -la assets/images/

# Pastikan permissions benar
chmod 644 assets/images/*
```

### **Loading Screen Tidak Berfungsi**
```javascript
// Periksa console browser untuk error JavaScript
// Pastikan file gambar logo ada di assets/images/
```

### **PHP Errors**
```bash
# Enable error reporting di development
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

## 🚀 Performance

- **Loading Time**: < 2 detik
- **Image Optimization**: WebP format (opsional)
- **CSS/JS Minification**: Untuk production
- **Caching**: .htaccess cache headers
- **Mobile Score**: 95+ (Google PageSpeed)

## 🤝 Kontribusi

1. Fork repository ini
2. Buat branch feature (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📞 Kontak & Support

- **Website**: [YPOK Official](http://localhost:8000)
- **Instagram**: [@ypoknasional](https://instagram.com/ypoknasional)
- **WhatsApp**: [+62 851-7313-2266](https://wa.me/6285173132266)
- **Email**: info@ypok.or.id

## 📜 Lisensi

Distributed under the MIT License. See `LICENSE` for more information.

## 🙏 Acknowledgments

- **YPOK Indonesia** - Organisasi Karate Nasional
- **Bootstrap Icons** - Icon library
- **Google Fonts** - Typography
- **Unsplash** - Stock photos (jika digunakan)

## 📈 Roadmap

- [ ] **v2.0**: Admin dashboard untuk update konten
- [ ] **v2.1**: Member registration system
- [ ] **v2.2**: Event booking system
- [ ] **v2.3**: Mobile app integration
- [ ] **v2.4**: Multi-language support

---

<div align="center">

**Made with ❤️ for Indonesian Karate Community**

[🥋 Visit Website](http://localhost:8000) • [📱 Download App](#) • [💬 Join Community](https://wa.me/6285173132266)

</div>

---

> **Note**: Website ini adalah platform resmi YPOK untuk menyebarkan informasi dan edukasi karate di Indonesia. Untuk pertanyaan teknis atau bantuan development, silakan hubungi tim developer.
