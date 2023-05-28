@extends('layout.master')

@section('title', 'خانه')

@section('style')

@endsection

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



<!-- Start Banner Here -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" draggable="false">
        <div class="carousel-item active">
            <div class="container" >
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./img/banner_img_01.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>توشاپ</b></h1>
                            <h3 class="h2">شاپی برای تو</h3>
                            <!--                                <p>-->
                            <!--                                    Zay Shop is an eCommerce HTML5 CSS template with version of Bootstrap 5 (beta 1). -->
                            <!--                                    This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website. -->
                            <!--                                    Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,-->
                            <!--                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and-->
                            <!--                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.-->
                            <!--                                </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./img/banner_img_02.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Proident occaecat</h1>
                            <!--                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>-->
                            <!--                                <p>-->
                            <!--                                    You are permitted to use this Zay CSS template for your commercial websites. -->
                            <!--                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.-->
                            <!--                                </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./img/banner_img_03.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Repr in voluptate</h1>
                            <!--                                <h3 class="h2">Ullamco laboris nisi ut </h3>-->
                            <!--                                <p>-->
                            <!--                                    We bring you 100% free CSS templates for your websites. -->
                            <!--                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.-->
                            <!--                                </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">دسته بندی ها</h1>
            <p>
                .دسته بندی هایی که در این سایت وجود دارد
            </p>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_01.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="text-center mt-3 mb-3 h2">ساعت</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_02.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">موبایل</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_03.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">کنسول</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_03.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">لوازم سخت افزار</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_03.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">لپتاپ</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_03.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">دوربین</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_03.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">لوازم جانبی</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./img/category_img_03.jpg" class="rounded-circle img-fluid border" alt="error"></a>
            <h2 class="h5 text-center mt-3 mb-3 h2">کامپیوتر کامل</h2>
            <p class="text-center"><button class="custom-btn btn-13">Go Shop</button></p>
        </div>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start popular -->
<section class="bg-light" style="border-radius:2rem 2rem 0 0">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">پر فروشترین ها</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem" >
                    <a href="shop-single.html" >
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="custom-btn btn-15 text-dark h3 text-center">بیشتر </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End popular -->

<!-- Start mony -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">پر ترفدارترین ها</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End mony -->

<!-- Start offer -->
<section class="bg-light" style="border-radius:0 0 2rem 2rem">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">تخفیف داره</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100" style="border-radius:0 0 2rem 2rem">
                    <a href="shop-single.html">
                        <img src="./img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <!--                                <li>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-warning fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                    <i class="text-muted fa fa-star"></i>-->
                            <!--                                </li>-->
                            <li>لایک</li>
                            <li class="text-muted text-right">$480.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <button type="submit" class="btn btn-success">بیشتر</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End offer -->

@endsection
