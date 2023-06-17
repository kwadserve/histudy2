@extends('frontend.body.master')
@section('css')
    @include('sweetalert::alert')
@endsection
@section('content')
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-750">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> Yüz Yüze & Online
                            </div>
                            <h1 class="title"><span class="color-primary">Yüz Yüze & Online </span>  Seminer
                                Platformu</h1>
                            <p class="description">ArtElegans Academy ile seminerlere katılarak hayalindeki mesleğe bir adım at.
                            </p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('front.course') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">SEMİNERLER</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active"
                            style="margin-top:2%">
                            <div class="swiper-wrapper">

                                @foreach ($uc_kurs as $item)
                                    <!-- Start Single Card  -->
                                    <div class="swiper-slide">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('front.course.detail', $item->id) }}">
                                                    <img src="{{ $item->image == null ? url('assets/images/course/course-online-01.jpg') : url('assets' . $item->image) }}"
                                                        alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>{{ $item->kategori->name }}</li>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route('front.course.detail', $item->id) }}">
                                                        {{ $item->title }} </a>
                                                </h4>
                                                <p class="rbt-card-text"> {{ $item->short_description }} </p>
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">{{ $item->price }} TL <span style="font-size:15px">+ KDV / SEANS</span></span>
                                                    </div>
                                                    <a class="rbt-btn-link"
                                                        href="{{ route('front.course.detail', $item->id) }}"> Detay Gör <i
                                                            class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach



                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Service Area -->
    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start mb--30">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title">Popüler Kategoriler</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity btn-sm" href="{{ route('front.categories') }}">
                            <span data-text="KATEGORİ">Hepsini Gör</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                @foreach ($categories as $item)
                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a class="rbt-cat-box rbt-cat-box-1 list-style"
                            href="{{ route('front.category.detail', $item->id) }}">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ $item->image == null ? url('/assets/images/category/image/web-design.jpg') : url('/assets' . $item->image) }}  "
                                        alt="Icons Images">
                                </div>
                                <div class="content">
                                    <h5 class="title"> {{ $item->name }} </h5>
                                    <div class="read-more-btn">
                                        <span class="rbt-btn-link">{{ $item->course_count() }} Seminer<i
                                                class="feather-arrow-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Category Box Layout  -->
                @endforeach


            </div>

        </div>
    </div>
    <!-- End Service Area -->

    <div class="rbt-newsletter-area bg-gradient-6 ptb--50">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="inner">
                        <div class="section-title text-center text-lg-start">
                            <h4 class="title"><strong>Aramıza Katıl</strong> <br /> <span class="w-400">Aramıza katılmak
                                    için hemen kayıt ol!</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 text-start text-sm-end">
                    <form action="#" class="newsletter-form-1 me-0">
                        <input type="email" placeholder="Email">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">KATIL</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Course Area -->
    <div class="rbt-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">POPÜLER</span>
                        <h2 class="title">Son Eklenen Kurslar </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="course.html">
                            <span data-text=" &nbsp&nbsp KURSLAR">Hepsini Gör</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">

                @foreach ($son_kurslar as $item)
                    <!-- Start Single Course  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('front.course.detail', $item->id) }}">
                                    <img src="{{ $item->image != null ? url('/assets' . $item->image) : url('/assets/images/course/classic-lms-01.jpg') }}"
                                        alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rbt-bookmark-btn">
                                    </div>
                                </div>
                                <br>

                                <h4 class="rbt-card-title"><a href="{{ route('front.course.detail', $item->id) }}">
                                        {{ $item->title }} </a></h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i> {{ $item->kategori->name }} </li>
                                </ul>

                                <p class="rbt-card-text"> {{ substr($item->short_description,0,100) }}... </p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="{{ route('front.teacher.detail', $item->id) }}">
                                            <img src="{{ $item->ogretmen->photo != null ? url('assets' . $item->ogretmen->photo) : url('/assets/images/client/avatar-02.png') }}"
                                                alt="{{ $item->ogretmen->name }}">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        <a href="{{ route('front.teacher.detail', $item->id) }}">
                                            {{ $item->ogretmen->name }} {{ $item->ogretmen->surname }} </a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">{{ $item->price }} TL <span style="font-size:15px">+ KDV / SEANS</span></span>
                                    </div>
                                    <a class="rbt-btn-link" href="{{ route('front.course.detail', $item->id) }}"> Detay
                                        <i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Course  -->
                @endforeach

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area -->


    <?php
    $son_alti = App\Models\Teacher::latest()
        ->take(6)
        ->get();
    
    ?>

    <div class="rbt-team-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Öğretmenler</span>
                        <h2 class="title">Öğretmenler</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <?php
                $son1 = \App\Models\Teacher::latest()
                    ->take(1)
                    ->get();
                
                ?>


                <div class="col-lg-7">
                    <!-- Start Tab Content  -->
                    <div class="rbt-team-tab-content tab-content" id="myTabContent">

                        @foreach ($son1 as $son)
                            <div class="tab-pane fade active show" id="team-tab" role="tabpanel"
                                aria-labelledby="team-tab-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ '/assets' . $son->photo }}" alt="{{ $son->name }}">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">{{ $son->name }} {{ $son->surname }}</h4>
                                            <span class="designation theme-gradient"> {{ $son->job }} </span>
                                            <span class="team-form">
                                                <span class="location">  {!!substr($son->description,0,200) !!}... </span>
                                            </span>
                                        </div>
                                        <p> {{ $son->short_description }} </p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">

                                            @if ($son->facebook != null)
                                                <li><a href="https://www.facebook.com/{{ $son->facebook }}">
                                                        <i class="feather-facebook"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($son->twitter != null)
                                                <li><a href="https://www.twitter.com/{{ $son->twitter }}">
                                                        <i class="feather-twitter"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($son->instagram != null)
                                                <li><a href="https://www.instagram.com/{{ $son->instagram }}">
                                                        <i class="feather-instagram"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($son->linkedin != null)
                                                <li><a href="https://www.linkedin.com/{{ $son->linkedin }}">
                                                        <i class="feather-linkedin"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="tel:+90{{ $son->phone }}"><i class="feather-phone"></i>
                                                    {{ $son->phone }} </a>
                                            </li>
                                            <li>
                                                <a href="mailto:{{ $son->email }}"><i
                                                        class="feather-mail"></i>{{ $son->email }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        @foreach ($son_alti as $item)
                            <div class="tab-pane fade" id="team-tab{{ $item->id }}" role="tabpanel"
                                aria-labelledby="team-tab{{ $item->id }}-tab">
                                <div class="inner">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ '/assets' . $item->photo }}" alt="{{ $item->name }}">
                                        </div>
                                    </div>
                                    <div class="rbt-team-details">
                                        <div class="author-info">
                                            <h4 class="title">{{ $item->name }} {{ $item->surname }}</h4>
                                            <span class="designation theme-gradient"> {{ $item->job }} </span>
                                            <span class="team-form">
                                                <span class="location"> {!!substr($item->description,0,200) !!}... </span>
                                            </span>
                                        </div>
                                        <p> {{ substr($item->short_description,0,100) }}... </p>
                                        <ul class="social-icon social-default mt--20 justify-content-start">

                                            @if ($item->facebook != null)
                                                <li><a href="https://www.facebook.com/{{ $item->facebook }}">
                                                        <i class="feather-facebook"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($item->twitter != null)
                                                <li><a href="https://www.twitter.com/{{ $item->twitter }}">
                                                        <i class="feather-twitter"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($item->instagram != null)
                                                <li><a href="https://www.instagram.com/{{ $item->instagram }}">
                                                        <i class="feather-instagram"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($item->linkedin != null)
                                                <li><a href="https://www.linkedin.com/{{ $item->linkedin }}">
                                                        <i class="feather-linkedin"></i>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                        <ul class="rbt-information-list mt--25">
                                            <li>
                                                <a href="tel:{{ $item->phone }}"><i class="feather-phone"></i>
                                                    {{ $item->phone }} </a>
                                            </li>
                                            <li>
                                                <a href="mailto:{{ $item->email }}"><i
                                                        class="feather-mail"></i>{{ $item->email }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="top-circle-shape"></div>
                    </div>
                    <!-- End Tab Content  -->
                </div>





                <div class="col-lg-5">
                    <!-- Start Tab Nav  -->
                    <ul class="rbt-team-tab-thumb nav nav-tabs" id="myTab" role="tablist">

                        @foreach ($son_alti as $item)
                            <li>
                                <a class="" id="team-tab{{ $item->id }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#team-tab{{ $item->id }}" role="tab"
                                    aria-controls="team-tab{{ $item->id }}" aria-selected="false">
                                    <div class="rbt-team-thumbnail">
                                        <div class="thumb">
                                            <img src="{{ '/assets' . $item->photo }}" alt="Testimonial Images">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                    <!-- End Tab Content  -->
                </div>
            </div>
        </div>
    </div>


    <div class="rbt-testimonial-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--60">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Kurs Yorumları</span>
                        <h2 class="title">Yorumlar</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Testimonial  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/assets/images/testimonial/client-01.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Martha Maldonado</h5>
                                    <span>Executive Chairman <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="rating mt--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/assets/images/testimonial/client-02.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Michael D. Lovelady</h5>
                                    <span>CEO <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                <div class="rating mt--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="/assets/images/testimonial/client-03.png" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Valerie J. Creasman</h5>
                                    <span>Executive Designer <i>@ Google</i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget.</p>
                                <div class="rating mt--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>
    </div>


    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area rbt-section-gapTop bg-color-white">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">Blog</span>
                        <h2 class="title"> Blog Yazıları </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="blog.html">
                            <span data-text="View All News">View All News</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="/assets/images/blog/blog-grid-01.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Is lms The Most Trending
                                    Thing Now?</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="/assets/images/blog/blog-grid-02.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Learn How More Money With
                                    lms.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="/assets/images/blog/blog-grid-03.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Understand The Background Of
                                    lms.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->
    <br><br>
@endsection
