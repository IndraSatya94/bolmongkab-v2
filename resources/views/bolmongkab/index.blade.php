<!DOCTYPE html>
<html lang="en">

<head>
    @include('bolmongkab.layout.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        @include('bolmongkab.layout.header')
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                @foreach ($sliders as $slider)
                <div class="carousel-item active" style="background-image: url({{ $slider->image }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><span>KABUPATEN BOLAANG MONGONDOW</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">bolmong Hebat, Bolmong Maju</p>
                            <!-- <a href="sejarah.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya...</a> -->
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= leader Section ======= -->
        <section id="pimpinan" class="pimpinan">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PIMPINAN</h2>
                </div>

                <div class="row">
                    @foreach ($leaders as $leader)

                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            <div class="member-img">
                                <img src="{{ $leader->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $leader->jabatan}}</h4>
                                <span>{{ $leader->nama}}</span>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

            </div>

        </section><!-- End leader Section -->

        <!-- ======= sekilas Section ======= -->
        <section id="sekilas" class="sekilas">
            <div class="section-title">
                <h2>SEKILAS BOLMONG</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-7" data-aos="fade-right">
                    <img src="assets-front/img/bogani.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-xl-8 col-lg-5 pt-5 pt-lg-0">
                    <p data-aos="fade-up">
                        Kabupaten Bolaang Mongondow adalah kabupaten di provinsi Sulawesi Utara, Indonesia. Ibu kotanya
                        adalah Lolak[1]. Etnis Mayoritas di kabupaten ini adalah Suku Mongondow. Bahasa ibu penduduk
                        asli di daerah ini adalah Bahasa Mongondow.
                        Kabupaten Bolaang Mongondow ditetapkan pada tanggal 23 Maret 1954, terletak pada salah satu
                        daerah Sulawesi Utara yang secara historis geografis adalah bekas danau, serta merupakan daerah
                        subur penghasil utama tambang dan hasil bumi lainnya.
                        Wilayah Kabupaten Bolaang Mongondow telah mengalami sejumlah pemekaran. Tahun 2007 dimekarkan
                        menjadi Kota Kotamobagu dan Kabupaten Bolaang Mongondow Utara. Pada tahun 2008 dimekarkan lagi
                        menjadi Kabupaten Bolaang Mongondow Timur dan Kabupaten Bolaang Mongondow Selatan.
                    </p>
                    <div class="read-more">
                        <a href="{{ ('/sejarahtemp') }}">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section><!-- End sekilas Section -->

        <section id="blue" class="pelayanan">

            <div class="container" data-aos="fade-up">

                <div class="section-titlebiru">
                    <h2>PELAYANAN</h2>
                </div>

                <div class="pelayanan-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        @foreach ($services1 as $service)
                        <div class="swiper-slide">
                            <div class="layanan-item">
                                <div class="profile mt-auto">
                                    <img src="/storage/service-images/{{ $service->icon }}" class="img-fluid" alt="">
                                    <a href="{{ $service->link }}">
                                        <h3>{{ $service->nama }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="pelayanan-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        @foreach ($services2 as $service)
                        <div class="swiper-slide">
                            <div class="layanan-item">
                                <div class="profile mt-auto">
                                    <img src="/storage/service-images/{{ $service->icon }}" class="layanan-img" alt="">
                                    <a href="{{ $service->link }}">
                                        <h3>{{ $service->nama }}</h3>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End layanan item -->
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End pelayanan Section -->

        <div class="social-media">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

        <!-- ======= widget Section ======= -->
        <section id="widget" class="widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/q29F9Kc0grA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up">
                        <iframe name="fe4824ddba3a1c" width="100%" height="100%"
                            data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                            frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                            allow="encrypted-media"
                            src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=604850960329645&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df367608c00b3c88%26domain%3Dbolmongkab.go.id%26origin%3Dhttps%253A%252F%252Fbolmongkab.go.id%252Ff16e32154832d6%26relation%3Dparent.parent&amp;container_width=387&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdiskominfo.bolmong%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"
                            style="border: none; visibility: visible; width: 100%; height: 100%;" class=""></iframe>
                    </div>
                </div>
            </div>
        </section><!-- End widget Section -->

        <!-- ======= Pengumuman Section ======= -->
        <section id="blue" class="pengumuman">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8  col-md-6" data-aos="fade-up">
                        <div class="section-titlebiru">
                            <h2>PENGUMUMAN</h2>
                        </div>
                        @foreach ($posts as $post)
                        <article class="entry">

                            <h2 class="entry-title">
                                <a href="{{ route('pengumuman-detail',$post->id) }}"
                                    method="POST">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul style="margin-bottom : 1%">
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="pengumuman-detail.html">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="pengumuman-detail.html"><time
                                                datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $post->content }}
                                </p>
                                <div class="read-more">
                                    <a href="" method="POST">Selengkapnya...</a>
                                </div>
                            </div>

                        </article><!-- End pengumuman entry -->
                        @endforeach
                    </div>

                    <div class="agenda-index col-lg-4" data-aos="fade-up">
                        <div class="section-titlebiru">
                            <h2>AGENDA</h2>
                        </div>
                        @foreach ($events as $event)
                        <article class="entry">
                            <h2 class="entry-title">
                                <a href="{{ route('event-detail',$event->id) }}">{{$event->title}}</a>
                            </h2>

                            <div class="entry-meta">

                                <h4>Dilaksanakan pada : {{$event->date}}</h4>

                            </div>
                        </article><!-- End agenda entry -->
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End pengumuman Section -->

        <section id="banner" class="banner">
            <div class="section-title">
                <h2>BANNER</h2>
            </div>
            <div class="row">
                @foreach($banners1 as $banner1)
                <div class="col-lg-3">
                    <a href="{{$banner1->link}}"><img src="{{ $banner1->image }}"></a>
                </div>
                @endforeach

                @foreach($banners2 as $banner2)
                <div class="col-lg-3">
                    <a href="{{$banner2->link}}"><img src="{{ $banner2->image }}"></a>
                </div>
                @endforeach

                @foreach($banners3 as $banner3)
                <div class="col-lg-3">
                    <a href="{{$banner3->link}}"><img src="{{ $banner3->image }}"></a>
                </div>
                @endforeach

                <div class="col-lg-3">
                    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js">
                    </script>
                    <div id="gpr-kominfo-widget-container"></div>
                </div>
            </div>
        </section><!-- End widget Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('bolmongkab.layout.footer')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    @include('bolmongkab.layout.script')


</body>

</html>
