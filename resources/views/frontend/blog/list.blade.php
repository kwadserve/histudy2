@extends('frontend.body.master')
@section('title', 'Blog ')
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
                                <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Blog Yazıları</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Tüm Bloglar</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div>
                                </a>
                            </div>

                            <p class="description">Öğrenirken ilginç blog yazılarını takip etmeyi unutmayın... </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-blog-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">

            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-02 height-330 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{route('front.blog.detail',$son->id)}}">
                                <img src="{{ $son->kapak != null ? url('assets' . $son->kapak) : 'assets/images/blog/blog-card-01.jpg' }}"
                                    alt="{{ $son->title }}"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a href="{{route('front.blog.detail',$son->id)}}">{{ $son->title }}</a></h3>
                            <p class="rbt-card-text">{{ $son->short_description }}</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{route('front.blog.detail',$son->id)}}">Devamını Gör<i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
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



                <div class="col-lg-6 col-md-12 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    @foreach ($uc as $item)
                        <div class="rbt-card card-list variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{route('front.blog.detail',$item->id)}}">
                                    <img src="{{ $item->kapak != null ? url('assets' . $son->kapak) : 'assets/images/blog/blog-card-02.jpg' }}"
                                        alt="{{ $item->title }}"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="{{route('front.blog.detail',$item->id)}}">{{ $item->title }}</a></h5>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="{{route('front.blog.detail',$item->id)}}">Devamını Gör<i><svg
                                                width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                            </div>
                        </div><br>
                    @endforeach

                </div>


            </div>
            <!-- End Card Area -->

            <!-- Start Card Area -->
            <div class="row g-5 mt--15">

                @foreach ($hepsi as $item)
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{route('front.blog.detail',$item->id)}}">
                                    <img src="{{ $item->kapak != null ? url('assets' . $item->kapak) : 'assets/images/blog/blog-grid-01.jpg' }}"
                                        alt="{{ $item->title }}"> </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="{{route('front.blog.detail',$item->id)}}">{{ $item->title }}</a></h5>
                                <p class="rbt-card-text">{{ $item->short_description }}</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="{{route('front.blog.detail',$item->id)}}">Devamını Gör<i><svg
                                                width="17" height="12" xmlns="http://www.w3.org/2000/svg">
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
                @endforeach


            </div>
            <!-- End Card Area -->


        </div>
    </div>
    <!-- End Card Style -->

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

@endsection
