<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <div class="page-container">
            <!-- Hexagon -->

            <div class="hexagon-container opened">
                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content="About Us"><i
                            class="fa-regular fa-address-card"></i></span>

                    <!-- Sub Categories -->
                    <div class="sub-categories">
                        <div class="hexagon">
                            <span class="hex-title" data-tippy-content="Career"><i class="fa-solid fa-eject"></i></span>

                            <!-- Sub Sub Categories -->
                            <div class="sub-sub-category">
                                <div class="hexagon" data-id="careers">
                                    <span class="hex-title" data-tippy-content="Career"><i
                                            class="fa-solid fa-eject"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="hexagon">
                            <span class="hex-title" data-tippy-content="Contact Us"><i
                                    class="fa-solid fa-headset"></i></span>
                            <!-- Sub Sub Categories -->
                            <div class="sub-sub-category">
                                <div class="hexagon" data-id="contact">
                                    <span class="hex-title" data-tippy-content="Contact Us"><i
                                            class="fa-solid fa-headset"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="hexagon">
                            <span class="hex-title" data-tippy-content="About Us"><i
                                    class="fa-regular fa-address-card"></i></span>
                            <!-- Sub Sub Categories -->
                            <div class="sub-sub-category">
                                <div class="hexagon" data-id="vision">
                                    <span class="hex-title" data-tippy-content="Our Vision"><i
                                            class="fa-solid fa-arrows-to-eye"></i></span>
                                </div>
                                <div class="hexagon" data-id="mission">
                                    <span class="hex-title" data-tippy-content="Our Mission"><i
                                            class="fa-solid fa-bullseye"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="hexagon">
                            <span class="hex-title" data-tippy-content="News & Events"><i
                                    class="fa-regular fa-newspaper"></i></span>
                            <!-- Sub Sub Categories -->
                            <div class="sub-sub-category">
                                <div class="hexagon" data-id="news">
                                    <span class="hex-title" data-tippy-content="News & Events"><i
                                            class="fa-regular fa-newspaper"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="hexagon">
                            <span class="hex-title" data-tippy-content="Our Team"><i
                                    class="fa-solid fa-people-group"></i></span>
                            <!-- Sub Sub Categories -->
                            <div class="sub-sub-category">
                                <div class="hexagon" data-id="team">
                                    <span class="hex-title" data-tippy-content="Our Team"><i
                                            class="fa-solid fa-people-group"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content="Solutions"><i class="fa-solid fa-dna"></i></span>

                    <!-- Sub Categories -->
                    <div class="sub-categories">

                        @foreach ($solutions as $solution)
                            <div class="hexagon">

                                <span class="hex-title" data-tippy-content="{{ $solution->title }}"><i
                                        class="fa-solid fa-unlock"></i></span>


                                <!-- Sub Sub Categories -->
                                @foreach ($solution->sub_title as $subtitle)
                                    <div class="sub-sub-category">
                                        <div class="hexagon" data-id="emailSecurity">
                                            <span class="hex-title" data-tippy-content="{{ $subtitle->sub_title }}"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        @endforeach

                        <!--   <div class="hexagon">
                            <span class="hex-title" data-tippy-content="IT Management"><i
                                    class="fa-solid fa-network-wired"></i></span>
                            Sub Sub Categories
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
                        </div> -->
                    </div>
                </div>
                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content="Services"><i class="fa-solid fa-gears"></i></span>
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

                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content="Man Power Services"><i
                            class="fa-solid fa-user-gear"></i></span>
                </div>
                <div class="hexagon main-hexagon animated">
                    <span class="hex-title" data-tippy-content="Management Services"><i
                            class="fa-solid fa-users-gear"></i></span>
                </div>
                <div class="hexagon main-hexagon animated">
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
                                this is sub sub ipsum dolor sit amet, consectetur adipisicing
                                elit. Accusamus harum laborum unde! Quod nobis necessitatibus
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
                                this is email psum dolor sit amet, consectetur adipisicing
                                elit. Accusamus harum laborum unde! Quod nobis necessitatibus
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
