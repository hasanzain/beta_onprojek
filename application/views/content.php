<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">OnProjek</a></h1>


            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li class="drop-down"><a href="#">Layanan<i class="bx bxs-chevron-down icon-close"></i></a>
                        <ul>
                            <li><a href="#platform-iot">Platform IoT</a></li>
                            <li><a href="#web-design">Web Design</a></li>
                            <li><a href="#robotika">Robotika</a></li>
                            <li><a href="#konsultasi">Konsultasi</a></li>
                        </ul>
                    </li>

                    <li><a href="#portfolio">Produk</a></li>
                    <li><a href="#faq">Pertanyaan</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h1>ONPROJEK</h1>
                    <h2>Startup yang bergerak di bidang teknologi khususnya pengembangan dan produksi perangkat Internet
                        of Things(IoT) dan robotika untuk kebutuhan UMKM, industri, maupun personal</h2>
                    <div class="d-lg-flex">
                        <a href="https://www.youtube.com/watch?v=iI-lIQ9lVKA" class="venobox btn-watch-video"
                            data-vbtype="video" data-autoplay="true"> Watch Video <i class="bx bxl-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <p>
                            Kami menyediakan beberapa layanan ungulan antara lain Platform IoT, Web Design, Robotika,
                            Konsultasi dan Custom Projek. Kami berkomitmen untuk memberikan pelayanan terbaik bagi
                            customer seperti
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> OnTime <p> - Menyelesaikan pemesanan sesuai dengan
                                    Timeline</p>
                            </li>
                            <li><i class="ri-check-double-line"></i> OnTarget <p> - Memberikan hasil yang sesuai dengan
                                    harapan anda</p>
                            </li>
                            <li><i class="ri-check-double-line"></i> OnPay <p> - Harga yang bersahabat sesuai dengan
                                    kebutuhan anda</p>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div> -->
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Platform IoT ======= -->
        <section id="platform-iot" class="why-us section-bg">
            <div class="container-fluid">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><strong>Perangkat IoT</strong></h3>
                            <p>
                                menyediakan perangkat iot mulai dari end device,lokal server,dan platform iot
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>End
                                            Device</span>
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                        <p>
                                            Perangkat sensor siap pakai yang dapat diintegrasikan dengan sistem IoT.
                                            Didukung jaringan Wireline atau Wireless Sensor Network (WSN), customer
                                            dapat menyesuaikan sendiri perangkat yang inginkan
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>Lokal
                                            Server</span>
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                                        <p>
                                            Perangkat Mini PC untuk kebutuhan server, dengan lokal server anda tidak
                                            perlu khawatir memikirkan biaya langganan sistem
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>Platform
                                            IoT</span>
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                        <p>
                                            Sistem kontrol dan monitoring perangkat pada sebuah sistem yang dapat anda
                                            atur sendiri sesuai kebutuhan. Platform ini juga didukung dengan Jaringan
                                            Lokal, Cloud, Protokol MQTT dan Security System (HTTP atau HTTPS)
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("<?= base_url() ?>/assets/img/iot2.webp");'>&nbsp;</div>
                </div>

            </div>
        </section><!-- Platform IoT -->

        <!-- ======= web-design ======= -->
        <section id="web-design" class="why-us">
            <div class="container-fluid">

                <div class="row">


                    <div
                        class="col-lg-5 d-flex flex-column align-items-stretch align-items-stretch  order-1 order-lg-1 img">
                        <img class="col-lg" src="<?= base_url() ?>/assets/img/web.webp">
                    </div>

                    <div class="col-lg-7 align-items-stretch order-2 order-lg-2">
                        <div class="content">
                            <h3><strong>Web Design</strong></h3>
                            <p>

                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <div id="" class="collapse show" data-parent=".accordion-list">
                                        <p>
                                            Jasa pembuatan website mulai dari sistem informasi manajemen, profil
                                            perusahaan, e-commerce sampai sistem informasi keuangan.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- web-design -->

        <!-- ======= robotika ======= -->
        <section id="robotika" class="why-us section-bg">
            <div class="container-fluid">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3><strong>Robotika</strong></h3>
                            <p>

                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>

                                    <div id="" class="collapse show" data-parent=".accordion-list">
                                        <p>
                                            Jasa pembuatan robotika yang profesional untuk industri, pribadi, maupun
                                            pendukung tugas akhir yang dapat di integrasikan dengan sistem IoT. Seperti
                                            line follower, robot pemadam, robot pengantar makanan dan masih banyak lagi.
                                            Anda dapat mengajukan permintaan sesuai kebutuhan
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img">
                        <img class="col-lg" src="<?= base_url() ?>/assets/img/robotika.webp">
                    </div>
                </div>

            </div>
        </section><!-- robotika -->

        <!-- ======= Konsultasi ======= -->
        <section id="konsultasi" class="why-us">
            <div class="container-fluid">

                <div class="row">

                    <div
                        class="col-lg-5 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-1 img">
                        <img class="col-lg" src="<?= base_url() ?>/assets/img/konsultasi.webp">
                    </div>

                    <div class="col-lg-7 align-items-stretch order-2 order-lg-2">
                        <div class="content">
                            <h3><strong>Konsultasi</strong></h3>
                            <p>

                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <div id="" class="collapse show" data-parent=".accordion-list">
                                        <p>
                                            Menyediakan jasa konsultasi bagi customer, memberikan gambaran tentang
                                            sistem dan hal hal yang berhubungan dengan teknis projek yang sedang atau
                                            akan dikerjakan
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- Konsultasi -->



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Pertanyaan..?</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li>
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                                href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                    non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                    purus non.
                                </p>
                            </div>
                        </li>

                        <li>
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                                class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li>
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                                class="collapsed">Dolor sit amet consectetur adipiscing elit? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                    Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                    tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li>
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                                class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                    est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li>
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                                class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis
                                nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 align-items-stretch">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="bx bx-map"></i>
                            </div>
                            <h4><a href="#">Lokasi</a></h4>
                            <p>Jalan Arief Rahman Hakim, Gang Makam Islam Blok C No. 6. Sukolilo, Surabaya</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 align-items-stretch">
                        <a href="https://www.instagram.com/onprojek.official/" target="_blank">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="bx bxl-instagram"></i>
                                </div>
                                <h4><a href="https://www.instagram.com/onprojek.official/" target="_blank">Instagram</a>
                                </h4>
                                <p>Follow kami di @onprojek.official</p>
                                <p>&nbsp;</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 align-items-stretch">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="bx bx-map"></i>
                            </div>
                            <h4><a href="#">Email</a></h4>
                            <p>onprojek.id@gmail.com</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 align-items-stretch">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="bx bx-map"></i>
                            </div>
                            <h4><a href="#">Hubungi Kami</a></h4>
                            <p>Wa/Telp : 085156060197
                            </p>
                            <p>Wa/Telp : 088227044212</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>


                </div>


            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->