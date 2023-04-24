
@extends('frontend.body.master')
@section('title','Öğretmen Hakkında ')
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
                                <img src="/assets{{$data->photo}}" alt="Instructor">
                            </div>
                            <div class="tutor-content">
                                <h5 class="title"> {{$data->name}} {{$data->surname}}</h5>
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
                        </div>
                        <div class="rbt-tutor-information-right">
                            <div class="tutor-btn">
                                <a class="rbt-btn btn-md hover-icon-reverse" href="{{route('front.teacher.course',$data->id)}}">
                                    <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Seminerleri Gör</span>
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
                                                <li><a href="#"><i class="feather-user"></i><span>Profil</span></a></li>
                                                <li><a href="#"><i class="feather-message-square"></i><span>Yorumlar</span></a></li>
                                                <li><a href="{{route('front.teacher.course',$data->id)}}"><i class="feather-book-open"></i><span>Seminerler</span></a></li>
                                                </ul>
                                        </nav>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Sidebar  -->
                    </div>

                    <div class="col-lg-9">
                        <!-- Start Instructor Profile  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Profil</h4>
                                </div>
                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Ad Soyad</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{$data->name}} {{$data->surname}}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->
                    
                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Email</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{$data->email}}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->
                    
                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Telefon</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{$data->phone}}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->
                    
                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Meslek</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{$data->job}}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->
                    
                                <!-- Start Profile Row  -->
                                <div class="rbt-profile-row row row--15 mt--15">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="rbt-profile-content b2">Kısa Açıklama</div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="rbt-profile-content b2">{{$data->description}}</div>
                                    </div>
                                </div>
                                <!-- End Profile Row  -->
                    
                            </div>
                        </div>
                        <!-- End Instructor Profile  -->
                    
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