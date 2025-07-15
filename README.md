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
Email: novalardiansyah2820@gmail.com

---

## ✅ Kontribusi

Kontribusi sangat terbuka!  
Jika Anda ingin menambahkan fitur, memperbaiki bug, atau menyempurnakan tampilan:
- Fork repositori  
- Buat branch baru  
- Ajukan pull request ✨

---

## 📌 Catatan Tambahan
Jika file database **news_management.sql** tidak dapat digunakan atau terjadi kendala saat import, Anda dapat menggunakan file alternatif berikut:

🔗 Link Google Drive:
https://drive.google.com/drive/folders/1fWHUJfy497Yj_LsUZcknm5_eIs_67aU8?usp=sharing

🔧 Langkah-langkah:
- Unduh file database dari link di atas.

- Salin file tersebut ke dalam folder utama proyek Website-360News.

- Gunakan file ini untuk melakukan import ke database melalui phpMyAdmin atau tool serupa.
