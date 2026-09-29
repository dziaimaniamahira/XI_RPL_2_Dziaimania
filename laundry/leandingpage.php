<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LAUNDRY - Sistem Informasi Laundry</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #fff8fa;
            color: #3d0a18;
        }

        /* NAVBAR */
        .navbar {
            width: 100%;
            height: 72px;
            background: #6b1026;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            position: fixed;
            top: 0;
            z-index: 1000;
            box-shadow: 0 3px 15px rgba(0,0,0,.15);
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .logo span {
            color: #f5c6ce;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 7px;
            font-size: 14px;
        }

        .nav-menu a:hover {
            background: #8d2940;
        }

        .nav-menu .login {
            background: white;
            color: #6b1026;
            font-weight: bold;
            padding: 10px 22px;
            margin-left: 8px;
        }

        .nav-menu .login:hover {
            background: #f5c6ce;
        }

        /* HERO */
        .hero {
            min-height: 700px;
            display: flex;
            align-items: center;
            padding: 120px 7% 80px;

            background:
                linear-gradient(
                    90deg,
                    rgba(57,6,19,.92),
                    rgba(107,16,38,.55)
                ),
                url("https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?auto=format&fit=crop&w=1800&q=85");

            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 680px;
            color: white;
        }

        .badge {
            display: inline-block;
            background: #f5c6ce;
            color: #6b1026;
            padding: 9px 17px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 58px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #f5c6ce;
        }

        .hero p {
            color: #f8e8ec;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .button-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn-login {
            text-decoration: none;
            background: white;
            color: #6b1026;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #f5c6ce;
        }

        .btn-info {
            text-decoration: none;
            border: 1px solid white;
            color: white;
            padding: 13px 27px;
            border-radius: 8px;
        }

        .btn-info:hover {
            background: rgba(255,255,255,.15);
        }

        /* STATISTIK */
        .stats {
            background: white;
            width: 86%;
            margin: -50px auto 0;
            position: relative;
            z-index: 5;
            border-radius: 15px;
            padding: 25px;
            display: grid;
            grid-template-columns: repeat(4,1fr);
            box-shadow: 0 8px 30px rgba(107,16,38,.12);
        }

        .stat {
            text-align: center;
            border-right: 1px solid #eee;
        }

        .stat:last-child {
            border-right: none;
        }

        .stat h2 {
            color: #6b1026;
            font-size: 27px;
            margin-bottom: 5px;
        }

        .stat p {
            color: #777;
            font-size: 13px;
        }

        /* SECTION */
        .section {
            padding: 90px 7%;
            text-align: center;
        }

        .section-title {
            color: #6b1026;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .section-desc {
            color: #777;
            margin-bottom: 45px;
            line-height: 1.6;
        }

        /* LAYANAN */
        .cards {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 35px 25px;
            border-radius: 15px;
            border: 1px solid #f0dce1;
            box-shadow: 0 7px 25px rgba(0,0,0,.05);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-7px);
            box-shadow: 0 12px 30px rgba(107,16,38,.13);
        }

        .card-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            background: #f9e8ec;
            font-size: 30px;
        }

        .card h3 {
            color: #6b1026;
            margin-bottom: 12px;
        }

        .card p {
            color: #777;
            font-size: 14px;
            line-height: 1.7;
        }

        /* TENTANG */
        .about {
            background: #f9eef1;
            padding: 90px 7%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            height: 390px;
            border-radius: 20px;

            background:
                linear-gradient(
                    rgba(107,16,38,.15),
                    rgba(107,16,38,.15)
                ),
                url("https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?auto=format&fit=crop&w=1000&q=80");

            background-size: cover;
            background-position: center;
        }

        .about-content h2 {
            color: #6b1026;
            font-size: 35px;
            margin-bottom: 18px;
        }

        .about-content > p {
            color: #777;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .feature {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: #6b1026;
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature h4 {
            color: #6b1026;
            margin-bottom: 4px;
        }

        .feature p {
            color: #777;
            font-size: 13px;
            line-height: 1.5;
        }

        /* PROSES */
        .process {
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 20px;
        }

        .process-card {
            background: white;
            padding: 30px 20px;
            border-radius: 15px;
            border: 1px solid #f0dce1;
            position: relative;
        }

        .number {
            width: 45px;
            height: 45px;
            margin: 0 auto 18px;
            background: #6b1026;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .process-card h3 {
            color: #6b1026;
            margin-bottom: 10px;
        }

        .process-card p {
            color: #777;
            font-size: 13px;
            line-height: 1.6;
        }

        /* HARGA */
        .price-section {
            background: #f9eef1;
            padding: 90px 7%;
            text-align: center;
        }

        .price-box {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .price-card {
            background: white;
            border-radius: 16px;
            padding: 35px 25px;
            border: 1px solid #ead5db;
            box-shadow: 0 8px 25px rgba(0,0,0,.05);
        }

        .price-card h3 {
            color: #6b1026;
            margin-bottom: 15px;
        }

        .price {
            font-size: 28px;
            font-weight: bold;
            color: #6b1026;
            margin-bottom: 8px;
        }

        .price small {
            font-size: 13px;
            color: #777;
            font-weight: normal;
        }

        .price-card p {
            color: #777;
            font-size: 13px;
            line-height: 1.6;
        }

        /* TESTIMONI */
        .testimonials {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 25px;
        }

        .testimonial {
            background: white;
            padding: 28px;
            border-radius: 15px;
            border: 1px solid #f0dce1;
            text-align: left;
        }

        .stars {
            color: #d49a00;
            margin-bottom: 15px;
        }

        .testimonial p {
            color: #666;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 18px;
        }

        .testimonial h4 {
            color: #6b1026;
        }

        .testimonial span {
            color: #999;
            font-size: 12px;
        }

        /* CTA */
        .cta {
            margin: 70px 7%;
            padding: 55px 60px;
            border-radius: 20px;
            color: white;

            background:
                linear-gradient(
                    100deg,
                    #4d0b1b,
                    #8d2940
                );

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .cta h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .cta p {
            color: #f5dce2;
            line-height: 1.6;
        }

        .cta a {
            background: white;
            color: #6b1026;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: bold;
            white-space: nowrap;
        }

        /* FOOTER */
        footer {
            background: #390713;
            color: white;
            padding: 40px 7%;
            text-align: center;
        }

        footer .footer-logo {
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        footer p {
            color: #dcbac3;
            font-size: 13px;
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media (max-width: 850px) {

            .navbar {
                padding: 0 5%;
            }

            .nav-menu a:not(.login) {
                display: none;
            }

            .hero {
                padding: 110px 5% 60px;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero h1 {
                font-size: 42px;
            }

            .stats {
                width: 90%;
                grid-template-columns: repeat(2,1fr);
                gap: 20px;
            }

            .stat {
                border-right: none;
                border-bottom: 1px solid #eee;
                padding-bottom: 15px;
            }

            .cards,
            .price-box,
            .testimonials {
                grid-template-columns: 1fr;
            }

            .about {
                grid-template-columns: 1fr;
                padding: 70px 5%;
            }

            .process {
                grid-template-columns: repeat(2,1fr);
            }

            .cta {
                margin: 50px 5%;
                padding: 40px 25px;
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 600px) {

            .stats {
                grid-template-columns: 1fr;
            }

            .stat {
                border-bottom: 1px solid #eee;
            }

            .stat:last-child {
                border-bottom: none;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 15px;
            }

            .process {
                grid-template-columns: 1fr;
            }

            .about-image {
                height: 280px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            LAUN<span>DRY</span>
        </div>

        <div class="nav-menu">

            <a href="#beranda">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#tentang">Tentang</a>

            <a href="login.php" class="login">
                Login
            </a>

        </div>

    </nav>


    <!-- HERO -->
    <section class="hero" id="beranda">

        <div class="hero-content">

            <div class="badge">
                ✦ SISTEM INFORMASI LAUNDRY
            </div>

            <h1>
                Laundry Jadi
                <span>Lebih Mudah</span>
                dan Teratur
            </h1>

            <p>
                Kelola data pelanggan, transaksi, laporan,
                dan informasi laundry dalam satu sistem
                yang praktis dan mudah digunakan.
            </p>

            <div class="button-group">

                <a href="login.php" class="btn-login">
                    Mulai Sekarang →
                </a>

                <a href="#layanan" class="btn-info">
                    Lihat Layanan
                </a>

            </div>

        </div>

    </section>


    <!-- STATISTIK -->
    <div class="stats">

        <div class="stat">
            <h2>24/7</h2>
            <p>Sistem Dapat Digunakan</p>
        </div>

        <div class="stat">
            <h2>100+</h2>
            <p>Pelanggan Terlayani</p>
        </div>

        <div class="stat">
            <h2>4+</h2>
            <p>Layanan Laundry</p>
        </div>

        <div class="stat">
            <h2>100%</h2>
            <p>Data Lebih Terorganisir</p>
        </div>

    </div>


    <!-- LAYANAN -->
    <section class="section" id="layanan">

        <h2 class="section-title">
            Layanan Laundry
        </h2>

        <p class="section-desc">
            Pilihan layanan untuk memenuhi kebutuhan laundry.
        </p>

        <div class="cards">

            <div class="card">

                <div class="card-icon">👕</div>

                <h3>Cuci & Kering</h3>

                <p>
                    Pakaian dicuci dan dikeringkan
                    dengan proses yang praktis.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">✨</div>

                <h3>Setrika</h3>

                <p>
                    Pakaian disetrika agar lebih rapi
                    dan siap digunakan.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">⚡</div>

                <h3>Laundry Express</h3>

                <p>
                    Layanan laundry dengan proses
                    yang lebih cepat.
                </p>

            </div>

        </div>

    </section>


    <!-- TENTANG -->
    <section class="about" id="tentang">

        <div class="about-image"></div>

        <div class="about-content">

            <h2>
                Tentang Laundry Kami
            </h2>

            <p>
                Sistem Informasi Laundry membantu proses
                pengelolaan data laundry agar lebih mudah,
                rapi, dan terorganisir.
            </p>

            <div class="feature">

                <div class="feature-icon">✓</div>

                <div>
                    <h4>Data Lebih Rapi</h4>
                    <p>
                        Data pelanggan dan transaksi
                        tersimpan secara terorganisir.
                    </p>
                </div>

            </div>

            <div class="feature">

                <div class="feature-icon">✓</div>

                <div>
                    <h4>Transaksi Mudah</h4>
                    <p>
                        Pencatatan transaksi dapat
                        dilakukan dengan lebih praktis.
                    </p>
                </div>

            </div>

            <div class="feature">

                <div class="feature-icon">✓</div>

                <div>
                    <h4>Laporan Teratur</h4>
                    <p>
                        Informasi transaksi dapat
                        dikelola menjadi laporan.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- PROSES -->
    <section class="section">

        <h2 class="section-title">
            Bagaimana Proses Laundry?
        </h2>

        <p class="section-desc">
            Proses laundry yang sederhana dan mudah dipahami.
        </p>

        <div class="process">

            <div class="process-card">

                <div class="number">01</div>

                <h3>Terima Pesanan</h3>

                <p>
                    Data pelanggan dan pakaian
                    dicatat ke dalam sistem.
                </p>

            </div>


            <div class="process-card">

                <div class="number">02</div>

                <h3>Proses Laundry</h3>

                <p>
                    Pakaian masuk ke proses
                    pencucian dan pengeringan.
                </p>

            </div>


            <div class="process-card">

                <div class="number">03</div>

                <h3>Setrika</h3>

                <p>
                    Pakaian yang sudah bersih
                    kemudian dirapikan.
                </p>

            </div>


            <div class="process-card">

                <div class="number">04</div>

                <h3>Selesai</h3>

                <p>
                    Pesanan siap diambil
                    oleh pelanggan.
                </p>

            </div>

        </div>

    </section>


    <!-- HARGA -->
    <section class="price-section">

        <h2 class="section-title">
            Pilihan Layanan
        </h2>

        <p class="section-desc">
            Contoh pilihan layanan laundry yang tersedia.
        </p>

        <div class="price-box">

            <div class="price-card">

                <h3>Cuci Kering</h3>

                <div class="price">
                    Rp5.000
                    <small>/ Kg</small>
                </div>

                <p>
                    Cuci dan kering pakaian
                    dengan proses standar.
                </p>

            </div>


            <div class="price-card">

                <h3>Cuci Setrika</h3>

                <div class="price">
                    Rp7.000
                    <small>/ Kg</small>
                </div>

                <p>
                    Pakaian dicuci, dikeringkan,
                    dan disetrika.
                </p>

            </div>


            <div class="price-card">

                <h3>Express</h3>

                <div class="price">
                    Rp10.000
                    <small>/ Kg</small>
                </div>

                <p>
                    Pilihan layanan dengan
                    proses yang lebih cepat.
                </p>

            </div>

        </div>

    </section>


    <!-- TESTIMONI -->
    <section class="section">

        <h2 class="section-title">
            Apa Kata Pelanggan?
        </h2>

        <p class="section-desc">
            Pengalaman pelanggan menggunakan layanan laundry.
        </p>

        <div class="testimonials">

            <div class="testimonial">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Proses laundry mudah dan pakaian
                    kembali dalam keadaan bersih dan rapi."
                </p>

                <h4>Andi</h4>
                <span>Pelanggan</span>

            </div>


            <div class="testimonial">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Pencatatan pesanan menjadi lebih
                    teratur dan mudah."
                </p>

                <h4>Sinta</h4>
                <span>Pelanggan</span>

            </div>


            <div class="testimonial">

                <div class="stars">
                    ★★★★★
                </div>

                <p>
                    "Layanannya praktis dan prosesnya
                    cukup cepat."
                </p>

                <h4>Raka</h4>
                <span>Pelanggan</span>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="cta">

        <div>

            <h2>
                Siap Mengelola Laundry?
            </h2>

            <p>
                Masuk ke sistem untuk mengelola
                pelanggan, transaksi, dan laporan.
            </p>

        </div>

        <a href="login.php">
            Login Sekarang →
        </a>

    </section>


    <!-- FOOTER -->
    <footer>

        <div class="footer-logo">
            LAUNDRY
        </div>

        <p>
            Sistem Informasi Laundry
        </p>

        <p>
            © 2026 Semua Hak Dilindungi
        </p>

    </footer>

</body>
</html>