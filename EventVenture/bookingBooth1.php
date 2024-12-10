<?php
session_start();
if (isset($_GET['id']) && isset($_GET['nama']) && isset($_GET['tanggal'])) {
    $id = intval($_GET['id']);
    $nama = htmlspecialchars($_GET['nama']); // Untuk keamanan
    $tanggal = htmlspecialchars($_GET['tanggal']);
} else {
    die("Event tidak ditemukan.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nama_bisnis'] = $_POST['nama_bisnis'];
    $_SESSION['kategori_bisnis'] = $_POST['kategori_bisnis'];
    $_SESSION['deskripsi_bisnis'] = $_POST['deskripsi_bisnis'];
    $_SESSION['id'] = $id;
    $_SESSION['nama'] = $nama;
    $_SESSION['tanggal'] = $tanggal;
    header('Location: bookingBooth2.php?id=' . urlencode($id) . '&nama=' . urlencode($nama) . '&tanggal=' . urlencode($tanggal));
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Booth</title>
    <link rel="stylesheet" href="Assets/styles/halamanUtama.css">
    <link rel="stylesheet" href="Assets/styles/bookingEvent.css?v=<?php echo time(); ?>">
</head>

<style>
    .tetep {
        color: white;
        text-decoration: none;
    }

    .tetep:hover {
        text-decoration: none;
        color: #f0f0f0;
    }
</style>

<body>
    <header>
        <nav class="navbar">
            <ul class="list">
                <li class="logo"><img src="Assets/images/logo.png" alt="logo"></li>
                <li class="search">
                    <p>Cari Vendor / Produk di sini</p> <img src="Assets/images/icon_search_nav.png" alt="search">
                </li>
                <li class="chat"><a href="#chat"><img src="Assets/images/icon_chat_nav.png" alt="chat"></a></li>
                <li class="notif"><a href="#notif"><img src="Assets/images/icon_notif_nav.png" alt="notif"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="title-section-detail">
                <a href=""><img src="Assets/images/cari_event/icon_back_cari_event.png" alt="back"></a>
                <h4><?php echo $nama; ?></h4>
            </div>
            <div class="container-form">
                <p><img src="Assets/images/cari_event/icon_calendar_cari_event.png" alt="cld"><span class="booking-date"><?php echo $tanggal; ?></span></p>
                <p class="form-title">Data Tenant</p>
                <form method="POST">
                    <label for="" class="label-booking1">Nama Bisnis</label><br>
                    <input type="text" class="input-booking1" placeholder="Masukkan nama bisnis" name="nama_bisnis"><br>
                    <label for="" class="label-booking1">Kategori Bisnis</label><br>
                    <input type="text" class="input-booking1" placeholder="Masukkan kategori bisnis" name="kategori_bisnis"><br>
                    <label for="" class="label-booking1">Deskripsi Bisnis</label><br>
                    <input type="text" class="input-booking1" placeholder="Jelaskan tentang bisnis Anda" name="deskripsi_bisnis"><br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="nama" value="<?php echo $nama ?>">
                    <input type="hidden" name="tanggal" value="<?php echo $tanggal ?>">
                    <button type="submit" class="next-to-booking2" class="tetep">Selanjutnya</button>
                </form>
            </div>
        </section>


    </main>
    <footer>
        <div class="container-footer">
            <div class="container-card-footer">
                <div class="card-footer1">
                    <img src="Assets/images/logo.png" alt="logo">
                    <p>merupakan platform pencarian vendor di Indonesia.</p>
                </div>
                <div class="card-footer2">
                    <h6>Link Penting</h6>
                    <ul>
                        <li><a href="#Layanan">Layanan</a></li>
                        <li><a href="#Tentang">Tentang Kami</a></li>
                        <li><a href="#Kontak">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="card-footer3">
                    <h6>Kontak Kami</h6>
                    <ul>
                        <li><a href="">Telp: 0274-000000</a></li>
                        <li><a href="">Email: eventventure@gmail.com</a></li>
                        <li><a href="">Alamat: Babarsari No.205</a></li>
                    </ul>
                </div>
            </div>

            <div class="line">

            </div>

            <div class="foot-license">
                <ul class="foot-list">
                    <li class="text-license">&copy; 2024 EVENTVENTURE.COM</li>
                    <li class="icon-license"><a href=""><img src="Assets/images/icon_linkedin_footer.png" alt=""></a></li>
                    <li class="icon-license"><a href=""><img src="Assets/images/icon_facebook_footer.png" alt=""></a></li>
                    <li class="icon-license"><a href=""><img src="Assets/images/icon_instagram_footer.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>