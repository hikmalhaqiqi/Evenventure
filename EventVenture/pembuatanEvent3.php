<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipe_booth = $_POST['tipe_booth'];
    $ukuran_booth = $_POST['ukuran_booth'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];

    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'db_eventventure');
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari session
    $nama_event = $_SESSION['nama_event'];
    $tgl_mulai = $_SESSION['tgl_mulai'];
    $tgl_selesai = $_SESSION['tgl_selesai'];
    $jam = $_SESSION['jam'];
    $kategori = $_SESSION['kategori'];
    $lokasi = $_SESSION['lokasi'];
    $alamat_vanue = $_SESSION['alamat_vanue'];
    $deskripsi_event = $_SESSION['deskripsi_event'];
    
    // Cek apakah poster ada di session
    if (!isset($_SESSION['poster'])) {
        die("Poster belum di-upload.");
    }
    $poster = $_SESSION['poster'];

    $stmt = $conn->prepare("INSERT INTO event (nama_event, tgl_mulai, tgl_selesai, jam, kategori, lokasi, alamat_vanue, deskripsi_event, poster, tipe_booth, ukuran_booth, harga, fasilitas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssis", $nama_event, $tgl_mulai, $tgl_selesai, $jam, $kategori, $lokasi, $alamat_vanue, $deskripsi_event, $poster, $tipe_booth, $ukuran_booth, $harga, $fasilitas);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();

    // Menghancurkan session setelah eksekusi
    session_destroy();
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
                <h4>Tipe Booth</h4>
                <form method="POST">
                    <div class="form-pembuatan-event3">
                        <div class="form-left">
                            <label for="" class="label-pembuatan3">Tipe Booth</label><br>
                            <input type="text" class="input-pembuatan4" placeholder="Contoh: Premium booth" name = "tipe_booth" required><br>
                            <label for="" class="label-pembuatan3">Ukuran Booth</label><br>
                            <input type="text" class="input-pembuatan4" placeholder="Contoh: 3x3 meter" name = "ukuran_booth" required><br>
                            <label for="" class="label-pembuatan3">Harga Booth</label><br>
                            <input type="text" class="input-pembuatan4" placeholder="Masukkan harga" name = "harga" required><br>
                            <label for="" class="label-pembuatan3">Fasilitas booth</label><br>
                            <input type="text" class="input-pembuatan4" placeholder="Contoh: 1 meja, 2 kursi, listrik, dsb" name = "fasilitas" required><br>
                        </div>
                    </div>
                    <button type="submit" class="next-to-pembuatan4">Simpan</button>
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