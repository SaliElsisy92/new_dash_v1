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
                    @foreach ($slider as $sl)
                        <div class="slide slide-one" style="background-image:{{ $sl->file }}">
                            <div class="container">
                                <div class="row banner-content">
                                    <div class="col-lg-6">
                                        <h2 class="banner-title">
                                            {{ $sl->title }}
                                        </h2>
                                        <p class="banner-text">
                                            {{ $sl->desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


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
                                                        class="fa-regular fa-envelope"></i></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="hexagon main-hexagon animated">
                        <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.solutions&services')><i
                                class="fa-solid fa-dna"></i></span>
                        <div class="sub-categories">
                            @foreach ($solutions as $solution)
                                <div class="hexagon">
                                    <span class="hex-title" data-tippy-content="{{ $solution->title }}"><i
                                            class="fa-solid fa-unlock"></i></span>

                                    <!-- Sub Sub Categories -->

                                    <div class="sub-sub-category">
                                        @foreach ($solution->sub_title as $subtitle)
                                            <div class="hexagon" data-id="{{ 'solution' . $subtitle->id }}">
                                                <span class="hex-title"
                                                    data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                        class="fa-regular fa-envelope"></i></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hexagon main-hexagon blue animated">
                        <span class="hex-title" data-tippy-content="@lang('frontendmodule::front.consultation')"><i
                                class="fa-solid fa-gears"></i></span>
                        <div class="sub-categories">
                            @foreach ($services as $service)
                                <div class="hexagon">
                                    <span class="hex-title" data-tippy-content="{{ $service->title }}"><i
                                            class="fa-solid fa-unlock"></i></span>

                                    <!-- Sub Sub Categories -->

                                    <div class="sub-sub-category">
                                        @foreach ($service->sub_title as $subtitle)
                                            <div class="hexagon" data-id="{{ 'solution' . $subtitle->id }}">
                                                <span class="hex-title"
                                                    data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                        class="fa-regular fa-envelope"></i></span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Centered Hexagon -->
                    <div class="hexagon middle">
                        <img src="{{ asset('assets/img/logo.png') }}" />
                    </div>

                    <div class="hexagon main-hexagon blue animated">
                        <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.retail')><i
                                class="fa-solid fa-user-gear"></i></span>
                        <!-- Sub Categories -->
                        <div class="sub-categories">

                            @foreach ($management_services as $managent_service)
                                <div class="hexagon">

                                    <span class="hex-title" data-tippy-content="{{ $managent_service->title }}"><i
                                            class="fa-solid fa-unlock"></i></span>


                                    <!-- Sub Sub Categories -->

                                    <div class="sub-sub-category">
                                        @foreach ($managent_service->sub_title as $subtitle)
                                            <div class="hexagon" data-id="{{ 'management' . $subtitle->id }}">
                                                <span class="hex-title"
                                                    data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                        class="fa-regular fa-envelope"></i></span>
                                            </div>
                                        @endforeach
                                    </div>


                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="hexagon main-hexagon orange animated">
                        <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.vendor')><i
                                class="fa-solid fa-users-gear"></i></span>
                        <div class="sub-categories">

                            @foreach ($manpower_services as $manpower_service)
                                <div class="hexagon">

                                    <span class="hex-title" data-tippy-content="{{ $manpower_service->title }}"><i
                                            class="fa-solid fa-unlock"></i></span>


                                    <!-- Sub Sub Categories -->

                                    <div class="sub-sub-category">
                                        @foreach ($manpower_service->sub_title as $subtitle)
                                            <div class="hexagon" data-id="{{ 'manpower' . $subtitle->id }}">
                                                <span class="hex-title"
                                                    data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                        class="fa-regular fa-envelope"></i></span>
                                            </div>
                                        @endforeach
                                    </div>


                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="hexagon main-hexagon orange animated">
                        <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.contact_us')><i
                                class="fa-brands fa-app-store"></i></span>

                        <div class="sub-categories">


                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.fax')><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->

                                <div class="sub-sub-category">

                                    <div class="hexagon" data-id="fax">
                                        <span class="hex-title" data-tippy-content="Fax"><i
                                                class="fa-regular fa-envelope"></i></span>
                                    </div>

                                </div>


                            </div>

                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.landline')><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->

                                <div class="sub-sub-category">

                                    <div class="hexagon" data-id="landline">
                                        <span class="hex-title" data-tippy-content="land Line"><i
                                                class="fa-regular fa-envelope"></i></span>
                                    </div>

                                </div>


                            </div>

                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.email')><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->

                                <div class="sub-sub-category">

                                    <div class="hexagon" data-id="email">
                                        <span class="hex-title" data-tippy-content="email"><i
                                                class="fa-regular fa-envelope"></i></span>
                                    </div>

                                </div>


                            </div>



                        </div>



                    </div>
                </div>

                <!-- Right Side -->
                <div class="right-side">
                    <div id="content">


                        @foreach ($solutions as $solution)
                            @foreach ($solution->sub_title as $solution_subtitle)
                                <div class="tab-content" id="{{ 'solution' . $solution_subtitle->id }}">
                                    <h1 class="main-title">{{ $solution_subtitle->sub_title }}
                                    </h1>
                                    <div class="desc">
                                        <p>
                                            {{ $solution_subtitle->content }}
                                        </p>

                                    </div>

                                    <div class="category-slider">
                                        <div class="slides owl-theme owl-carousel">
                                            @foreach ($solution_subtitle->files as $image)
                                                <div class="category-img">
                                                    <img src="{{ $image->url }}" />
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                        @foreach ($abouts as $about)
                            @foreach ($about->sub_title as $about_subtitle)
                                <div class="tab-content" id="{{ 'about' . $about_subtitle->id }}">
                                    <h1 class="main-title">{{ $about_subtitle->sub_title }}
                                    </h1>
                                    <div class="desc">
                                        <p>
                                            {{ $about_subtitle->content }}
                                        </p>
                                    </div>
                                    <div class="category-slider">
                                        <div class="slides owl-theme owl-carousel">
                                            @foreach ($about_subtitle->files as $image)
                                                <div class="category-img">
                                                    <img src="{{ $image->url }}" />
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach


                        @foreach ($services as $service)
                            @foreach ($service->sub_title as $service_subtitle)
                                <div class="tab-content" id="{{ 'service' . $service_subtitle->id }}">
                                    <h1 class="main-title">{{ $service_subtitle->sub_title }}
                                    </h1>
                                    <div class="desc">
                                        <p>
                                            {{ $service_subtitle->content }}
                                        </p>

                                    </div>

                                    <div class="category-slider">
                                        <div class="slides owl-theme owl-carousel">
                                            @foreach ($service_subtitle->files as $image)
                                                <div class="category-img">
                                                    <img src="{{ $image->url }}" />
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach


                        @foreach ($manpower_services as $manpower_service)
                            @foreach ($manpower_service->sub_title as $subtitle)
                                <div class="tab-content" id="{{ 'manpower' . $subtitle->id }}">
                                    <h1 class="main-title">{{ $subtitle->sub_title }}
                                    </h1>
                                    <div class="desc">
                                        <p>
                                            {{ $subtitle->content }}
                                        </p>

                                    </div>

                                    <div class="category-slider">
                                        <div class="slides owl-theme owl-carousel">
                                            @foreach ($subtitle->files as $image)
                                                <div class="category-img">
                                                    <img src="{{ $image->url }}" />
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach


                        @foreach ($management_services as $manag_service)
                            @foreach ($manag_service->sub_title as $manag_subtitle)
                                <div class="tab-content" id="{{ 'management' . $manag_subtitle->id }}">
                                    <h1 class="main-title">{{ $manag_subtitle->sub_title }}
                                    </h1>
                                    <div class="desc">
                                        <p>
                                            {{ $manag_subtitle->content }}

                                        </p>

                                    </div>

                                    <div class="category-slider">
                                        <div class="slides owl-theme owl-carousel">
                                            @foreach ($manag_subtitle->files as $image)
                                                <div class="category-img">
                                                    <img src="{{ $image->url }}" />
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach




                        <div class="tab-content" id="fax">
                            <h1 class="main-title">@lang('frontendmodule::front.fax') :
                            </h1>
                            <div class="desc">
                                <p>
                                    {{ $webdata->fax }}

                                </p>
                            </div>
                        </div>

                        <div class="tab-content" id="landline">
                            <h1 class="main-title">@lang('frontendmodule::front.landline') :
                            </h1>
                            <div class="desc">
                                <p>
                                    {{ $webdata->landline }}

                                </p>
                            </div>
                        </div>

                        <div class="tab-content" id="email">
                            <h1 class="main-title"> @lang('frontendmodule::front.email') :
                            </h1>
                            <div class="desc">
                                <p>
                                    {{ $webdata->email1 }}

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
