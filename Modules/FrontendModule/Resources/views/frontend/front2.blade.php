<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Pioneers</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <!-- owl carousel slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- main css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="page-wrapper">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <ul class="social-icons">
                            <li>
                                <a href="{{ $webdata->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $webdata->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="{{ $webdata->twitter }}"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ $webdata->instagram }}"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-sm-end justify-content-center gap-4">
                            <div class="contact-area d-flex align-items-center gap-2">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:{{ $webdata->phone }}">
                                    <span class="d-block text">Call Us</span>
                                    <span class="d-block title">{{ $webdata->phone }}</span>
                                </a>
                            </div>


                            <div class="contact-area d-flex align-items-center gap-2">

                                <i class="fa-solid fa-globe"></i>
                                @foreach ($DASHBOARD_LANGUAGES as $key => $value)
                                    <a href="{{ url($DASHBOARD_PATH . '/change/language/' . $key) }}">
                                        <span class="d-block text">{{ $value }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="header-left">
                    <h3>{{ $webdata->translate('en')->site_name }}</h3>
                    <p class="phone-num">C.R : {{ $webdata->phone }}</p>
                </div>
                <div class="logo">
                    <img src="{{ asset('assets/img/header-logo.png') }}" alt="" />
                </div>
                <div class="header-right">
                    <h3>{{ $webdata->translate('ar')->site_name }}</h3>
                    <p class="phone-num">س.ت: {{ $webdata->phone }}</p>
                </div>
            </div>
        </header>

        <!-- Main Slider -->
        <div class="main-slider">
            <div class="main-banner-wrapper">
                <div class="banner-slides owl-theme owl-carousel">
                    <div class="slide slide-one" style="background-image: url(assets/img/slider/1.jpg)">
                        <div class="container">
                            <div class="row banner-content">
                                <div class="col-lg-6">
                                    <h2 class="banner-title">
                                        Revolutionize Your Business, Unleash The Future!
                                    </h2>
                                    <p class="banner-text">
                                        Rawand Tech, your premier destination for dynamic services
                                        in the realm of technology. As a leading programming
                                        company, we specialize in delivering cutting-edge
                                        solutions tailored to your business needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide-one" style="background-image: url(assets/img/slider/2.jpg)">
                        <div class="container">
                            <div class="row banner-content">
                                <div class="col-lg-6">
                                    <h2 class="banner-title">
                                        Effictively Integrate Your Business Functions
                                    </h2>
                                    <p class="banner-text">
                                        Rawand Tech, your premier destination for dynamic services
                                        in the realm of technology. As a leading programming
                                        company, we specialize in delivering cutting-edge
                                        solutions tailored to your business needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-btn-block banner-carousel-btn">
                    <span class="carousel-btn left-btn"><i class="fa-solid fa-angle-left"></i></span>
                    <span class="carousel-btn right-btn"><i class="fa-solid fa-angle-right"></i></span>
                </div>
            </div>
        </div>

        <section class="home-wrapper">
            <div class="page-container">
                <!-- Hexagon -->
                <div class="hexagon-container opened">
                    <div class="hexagon main-hexagon animated">
                        <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.about_us')><i
                                class="fa-regular fa-address-card"></i></span>

                        <!-- Sub Categories -->
                        <div class="sub-categories">
                            @foreach ($abouts as $about)
                                <div class="hexagon">
                                    <span class="hex-title" data-tippy-content="{{ $about->title }}"><i
                                            class="fa-solid fa-eject"></i></span>


                                    <!-- Sub Sub Categories -->
                                    <div class="sub-sub-category">
                                        @foreach ($about->sub_title as $subtitle)
                                            <div class="hexagon" data-id="{{ 'about' . $subtitle->id }}">
                                                <span class="hex-title"
                                                    data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                        class="fa-solid fa-eject"></i></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hexagon main-hexagon animated">
                        <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.solutions')><i
                                class="fa-solid fa-dna"></i></span>
                        <div class="sub-categories">
                            <div class="hexagon">
                                <span class="hex-title" data-tippy-content="Cyber Security"><i
                                        class="fa-solid fa-unlock"></i></span>
                                <!-- Sub Sub Categories -->
                                <div class="sub-sub-category">
                                    <div class="hexagon" data-id="emailSecurity">
                                        <span class="hex-title" data-tippy-content="Email Security"><i
                                                class="fa-regular fa-envelope"></i></span>
                                    </div>
                                    <div class="hexagon" data-id="risk">
                                        <span class="hex-title" data-tippy-content="Risk & Compliance"><i
                                                class="fa-solid fa-asterisk"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="hexagon">
                                <span class="hex-title" data-tippy-content="IT Management"><i
                                        class="fa-solid fa-network-wired"></i></span>
                                <!-- Sub Sub Categories -->
                                <div class="sub-sub-category">
                                    <div class="hexagon" data-id="itManagement">
                                        <span class="hex-title" data-tippy-content="IT Management & Analytics"><i
                                                class="fa-solid fa-network-wired"></i></span>
                                    </div>
                                    <div class="hexagon" data-id="securityInfo">
                                        <span class="hex-title" data-tippy-content="Security Information"><i
                                                class="fa-solid fa-shield-halved"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hexagon main-hexagon blue animated">
                        <span class="hex-title" data-tippy-content="Services"><i
                                class="fa-solid fa-gears"></i></span>
                        <div class="sub-categories">
                            <div class="hexagon"></div>
                            <div class="hexagon"></div>
                            <div class="hexagon"></div>
                        </div>
                    </div>

                    <!-- Centered Hexagon -->
                    <div class="hexagon middle">
                        <img src="{{ asset('assets/img/logo.png') }}" />
                    </div>

                    <div class="hexagon main-hexagon blue animated">
                        <span class="hex-title" data-tippy-content="Man Power Services"><i
                                class="fa-solid fa-user-gear"></i></span>
                    </div>
                    <div class="hexagon main-hexagon orange animated">
                        <span class="hex-title" data-tippy-content="Management Services"><i
                                class="fa-solid fa-users-gear"></i></span>
                    </div>
                    <div class="hexagon main-hexagon orange animated">
                        <span class="hex-title"><i class="fa-brands fa-app-store"></i></span>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="right-side">
                    <div id="content">
                        <div class="tab-content" id="careers">
                            <h1 class="main-title">Careers</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                            <div class="category-slider">
                                <div class="slides owl-theme owl-carousel">
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/1.jpg') }}" />
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/2.jpg') }}" />
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/3.jpg') }}" />
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/4.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="contact">
                            <h1 class="main-title">Contact Us</h1>
                        </div>
                        <div class="tab-content" id="vision">
                            <h1 class="main-title">Our Vision</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                            <div class="category-slider">
                                <div class="slides owl-theme owl-carousel">
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/3.jpg') }}" />
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/1.jpg') }}" />
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/2.jpg') }}" />
                                    </div>
                                    <div class="category-img">
                                        <img src="{{ asset('assets/img/cat-slides/5.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="mission">
                            <h1 class="main-title">Our Mission</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                        </div>
                        <div class="tab-content" id="news">
                            <h1 class="main-title">News &amp; Events</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                        </div>
                        <div class="tab-content" id="team">
                            <h1 class="main-title">Our Team</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                        </div>
                        <div class="tab-content" id="emailSecurity">
                            <h1 class="main-title">Email Security</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                        </div>
                        <div class="tab-content" id="risk">
                            <h1 class="main-title">Risk &amp; Compliance</h1>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempora impedit amet ratione vitae, aliquam
                                    doloremque libero eos quam et alias veritatis, pariatur.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Accusamus harum laborum unde! Quod nobis necessitatibus
                                    consequatur tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="footer-row">
                        <div class="address address-ar">
                            <img src="{{ asset('assets/img/icons/address.png') }}" />
                            ص.ب: {{ $webdata->translate('ar')->address }} ت: {{ $webdata->phone }}

                        </div>
                        <div class="mail">
                            <img src="{{ asset('assets/img/icons/envelope.png') }}" />
                            {{ $webdata->email1 }}
                        </div>
                    </div>
                    <div class="footer-row">
                        <div class="address address-en">
                            <img src="{{ asset('assets/img/icons/address.png') }}" />
                            P.O:{{ $webdata->translate('en')->address }}
                            Tel: {{ $webdata->phone }}
                        </div>
                        <div class="mail">
                            <img src="{{ asset('assets/img/icons/web.png') }}" />
                            {{ $webdata->email2 }}
                        </div>
                    </div>
            </footer>
        </section>
    </div>

    <!-- whatsapp -->
    <div id="whatsapp">
        <a href="https://wa.me/{{ $webdata->whatsapp }}" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <div class="light"></div>
    </div>
</body>

<!-- Jquery -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!--        carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- Tooltip -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<!-- Main Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
