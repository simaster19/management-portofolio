<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Miftakhul Kirom</title>
    <meta content="" name="description">
    <meta content="portofolio responsive" name="keywords">

    <!-- Favicons -->
    {{-- <link href="{{ url('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    {{-- @dd($projects) --}}
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ Storage::url($users->foto) }}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="{{ route('main_personal') }}">{{ $users->name }}</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://github.com/simaster19" class="github"><i class="bx bxl-github"></i></a>
                    <a href="https://youtube.com/simaster19" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="https://instagram.com/simaster19" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://id.linkedin.com/in/miftakhul-kirom-104b02185" class="linkedin"><i
                            class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                            <span>Beranda</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Tentang
                                Saya</span></a>
                    </li>

                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Riwayat</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                            <span>Portfolio</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                            <span>Kontak</span></a></li>
                    <li><a href="#" class="nav-link scrollto"><i class="bx bx-globe"></i>
                            <span>Blog</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" style="background: url('{{ Storage::url($users->background) }}') top center;"
        class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ $users->name }}</h1>
            <p>I'm <span class="typed" data-typed-items="Full Stack Developer, Web Developer, Freelancer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Saya</h2>
                    <p>Nama <strong>{{ $users->name }}</strong> atau biasa di panggil <strong>Kirom</strong>.
                        Pendidikan
                        terakhir saya S1 Teknik Informatika di Universitas Selamat Sri Kendal - Jawa Tengah, pengalaman
                        saya di dunia pemrograman sejak saya masih duduk di bangku SMK Rekayasa Perangkat Lunak Tahun
                        2011-2014 sudah menekuni bidang IT dari awal mulai Desktop App sampai Web App.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ Storage::url($users->foto) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Full Stack Web Developer.</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>27</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Kendal, Jawa
                                            Tengah</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $users->email }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Saya menerima jasa pembuatan berbagai jenis aplikasi Web dengan harga yang bisa menyesuaikan
                            kebutuhan client
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Riwayat &amp; Skills</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>Frontend &amp; Backend Developer</h4>
                            <h5>2017 - 2022</h5>
                            <p><em>Universitas Selamat Sri Kendal</em></p>
                            <p>Sejak 2017 sampai dengan lulus pada tahun 2022 menghasilkan Nilai IPK 3.20</p>
                        </div>

                        <h3 class="resume-title">Skripsi</h3>
                        <div class="resume-item">
                            <h4>SISTEM PEMETAAN TEMPAT KOS BERBASIS WEB</h4>
                            <h5>2022</h5>
                            <p><em>Skripsi</em></p>
                            <p>Merancang dan Membangun Sistem Pemetaan Tempat kos di Wilayah Kabupaten Kendal guna untuk
                                mengetahui persebaran tempat Kos di sekitar kabupaten Kendal.</p>
                        </div>
                        <h3 class="resume-title">Freelance</h3>
                        @foreach ($projects as $project)
                            @if ($project->status == 'FREELANCE')
                                <div class="resume-item">
                                    <h4>{{ $project->judul }}</h4>
                                    <h5>2023</h5>
                                    <p><em>Client: {{ $project->nama_client }}</em></p>
                                    <p>{{ $project->keterangan }}</p>
                                </div>
                            @endif
                        @endforeach

                        <h3 class="resume-title">Course</h3>
                        @foreach ($projects as $project)
                            @if ($project->status == 'COURSE')
                                <div class="resume-item">
                                    <h4>{{ $project->judul }}</h4>
                                    <h5>2023</h5>
                                    <p><em>Client: {{ $project->nama_client }}</em></p>
                                    <p>{{ $project->keterangan }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-6 skills" data-aos="fade-up" data-aos-delay="100" id="skills">
                        <h3 class="resume-title">Skill</h3>
                        <div class="row skills-content">
                            @foreach ($skills as $skill)
                                <div style="margin-bottom: -2.4rem" class="progress">
                                    <span class="skill">{{ $skill->skill }} <i
                                            class="val">{{ $skill->level }}</i></span>
                                    {{-- {{-- <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar"
                                        aria-valuenow="{{ $skill->persen }}" aria-valuemin="0"
                                        aria-valuemax="100"></div> --}}
                                </div>
                        </div>
                        @endforeach
                    </div>


                </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-android">Apk</li>
                            <li data-filter=".filter-desktop">Desktop</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->jenis_project }}">
                            <div class="portfolio-wrap">
                                <img src="{{ Storage::url($project->cover) }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ Storage::url($project->cover) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{ $project->judul_project }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ route('detail_personal', $project->slug) }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>jawa Tengah, kaliwungu Kendal 51372</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $users->email }}</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31683.233780574326!2d110.23807446310406!3d-6.9615510048509694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705e18dead7203%3A0x4027a76e35305f0!2sKaliwungu%2C%20Kec.%20Kaliwungu%2C%20Kabupaten%20Kendal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1681024999074!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="" method="post" role="form" class="php-email-form form_message"
                            data-url="{{ route('store') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>

                            <div class="text-center kirim"><button type="submit">Kirim</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer --> --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('frontend/assets/js/jQuery-3.6.4.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('frontend/assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.kirim').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: $('.form_message').data('url'),
                    data: $('form').serialize(),
                    success: function(response) {
                        $('.form_message')[0].reset();
                        alert(response.message);
                    }
                });
            });
        });
    </script>

</body>

</html>
