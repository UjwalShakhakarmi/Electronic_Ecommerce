<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <title>Document</title>


</head>


<body>
    <!-- <div class="header-top" style="padding: 0.4rem 2.5rem 0 0;">
        <div class="w-100 d-flex " style="justify-content: space-between;">
            <ul class="flat-support" style="margin-bottom: 0.5rem;font-size: 13px;line-height: 22px;">
                <li><a href="tel:01-5913642"><i style="color: white;" class="fa fa-phone" aria-hidden="true"></i><span
                            style="color: white;"> Need
                            Help ? 01-5913642 | Contact</span></a></li>
            </ul>
            <ul class="social-list d-flex" style="width: 100px; justify-content:space-between; margin-bottom: 0.5rem;">
                <li><a href="#" title="">
                        <ion-icon name="logo-facebook" style="color: white; width: 15px;"></ion-icon>
                    </a></li>
                <li><a href="#" title="">
                        <ion-icon name="logo-instagram" style="color: white; width: 15px;"></ion-icon>
                    </a></li>
                <li><a href="#" title="">
                        <ion-icon name="logo-whatsapp" style="color: white; width: 15px;"></ion-icon>
                    </a></li>
            </ul>
        </div>
    </div> -->


    <!--Main Navigation-->
    <!-- Jumbotron -->
    <section>
        <div class=" text-center " style="background-color:#252B48!important;padding-top: 20px;padding-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <!-- Left elements -->
                    <div class="col-md-3 d-flex   mb-3 mb-md-0">
                        <a href="{{route('home')}}" class="ms-md-2 d-flex">
                            <img id="logo" src="./images/logo.png" alt="" ; style=" margin-left: -19px;">
                            <div class="logo_name" id="logo_name" style="margin-top: 4px; text-align: initial;">
                                <h3 style="color: white; font-size:1.6rem!important">Standard </h3>
                                <p style="line-height: 0.5;color: white;font-size:0.62rem!important">Computer
                                    International</p>
                            </div>
                        </a>
                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="col-md-6 justify-content-center">
                        <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0"
                            action="{{ route('Product-Page',['search' => old('search') ]) }}" method="get">
                            <input autocomplete="off" type="search" class="form-control  " placeholder="Search"
                                name="search" style="height: 48px;border-radius:0;" />
                            <button class="btn btn-primary" type="submit"
                                style="margin-left: 5px;border-radius: 0;height:48px">
                                <ion-icon name="search-outline" class="text-white"
                                    style="font-size: 25px;margin-top: 6px;"></ion-icon>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-3" style="padding-left: 85px;">
                        <div class="div">
                            <ul class="flat-support p-0"
                                style="margin-bottom: 0.5rem;font-size: 13px;margin-bottom: 0;font-size: 13px;margin-left: 18px;">
                                <li><a href="tel:01-5913642">
                                        <ion-icon style="color: white;" name="call-outline"></ion-icon><span
                                            style="color: white;"> Need
                                            Help ? 01-5913642 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-50 m-auto">
                            <ul class="social-list d-flex"
                                style="width: 100px; justify-content:space-between; margin-bottom: 0.5rem;">
                                <li><a href="#" title="">
                                        <ion-icon name="logo-facebook" style="color: white; width: 15px;"></ion-icon>
                                    </a></li>
                                <li><a href="#" title="">
                                        <ion-icon name="logo-instagram" style="color: white; width: 15px;"></ion-icon>
                                    </a></li>
                                <li><a href="#" title="">
                                        <ion-icon name="logo-whatsapp" style="color: white; width: 15px;"></ion-icon>
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Center elements -->
                </div>
            </div>
        </div>
        <!-- Jumbotron -->

        <nav class="navbar navbar-expand-lg navbar-light p-0 border-bottom shadow-sm"
            style="background-color: white!important;padding-bottom:5px">
            <!-- Container wrapper -->
            <div class="container-fluid  ">
                <!-- Toggle button -->
                <button class="navbar-toggler w-100 border-0" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false"
                    aria-label="Toggle navigation" style="height: 30px;box-shadow:none">
                    <p>Menu</p>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse justify-content-center  w-100" id="navbarCenteredExample">
                    <!-- Left links -->

                    <ul class="navbar-nav mb-2 mb-lg-0" style="width: 38%;justify-content: space-around;">

                        <li class="nav-item ">
                            <a class="nav-link active  m-1 bold" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle bold m-1" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Laptops Brand
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">

                                @foreach(App\Models\Brand::all() as $Brand)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('Product-Page', ['brand' => $Brand->id]) }}">
                                        <div class="d-flex ">
                                            <img src="{{asset('/storage/'.$Brand->Brand_Img)}}"
                                                style="height:20px">{{$Brand->Brand_Name}}
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle bold m-1" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('Product-Page', ['sort' => 'laptop']) }}">
                                        Laptops</a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('Product-Page', ['sort' => 'Gadgets']) }}">Gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link m-1 bold"
                                href="{{ route('Product-Page', ['sort' => 'Gaming']) }}">Gaming</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link m-1 bold" href="{{ route('Product-Page', ['sort' => 'newest']) }}">New
                                Arrivals</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
    </section>

    <!--Main Navigation-->


    @yield('content')

    </section>
    <!-- footer_section -->
    <footer class="footer-04" style="background-color: #252B48;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <a href="{{route('home')}}" class="ms-md-2 d-flex">
                        <img id="logo" src="./images/logo.png" alt="" ; style=" margin-left: -19px;">
                        <div class="logo_name" id="logo_name" style="margin-top: 4px; text-align: initial;">
                            <h3 style="color: white; font-size:1.6rem!important">Standard </h3>
                            <p style="line-height: 0.5;color: white;font-size:0.62rem!important">Computer International
                            </p>
                        </div>
                    </a>
                    <p>Connecting Innovation Explore Latest in Electronics</p>
                    <a href="#">read more <span class="ion-ios-arrow-round-forward"></span></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Categories</h2>
                    <ul class="tagcloud p-0">
                        <a href="#" class="tag-cloud-link">Laptops</a>
                        <a href="#" class="tag-cloud-link">Gadgets</a>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Brand</h2>
                    <div class="tagcloud">
                        @foreach(App\Models\Brand::all() as $Brand)
                        <a href="#" class="tag-cloud-link">{{ $Brand->Brand_Name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Subcribe</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                            <button type="submit" class="form-control submit rounded-right">
                                <ion-icon name="paper-plane"></ion-icon>
                            </button>
                        </div>
                    </form>
                    <h2 class="footer-heading mt-5">Follow us</h2>
                    <ul class="social-list d-flex p-0" style="width: 100px; justify-content:space-between; margin-bottom: 0.5rem;">
                        <li><a href="#" title="">
                                <ion-icon name="logo-facebook" style="color: white; width: 15px;"></ion-icon>
                            </a></li>
                        <li><a href="#" title="">
                                <ion-icon name="logo-instagram" style="color: white; width: 15px;"></ion-icon>
                            </a></li>
                        <li><a href="#" title="">
                                <ion-icon name="logo-whatsapp" style="color: white; width: 15px;"></ion-icon>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 border-top pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <p class="copyright">
                            Copyright ©<script>
                            document.write(new Date().getFullYear());
                            </script>2023 All rights reserved | This template is made with <i class="ion-ios-heart"
                                aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib.com</a>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-md-right">
                        <p class="mb-0 list-unstyled">
                            <a class="mr-md-3" href="#">Terms</a>
                            <a class="mr-md-3" href="#">Privacy</a>
                            <a class="mr-md-3" href="#">Compliances</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('js/owl.carousel.min.js')}} "></script>
    <script src="{{asset('js/ionicons.esm.js')}} "></script>
    <script src="{{asset('js/ionicons.js')}} "></script>
    <script src="{{asset('js/popper.min.js')}} "></script>
    <script>
    $(document).ready(function() {
        $('#brand_show.owl-carousel').owlCarousel({
            loop: true,
            margin: 40,
            nav: true,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 40,
            nav: true,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
    </script>

</body>

</html>