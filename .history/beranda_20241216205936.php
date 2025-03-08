<?php
session_start(); // Memulai session
$loggedIn = isset($_SESSION['user_id']); // Mengecek apakah pengguna sudah login
$username = $loggedIn ? $_SESSION['username'] : ''; // Mendapatkan username pengguna yang login
?>

<?php
require 'database.php'; // Koneksi database

try {
    // Query untuk mengambil semua artikel
    $stmt = $conn->prepare("SELECT * FROM articles ORDER BY tanggal DESC");
    $stmt->execute();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC); // Ambil semua data sebagai array asosiatif
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $articles = []; // Set ke array kosong jika terjadi error
}

                    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>360NEWS</title>
    <link rel="stylesheet" href="beranda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wdth,wght@75,700&family=Public+Sans:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="left-section">
                <div class="logo">
                    <a href="beranda.php">
                        <img src="gambar/LOGOO.png" alt="">
                    </a>
                </div>
                <nav id="navMenu" class="hidden">
                    <div class="labelCari">
                        <input type="text" placeholder="Cari Berita" class="pencarian">
                        <button class="pencarian-btn"><b>Cari</b></button>
                    </div>
                    <a class="kategori" id="beranda" href="beranda.php">BERANDA</a>
                    <a class="kategori" id="bisnis" href="bisnis.php">BISNIS</a>
                    <a class="kategori" id="keuangan" href="keuangan.php">KEUANGAN</a>
                    <a class="kategori" id="olahraga" href="olahraga.php">OLAHRAGA</a>
                    <a class="kategori" id="internasional" href="internasional.php">INTERNASIONAL</a>
                    <a class="kategori" id="budaya" href="budaya.php">BUDAYA</a>
                </nav>
            </div>
            <div class="kanan-nav">
                <div class="ikon-menu" id="menuToggle">
                    <div class="baris"></div>
                    <div class="baris"></div>
                    <div class="baris"></div>
                </div>
                <?php if ($loggedIn): ?>
                    <div class="loginAkun-btn">
                        <a href="tes/profile.php"><img src="gambar/user.png" id="profil-icon" alt=""></a> <!-- Tautan ke profil -->
                        <?php else: ?>
                        <a href="pagelogin.html"><button id="login-btn">MASUK</button></a>
                        <a href="pageDaftar.html"><button id="daftar-btn">DAFTAR</button></a>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </header>

    <main>
        <div class="judul-dan-cari">
        <div class="hotline-judul">
            <h1><b>BERITA</b> UTAMA</h1>
        </div>
        <div class="pencarian-berita-beranda">
            <div class="container-cari">
                <input type="text" class="cari-input" placeholder="Cari Berita...">
            </div>
            <div class="cari-btn">
                <img src="gambar/icons8-search-50 (1).png" alt="">
            </div>
        </div>
    </div>
        <div class="konten">
            <div class="konten-1">
                <div class="layout">
                    <div class="genre">
                        <a href="#"><b>BISNIS</b></a>
                    </div>
                    <div class="subjudul-konten">
                        <p class="judul-hotline"><b>Lorem ipsum dolor sit  Quis accusamus eveniet natus?</b></p>
                        <div class="penulis-tgl">
                            <label for="">5 May 2024</label>
                            <label for="">By <b>Beyazit</b></label>
                        </div>
                        <div class="ringkasan">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est saepe qui culpa rerum necessitatibus nostrum quos quidem reiciendis magni dicta. <b>SELENGKAPNYA</b></p>
                        </div>
                    </div>
                </div>
                <div class="layout">
                    <img class="gambarHotline" src="gambar/websiteplanet-dummy-820X500 (1).png" alt="Bisnis">
                </div>
                <div class="layout">
                    <div class="trending-layout">
                        <h3>#TRENDING</h3>
                        <div class="trending-card">
                            <div class="nomor-genre">
                                <label for="">1 · </label>
                                <label for="">Musik</label>
                            </div>
                            <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                        <div class="trending-card">
                            <div class="nomor-genre">
                                <label for="">2 · </label>
                                <label for="">Bisnis</label>
                            </div>
                            <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                        <div class="trending-card">
                            <div class="nomor-genre">
                                <label for="">3 · </label>
                                <label for="">Olahraga</label>
                            </div>
                            <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                        <div class="trending-card">
                            <div class="nomor-genre">
                                <label for="">4 · </label>
                                <label for="">Musik</label>
                            </div>
                            <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                        <div class="trending-card">
                            <div class="nomor-genre">
                                <label for="">5 · </label>
                                <label for="">Teknologi</label>
                            </div>
                            <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                        <div class="trending-card">
                            <div class="semua-trending">
                                <a href="#"><b>SEMUA TRENDING...</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="konten-2">
                         <?php foreach ($articles as $article): ?>
                <div class="panel">
                    <a href="tes/artikel.php?id=<?= $article['id']; ?>">
                        <img src="assets/<?= htmlspecialchars($article['gambar']); ?>" id="gambar-konten2" alt="<?= htmlspecialchars($article['judul']); ?>">
                    </a>
                    <a href="tes/artikel.php?id=<?= $article['id']; ?>" class="judul-link">
                        <p class="subjudul-konten-2"><b><?= htmlspecialchars($article['judul']); ?></b></p>
                    </a>
                    <p class="ringkasan-konten-2"><?= htmlspecialchars($article['konten']); ?></p>
                    <div class="penulis-tgl-konten">
                        <label><?= date('d M Y', strtotime($article['tanggal'])); ?></label>
                        <label>by <b><?= htmlspecialchars($article['penulis']); ?></b></label>
                    </div>
                </div>
                 <?php endforeach; ?>
            </div>

        </div>
        <div class="konten-editor-pick">
        <h1><b>TERPO</b>PULER</h1>
        <div class="kontainer">
            <div class="gambar-kiri">
                <div class="card">
                    <img src="gambar/websiteplanet-dummy-820X500 (2).png" alt="" class="gambar-sisi">
                    <div class="card-konten">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <div class="penulis-tgl-konten">
                            <label for="">5 May 2024</label>
                            <label for="">by <b>Smith</b></label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="gambar/websiteplanet-dummy-800X500.png" alt="" class="gambar-sisi">
                    <div class="card-konten">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <div class="penulis-tgl-konten">
                            <label for="">5 May 2024</label>
                            <label for="">by <b>Adam</b></label>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="main-card">
                <img src="gambar/websiteplanet-dummy-820X500 (3).png" alt="">
                <div class="main-card-konten">
                    <div class="penulis-tgl-konten">
                        <label for="">5 May 2024</label>
                        <label for="">by <b>Louyi</b></label>
                    </div>
                        <h2 class="subjudul-main-konten"><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis cupiditate officia velit!</b></h2>
                        <p class="ringkasan-main-konten">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quia ipsam, Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum Lorem ipsum dolor sit. porro quo numquam consequuntur dolores voluptatem error ex odio. totam iste fugiat voluptate excepturi. <b>SELENGKAPNYA</b></p>
                    </div>
                </div>
                <div class="gambar-kanan">
                    <div class="card">
                        <img src="gambar/websiteplanet-dummy-800X400 (2).png" alt="" class="gambar-sisi">
                        <div class="card-konten">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <div class="penulis-tgl-konten">
                                <label for="">5 May 2024</label>
                                <label for="">by <b>Miya</b></label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="gambar/websiteplanet-dummy-800X400 (3).png" alt="" class="gambar-sisi">
                        <div class="card-konten">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <div class="penulis-tgl-konten">
                                <label for="">5 May 2024</label>
                                <label for="">by <b>David</b></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="story-war">
            <div class="kontainer-story">
                <div class="konten-kiri">
                    <h1><b>STORY:</b> OTOMOTIF</h1>
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestiae eum officia adipisci.</b></p>
                    <div class="tgl-penulis-story">
                        <div class="nama-jabatan">
                            <p class="nama-penulis">Sade Gui Ucar</p>
                            <p class="jabatan">Diplomat</p>
                        </div>
                        <p class="tgl-penulis">5 May 2024</p>
                    </div>
                    <p class="ringkasan-story-konten">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil lorem19 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit blanditiis impedit vitae voluptatum voluptate cupiditate itaque Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit. voluptatibus quae ipsum illum repellat est reiciendis, molestiae corporis consectetur sequi temporibus reprehenderit dolorem. voluptatem perferendis molestias, fuga, unde minus iure modi repudiandae harum, nulla voluptate eaque! Beatae, lorem18 quo eum. <b>SELENGKAPNYA</b></p>
                </div>
                <div class="konten-kanan">
                    <img src="gambar/Yellow Ferrari F8 On Slate Brick Road  3D Sublimation 20oz Skinny Straight Tumblr Wrap  300 DPI PNG Commercial Use  Supercar Enthusiast Gift.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="semua-class">
            <h1><b>></b> LAINNYA</h1>
            <div class="grid-conten">
                <div class="grid-card-konten">
                    <img src="gambar/16-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/84-367x267 (1).jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/28-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/29-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/49-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/64-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/7-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
                <div class="grid-card-konten">
                    <img src="gambar/85-367x267.jpg" alt="">
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta.</b></p>
                </div>
            </div>
        </div>
        <div class="semua-berita-btn">
            <div class="card-btn-semua-berita">
                <button>SEMUA BERITA</button>
            </div>
        </div>

    </main>

    <footer>
        <div class="konten-footer">
            <div class="bagian-kiri">
                <img src="gambar/LOGOO.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis officiis ipsa similique vero commodi voluptate non provident cupiditate laboriosam.</p>
            </div>
            <div class="footer-tengah">
                <p>KATEGORI</p>
                <div class="f-tengah">
                    <a class="kategori-ftr" href="#">POLITIK</a>
                    <a class="kategori-ftr" href="#">BISNIS</a>
                    <a class="kategori-ftr" href="#">KEUANGAN</a>
                    <a class="kategori-ftr" href="#">OLAHRAGA</a>
                    <a class="kategori-ftr" href="#">INTERNASIONAL</a>
                    <a class="kategori-ftr" href="#">BUDAYA</a>
                </div>
            </div>
            <div class="bagian-kanan">
                <p>TENTANG KAMI</p>
                <div class="social-media">
                    <a href="#">@360news.com</a>
                    <a href="#">088201012020</a>
                    <div class="gambar-sosmed">
                        <a href="#">
                            <img alt="Facebook logo" height="24" src="gambar/logos_facebook.png" width="24"/>
                           </a>
                           <a href="#">
                            <img alt="Github logo" height="24" src="gambar/download 111(1).png" width="24"/>
                           </a>
                           <a href="#">
                            <img alt="X logo" height="24" src="gambar/download 22(1).png" width="24"/>
                           </a>
                           <a href="#">
                            <img alt="Instagram logo" height="24" src="gambar/skill-icons_instagram.png" width="24"/>
                           </a>
                    </div>
                </div>     
            </div>
        </div>
    </footer>        
    <script src="nav-mobile.js"></script>
</body>
</html>