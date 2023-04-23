@extends('frontend.body.master')
@section('title', 'Öğretmen Hakkında ')
@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>

    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--22 height-350"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="/assets/images/team/avatar.jpg" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title"> {{$data->name}} {{$data->surname}} </h5>
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
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                <div class="tutor-btn">
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="#">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Create a New Course</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="content-item-content">

                                        <div class="rbt-default-sidebar-wrapper">
                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="{{ route('front.teacher.profile', $data->id) }}"><i
                                                                class="feather-user"></i><span>Profil</span></a></li>
                                                    <li><a href="instructor-profile.html"><i
                                                                class="feather-message-square"></i><span>Yorumlar</span></a>
                                                    </li>
                                                    <li><a href="{{ route('front.teacher.detail', $data->id) }}"><i
                                                                class="feather-book-open"></i><span>Seminerler</span></a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-9">
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Seminerler</h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4"
                                            role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="home-tab-4"
                                                    data-bs-toggle="tab" data-bs-target="#home-4" role="tab"
                                                    aria-controls="home-4" aria-selected="true">
                                                    <span class="title">Gelecek Seminerler</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="profile-tab-4" data-bs-toggle="tab"
                                                    data-bs-target="#profile-4" role="tab" aria-controls="profile-4"
                                                    aria-selected="false">
                                                    <span class="title">Aktif Seminerler</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="contact-tab-4" data-bs-toggle="tab"
                                                    data-bs-target="#contact-4" role="tab" aria-controls="contact-4"
                                                    aria-selected="false">
                                                    <span class="title">Tamamlanan Seminerler</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="home-4" role="tabpanel"
                                            aria-labelledby="home-tab-4">
                                            <div class="row g-5">
                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-01.jpg"
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
                                                                    <span class="rating-count"> (15 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a href="course-details.html">React
                                                                    Front To Back</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                                <li><i class="feather-users"></i>40 Students</li>
                                                            </ul>

                                                            <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                <div class="single-progress">
                                                                    <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft bar-color-success"
                                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                            role="progressbar" style="width: 90%"
                                                                            aria-valuenow="90" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                        </div>
                                                                        <span
                                                                            class="rbt-title-style-2 progress-number">90%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rbt-card-bottom">
                                                                <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                    href="#">Download Certificate</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-02.jpg"
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
                                                                    <span class="rating-count"> (15 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP
                                                                    Beginner + Advanced</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>10 Lessons</li>
                                                                <li><i class="feather-users"></i>30 Students</li>
                                                            </ul>

                                                            <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                <div class="single-progress">
                                                                    <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft bar-color-success"
                                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                            role="progressbar" style="width: 40%"
                                                                            aria-valuenow="40" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                        </div>
                                                                        <span
                                                                            class="rbt-title-style-2 progress-number">40%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rbt-card-bottom">
                                                                <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                    href="#">Download Certificate</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-03.jpg"
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
                                                                    <span class="rating-count"> (4 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a
                                                                    href="course-details.html">Angular Zero to
                                                                    Mastery</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>14 Lessons</li>
                                                                <li><i class="feather-users"></i>26 Students</li>
                                                            </ul>

                                                            <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                <div class="single-progress">
                                                                    <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft bar-color-success"
                                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                            role="progressbar" style="width: 65%"
                                                                            aria-valuenow="65" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                        </div>
                                                                        <span
                                                                            class="rbt-title-style-2 progress-number">65%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rbt-card-bottom">
                                                                <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                    href="#">Download Certificate</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="profile-4" role="tabpanel"
                                            aria-labelledby="profile-tab-4">
                                            <div class="row g-5">

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-04.jpg"
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
                                                                    <span class="rating-count"> (3 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a
                                                                    href="course-details.html">English Langiage Club</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                                <li><i class="feather-users"></i>30 Students</li>
                                                            </ul>

                                                            <div class="rbt-card-bottom">
                                                                <div class="rbt-price">
                                                                    <span class="current-price">$40</span>
                                                                    <span class="off-price">$86</span>
                                                                </div>
                                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                                    More<i class="feather-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-06.jpg"
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
                                                                    <span class="rating-count"> (3 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a
                                                                    href="course-details.html">Graphic Courses Club</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>50 Lessons</li>
                                                                <li><i class="feather-users"></i>10 Students</li>
                                                            </ul>

                                                            <div class="rbt-card-bottom">
                                                                <div class="rbt-price">
                                                                    <span class="current-price">$40</span>
                                                                    <span class="off-price">$86</span>
                                                                </div>
                                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                                    More<i class="feather-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-05.jpg"
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
                                                                    <span class="rating-count"> (3 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a href="course-details.html">Wed
                                                                    Design Club</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                                <li><i class="feather-users"></i>30 Students</li>
                                                            </ul>

                                                            <div class="rbt-card-bottom">
                                                                <div class="rbt-price">
                                                                    <span class="current-price">$40</span>
                                                                    <span class="off-price">$86</span>
                                                                </div>
                                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                                    More<i class="feather-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="contact-4" role="tabpanel"
                                            aria-labelledby="contact-tab-4">
                                            <div class="row g-5">
                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-01.jpg"
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
                                                                    <span class="rating-count"> (15 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a href="course-details.html">React
                                                                    Front To Back</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                                <li><i class="feather-users"></i>40 Students</li>
                                                            </ul>

                                                            <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                <div class="single-progress">
                                                                    <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft bar-color-success"
                                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                            role="progressbar" style="width: 100%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                        </div>
                                                                        <span
                                                                            class="rbt-title-style-2 progress-number">100%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rbt-card-bottom">
                                                                <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                    href="#">Download Certificate</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-02.jpg"
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
                                                                    <span class="rating-count"> (15 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP
                                                                    Beginner + Advanced</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>10 Lessons</li>
                                                                <li><i class="feather-users"></i>30 Students</li>
                                                            </ul>

                                                            <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                <div class="single-progress">
                                                                    <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft bar-color-success"
                                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                            role="progressbar" style="width: 100%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                        </div>
                                                                        <span
                                                                            class="rbt-title-style-2 progress-number">100%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rbt-card-bottom">
                                                                <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                    href="#">Download Certificate</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->

                                                <!-- Start Single Course  -->
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <div class="rbt-card variation-01 rbt-hover">
                                                        <div class="rbt-card-img">
                                                            <a href="course-details.html">
                                                                <img src="/assets/images/course/course-online-03.jpg"
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
                                                                    <span class="rating-count"> (4 Reviews)</span>
                                                                </div>
                                                                <div class="rbt-bookmark-btn">
                                                                    <a class="rbt-round-btn" title="Bookmark"
                                                                        href="#"><i
                                                                            class="feather-bookmark"></i></a>
                                                                </div>
                                                            </div>
                                                            <h4 class="rbt-card-title"><a
                                                                    href="course-details.html">Angular Zero to
                                                                    Mastery</a>
                                                            </h4>
                                                            <ul class="rbt-meta">
                                                                <li><i class="feather-book"></i>14 Lessons</li>
                                                                <li><i class="feather-users"></i>26 Students</li>
                                                            </ul>

                                                            <div class="rbt-progress-style-1 mb--20 mt--10">
                                                                <div class="single-progress">
                                                                    <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                    <div class="progress">
                                                                        <div class="progress-bar wow fadeInLeft bar-color-success"
                                                                            data-wow-duration="0.5s" data-wow-delay=".3s"
                                                                            role="progressbar" style="width: 100%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100">
                                                                        </div>
                                                                        <span
                                                                            class="rbt-title-style-2 progress-number">100%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rbt-card-bottom">
                                                                <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center"
                                                                    href="#">Download Certificate</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Course  -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Enrole Course  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->




    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

@endsection
