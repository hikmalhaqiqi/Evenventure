<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Venture</title>
    <link rel="stylesheet" href="Assets/styles/halamanUtama.css">
</head>

<style>
    .tetep1 {
        color: black;
        text-decoration: none;
    }

    .tetep1:hover {
        text-decoration: none;
        color: black;
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
        <section class="section1-eo">
            <h2>Selamat Datang!</h2>
            <img src="Assets/images/background-section1-eo.png" alt="background-image">
            <div class="text-section1-eo">
                <h3>Kelola dan Publikasikan Event Anda dengan Mudah</h3>
                <h5>Unggah event Anda dan temukan vendor yang sesuai hanya dengan beberapa langkah</h5>
                <div class="textp-eo">
                    <p><a href="pembuatanEvent1.php" class="tetep1">Upload Event Baru</a></p>
                </div>
            </div>
        </section>
        <section class="section2-eo">
            <h2>Event Admin</h2>
            <div class="container-section2-eo">

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
                        $nama_event = $row['nama_event'];
                        $deskripsi_event = $row['deskripsi_event'];

                        // Tampilkan HTML untuk setiap event
                        echo '
        <div class="container-section2-eo">
            <div class="card-section2-eo">
                <img src="Assets/images/gambarcontoh.JPG" alt="">
                <div class="card-description-eo2">
                    <div class="description-eo2-up">
                        <div class="desc-eo2-up-left">
                                <h6>MM</h6>
                                <p>00</p>
                        </div>
                        <div class="desc-eo2-up-right">
                            <h6>' . $nama_event . '</h6>
                            <p>' . $deskripsi_event . '</p>
                        </div>
                    </div>
                    <div class="description-eo2-bt">
                        <ul>
                            <li class="status"><img src="Assets/images/icon_status.png" alt=""> Status</li>
                            <li class="delete"><p>Hapus</p></li>
                            <li class="edit"><p>Edit</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';
                    }
                } else {
                    echo "Tidak ada event tersedia.";
                }

                $conn->close();
                ?>
            </div>





        </section>
        <section class="section5">
            <div class="container-section5">
                <img src="Assets/images/logo_section5.png" alt="logo">
                <h3>Pusat Vendor Terpercaya</h3>
                <div class="container-card-section5">
                    <figure class="card-section5">
                        <img src="Assets/images/icon_bintang_section5.png" alt="">
                        <figcaption class="text-card-section5">
                            <h4>Terkurasi</h4>
                            <p>Vendor-vendor pilihan yang terpercaya</p>
                        </figcaption>
                    </figure>
                    <figure class="card-section5">
                        <img src="Assets/images/icon_chat_section5.png" alt="">
                        <figcaption class="text-card-section5">
                            <h4>Konsultasi</h4>
                            <p>Kebutuhan Anda bisa dikonsultasikan dengan para vendor</p>
                        </figcaption>
                    </figure>
                    <figure class="card-section5">
                        <img src="Assets/images/icon_dots_section5.png" alt="">
                        <figcaption class="text-card-section5">
                            <h4>Alternatif</h4>
                            <p>Pilih yang sesuai dengan kebutuhan Anda</p>
                        </figcaption>
                    </figure>
                    <figure class="card-section5">
                        <img src="Assets/images/icon_terpusat_section5.png" alt="">
                        <figcaption class="text-card-section5">
                            <h4>Terpusat</h4>
                            <p>Menghemat waktu dan biaya</p>
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