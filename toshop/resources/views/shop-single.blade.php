@extends('layout.master')

@section('title', 'محصول')

@section('style')

<<<<<<< HEAD:toshop/resources/views/shop-single.blade.php
@endsection
=======
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <style>
        @font-face {
            font-family: 'Lalezar';
            src: url('assets/webfonts/Lalezar-Regular.eot'); /* IE9 Compat Modes */
            src: url('assets/webfonts/Lalezar-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('assets/webfonts/Lalezar-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('assets/webfonts/Lalezar-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('assets/webfonts/Lalezar-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Yekan';
            src: url('assets/webfonts/Yekan.eot'); /* IE9 Compat Modes */
            src: url('assets/webfonts/Yekan.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('assets/webfonts/Yekan.woff2') format('woff2'), /* Super Modern Browsers */
            url('assets/webfonts/Yekan.woff') format('woff'), /* Pretty Modern Browsers */
            url('assets/webfonts/Yekan.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'iran';
            src: url('assets/webfonts/iran.eot'); /* IE9 Compat Modes */
            src: url('assets/webfonts/iran.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('assets/webfonts/iran.woff2') format('woff2'), /* Super Modern Browsers */
            url('assets/webfonts/iran.woff') format('woff'), /* Pretty Modern Browsers */
            url('assets/webfonts/iran.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Rye';
            src: url('assets/webfonts/Rye-Regular.eot'); /* IE9 Compat Modes */
            src: url('assets/webfonts/Rye-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('assets/webfonts/Rye-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('assets/webfonts/Rye-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('assets/webfonts/Rye-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Abr';
            src: url('assets/webfonts/AbrilFatface-Regular.eot'); /* IE9 Compat Modes */
            src: url('assets/webfonts/AbrilFatface-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('assets/webfonts/AbrilFatface-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('assets/webfonts/AbrilFatface-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('assets/webfonts/AbrilFatface-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
        @font-face {
            font-family: 'Hammers';
            src: url('assets/webfonts/HammersmithOne-Regular.eot'); /* IE9 Compat Modes */
            src: url('assets/webfonts/HammersmithOne-Regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('assets/webfonts/HammersmithOne-Regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('assets/webfonts/HammersmithOne-Regular.woff') format('woff'), /* Pretty Modern Browsers */
            url('assets/webfonts/HammersmithOne-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
        }
    </style>
</head>

<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-light fixed-top" style="border-radius:0 0 2rem 2rem;">
        <div class="container justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                
                <!-- <img src="assets/img/logo.png"> -->
                توشاپ
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
                            <a class="nav-link" href="shop.html">


                                <i class="fa fa-fw fa-bars "></i>

                              
                                دسته بندی ها

                            </a>
                        </li>
                        


                        


                        <li class="nav-item">
                            <a class="nav-link" href="about.html">
                                <i class="	fa fa-quote-left "></i>                  
                                              درباره ما
                               
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="fas fa-newspaper "></i>                  
                                      توشاپ مگ
                               
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link"  href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                                <i class="fa fa-search "></i>                  
                                          جستجو
                               
                            </a>
                        </li> -->
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">


                                <i class="fas fa-cogs" ></i>
                                اسمبل هوشمند
                             
                            </a>
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

                    <a class="nav-icon position-relative text-decoration-none" href="contact.html">
                        <i class="fa fa-fw fa-phone " style="font-size: 36px;" ></i>

                    </a>

                    <a class="nav-icon position-relative text-decoration-none" href="shoppingcart.html">
                        <i class="fa fa-shopping-cart" style="font-size:36px"></i>


                       
                        
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="login.html">
                        <i class="fa fa-user " style="font-size: 36px;"></i>

                    </a>
                    <a class="nav-icon position-relative text-decoration-none"  href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-search " style="font-size: 36px;"></i>                  
                              
                       
                    </a>


                </div>
            </div>
        </div>
    </nav>
</header>
    <!-- Close Header -->
<br>
<br>
<br>
>>>>>>> hesam-rahimi:shop-single.html

@section('content')
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Open Content -->
    <section class="bg-light" style="border-radius:0 0 2rem 2rem">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="img/product_single_10.jpg" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_01.jpg" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_02.jpg" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_03.jpg" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_04.jpg" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_05.jpg" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_06.jpg" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_07.jpg" alt="Product Image 7">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_08.jpg" alt="Product Image 8">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/product_single_09.jpg" alt="Product Image 9">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>

                <!-- col end -->
                <!--  end of slider-->

                <div class="col-lg-7 mt-5">
                    <div class="card" style="border-radius:2rem">
                        <div class="card-body">
                            <h1 class="h2">اسم محصول</h1>
                            <p class="h3 py-2">$25.00</p>
                            <p class="py-2 h4">
                                |تعداد لایک|
                                <span class="list-inline-item text-dark">تعداد کامنت ها</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item h3">
                                    <h6 class="h4">برند:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>اسم برند</strong></p>
                                </li>
                            </ul>

                            <h6 class="h4">توضیحات:</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>

                            <h6 class="h4">مشخصات:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right h4">
                                                تعداد:
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="0">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item" style="font-family: 'Lalezar'"><span class="text-dark" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">خرید</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">اضافه کردن به سبد خرید</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4 class="h2">محصولات مشابه</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                <div class="p-2 pb-3" >
                    <div class="product-wap card rounded-0" style="border-radius:0 0 2rem 2rem !important;">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="img/shop_08.jpg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none m-1">اسم محصول</a>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li class="h4">
                                    تعداد لایک
                                </li>
                            </ul>
                            <p class="text-center mb-0">$20.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" style="border-radius:0 0 2rem 2rem !important;">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="img/shop_08.jpg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none m-1">اسم محصول</a>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li class="h4">
                                    تعداد لایک
                                </li>
                            </ul>
                            <p class="text-center mb-0">$20.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" style="border-radius:0 0 2rem 2rem !important;">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="img/shop_08.jpg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none m-1">اسم محصول</a>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li class="h4">
                                    تعداد لایک
                                </li>
                            </ul>
                            <p class="text-center mb-0">$20.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" style="border-radius:0 0 2rem 2rem !important;">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="img/shop_08.jpg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none m-1">اسم محصول</a>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li class="h4">
                                    تعداد لایک
                                </li>
                            </ul>
                            <p class="text-center mb-0">$20.00</p>
                        </div>
                    </div>
                </div>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0" style="border-radius:0 0 2rem 2rem !important;">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="img/shop_08.jpg">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none m-1">اسم محصول</a>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li class="h4">
                                    تعداد لایک
                                </li>
                            </ul>
                            <p class="text-center mb-0">$20.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Article -->
@endsection
