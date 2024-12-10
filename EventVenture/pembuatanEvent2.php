<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['deskripsi_event'] = $_POST['deskripsi_event'];

    // Pastikan file poster berhasil diupload
    if (isset($_FILES['poster']) && $_FILES['poster']['error'] === 0) {
        $target_dir = "../Assets/images/foto/"; // Pastikan path sudah benar
        $target_file = $target_dir . basename($_FILES['poster']['name']);
        
        if (move_uploaded_file($_FILES['poster']['tmp_name'], $target_file)) {
            $_SESSION['poster'] = $target_file;
            echo "Poster berhasil di-upload.";
        } else {
            echo "Gagal meng-upload poster.";
        }
    } else {
        echo "Tidak ada file yang di-upload.";
    }
    $_SESSION['poster'] = $_POST['poster'];
    
    header('Location: pembuatanEvent3.php');
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
                <li class="register"><p>Daftar / Masuk</p></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="container-form">
                <h3>Buat Event Baru</h3>
                <h4>Detail Event</h4>
                <form method="POST">
                    <div class="form-pembuatan-event2">
                        <div class="form-left">
                            <label for="" class="label-pembuatan2">Deskripsi Event</label><br>
                            <input type="text" class="input-pembuatan2" placeholder="Jelaskan detail event anda" name="deskripsi_event" required><br>
                            <label for="" class="label-pembuatan2">Upload Poster Event</label><br>
                            <input type="file" name = "poster" accept="image/*" class="input-pembuatan3" placeholder="Drag & drop file atau klik untuk upload" required><br>
                        </div>
                    </div>
                    <button type ="submit" class="next-to-pembuatan3">Selanjutnya</button>
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