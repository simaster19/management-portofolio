<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Detail - {{ $data->judul }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <main>

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $data->judul }}</h2>
                    <ol>
                        <li><a href="{{ route('main_personal') }}#portfolio">Beranda</a></li>
                        <li>{{ $data->judul }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach ($data->image as $image)
                                    <div class="swiper-slide">
                                        <img width="300px" height="600px" src="{{ Storage::url($image->gambar) }}"
                                            alt="">
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project Informasi</h3>
                            <ul>
                                <li><strong>Kategori</strong>: {{ strToUpper($data->jenis_project) }}</li>
                                <li><strong>Project URL</strong>: <a
                                        href="@if (!str_contains($data->project_url, '//')) // @endif{{ $data->project_url }}">{{ $data->project_url }}</a>
                                </li>
                                <li><strong>Type</strong>: {{ $data->status }}
                                </li>
                                @if ($data->nama_client !== '-')
                                    <li><strong>Client</strong>: {{ $data->nama_client }}
                                    </li>
                                @endif
                                <li><strong>Dibuat Dengan</strong>:
                                    <ol style="font-size: 9pt; margin-left: -1.2rem" class="text-bold mt-1">
                                        @foreach ($dibuat_dengan as $dev)
                                            <li>{{ $dev }}</li>
                                        @endforeach
                                    </ol>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Keterangan</h2>
                            <p>
                                {{ $data->keterangan }}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
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

</body>

</html>
