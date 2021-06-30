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
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Bupati</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="detail" class="detail">
            <div class="container">
                <div class="judul">
                    <h2>Tempat Wisata</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-3 sidebar">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">PANTAI LOLAN</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">PULAU MOLOSING</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">PANTAI BUNGIN</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">PANTAI BUNGIN</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active animate__animated animate__bounceInDown"
                                id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="judul2">
                                    <img src="../assets/img/wisata/pantai-lolan.jpg" alt="">
                                    <h3>Pantai Lolan</h3>
                                    <hr>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, quod atque laborum
                                        error corporis eum deleniti quae earum delectus. Fugiat sed provident ullam
                                        perferendis amet dicta voluptatem cumque alias minima?
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, natus quas quidem
                                        inventore asperiores ab facere odit voluptatem iusto tempore nobis perspiciatis
                                        molestias voluptas ducimus! Accusantium est veniam perspiciatis laboriosam!
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="v-pills-profile"
                                role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="v-pills-messages"
                                role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                            <div class="tab-pane fade animate__animated animate__bounceInDown" id="v-pills-settings"
                                role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section><!-- End detail Section -->


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
