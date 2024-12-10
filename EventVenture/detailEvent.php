<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Event</title>
    <link rel="stylesheet" href="Assets/styles/halamanUtama.css">
    <link rel="stylesheet" href="Assets/styles/cariEvent.css?v=<?php echo time(); ?>">
</head>

<style>
    .tetep {
        color: white;
        text-decoration: none;
    }

    .tetep:hover {
        text-decoration: white;
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
                <li class="register">
                    <p>Daftar / Masuk</p>
                </li>
            </ul>
        </nav>
    </header>
    <main>








        <?php
        // Koneksi ke database
        $conn = new mysqli('localhost', 'root', '', 'db_eventventure');
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Cek apakah parameter `id` atau `nama_event` ada di URL
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']); // Pastikan hanya angka untuk keamanan
            $query = "SELECT * FROM event WHERE id = $id";
        } elseif (isset($_GET['nama_event'])) {
            $nama_event = $conn->real_escape_string($_GET['nama_event']);
            $query = "SELECT * FROM event WHERE nama_event = '$nama_event'";
        } else {
            die("Event tidak ditemukan.");
        }

        $result = $conn->query($query);

        // Cek apakah data ditemukan
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Data event
            $nama_event = htmlspecialchars($row['nama_event']);
            $tanggal_event = htmlspecialchars($row['tgl_mulai']);
            $lokasi_event = htmlspecialchars($row['lokasi']);
            $jam_event = htmlspecialchars($row['jam']);
            $deskripsi_event = htmlspecialchars($row['deskripsi_event']);
            //$gambar_event = htmlspecialchars($row['gambar_event']);
        } else {
            die("Event tidak ditemukan.");
        }

        $conn->close();
        ?>

        <!-- HTML untuk Halaman Detail Event -->
        <section class="section-detail">
            <div class="container-section-detail">
                <div class="title-section-detail">
                    <a href=""><img src="Assets/images/cari_event/icon_back_cari_event.png" alt="back"></a>
                    <h3><?php echo $nama_event; ?></h3>
                </div>
                <div class="container-card-section-detail">
                    <figure class="card-section-detail">
                        <img src="Assets/images/gambarcontoh.JPG" alt="">
                        <figcaption class="text-card-detail">
                            <p class="p-detail-det"><img src="Assets/images/cari_event/icon_calendar_cari_event.png" alt=""><?php echo $tanggal_event; ?></p>
                            <p class="p-detail-det"><img src="Assets/images/cari_event/icon_location_cari_event.png" alt=""><?php echo $lokasi_event; ?></p>
                            <p class="p-detail-det"><img src="Assets/images/cari_event/icon-clock-detail.png" alt=""><?php echo $jam_event; ?></p>
                            <p class="sub-tentang">Tentang Event</p>
                            <p class="p-detail-tentang"><?php echo $deskripsi_event; ?></p>
                            <div class="text-anchor-detail">
                                <p>
                                    <a href="bookingBooth1.php?id=<?php echo $id; ?>&nama=<?php echo urlencode($nama_event); ?>&tanggal=<?php echo urlencode($tanggal_event); ?>" class="tetep">Booking</a>
                                </p>

                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>















        <section class="section-detail">
            <div class="container-section-detail">
                <div class="title-section-detail">
                    <a href=""><img src="Assets/images/cari_event/icon_back_cari_event.png" alt="back"></a>
                    <h3>YOGYAKARTA MUSIC FEST 2024 : NEW YEAR CELEBRATE!</h3>
                </div>
                <div class="container-card-section-detail">
                    <figure class="card-section-detail">
                        <img src="Assets/images/cari_event/first_image_cari_event.png" alt="gambar">
                        <figcaption class="text-card-detail">
                            <p class="p-detail-det"><img src="Assets/images/cari_event/icon_calendar_cari_event.png" alt="">31 Des 2024</p>
                            <p class="p-detail-det"><img src="Assets/images/cari_event/icon_location_cari_event.png" alt="">Yogyakarta</p>
                            <p class="p-detail-det"><img src="Assets/images/cari_event/icon-clock-detail.png" alt="">10.00 - 22.00</p>
                            <p class="sub-tentang">Tentang Event</p>
                            <p class="p-detail-tentang">YOGYAKARTA MUSIC FEST 2024: NEW YEAR CELEBRATE! adalah perayaan spektakuler untuk menyambut tahun baru dengan penuh semangat dan kegembiraan. Festival ini menghadirkan deretan musisi papan atas, panggung megah, dan hiburan terbaik di jantung budaya Indonesia, Yogyakarta. Nikmati malam yang penuh energi dengan musik lintas genre, pertunjukan cahaya yang memukau, serta suasana khas Jogja yang ramah dan hangat. Jadikan momen pergantian tahun Anda tak terlupakan di festival musik paling dinanti tahun ini!</p>
                            <div class="text-anchor-detail">
                                <p><a href="bookingBooth1.php" class="tetep">Booking</a></p>
                            </div>
                        </figcaption>
                    </figure>


                </div>
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