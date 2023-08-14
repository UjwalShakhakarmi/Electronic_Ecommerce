<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])




    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300;400;900&family=Fira+Sans&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="containeer">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{route('Dashboard')}}">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Brand </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Dashboard')}}">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('AddBrand')}}">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Add Brand</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('AddBrand')}}">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('AddProduct')}}">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Admin_Product')}}">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Inventory</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search Here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- userImg -->
                <div class="user">
                    <img src="./577734.jpg">
                </div>
            </div>
            <!-- cards -->

            @yield('content')

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <!-- jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>

            <!-- Popper.js -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
                integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
                crossorigin="anonymous">
            </script>

            <!-- ionicons -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

            <!-- Summernote JS -->
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

            <!-- Custom scripts -->
            <script>
            // Menu toggle
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function() {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

            // Add hovered class in selected list item
            let list = document.querySelectorAll('.navigation li');

            function activelink() {
                list.forEach((item) => item.classList.remove('hovered'));
                this.classList.add('hovered');
            }

            list.forEach((item) => item.addEventListener('mouseover', activelink));

            // Initialize Summernote editors
            $(document).ready(function() {
                $('#summernote_Desc').summernote({
                    styleTags: [
                        'p','pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6','li',
                        {
                            title: 'Custom Style',
                            tag: 'div',
                            class: 'tecnical-specs',
                            style: 'font-family: Prompt, sans-serif !important; font-weight: 400;'
                        },
                        
                    ],
                    tabsize: 2,
                    height: 100
                });


            $('#summernote_Meta_Desc').summernote({
                tabsize: 2,
                height: 100
            });

            $('#summernote_spec').summernote({
                tabsize: 2,
                height: 100
            });

            $('#summernote_Hight_Design').summernote({
            tabsize: 2,
            height: 100
            });
            });

            // Bootstrap tab activation
            var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'));
            triggerTabList.forEach(function(triggerEl) {
                var tabTrigger = new bootstrap.Tab(triggerEl);

                triggerEl.addEventListener('click', function(event) {
                    event.preventDefault();
                    tabTrigger.show();
                });
            });

            // Initialize Owl Carousel
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
                            items: 3
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