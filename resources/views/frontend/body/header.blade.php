<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ArtElegans Academy</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/artelegans.png">

    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('css')
</head>



<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-9">
        <div class="rbt-sticky-placeholder"></div>


        <!-- Start Header Top -->
        <div class="rbt-header-middle position-relative rbt-header-mid-1  bg-color-white rbt-border-bottom">
            <div class="container">
                <div class="rbt-header-sec align-items-center ">

                    <div class="rbt-header-sec-col rbt-header-left">
                        <center>
                            <div class="row">



                                <div class="col-md-1"></div>

                                <div class="col-md-1">
                                    <a href="tel:+905353458081">

                                        <i class="fa-solid fa-phone"></i>
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <a href="tel:+905353458081">

                                        <p>0535 345 80 81</p>
                                    </a>

                                </div>



                            </div>
                        </center>
                    </div>

                    <div class="rbt-header-sec-col rbt-header-center d-none d-md-block">
                        <div class="rbt-header-content">
                            <div class="header-info">
                                <div class="rbt-search-field">
                                    <div class="search-field">
                                        <form action="{{route('front.search')}}" method="get">
                                        <input type="text" name="search" placeholder="Seminer Ara...">
                                        <button class="rbt-round-btn serach-btn" type="submit"><i
                                                class="feather-search"></i></button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>
                    @if (!Auth::guard('ogrenci')->check())
                        <div>
                            <a href="{{ route('front.register') }}">
                                <p>Kayıt Ol</p>
                            </a>
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div>
                            <a href="{{ route('front.login') }}">
                                <p>Giriş Yap</p>
                            </a>
                        </div>
                    @endif

                    @if (Auth::guard('ogrenci')->check())
                        <div class="row">
                            <div class="col-md-11">
                                {{ Auth::guard('ogrenci')->user()->name }} {{ Auth::guard('ogrenci')->user()->surname }}
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('front.logout') }}">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </a>
                            </div>



                        </div>
                    @endif



                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <div
            class=" {{ !Route::is('front.course.detail') ? 'rbt-header-wrapper' : '' }}  header-not-transparent header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-end align-items-center">
                    <div class="header-left rbt-header-content" style="height:85px;">
                        <div class="header-info" style="height:80px; width:150px">
                            <a href="{{ route('front.home') }}">
                                <img src="/assets/images/artelegans.png" style="width: 85%;"
                                    alt="Education Logo Images">
                            </a>
                        </div>
                    </div>

                    <?php
                    
                    $cat = App\Models\Category::get();
                    ?>


                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li>

                                    <div class="header-info">
                                        <div class="rbt-category-menu-wrapper">
                                            <div class="rbt-category-btn rbt-side-offcanvas-activation">
                                                <div class="rbt-offcanvas-trigger md-size icon">
                                                    <span class="d-none d-xl-block">
                                                        <i class="feather-grid"></i>
                                                    </span>
                                                    <i title="Category" class="feather-grid d-block d-xl-none"></i>
                                                </div>
                                                <a href="{{ route('front.categories') }}">
                                                    <span class="category-text d-none d-xl-block">KATEGORİLER</span>
                                                </a>
                                            </div>



                                            <div class="category-dropdown-menu d-none d-xl-block">
                                                <div class="category-menu-item">
                                                    <div class="rbt-vertical-nav">
                                                        <ul class="rbt-vertical-nav-list-wrapper vertical-nav-menu">

                                                            @foreach ($cat as $item)
                                                                <li class="vertical-nav-item">
                                                                    <a
                                                                        href="#tab{{ $item->id }}">{{ $item->name }}</a>
                                                                </li>
                                                            @endforeach


                                                        </ul>
                                                    </div>
                                                    <div class="rbt-vertical-nav-content">


                                                        @foreach ($cat as $item)
                                                            <!-- Start One Item  -->
                                                            <div class="rbt-vertical-inner tab-content"
                                                                id="tab{{ $item->id }}" style="display: none;">
                                                                <div class="rbt-vertical-single">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="vartical-nav-content-menu">
                                                                                <h3 class="rbt-short-title">Kurslar
                                                                                </h3>
                                                                                <ul
                                                                                    class="rbt-vertical-nav-list-wrapper">

                                                                                    @foreach ($item->Course() as $kur)
                                                                                        <li><a
                                                                                                href="{{ route('front.course.detail', $kur->id) }}">
                                                                                                {{ $kur->title }}
                                                                                            </a>
                                                                                        </li>
                                                                                    @endforeach

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End One Item  -->
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                </li>

                                <li
                                    class="has-dropdown has-menu-child-item {{ Route::is('front.course') ? 'active' : '' }}">
                                    <a href="{{ route('front.course') }}">
                                        <p> SEMİNERLER </p>

                                    </a>

                                </li>

                                <li
                                    class="with-megamenu has-menu-child-item position-static {{ Route::is('front.teacher') ? 'active' : '' }}">
                                    <a href="{{ route('front.teacher') }}">
                                        <p> ÖĞRETMENLER
                                        </p>
                                    </a>
                                    <!-- Start Mega Menu  -->

                                </li>



                                <li
                                    class="with-megamenu has-menu-child-item position-static {{ Route::is('front.contact') ? 'active' : '' }}">
                                    <a href="{{ route('front.contact') }}">
                                        <p> İLETİŞİM
                                        </p>
                                    </a>

                                </li>


                            </ul>
                        </nav>
                    </div>
                    <div>
                        <div class="header-right">
                            <div class="rbt-btn-wrapper d-none d-xl-block">
                                <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none"
                                    href="{{ route('front.teacher.basvuru') }}">
                                    <span>ÖĞRETMEN BAŞVURU</span>
                                </a>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar d-block d-xl-none">
                                <div class="hamberger">
                                    <button class="hamberger-button rbt-round-btn">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                        </div>
                    </div>
                    <div style="margin-left: 2%">
                        <div class="header-right">
                            <div class="rbt-btn-wrapper d-none d-xl-block">
                                <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none"
                                    href="{{ route('front.oner') }}">
                                    <span>SEMİNER ÖNERİ</span>
                                </a>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar d-block d-xl-none">
                                <div class="hamberger">
                                    <button class="hamberger-button rbt-round-btn">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Side Vav -->
        <div class="rbt-offcanvas-side-menu rbt-category-sidemenu">
            <div class="inner-wrapper">
                <div class="inner-top">
                    <div class="inner-title">
                        <h4 class="title">Course Category</h4>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="rbt-close-offcanvas rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <nav class="side-nav w-100">
                    <ul class="rbt-vertical-nav-list-wrapper vertical-nav-menu">
                        <li class="vertical-nav-item">
                            <a href="#">Course School</a>
                            <div class="vartical-nav-content-menu-wrapper">
                                <div class="vartical-nav-content-menu">
                                    <h3 class="rbt-short-title">Course Title</h3>
                                    <ul class="rbt-vertical-nav-list-wrapper">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">Figma</a></li>
                                        <li><a href="#">Adobe</a></li>
                                    </ul>
                                </div>
                                <div class="vartical-nav-content-menu">
                                    <h3 class="rbt-short-title">Course Title</h3>
                                    <ul class="rbt-vertical-nav-list-wrapper">
                                        <li><a href="#">Photo</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Math</a></li>
                                        <li><a href="#">Read</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="vertical-nav-item">
                            <a href="#">Online School</a>
                            <div class="vartical-nav-content-menu-wrapper">
                                <div class="vartical-nav-content-menu">
                                    <h3 class="rbt-short-title">Course Title</h3>
                                    <ul class="rbt-vertical-nav-list-wrapper">
                                        <li><a href="#">Photo</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Math</a></li>
                                        <li><a href="#">Read</a></li>
                                    </ul>
                                </div>
                                <div class="vartical-nav-content-menu">
                                    <h3 class="rbt-short-title">Course Title</h3>
                                    <ul class="rbt-vertical-nav-list-wrapper">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">Figma</a></li>
                                        <li><a href="#">Adobe</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="vertical-nav-item">
                            <a href="#">kindergarten</a>
                            <div class="vartical-nav-content-menu-wrapper">
                                <div class="vartical-nav-content-menu">
                                    <h3 class="rbt-short-title">Course Title</h3>
                                    <ul class="rbt-vertical-nav-list-wrapper">
                                        <li><a href="#">Photo</a></li>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Math</a></li>
                                        <li><a href="#">Read</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="vertical-nav-item">
                            <a href="#">Classic LMS</a>
                            <div class="vartical-nav-content-menu-wrapper">
                                <div class="vartical-nav-content-menu">
                                    <h3 class="rbt-short-title">Course Title</h3>
                                    <ul class="rbt-vertical-nav-list-wrapper">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">Figma</a></li>
                                        <li><a href="#">Adobe</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="read-more-btn">
                        <div class="rbt-btn-wrapper mt--20">
                            <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                                href="#">
                                <span>Learn More</span>
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="rbt-offcanvas-footer">

                </div>
            </div>
        </div>
        <!-- End Side Vav -->
        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
    </header>
    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="{{ route('front.home') }}">
                            <img src="/assets/images/artelegans.png" style="width: 100%" alt="ArtElegans Academy">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Histudy is a education website template. You can customize all.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">

                    <li class="">
                        <a href="{{ route('front.course') }}">SEMİNERLER

                        </a>

                    </li>

                    <li class="with-megamenu  position-static">
                        <a href="{{ route('front.teacher') }}">ÖĞRETMENLER <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->

                    </li>

                    <li class="with-megamenu  position-static">
                        <a href="{{ route('front.contact') }}">İLETİŞİM </a>

                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                        href="#">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Side Vav -->
    <div class="rbt-cart-side-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="title">
                        <h4 class="title mb--0">Your shopping cart</h4>
                    </div>
                    <div class="rbt-btn-close" id="btn_sideNavClose">
                        <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
            </div>
            <nav class="side-nav w-100">
                <ul class="rbt-minicart-wrapper">
                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="/assets/images/product/1.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                            <span class="quantity">1 * <span class="price">$22</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="/assets/images/product/7.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                            <span class="quantity">1 * <span class="price">$30</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="/assets/images/product/3.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="/assets/images/product/4.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="rbt-minicart-footer">
                <hr class="mb--0">
                <div class="rbt-cart-subttotal">
                    <p class="subtotal"><strong>Subtotal:</strong></p>
                    <p class="price">$121</p>
                </div>
                <hr class="mb--0">
                <div class="rbt-minicart-bottom mt--20">
                    <div class="view-cart-btn">
                        <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                            <span class="btn-text">View Cart</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="checkout-btn mt--20">
                        <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                            <span class="btn-text">Checkout</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Side Vav -->
