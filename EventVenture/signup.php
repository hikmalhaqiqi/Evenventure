<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Assets/styles/halamanUtama.css">
    <link rel="stylesheet" href="Assets/styles/loginSignup.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="list">
                <li class="logo"><img src="Assets/images/logo.png" alt="logo"></li>
                <li class="search"><p>Cari Vendor / Produk di sini</p> <img src="Assets/images/icon_search_nav.png" alt="search"></li>
                <li class="chat"><a href="#chat"><img src="Assets/images/icon_chat_nav.png" alt="chat"></a></li>
                <li class="notif"><a href="#notif"><img src="Assets/images/icon_notif_nav.png" alt="notif"></a></li>
                <li class="register"><p>....</p></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container-signup">
            <div class="left-part-signup">
                <img src="Assets/images/login_signup/gambar_signup.png" alt="gambar">
            </div>
            <div class="right-part-signup">
                <form action="">
                    <h3>Sign up</h3>
                    <label for="" class="label-email-signup">Email address</label><br>
                    <input type="text" class="input-email-signup" placeholder=""><br>
                    <label for="" class="label-password-signup">Password</label><br>
                    <input type="text" class="input-password-signup" placeholder=""><br>
                    <p class="pass-rules">Use 8 or more characters with a mix of letters, numbers & symbols</p>
                    <button class="submit-signup">Sign Up</button>
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