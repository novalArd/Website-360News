# 🌐 Website-360News

**Website-360News** adalah aplikasi web berita sederhana dan interaktif yang dikembangkan menggunakan PHP, HTML, CSS, dan JavaScript tanpa framework. Website ini menampilkan berita dari berbagai kategori dalam tampilan yang responsif dan mudah digunakan.

---

## 🔍 Fitur Utama

- Tampilan halaman utama dengan berbagai kategori berita  
- Navigasi sederhana dan user-friendly  
- Sistem pengelolaan berita menggunakan file PHP 
- Struktur kode bersih tanpa menggunakan framework eksternal  

---

## 🛠️ Teknologi yang Digunakan

- **Frontend**: HTML5, CSS3, JavaScript (murni)  
- **Backend**: PHP  
- **Database**: *MySQL*  
- **Hosting**: Dapat dijalankan di server lokal (XAMPP/Laragon) atau server hosting berbasis PHP  

---

## 🚀 Cara Instalasi

1. **Clone repositori:**
   ```bash
   git clone https://github.com/novalArd/Website-360News.git
   ```

2. **Pindahkan folder ke direktori server lokal Anda**  
   Contoh untuk XAMPP:
   - Ekstrak atau salin folder ke dalam `htdocs` (Biasanya di : Local Disk(C) > xampp > htdocs)
   - Jalankan XAMPP Control Panel (Start bagian 'Apache' dan 'MySQL')
  
   - Pastikan tidak ada port yang bertabrakan (default port 8080 80 untuk Apache)

3. **Akses di browser:**
   ```
   http://localhost/Website-360News/
   ```

---

## 📁 Struktur Folder

```
Website-360News/
├── Admin/              ← Halaman & pengelolaan admin (CRUD artikel, verifikasi, profil)
├── Penulis/            ← Modul untuk penulis (artikel, statistik, upload gambar)
├── pengguna/           ← Halaman profil pengguna biasa
├── Profile/            ← Alternatif tampilan profil/statistik (versi HTML)
├── Kategori-Bisnis/    ← Template HTML per kategori berita (tanpa PHP)
├── Kategori-Page/      ← Halaman berita per kategori (dengan PHP)
├── assets/             ← Gambar ilustrasi, ikon, dan file statis umum
├── gambar/             ← Kumpulan gambar khusus, ikon, dan ilustrasi
├── .vscode/            ← Konfigurasi workspace VSCode
├── beranda.php         ← Halaman utama situs
├── beranda.css         ← Gaya umum halaman
├── news_management.sql ← Database (Silahkan lihat bagian akun untuk lanjut login)
└── README.md           ← Dokumentasi proyek

```

---

## 📄 Lisensi

Repositori ini menggunakan lisensi bebas.  
Silakan gunakan, modifikasi, dan distribusikan kembali dengan tetap mencantumkan atribusi.

---

## 🙋 Tentang Pengembang

**Noval Ardiansyah**  
GitHub: [https://github.com/novalArd](https://github.com/novalArd)

---

## ✅ Kontribusi

Kontribusi sangat terbuka!  
Jika Anda ingin menambahkan fitur, memperbaiki bug, atau menyempurnakan tampilan:
- Fork repositori  
- Buat branch baru  
- Ajukan pull request ✨

---

