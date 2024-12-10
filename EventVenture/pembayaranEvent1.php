<?php
session_start();
if (isset($_GET['id']) && isset($_GET['nama']) && isset($_GET['tanggal']) && isset($_GET['harga'])) {
    $id = intval($_GET['id']);
    $nama = htmlspecialchars($_GET['nama']); // Untuk keamanan
    $tanggal = htmlspecialchars($_GET['tanggal']);
    $harga = htmlspecialchars($_GET['harga']);
} else {
    die("Event tidak ditemukan.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['pembayaran'] = $_POST['pembayaran'];
    $_SESSION['id'] = $id;
    $_SESSION['nama'] = $nama;
    $_SESSION['tanggal'] = $tanggal;


        // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'db_eventventure');
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $nama_bisnis = $_SESSION['nama_bisnis'];
    $kategori_bisnis = $_SESSION['kategori_bisnis'];
    $deskripsi_bisnis = $_SESSION['deskripsi_bisnis'];
    $nama_lengkap = $_SESSION['nama_lengkap'];
    $telephone = $_SESSION['telephone'];
    $email = $_SESSION['email'];
    $pembayaran = $_SESSION['pembayaran'];
    $kategori = $_SESSION['harga'];

    $stmt = $conn->prepare("INSERT INTO pesanan (nama_bisnis, kategori_bisnis, deskripsi_bisnis, nama, telephone, email, pembayaran, harga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssi", $nama_bisnis, $kategori_bisnis, $deskripsi_bisnis, $nama_lengkap, $telephone, $email, $pembayaran, $harga);

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
    header('Location: pembayaranEvent2.php');

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
    <link rel="stylesheet" href="Assets/styles/pembayaranEvent.css?v=<?php echo time(); ?>">
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
                <p class="form-title">Metode Pembayaran</p>
                <form method="POST">
                    <div class="form-pembayaran">
                        <div class="bayar1">
                            <input type="radio" id="transfer" name="pembayaran" value="transfer" class="input-pembayaran1">
                            <label for="transfer" class="">
                                <p class="label-pembayaran1-1">
                                    <span class="sub-radio">Transfer Bank</span> <br>BCA, Mandiri, BNI
                                </p>
                            </label>
                        </div>

                        <hr>

                        <div class="bayar1">
                            <input type="radio" id="va" name="pembayaran" value="virtual_account" class="input-pembayaran1">
                            <label for="va" class="">
                                <p class="label-pembayaran1-2">
                                    <span class="sub-radio">Virtual Account</span> <br>Pembayaran melalui VA Bank
                                </p>
                            </label>
                        </div>

                        <hr>

                        <div class="bayar1">
                            <input type="radio" id="qris" name="pembayaran" value="qris" class="input-pembayaran1">
                            <label for="qris" class="">
                                <p class="label-pembayaran1-3">
                                    <span class="sub-radio">QRIS</span> <br>Scan QR code untuk pembayaran
                                </p>
                            </label>
                        </div>


                    </div>
                    <div class="total-pembayaran">
                        <p>Total Pembayaran</p>
                        <p class="total-bayar"><?php echo $harga ?></p>
                    </div>

                    <button type="submit" class="next-to-pembayaran2" class="tetep">Bayar</button>
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