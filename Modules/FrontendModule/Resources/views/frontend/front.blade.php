<html lang="en">

<head>
    <!--start  seo tages -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="{{$seo_info->keys??''}}">
            <meta name="description" content=" {{$seo_info->desc??''}}">
            <meta name="author" content="{{$seo_info->author??''}}">
            <meta name="robots" content="index,follow">
            <meta itemprop="name" content="{{$seo_info->name }}">
            <meta itemprop="description" content="{{$seo_info->desc}}">
            <meta property="og:title" content="{{$seo_info->name}}">
            <meta property="og:type" content="website">
            <meta property="og:url" content="{{$seo_info->url??'#'}}">
            <meta property="og:description" content="{{$seo_info->desc}}">
            <meta property="og:site_name" content="pioneer">

             <meta property="og:image" content="{{($seo_info!=null)?asset('images/seo/'.$seo_info->image):asset('images/img/logo.svg')}}" />


                <meta name="twitter:site" content="http://sitelink.com">
                <meta name="twitter:title" content="{{$seo_info->name}}">
                <meta name="twitter:description" content="{{$seo_info->desc}}">

                    <meta name="twitter:image" content="{{($seo_info!=null)?asset('images/seo/'.$seo_info->image):asset('images/img/logo.svg')}}">



      		  <link rel="canonical" href="{{$seo_info->url??'#'}}">
    <!--end  seo tages -->

    <title>Modern Pioneers</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <!-- main css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <section class="home-wrapper">
        <div class="d-flex order-lg-2 my-auto ms-auto">

            <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex ms-auto">


                        @if (!empty($DASHBOARD_LANGUAGES) && count($DASHBOARD_LANGUAGES) > 1)
                            <div class="dropdown header-flags">

                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                    @foreach ($DASHBOARD_LANGUAGES as $key => $value)
                                        <a href="{{ url($DASHBOARD_PATH . '/change/language/' . $key) }}"
                                            class="dropdown-item d-flex">
                                            <div class="d-flex">
                                                <span class="my-auto">{{ $value }}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
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

                                @foreach ($about->sub_title as $subtitle)
                                    <div class="sub-sub-category">
                                        <div class="hexagon" data-id="{{ 'about' . $subtitle->id }}">
                                            <span class="hex-title" data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.solutions')><i class="fa-solid fa-dna"></i></span>

                    <!-- Sub Categories -->
                    <div class="sub-categories">

                        @foreach ($solutions as $solution)
                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content="{{ $solution->title }}"><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->
                                @foreach ($solution->sub_title as $subtitle)
                                    <div class="sub-sub-category">
                                        <div class="hexagon" data-id="{{ 'solution' . $subtitle->id }}">
                                            <span class="hex-title" data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        @endforeach


                    </div>
                </div>

                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content="@lang('frontendmodule::front.services')"><i
                            class="fa-solid fa-gears"></i></span>
                    <div class="sub-categories">

                        @foreach ($services as $service)
                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content="{{ $service->title }}"><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->
                                @foreach ($service->sub_title as $subtitle)
                                    <div class="sub-sub-category">
                                        <div class="hexagon" data-id="{{ 'service' . $subtitle->id }}">
                                            <span class="hex-title" data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        @endforeach


                    </div>
                </div>

                <!-- Centered Hexagon -->
                <div class="hexagon middle">
                    <img src="{{ asset('assets/img/logo.png') }}" />
                </div>

                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.manpower_services')><i
                            class="fa-solid fa-user-gear"></i></span>

                    <!-- Sub Categories -->
                    <div class="sub-categories">

                        @foreach ($manpower_services as $manpower_service)
                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content="{{ $manpower_service->title }}"><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->
                                @foreach ($manpower_service->sub_title as $subtitle)
                                    <div class="sub-sub-category">
                                        <div class="hexagon" data-id="{{ 'manpower' . $subtitle->id }}">
                                            <span class="hex-title" data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content=@lang('frontendmodule::front.management_services')><i
                            class="fa-solid fa-users-gear"></i></span>

                    <!-- Sub Categories -->
                    <div class="sub-categories">

                        @foreach ($management_services as $managent_service)
                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content="{{ $managent_service->title }}"><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->
                                @foreach ($managent_service->sub_title as $subtitle)
                                    <div class="sub-sub-category">
                                        <div class="hexagon" data-id="{{ 'management' . $subtitle->id }}">
                                            <span class="hex-title" data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        @endforeach


                    </div>

                </div>
                <div class="hexagon main-hexagon animated">
                    <span class="hex-title"><i class="fa-brands fa-app-store"></i></span>
                </div>
            </div>



            <div class="right-side">
                <div id="content">

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
                            </div>
                        @endforeach
                    @endforeach


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
                            </div>
                        @endforeach
                    @endforeach




                </div>
            </div>



        </div>
    </section>
</body>

<!-- Jquery -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- Tooltip -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<!-- Main Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
