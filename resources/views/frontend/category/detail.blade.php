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
                                <li class="rbt-breadcrumb-item active"> {{$cat->name}} </li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">'{{$cat->name}}' Seminerleri</h1>
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

                    </div>

                  
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>


    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="inner">
            <div class="container">
                <div class="rbt-course-grid-column">

                    @foreach ($data as $item)
                        

                    <!-- Start Single Card  -->
                    <div class="course-grid-3">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{route('front.course.detail',[$item->id,seminerLink($item->id)])}}">
                                    <img src="{{($item->image ==  null) ? url("assets/images/course/course-online-01.jpg") : url("assets".$item->image)}}" alt="{{$item->name}}">
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

                                <p class="rbt-card-text"> {{$item->short_description}} </p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater">
                                        <a href="{{route("front.teacher.profile",[$item->ogretmen->id,hocaLink($item->ogretmen->id)])}}">
                                            <img src="{{"/assets".$item->ogretmen->photo}}" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        <a href="{{route("front.teacher.profile",[$item->ogretmen->id,hocaLink($item->ogretmen->id)])}}"> {{$item->ogretmen->name}} {{$item->ogretmen->surname}} </a>
                                    </div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price"> {{$item->price}} TL <span style="font-size:15px">+KDV/SEANS</span></span>
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
