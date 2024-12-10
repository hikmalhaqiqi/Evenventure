<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nama_event'] = $_POST['nama_event'];
    $_SESSION['tgl_mulai'] = $_POST['tgl_mulai'];
    $_SESSION['tgl_selesai'] = $_POST['tgl_selesai'];
    $_SESSION['jam'] = $_POST['jam'];
    $_SESSION['kategori'] = $_POST['kategori'];
    $_SESSION['lokasi'] = $_POST['lokasi'];
    $_SESSION['alamat_vanue'] = $_POST['alamat_vanue'];
    header('Location: pembuatanEvent2.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Event</title>
    <link rel="stylesheet" href="Assets/styles/halamanUtama.css">
    <link rel="stylesheet" href="Assets/styles/pembuatanEvent.css?v=<?php echo time(); ?>">
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
                <li class="search"><p>Cari Vendor / Produk di sini</p> <img src="Assets/images/icon_search_nav.png" alt="search"></li>
                <li class="chat"><a href="#chat"><img src="Assets/images/icon_chat_nav.png" alt="chat"></a></li>
                <li class="notif"><a href="#notif"><img src="Assets/images/icon_notif_nav.png" alt="notif"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="container-form">
                <h3>Buat Event Baru</h3>
                <h4>Informasi Dasar Event</h4>
                <form method="POST">
                    <div class="form-pembuatan-event1">
                        <div class="form-left">
                            <label for="" class="label-pembuatan1">Nama Event</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="Masukkan nama event " name = "nama_event" required><br>
                            <label for="" class="label-pembuatan1">Tanggal Mulai</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="dd/mm/yyyy" name = "tgl_mulai" required><br>
                            <label for="" class="label-pembuatan1">Tanggal Selesai</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="dd/mm/yyyy" name = "tgl_selesai" required><br>
                            <label for="" class="label-pembuatan1">Jam Operasional</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="Contoh: 10.00- 22.00" name = "jam" required><br>
                            <label for="" class="label-pembuatan1">Kategori Event</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="Masukkan kategori event" name = "kategori" required><br>
                        </div>
                        <div class="form-right">
                            <label for="" class="label-pembuatan1">Lokasi Event</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="Nama venue/lokasi" name = "lokasi" required><br>
                            <label for="" class="label-pembuatan1">Alamat Lengkap</label><br>
                            <input type="text" class="input-pembuatan1" placeholder="Masukkan alamat lengkap venue" name = "alamat_vanue" required><br>
                            
                        </div>
                    </div>
                    <button type="submit" class="next-to-pembuatan2">Selanjutnya</button>
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