<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')-توشاپ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    @yield('style')
    <style>
        @font-face {
            font-family: 'Lalezar';
            src: url('./public/webfonts/Lalezar-Regular.eot'); /* IE9 Compat Modes */
            src: url('./public/webfonts/Lalezar-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('./public/webfonts/Lalezar-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('./public/webfonts/Lalezar-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('./public/webfonts/Lalezar-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Yekan';
            src: url('./public/webfonts/Yekan.eot'); /* IE9 Compat Modes */
            src: url('./public/webfonts/Yekan.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('./public/webfonts/Yekan.woff2') format('woff2'), /* Super Modern Browsers */
            url('./public/webfonts/Yekan.woff') format('woff'), /* Pretty Modern Browsers */
            url('./public/webfonts/Yekan.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'iran';
            src: url('./public/webfonts/iran.eot'); /* IE9 Compat Modes */
            src: url('./public/webfonts/iran.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('./public/webfonts/iran.woff2') format('woff2'), /* Super Modern Browsers */
            url('./public/webfonts/iran.woff') format('woff'), /* Pretty Modern Browsers */
            url('./public/webfonts/iran.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Rye';
            src: url('./public/webfonts/Rye-Regular.eot'); /* IE9 Compat Modes */
            src: url('./public/webfonts/Rye-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('./public/webfonts/Rye-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('./public/webfonts/Rye-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('./public/webfonts/Rye-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Abr';
            src: url('./public/webfonts/AbrilFatface-Regular.eot'); /* IE9 Compat Modes */
            src: url('./public/webfonts/AbrilFatface-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('./public/webfonts/AbrilFatface-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('./public/webfonts/AbrilFatface-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('./public/webfonts/AbrilFatface-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Hammers';
            src: url('./public/webfonts/HammersmithOne-Regular.eot'); /* IE9 Compat Modes */
            src: url('./public/webfonts/HammersmithOne-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('./public/webfonts/HammersmithOne-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('./public/webfonts/HammersmithOne-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('./public/webfonts/HammersmithOne-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
    </style>

</head>

<body>
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow bg-light fixed-top" style="border-radius:0 0 2rem 2rem;">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            توشاپ
            <!--<img src="img/logo.png">-->
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <!--                        <li class="nav-item">-->
                    <!--                            <a class="nav-link" href="index.html">خانه</a>-->
                    <!--                        </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">خرید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">ارتباط</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">؟</a>
                    </li>
                    <li class="form-check form-switch ms-auto mt-3 me-3">
                        <label class="form-check-label ms-3" for="lightSwitch">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="25"
                                fill="currentColor"
                                class="bi bi-brightness-high"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
                                />
                            </svg>
                        </label>
                        <input class="form-check-input" type="checkbox" id="lightSwitch" />
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <button type="submit" class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="shoppingcart.html">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="login.html">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                </a>
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->
<br>
<br>
<br>

@yield('content')

<div id="preloader"></div>


<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer" style="border-radius:2rem 2rem 0 0">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">توشاپ</h2>
                <ul class="list-unstyled text-light footer-link-list">

                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>اصفهان اصفهان منطقه 3 مدرسه خواجه نصیرالدین توسی
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">031 3781 5453</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">toshape@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">محصولات</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">لپتاپ</a></li>
                    <li><a class="text-decoration-none" href="#">موبایل</a></li>
                    <li><a class="text-decoration-none" href="#">سخت افزار</a></li>
                    <li><a class="text-decoration-none" href="#">کامپیوتر کامل</a></li>
                    <li><a class="text-decoration-none" href="#">ساعت</a></li>
                    <li><a class="text-decoration-none" href="#">لوازم جانبی</a></li>
                    <li><a class="text-decoration-none" href="#">کنسول</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">دسترسی سریع</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="index.html">خانه</a></li>
                    <li><a class="text-decoration-none" href="category.html"> تمام دسته بندی ها</a></li>
                    <li><a class="text-decoration-none" href="#">درباره ی ما</a></li>
                    <li><a class="text-decoration-none" href="#">ارتباط با ما</a></li>
                    <li><a class="text-decoration-none" href="#">سوالات متداول</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-center text-light">
                        Copyright &copy; 2023 sybogroup
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<!-- Start Script -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/templatemo.js"></script>
<script src="js/custom.js"></script>
<!-- End Script -->
<!--dark mode-->
<!--    <script src="js/switch.js"></script>-->

</body>

</html>
