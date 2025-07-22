# 🌐 Website-360News

Selamat datang di repository **Website 360News**!
Proyek ini adalah aplikasi web sederhana untuk menampilkan berita. Berikut adalah langkah-langkah untuk mengatur dan menjalankan proyek ini di komputer lokal Anda.

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
├── Admin/                    ← Halaman & pengelolaan admin (CRUD artikel, verifikasi, profil)
├── Penulis/                  ← Modul untuk penulis (artikel, statistik, upload gambar)
├── pengguna/                 ← Halaman profil pengguna biasa
├── Profile/                  ← Alternatif tampilan profil/statistik
├── Kategori_HTML_Version/    ← Template HTML per kategori berita (tanpa PHP)
├── Kategori-Page/            ← Halaman berita per kategori (dengan PHP)
├── Login-daftar              ← Page login, daftar, lupa password, dll
├── assets/                   ← Gambar ilustrasi, ikon, dan file statis umum
├── gambar/                   ← Kumpulan gambar dari artikel, ikon, dan ilustrasi
├── .vscode/                  ← Konfigurasi workspace VSCode
├── beranda.php               ← Halaman utama situs
├── beranda.css               ← Gaya halaman Beranda
├── database.php              ← Koneksi Database
├── news_management.sql       ← Database (Silahkan lihat bagian akun untuk lanjut login)
├── README.md                 ← Dokumentasi proyek
└── temp/                     ← File sementara (hanya sebagai tempat file yang akan dihapus)

```

---

## 📄 Lisensi

Repositori ini menggunakan lisensi bebas.  
Silakan gunakan, modifikasi, dan distribusikan kembali dengan tetap mencantumkan atribusi.

---

## 🙋 Tentang Pengembang

**Noval Ardiansyah**  
- GitHub: https://github.com/novalArd
- Email: novalardiansyah2820@gmail.com

**Agustino Edward Hartono**
- Github: https://github.com/Edho23
- Email: agustinoedwardhartono@gmail.com

---

## ✅ Kontribusi

Kontribusi sangat terbuka!  
Jika Anda ingin menambahkan fitur, memperbaiki bug, atau menyempurnakan tampilan:
- Fork repositori  
- Buat branch baru  
- Ajukan pull request ✨

---
