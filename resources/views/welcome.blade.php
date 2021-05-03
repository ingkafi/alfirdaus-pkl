<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>MYP-HS Al Firdaus</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="{{ URL::asset('welcomepage/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('welcomepage/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('welcomepage/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('welcomepage/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('welcomepage/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ URL::asset('welcomepage/images/favicon.png') }}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image"><img src="{{ URL::asset('welcomepage/images/logo.png') }}"
                alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">ABOUT</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">GRADE</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#callMe">CALL ME</a>
                </li> -->
                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#projects">GALLERY</a>
                </li> --}}

            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header" style=" background-image: url('{{ asset('welcomepage/images/bg.png') }}'); ">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>WELCOME!</h1>
                            <p class="p-heading p-large">SIAKAD Sekolah Menengah Al Firdaus Sukoharjo</p>
                            @if (Route::has('login'))
                            @auth
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @if (auth()->user()->role == 'hrt')
                            <a class="btn-solid-lg page-scroll" href="/hrt/dashboard">DASHBOARD</a>
                            <a class="btn-solid-dg page-scroll" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">LOG
                                OUT</a>
                            @elseif(auth()->user()->role == 'admin')
                            <a class="btn-solid-lg page-scroll" href="/admin/dashboard">DASHBOARD</a>
                            <a class="btn-solid-dg page-scroll" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">LOG
                                OUT</a>
                            @else
                            <a class="btn-solid-lg page-scroll" href="/parent/home">DASHBOARD</a>
                            <a class="btn-solid-dg page-scroll" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">LOG
                                OUT</a>
                            @endif
                            @else
                            <a class="btn-solid-lg page-scroll" href="{{ route('login') }}">LOGIN</a>
                            {{-- @if (Route::has('register'))
                                        <a class="btn-solid-lg page-scroll" href="{{ route('register') }}">REGISTER</a>
                            @endif --}}

                            @endauth
                            @endif
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT US</div>
                        <h2>MYP-HS Al Firdaus</h2>
                        <p>Middle Years Program (MYP) menekankan tantangan intelektual, mendorong siswa berusia 11-16 th
                            membuat hubungan praktis antara studi dan dunia nyata. MYP bertujuan untuk mencetak orang
                            muda yang berpikiran internasional, berempati, mengejar makna kehidupan.</p>
                        <p class="testimonial-text">" Al FIRDAUS is a candidate school* for the International
                            Baccalaureate (IB) Middle Years Programme and pursuing authorization as an IB World School.
                            "</p>
                        {{-- <div class="testimonial-author">Dyan Azka Ingkafi - Kepala Sekolah</div> --}}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ URL::asset('welcomepage/images/about.png') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Testimonial</h2> <br>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="{{ URL::asset('welcomepage/images/testimonial-7.jpg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Pembelajaran di MYP HS Alfirdaus selama PJJ
                                                lebih membuat paham karena dengan tatap muka dan di jelaskan materinya
                                                oleh guru secara langsung walaupun melalui media zoom</div>
                                            <div class="testimonial-author">Wildan Rakai - Grade XI IPA</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="{{ URL::asset('welcomepage/images/testimonial-8.jpg') }}"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Meskipun kondisi pandemi Alhamdulillah anak
                                                anak saya masih bisa melaksanakan proses pembelajaran dengan baik.
                                                Bp/ibu guru memberikan materi dan tugas secara proporsional. </div>
                                            <div class="testimonial-author">Dr. Triana Kusumaningsih, M.Si</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                {{-- <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="{{ URL::asset('welcomepage/images/testimonial-3.jpg') }}"
                                alt="alternative">
                                <div class="card-body">
                                    <div class="testimonial-text">Aria's CEO personally attends client meetings
                                        and gives his feedback on business growth strategies.</div>
                                    <div class="testimonial-author">Roy Smith - Developer</div>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ URL::asset('welcomepage/images/testimonial-4.jpg') }}"
                                    alt="alternative">
                                <div class="card-body">
                                    <div class="testimonial-text">At the beginning I thought the prices are a
                                        little high for what they offer but they over deliver each and every
                                        time.</div>
                                    <div class="testimonial-author">Ronald Spice - Owner</div>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ URL::asset('welcomepage/images/testimonial-5.jpg') }}"
                                    alt="alternative">
                                <div class="card-body">
                                    <div class="testimonial-text">I recommend Aria to every business owner or
                                        growth leader that wants to take his company to the next level.</div>
                                    <div class="testimonial-author">Lindsay Rune - Manager</div>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ URL::asset('welcomepage/images/testimonial-6.jpg') }}"
                                    alt="alternative">
                                <div class="card-body">
                                    <div class="testimonial-text">My goals for using Aria's services seemed high
                                        when I first set them but they've met them with no problems.</div>
                                    <div class="testimonial-author">Ann Black - Consultant</div>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide --> --}}

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of sliedr-container -->
            <!-- end of card slider -->

        </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->


    {{-- <!-- Projects -->
    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">GALLERY</div>
                    <h2>Gallery Kegiatan MYP-HS Al Firdaus</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->

                    <div class="grid">
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-1">
                                <div class="element-item-overlay"><span>Online Banking</span></div><img
                                    src="{{ URL::asset('welcomepage/images/project-1.jpg') }}" alt="alternative">
    </a>
    </div>
    <div class="element-item development">
        <a class="popup-with-move-anim" href="#project-2">
            <div class="element-item-overlay"><span>Classic Industry</span></div><img
                src="{{ URL::asset('welcomepage/images/project-2.jpg') }}" alt="alternative">
        </a>
    </div>
    <div class="element-item design development marketing">
        <a class="popup-with-move-anim" href="#project-3">
            <div class="element-item-overlay"><span>BoomBap Audio</span></div><img
                src="{{ URL::asset('welcomepage/images/project-3.jpg') }}" alt="alternative">
        </a>
    </div>
    <div class="element-item design development marketing">
        <a class="popup-with-move-anim" href="#project-4">
            <div class="element-item-overlay"><span>Van Moose</span></div><img
                src="{{ URL::asset('welcomepage/images/project-4.jpg') }}" alt="alternative">
        </a>
    </div>
    <div class="element-item design development marketing seo">
        <a class="popup-with-move-anim" href="#project-5">
            <div class="element-item-overlay"><span>Joy Moments</span></div><img
                src="{{ URL::asset('welcomepage/images/project-5.jpg') }}" alt="alternative">
        </a>
    </div>
    <div class="element-item design marketing seo">
        <a class="popup-with-move-anim" href="#project-6">
            <div class="element-item-overlay"><span>Spark Events</span></div><img
                src="{{ URL::asset('welcomepage/images/project-6.jpg') }}" alt="alternative">
        </a>
    </div>
    <div class="element-item design marketing">
        <a class="popup-with-move-anim" href="#project-7">
            <div class="element-item-overlay"><span>Casual Wear</span></div><img
                src="{{ URL::asset('welcomepage/images/project-7.jpg') }}" alt="alternative">
        </a>
    </div>
    <div class="element-item design marketing">
        <a class="popup-with-move-anim" href="#project-8">
            <div class="element-item-overlay"><span>Zazoo Apps</span></div><img
                src="{{ URL::asset('welcomepage/images/project-8.jpg') }}" alt="alternative">
        </a>
    </div>
    </div> <!-- end of grid -->
    <!-- end of filter -->

    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-1.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Online Banking</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-2.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic Industry</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-3.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BoomBap Audio</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-4.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Van Moose</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-5.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-6.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-7.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="{{ URL::asset('welcomepage/images/project-8.jpg') }}" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your
                    current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get
                    in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help
                        you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button"
                    href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes --> --}}



    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 MYP-HS Al Firdaus</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{ URL::asset('welcomepage/js/jquery.min.js') }}"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ URL::asset('welcomepage/js/popper.min.js') }}"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ URL::asset('welcomepage/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ URL::asset('welcomepage/js/jquery.easing.min.js') }}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ URL::asset('welcomepage/js/swiper.min.js') }}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{ URL::asset('welcomepage/js/jquery.magnific-popup.js') }}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="{{ URL::asset('welcomepage/js/morphext.min.js') }}"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="{{ URL::asset('welcomepage/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
    <script src="{{ URL::asset('welcomepage/js/validator.min.js') }}"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ URL::asset('welcomepage/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>