@extends('frontend.body.master')
@section('title', 'Seminerler ')

@section('content')


    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">

            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="{{route('front.home')}}">Anasayfa</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Seminerler</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Tüm Seminerler</h1>
                            </div>

                            <p class="description">Kendinizi geliştirmek için doğru adrestesiniz. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40 mt_sm--20">
                <div class="container">
                    <div class="row g-5 align-items-center">

                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item switch-layout-container">
                                    <ul class="course-switch-layout">
                                        <li class="course-switch-item"><button class="rbt-grid-view active"
                                                title="Grid Layout"><i class="feather-grid"></i> <span
                                                    class="text">Böl</span></button></li>
                                        <li class="course-switch-item"><button class="rbt-list-view" title="List Layout"><i
                                                    class="feather-list"></i> <span class="text">Listele</span></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div
                                class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <form action="{{route('front.search')}}" method="get" class="rbt-search-style me-0">
                                        <input type="text" name="search" placeholder="Seminer ara..">
                                        <button type="submit" class="rbt-search-btn rbt-round-btn">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="rbt-short-item">
                                    <div class="view-more-btn text-start text-sm-end">
                                        <button
                                            class="discover-filter-button discover-filter-activation rbt-btn btn-white btn-md radius-round">Filter<i
                                                class="feather-filter"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start Filter Toggle  -->
                    <div class="default-exp-wrapper default-exp-expand">
                        <div class="filter-inner">
                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By</span>
                                    <select>
                                        <option>Default</option>
                                        <option>Latest</option>
                                        <option>Popularity</option>
                                        <option>Trending</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By Author</span>
                                    <select data-live-search="true" title="Select Author" multiple data-size="7"
                                        data-actions-box="true" data-selected-text-format="count > 2">
                                        <option data-subtext="Experts">Janin Afsana</option>
                                        <option data-subtext="Experts">Joe Biden</option>
                                        <option data-subtext="Experts">Fatima Asrafy</option>
                                        <option data-subtext="Experts">Aysha Baby</option>
                                        <option data-subtext="Experts">Mohamad Ali</option>
                                        <option data-subtext="Experts">Jone Li</option>
                                        <option data-subtext="Experts">Alberd Roce</option>
                                        <option data-subtext="Experts">Zeliski Noor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By Offer</span>
                                    <select>
                                        <option>Free</option>
                                        <option>Paid</option>
                                        <option>Premium</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By Category</span>
                                    <select data-live-search="true">
                                        <option>Web Design</option>
                                        <option>Graphic</option>
                                        <option>App Development</option>
                                        <option>Figma Design</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select">
                                    <span class="select-label d-block">Price Range</span>

                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount">
                                                    </div>
                                                    <div class="price--filter">
                                                        <a class="rbt-btn btn-gradient btn-sm" href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Toggle  -->
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>


    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="inner">
            <div class="container">
                <div class="rbt-course-grid-column">

                    @foreach ($course as $item)
                        

                    <!-- Start Single Card  -->
                    <div class="course-grid-3">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{route('front.course.detail',[$item->id,seminerLink($item->id)])}}">
                                    <img src="{{($item->image ==  null) ? url("/assets/images/course/course-online-01.jpg") : url("/assets".$item->image)}}" alt="Card image">
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
                                    
                                </div>

                                <h4 class="rbt-card-title"><a href="{{route('front.course.detail',[$item->id,seminerLink($item->id)])}}"> {{$item->title}} </a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i> {{$item->kategori->name}} </li>
                                </ul>

                                <p class="rbt-card-text"> {{substr($item->short_description,0,100)}}... </p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="{{route('front.teacher.detail',[$item->ogretmen->id,hocaLink($item->ogretmen->id)])}}">
                                            <img src="{{"/assets".$item->ogretmen->photo}}" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        <a href="{{route('front.teacher.detail',[$item->ogretmen->id,hocaLink($item->ogretmen->id)])}}"> {{$item->ogretmen->name}} {{$item->ogretmen->surname}} </a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price"> {{$item->price}} TL <span style="font-size:15px">+ KDV / SEANS</span></span>
                                    </div>
                                    <a class="rbt-btn-link" href="{{route('front.course.detail',[$item->id,seminerLink($item->id)])}}">Detay<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    @endforeach
               
                </div>
                
            </div>
        </div>
    </div>
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>


@endsection
