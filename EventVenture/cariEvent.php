<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Event</title>
    <link rel="stylesheet" href="Assets/styles/halamanUtama.css">
    <link rel="stylesheet" href="Assets/styles/cariEvent.css?v=<?php echo time(); ?>">
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
        <div class="title-section">
            <a href=""><img src="Assets/images/cari_event/icon_back_cari_event.png" alt="back"></a>
            <h3>Festival</h3>
        </div>
        <section class="section-carev">
            <div class="container-section-carev">

                <div class="container-card-section-carev">

                    <?php
                    // Koneksi ke database
                    $conn = new mysqli('localhost', 'root', '', 'db_eventventure');
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // Query untuk mengambil data event
                    $query = "SELECT * FROM event";
                    $result = $conn->query($query);

                    // Periksa jika ada data
                    if ($result->num_rows > 0) {
                        // Perulangan untuk menampilkan data dari database
                        while ($row = $result->fetch_assoc()) {
                            // Mengambil data dari setiap baris
                            $nama_event = htmlspecialchars($row['nama_event']);
                            $deskripsi_event = htmlspecialchars($row['deskripsi_event']);
                            $tanggal_event = htmlspecialchars($row['tgl_mulai']);
                            $lokasi_event = htmlspecialchars($row['lokasi']);
                            //$gambar_event = htmlspecialchars($row['gambar_event']); // Asumsikan nama file gambar disimpan di database

                            // Tampilkan HTML untuk setiap event
                            echo '
        <figure class="card-section-carev">
            <img src="Assets/images/gambarcontoh.JPG" alt="">
            <figcaption class="text-card-carev">
                <h4>' . $nama_event . '</h4>
                <p class="p-detail"><img src="Assets/images/cari_event/icon_calendar_cari_event.png" alt="">' . $tanggal_event . '</p>
                <p class="p-detail"><img src="Assets/images/cari_event/icon_location_cari_event.png" alt="">' . $lokasi_event . '</p>
                <div class="text-anchor-card-carev">
                    <p><a href="detailEvent.php?id=' . $row['id'] . '" class="tetep">Lihat</a></p>
                </div>
            </figcaption>
        </figure>';
                        }
                    } else {
                        echo "<p>Tidak ada event tersedia.</p>";
                    }

                    $conn->close();
                    ?>




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