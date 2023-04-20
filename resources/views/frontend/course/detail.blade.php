@extends('frontend.body.master')
@section('title','Kurs Detay')
@section('content')

        <!-- Start breadcrumb Area -->
        <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
            <div class="breadcrumb-inner">
                <img src="/assets/images/bg/bg-image-10.jpg" alt="Education Images">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content text-start">
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Web Development</li>
                            </ul>
                            <h2 class="title"> {{$data->title}} </h2>
                            <p class="description"> {{$data->short_description}} </p>
    
                            <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">
    
                                <div class="feature-sin best-seller-badge">
                                    <span class="rbt-badge-2">
                                        <span class="image"><img src="/assets/images/icons/card-icon-1.png"
                                                alt="Best Seller Icon"></span> Bestseller
                                    </span>
                                </div>
    
                                <div class="feature-sin rating">
                                    <a href="#">4.8</a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
    
                                <div class="feature-sin total-rating">
                                    <a class="rbt-badge-4" href="#">215,475 rating</a>
                                </div>
    
                                <div class="feature-sin total-student">
                                    <span>616,029 students</span>
                                </div>
    
                            </div>
    
                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src=" {{$data->ogretmen->photo == null ? url("/assets/images/icons/card-icon-1.png") : url("/assets".$data->ogretmen->photo)}} " alt="{{$data->ogretmen->name}}">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    <a href="profile.html"> {{$data->ogretmen->name}} {{$data->ogretmen->surname}} </a>
                                </div>
                            </div>
    
                            <ul class="rbt-meta">
                                <li><i class="feather-calendar"></i>Last updated 12/2024</li>
                                <li><i class="feather-globe"></i>English</li>
                                <li><i class="feather-award"></i>Certified Course</li>
                            </ul>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area -->
    
        <div class="rbt-course-details-area ptb--60">
            <div class="container">
                <div class="row g-5">
    
                    <div class="col-lg-8">
                        <div class="course-details-content">
                            <div class="rbt-course-feature-box rbt-shadow-box thuumbnail">
                                <img class="w-100" src=" {{$data->image == null ? url("/assets/images/icons/card-icon-1.png") : url("/assets".$data->image)}} " alt="Card image">
                            </div>
    
                            <div class="rbt-inner-onepage-navigation sticky-top mt--30">
                                <nav class="mainmenu-nav onepagenav">
                                    <ul class="mainmenu">
                                        <li class="current">
                                            <a href="#overview">Hakkında</a>
                                        </li>
                                        <li>
                                            <a href="#coursecontent">İçerik</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#intructor">Öğretmen</a>
                                        </li>
                                        <li>
                                            <a href="#review">Yorumlar</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
    
                            <!-- Start Course Feature Box  -->
                            <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more" id="overview">
                                <div class="rbt-course-feature-inner has-show-more-inner-content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">KURS HAKKINDA</h4>
                                    </div>
                                    <p>
                                        {{$data->long_description}}
                                    </p>
    
                                    
                                </div>
                                <div class="rbt-show-more-btn">Show More</div>
                            </div>
                            <!-- End Course Feature Box  -->

                                
    
                            <!-- Start Course Content  -->
                            <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30" id="coursecontent">
                                <div class="rbt-course-feature-inner">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">KURS İÇERİĞİ</h4>
                                    </div>
                                    <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                        <div class="accordion" id="accordionExampleb2">

                                            @foreach ($icerik as $item)

    
                                            <div class="accordion-item card">
                                                <h2 class="accordion-header card-header" id="headingTwo{{$item->id}}">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{$item->id}}" aria-expanded="true" aria-controls="collapseTwo{{$item->id}}">
                                                        {{$item->title}}
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo{{$item->id}}" class="accordion-collapse collapse {{($item->id) == 1 ? 'show' : ''}}" aria-labelledby="headingTwo{{$item->id}}" data-bs-parent="#accordionExampleb{{$item->id}}">
                                                    <div class="accordion-body card-body pr--0">
                                                        <ul class="rbt-course-main-content liststyle">
                                                                    <div class="course-content-left">
                                                                        <i class="feather-file-text"></i> <span
                                                                            class="text"> {{$item->description}} </span>
                                                                    </div>
                                                            </li>
    
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
    
                                            
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Course Content  -->
    
                            <!-- Start Intructor Area  -->
                            <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="intructor">
                                <div class="about-author border-0 pb--0 pt--0">
                                    <div class="section-title mb--30">
                                        <h4 class="rbt-title-style-3">ÖĞRETMEN</h4>
                                    </div>
                                    <div class="media align-items-center">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="{{$data->ogretmen->photo == null ? url("/assets/images/testimonial/testimonial-7.jpg") : url("/assets".$data->ogretmen->photo)}}  " alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="author.html"> {{$data->ogretmen->name}} {{$data->ogretmen->surname}}</a>
                                                </h5>
                                                <span class="b3 subtitle"> {{$data->ogretmen->job}} </span>
                                                <ul class="rbt-meta mb--20 mt--10">
                                                    <li><i class="fa fa-star color-warning"></i>75,237 Reviews <span class="rbt-badge-5 ml--5">4.4 Rating</span></li>
                                                    <li><i class="feather-users"></i>912,970 Students</li>
                                                    <li><a href="#"><i class="feather-video"></i>16 Courses</a></li>
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <p class="description"> {{$data->ogretmen->description}} </p>
    
                                                <ul class="social-icon social-default icon-naked justify-content-start">
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
                            </div>
                            <!-- End Intructor Area  -->
    
                            <!-- Start Edu Review List  -->
                            <div class="rbt-review-wrapper rbt-shadow-box review-wrapper mt--30" id="review">
                                <div class="course-content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">DEĞERLENDİRME</h4>
                                    </div>
                                    <div class="row g-5 align-items-center">
                                        <div class="col-lg-3">
                                            <div class="rating-box">
                                                <div class="rating-number">5.0</div>
                                                <div class="rating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </div>
                                                <span class="sub-title">Course Rating</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="review-wrapper">
                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="value-text">63%</span>
                                                </div>
    
                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="value-text">29%</span>
                                                </div>
    
                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="value-text">6%</span>
                                                </div>
    
                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="value-text">1%</span>
                                                </div>
    
                                                <div class="single-progress-bar">
                                                    <div class="rating-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span class="value-text">1%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Edu Review List  -->
    
                            <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 has-show-more">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">YORUMLAR</h4>
                                </div>
                                <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                                    <div class="rbt-course-review about-author">
                                        <div class="media">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="/assets/images/testimonial/testimonial-3.jpg" alt="Author Images">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            Farjana Bawnia
                                                        </a>
                                                    </h5>
                                                    <div class="rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p class="description">At 29 years old, my favorite compliment is being
                                                        told that I look like my mom. Seeing myself in her image, like this
                                                        daughter up top.</p>
                                                    <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rbt-course-review about-author">
                                        <div class="media">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="/assets/images/testimonial/testimonial-4.jpg" alt="Author Images">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="#">Razwan Islam</a>
                                                    </h5>
                                                    <div class="rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p class="description">My favorite compliment is being
                                                        told that I look like my mom. Seeing myself in her image, like this
                                                        daughter up top.</p>
                                                    <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rbt-course-review about-author">
                                        <div class="media">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="/assets/images/testimonial/testimonial-1.jpg" alt="Author Images">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="#">Babor Azom</a>
                                                    </h5>
                                                    <div class="rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p class="description">My favorite compliment is being
                                                        told that I look like my mom. Seeing myself in her image, like this
                                                        daughter up top.</p>
                                                    <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rbt-course-review about-author">
                                        <div class="media">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="/assets/images/testimonial/testimonial-6.jpg" alt="Author Images">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="#">Mohammad Ali</a>
                                                    </h5>
                                                    <div class="rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p class="description">My favorite compliment is being
                                                        told that I look like my mom. Seeing myself in her image, like this
                                                        daughter up top.</p>
                                                    <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rbt-course-review about-author">
                                        <div class="media">
                                            <div class="thumbnail">
                                                <a href="#">
                                                    <img src="/assets/images/testimonial/testimonial-8.jpg" alt="Author Images">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="author-info">
                                                    <h5 class="title">
                                                        <a class="hover-flip-item-wrapper" href="#">Sakib Al Hasan</a>
                                                    </h5>
                                                    <div class="rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p class="description">My favorite compliment is being
                                                        told that I look like my mom. Seeing myself in her image, like this
                                                        daughter up top.</p>
                                                    <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">
                                                                <i class="feather-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-show-more-btn">Show More</div>
                            </div>
                        </div>
                        <div class="related-course mt--60">
                            <div class="row g-5 align-items-end mb--40">
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="section-title">
                                        <span class="subtitle bg-pink-opacity">Top Course</span>
                                        <h4 class="title"><strong class="color-primary"> {{$data->ogretmen->name}} {{$data->ogretmen->surname}} </strong> Diğer Kurslar</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="read-more-btn text-start text-md-end">
                                        <a class="rbt-btn rbt-switch-btn btn-border btn-sm" href="#">
                                            <span data-text="View All Course">Hepsini Gör</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-5">
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="/assets/images/course/course-online-01.jpg" alt="Card image">
                                                <div class="rbt-badge-3 bg-white">
                                                    <span>-40%</span>
                                                    <span>Off</span>
                                                </div>
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
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
    
                                            <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>
                                            </h4>
    
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
    
                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
    
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="/assets/images/course/course-online-02.jpg" alt="Card image">
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
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
    
                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="/assets/images/client/avatar-02.png" alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4" style="margin-top:10%">
                        <div class="course-sidebar sticky-top rbt-shadow-box course-sidebar-top rbt-gradient-border">
                            <div class="inner" style="margin-top:20%">
    
                                
    
                                <div class="content-item-content">
                                    <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="rbt-price">
                                            <span class="current-price"> {{$data->price}} TL</span>
                                            <span class="off-price">8400 TL</span>
                                        </div>
                                        <div class="discount-time">
                                            <span class="rbt-badge color-danger bg-color-danger-opacity"><i
                                                    class="feather-clock"></i> Sınırlı Kontenjan</span>
                                        </div>
                                    </div>
    
                                    <div class="add-to-card-button mt--15">
                                        <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="#">
                                            <span class="btn-text">Sepete Ekle</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </a>
                                    </div>
    
                                    <div class="buy-now-btn mt--15">
                                        <a class="rbt-btn btn-border icon-hover w-100 d-block text-center" href="#">
                                            <span class="btn-text">Şimdi Katıl</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </a>
                                    </div>
    
                                    <span class="subtitle"><i class="feather-rotate-ccw"></i> 30-Day Money-Back
                                        Guarantee</span>
    
    
                                    <div class="rbt-widget-details has-show-more">
                                        <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                            <li><span>Start Date</span><span class="rbt-feature-value rbt-badge-5">5 Hrs 20 Min</span>
                                            </li>
                                            <li><span>Enrolled</span><span class="rbt-feature-value rbt-badge-5">100</span></li>
                                            <li><span>Lectures</span><span class="rbt-feature-value rbt-badge-5">50</span></li>
                                            <li><span>Skill Level</span><span class="rbt-feature-value rbt-badge-5">Basic</span></li>
                                            <li><span>Language</span><span class="rbt-feature-value rbt-badge-5">English</span></li>
                                            <li><span>Quizzes</span><span class="rbt-feature-value rbt-badge-5">10</span></li>
                                            <li><span>Certificate</span><span class="rbt-feature-value rbt-badge-5">Yes</span></li>
                                            <li><span>Pass Percentage</span><span class="rbt-feature-value rbt-badge-5">95%</span></li>
                                        </ul>
                                        <div class="rbt-show-more-btn">Show More</div>
                                    </div>
    
                                    <div class="social-share-wrapper mt--30 text-center">
                                        <div class="rbt-post-share d-flex align-items-center justify-content-center">
                                            <ul class="social-icon social-default transparent-with-border justify-content-center">
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
                                        <hr class="mt--20">
                                        <div class="contact-with-us text-center">
                                            <p>For details about the course</p>
                                            <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i class="feather-phone mr--5"></i> Call Us: <a href="#"><strong>+444 555 666 777</strong></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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