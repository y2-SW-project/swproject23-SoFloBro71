<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crescent Moon Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link rel="stylesheet" href="../css/app.css" />

<!-- START OF HEADER / NAV -->

    </head>
    <body>
        <nav class="p-3 mb-3 border-bottom primary-font root-gradient text-light">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        
                <h1 class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <a href="index.html" class="nav-link px-2 link-light ">Crescent Moon Events</a>
                </h1>
        
                                <!-- PROFILE PIC -->
                                <div class="dropdown text-end">
                                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                        @if (Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                @auth
                                                    <a href="{{ url('/RetroVibes') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">games</a>
                                                @else
                                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    <ul class="dropdown-menu text-small">
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                    </ul>
                                </div>

                <!-- BURGER MENU -->
                <nav class="navbar navbar-dark">
                    <div class="container">

                        <button class="navbar-toggler " type="button " data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                <!-- HOME LINK -->
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>

                            <!-- TYPE OF EVENT DROPDOWN -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Explore</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">RPG</a></li>
                                    <li><a class="dropdown-item" href="#">Action Adventure</a></li>
                                    <li><a class="dropdown-item" href="#">Story-Based</a></li>
                                    <li><a class="dropdown-item" href="#">Survival</a></li>
                                    <li><a class="dropdown-item" href="#">Horror</a></li>
                                    <li><a class="dropdown-item" href="#">Thriller</a></li>
                                    <li><a class="dropdown-item" href="#">Simulation</a></li>
                                    <li><a class="dropdown-item" href="#">Puzzle Solving</a></li>
                                </ul>
                            </li>

                            <!-- LOCATION DROPDOWN -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Creators</a>

                                <ul class="dropdown-menu scroll-menu scroll-menu-2x">
                                    <li><a class="dropdown-item" href="#"> Valve</a><li>
                                        <li><a class="dropdown-item" href="#"> Bandai Namco Entertainment</a></li>
                                        <li><a class="dropdown-item" href="#"> Deck Nine Games</a></li>
                                        <li><a class="dropdown-item" href="#"> Innersloth</a></li>
                                        <li><a class="dropdown-item" href="#"> Toby Fox</a></li>
                                        <li><a class="dropdown-item" href="#">Team Cherry </a></li><!----></ul>
                                    </li>
                                </ul>

                            <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn bg-primary btn-lg text-light btn-outline-white third-font" type="submit">Search</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </nav>
            </div>
        </nav>

<!-- END OF HEADER / NAV -->

<!-- START OF TOP CAROUSEL -->

        <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="images/Cult_ad.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-flex justify-content-md-top">
                        <a href="melanie-martinez.html" class="btn btn-lg bg-primary text-light third-font">Buy Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Trek_ad.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-flex justify-content-md-top">
                        <a href="daft-punk.html" class="btn btn-lg bg-primary text-light third-font">Buy Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Card-Shark_ad.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-flex justify-content-md-top">
                        <a href="dua-lipa.html" class="btn btn-lg bg-primary text-light third-font">Buy Now</a>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

<!-- END OF TOP CAROUSEL -->

        <!-- .container-fluid.bg-primary>.row>.col-md-6*2 -->

<!-- START OF CARDS -->

        <!-- START NIGHTLIFE -->

    <h1 class="padding_1 text-dark primary-font text-center">Nightlife & Clubs</h1>

        <div class="row padding_1">
            <div class="col ">
                <div class="card shadow-lg">
                    <a href="melanie-martinez.html"><img src="images/Melanie_Martinez_-_K-12.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Melanie Martinez</a></h3>
                    <h5 class="text-primary text-opacity-75">K-12</h5>
                    <p class="card-text">K-12 is the second studio album by American singer Melanie Martinez. It was released with an accompanying film of the same name on September 6, 2019, through Atlantic Records. </p>
                        <a href="melanie-martinez.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>

            <div class="col ">
                <div class="card shadow-lg">
                    <a href="daft-punk.html"><img src="images/dfconcert.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Daft Punk</a></h3>
                    <h5 class="text-primary text-opacity-75">Alive 2007</h5>
                    <p class="card-text">Alive 2007 is the second live album by the French electronic music duo Daft Punk, released on 19 November 2007 by Virgin Records.</p>
                        <a href="daft-punk.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-lg">
                    <a href="dua-lipa.html"><img src="images/dua-lipa-cover.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Dua Lipa</a></h3>
                    <h5 class="text-primary text-opacity-75">Future Nostalgia</h5>
                    <p class="card-text">The Future Nostalgia Tour was the second concert tour and first arena tour by English singer Dua Lipa.</p>
                        <a href="dua-lipa.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
        </div>

        <!-- END NIGHTLIFE -->

        <!-- START GEEK CULTURE -->

        <h1 class="padding_1 text-dark primary-font text-center">Geek Culture</h1>

        <div class="row padding_1">
            <div class="col">
                <div class="card shadow-lg">
                    <a href="melanie-martinez.html"><img src="images/Melanie_Martinez_-_K-12.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Melanie Martinez</a></h3>
                    <h5 class="text-primary text-opacity-75">K-12</h5>
                    <p class="card-text">K-12 is the second studio album by American singer Melanie Martinez. It was released with an accompanying film of the same name on September 6, 2019, through Atlantic Records. </p>
                        <a href="melanie-martinez.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-lg">
                    <a href="daft-punk.html"><img src="{{URL::asset('/images/dfconcert.png')}}" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Daft Punk</a></h3>
                    <h5 class="text-primary text-opacity-75">Alive 2007</h5>
                    <p class="card-text">Alive 2007 is the second live album by the French electronic music duo Daft Punk, released on 19 November 2007 by Virgin Records.</p>
                        <a href="daft-punk.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-lg">
                    <a href="dua-lipa.html"><img src="images/dua-lipa-cover.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Dua Lipa</a></h3>
                    <h5 class="text-primary text-opacity-75">Future Nostalgia</h5>
                    <p class="card-text">The Future Nostalgia Tour was the second concert tour and first arena tour by English singer Dua Lipa.</p>
                        <a href="dua-lipa.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
        </div>

        <!-- END GEEK CULTURE -->

        <!-- START CONCERTS + MUSIC -->

        <h1 class="padding_1 text-dark primary-font text-center">Concerts & Music Festivals</h1>

        <div class="row padding_1">
            <div class="col ">
                <div class="card shadow-lg">
                    <a href="melanie-martinez.html"><img src="images/Melanie_Martinez_-_K-12.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Melanie Martinez</a></h3>
                    <h5 class="text-primary text-opacity-75">K-12</h5>
                    <p class="card-text">K-12 is the second studio album by American singer Melanie Martinez. It was released with an accompanying film of the same name on September 6, 2019, through Atlantic Records. </p>
                        <a href="melanie-martinez.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-lg">
                    <a href="daft-punk.html"><img src="images/dfconcert.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Daft Punk</a></h3>
                    <h5 class="text-primary text-opacity-75">Alive 2007</h5>
                    <p class="card-text">Alive 2007 is the second live album by the French electronic music duo Daft Punk, released on 19 November 2007 by Virgin Records.</p>
                        <a href="daft-punk.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-lg">
                    <a href="dua-lipa.html"><img src="images/dua-lipa-cover.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Dua Lipa</a></h3>
                    <h5 class="text-primary text-opacity-75">Future Nostalgia</h5>
                    <p class="card-text">The Future Nostalgia Tour was the second concert tour and first arena tour by English singer Dua Lipa.</p>
                        <a href="dua-lipa.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
        </div>

        <!-- END CONCERTS + MUSIC -->

        <!-- START THEATER + COMEDY -->

        <h1 class="padding_1 text-dark primary-font text-center">Theater,Comedy & Shows</h1>
        <div class="row padding_1">
            <div class="col ">
                <div class="card shadow-lg">
                    <a href="melanie-martinez.html"><img src="images/Melanie_Martinez_-_K-12.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Melanie Martinez</a></h3>
                    <h5 class="text-primary text-opacity-75">K-12</h5>
                    <p class="card-text">K-12 is the second studio album by American singer Melanie Martinez. It was released with an accompanying film of the same name on September 6, 2019, through Atlantic Records. </p>
                        <a href="melanie-martinez.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-lg">
                    <a href="daft-punk.html"><img src="images/dfconcert.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Daft Punk</a></h3>
                    <h5 class="text-primary text-opacity-75">Alive 2007</h5>
                    <p class="card-text">Alive 2007 is the second live album by the French electronic music duo Daft Punk, released on 19 November 2007 by Virgin Records.</p>
                        <a href="daft-punk.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-lg">
                    <a href="dua-lipa.html"><img src="images/dua-lipa-cover.png" class="card-img-top zoom" alt="..."></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">Dua Lipa</a></h3>
                    <h5 class="text-primary text-opacity-75">Future Nostalgia</h5>
                    <p class="card-text">The Future Nostalgia Tour was the second concert tour and first arena tour by English singer Dua Lipa.</p>
                        <a href="dua-lipa.html" class="btn bg-primary text-light third-font">Buy Now</a>
                </div>
                </div>
            </div>
        </div>

        <!-- END THEATER + COMEDY-->

<!-- END OF CARDS -->

<!-- START OF TICKET OFFER -->

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
        <img src="images/purple.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="images/purple.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="images/purple.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="images/purple.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
</div>

<!-- FOOTER -->

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 padding_1">

    <!-- Section: Form -->
    <section class="">
        <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
                <p class="pt-2">
                    <strong>Sign up for our newsletter</strong>
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                    <input type="email" id="form5Example21" class="form-control" />
                    <label class="form-label" for="form5Example21">Email address</label>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
                <!-- Submit button -->
                <a href="#" class="btn bg-primary text-light third-font">Subscribe</a>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Links -->
    <section class="">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-2 col-md-7 mb-4 mb-md-0">
                <h5 class="text-uppercase">Account</h5>

        <ul class="list-unstyled mb-0">
            <li>
                <a href="#!" class="text-white text-decoration-none">Account Settings </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Order History </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Notification Settings <a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Privacy Policy </a>
            </li>
        </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Assistance</h5>

        <ul class="list-unstyled mb-0">
            <li>
                <a href="#!" class="text-white text-decoration-none">Support Center </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Cancellation Policy </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Accessibility Statement </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Terms & Conditions </a>
            </li>
        </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">About Us </h5>

        <ul class="list-unstyled mb-0">
            <li>
                <a href="#!" class="text-white text-decoration-none">About Us </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Blog </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Locations </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Partnerships </a>
            </li>
        </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Connect With Us </h5>

        <ul class="list-unstyled mb-0">
            <li>
                <a href="#!" class="text-white text-decoration-none">Contact Us</a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Twitter </a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">Instagram</a>
            </li>
            <li>
                <a href="#!" class="text-white text-decoration-none">FaceBook </a>
            </li>
        </ul>
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
    </section>
    <!-- Section: Links -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright 
    <a class="text-white" >CrescantMoon.com</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
