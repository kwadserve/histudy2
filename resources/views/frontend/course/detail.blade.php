@extends('frontend.body.master')
@section('title', 'Kurs Detay')
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
                            <li class="rbt-breadcrumb-item"><a href="{{ route('front.home') }}">Anasayfa</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $data->kategori->name }}</li>
                        </ul>
                        <h2 class="title"> {{ $data->title }} </h2>
                        <p class="description"> {{ $data->short_description }} </p>


                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="{{ route('front.teacher.detail', $data->ogretmen->id) }}">
                                    <img src=" {{ $data->ogretmen->photo == null ? url('/assets/images/icons/card-icon-1.png') : url('/assets' . $data->ogretmen->photo) }} "
                                        alt="{{ $data->ogretmen->name }}">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                <a href="{{ route('front.teacher.detail', $data->ogretmen->id) }}"> {{ $data->ogretmen->name }} {{ $data->ogretmen->surname }} </a>
                            </div>

                        </div>

                        <ul class="rbt-meta">
                            <li><i class="feather-calendar"></i>Son Güncelleme Tarihi: <b> {{ $data->updated_at }} </b></li>
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
                            <img class="w-100"
                                src=" {{ $data->image == null ? url('/assets/images/icons/card-icon-1.png') : url('/assets' . $data->image) }} "
                                alt="Card image">
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
                        <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more"
                            id="overview">
                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">KURS HAKKINDA</h4>
                                </div>
                                <p>
                                    {!! $data->long_description !!}
                                </p>


                            </div>
                            <div class="rbt-show-more-btn">Daha fazla göster</div>
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
                                                <h2 class="accordion-header card-header"
                                                    id="headingTwo{{ $item->id }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo{{ $item->id }}"
                                                        aria-expanded="true"
                                                        aria-controls="collapseTwo{{ $item->id }}">
                                                        {{ $item->title }}
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo{{ $item->id }}"
                                                    class="accordion-collapse collapse {{ $item->id == 1 ? 'show' : '' }}"
                                                    aria-labelledby="headingTwo{{ $item->id }}"
                                                    data-bs-parent="#accordionExampleb{{ $item->id }}">
                                                    <div class="accordion-body card-body pr--0">
                                                        <ul class="rbt-course-main-content liststyle">
                                                            <div class="course-content-left">
                                                                <span class="text">
                                                                    {!! $item->description !!} </span>
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
                                        <a href="{{ route('front.teacher.detail', $data->ogretmen->id) }}">
                                            <img src="{{ $data->ogretmen->photo == null ? url('/assets/images/testimonial/testimonial-7.jpg') : url('/assets' . $data->ogretmen->photo) }}  "
                                                alt="Author Images">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="{{ route('front.teacher.detail', $data->ogretmen->id) }}">
                                                    {{ $data->ogretmen->name }} {{ $data->ogretmen->surname }}</a>
                                            </h5>
                                            <span class="b3 subtitle"> {{ $data->ogretmen->job }} </span>
                                            <ul class="rbt-meta mb--20 mt--10">
                                                <li><a href="{{ route('front.teacher.course', $data->ogretmen->id) }}"><i
                                                            class="feather-video"></i>
                                                        {{ $data->ogretmen->course_count() }} Seminer </a></li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="content">
                                            <p class="description"> {!! $data->ogretmen->description !!} </p>

                                            <ul
                                                class="social-icon social-default transparent-with-border justify-content-center">
                                                @if($data->ogretmen->facebook != null)
                                                <li><a href="https://www.facebook.com/{{ $data->ogretmen->facebook }}">
                                                        <i class="feather-facebook"></i>
                                                    </a>
                                                </li>
                                                @endif
                                                @if($data->ogretmen->twitter != null)
                                                <li><a href="https://www.twitter.com/{{ $data->ogretmen->twitter }}">
                                                        <i class="feather-twitter"></i>
                                                    </a>
                                                </li>
                                                @endif
                                                @if($data->ogretmen->instagram != null)
                                                <li><a href="https://www.instagram.com/{{ $data->ogretmen->instagram }}">
                                                        <i class="feather-instagram"></i>
                                                    </a>
                                                </li>
                                                @endif
                                                @if($data->ogretmen->linkedin != null)
                                                <li><a href="https://www.linkdin.com/{{ $data->ogretmen->linkedin }}">
                                                        <i class="feather-linkedin"></i>
                                                    </a>
                                                </li>
                                                @endif
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Intructor Area  -->

                        <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 has-show-more"
                            id="review">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">YORUMLAR</h4>
                            </div>
                            <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="/assets/images/testimonial/testimonial-3.jpg"
                                                    alt="Author Images">
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
                                                <ul
                                                    class="social-icon social-default transparent-with-border justify-content-start">
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
                                                <img src="/assets/images/testimonial/testimonial-4.jpg"
                                                    alt="Author Images">
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
                                                <ul
                                                    class="social-icon social-default transparent-with-border justify-content-start">
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
                                                <img src="/assets/images/testimonial/testimonial-1.jpg"
                                                    alt="Author Images">
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
                                                <ul
                                                    class="social-icon social-default transparent-with-border justify-content-start">
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
                                                <img src="/assets/images/testimonial/testimonial-6.jpg"
                                                    alt="Author Images">
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
                                                <ul
                                                    class="social-icon social-default transparent-with-border justify-content-start">
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
                                                <img src="/assets/images/testimonial/testimonial-8.jpg"
                                                    alt="Author Images">
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
                                                <ul
                                                    class="social-icon social-default transparent-with-border justify-content-start">
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
                            <div class="rbt-show-more-btn">Daha fazla göster</div>
                        </div>
                    </div>
                    <div class="related-course mt--60">
                        <div class="row g-5 align-items-end mb--40">
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="section-title">
                                    <span class="subtitle bg-pink-opacity">POPÜLER</span>
                                    <h4 class="title"><strong class="color-primary"> {{ $data->ogretmen->name }}
                                            {{ $data->ogretmen->surname }} </strong> Diğer Kurslar</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="read-more-btn text-start text-md-end">
                                    <a class="rbt-btn rbt-switch-btn btn-border btn-sm"
                                        href="{{ route('front.teacher.course', $data->ogretmen->id) }}">
                                        <span data-text="View All Course">Hepsini Gör</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5">

                            @foreach ($data->OgretmeninKurslari() as $kurs)
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src=" {{ $kurs->image != null ? url('/assets' . $kurs->image) : url('/assets/images/course/course-online-01.jpg') }} "
                                                    alt="{{ $kurs->title }}">
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

                                            <h4 class="rbt-card-title"><a
                                                    href="{{ route('front.course.detail', $kurs->id) }}">{{ $kurs->title }}</a>
                                            </h4>

                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i> {{ $kurs->kategori->name }} </li>
                                            </ul>

                                            <p class="rbt-card-text"> {{ $kurs->short_description }} </p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ $kurs->ogretmen->photo != null ? url('/assets/images/client/avatar-02.png') : url('/assets' . $item->ogretmen->photo) }}"
                                                            alt="{{ $kurs->ogretmen->name }}">

                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    <a href="profile.html"> {{ $kurs->ogretmen->name }}
                                                        {{ $kurs->ogretmen->surname }} </a>

                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price"> {{ $kurs->price }} TL <span
                                                            style="font-size:15px">+KDV/SEANS</span></span>
                                                </div>
                                                <a class="rbt-btn-link"
                                                    href="{{ route('front.course.detail', $kurs->id) }}">Detay<i
                                                        class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            @endforeach



                        </div>
                    </div>

                </div>

                <div class="col-lg-4" style="margin-top:10%">
                    <div class="course-sidebar sticky-top rbt-shadow-box course-sidebar-top rbt-gradient-border">
                        <div class="inner" style="margin-top:20%">



                            <div class="content-item-content">
                                <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="rbt-price">
                                        <span class="current-price"> {{ $data->price }} TL <span
                                                style="font-size:15px">+KDV/SEANS</span></span>
                                    </div>
                                    <div class="discount-time">
                                        <span class="rbt-badge color-danger bg-color-danger-opacity"><i
                                                class="feather-clock"></i> Sınırlı Kontenjan</span>
                                    </div>
                                </div>

                                <div class="add-to-card-button mt--15">
                                    <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center"
                                        href="{{ route('kurs.sepet', ['id'=>$data->id,'back_url' => $back_url]) }}">
                                        <span class="btn-text">Şimdi Katıl</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </a>
                                </div>

                                <?php
                                    $yeni_kitle = [];

                                if ($data->kitle_min != null) {
                                    $yeni_kitle = explode(',',$data->kitle_min);
                                }
                                ?>


                                <span class="subtitle"><i class="feather-rotate-ccw"></i>Seminer tarih ve kontenjanlar
                                    aşağıdadır.</span>


                                <div class="rbt-widget-details has-show-more">
                                    <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                        <div class="container">
                                            <li><span>Başlangıç Tarihi</span><span
                                                    class="rbt-feature-value rbt-badge-5">{{ $data->start }}</span>
                                            </li>
                                            <li><span>Bitiş Tarihi</span><span
                                                    class="rbt-feature-value rbt-badge-5">{{ $data->finish }}</span></li>
                                            <li><span>MİN :</span><span
                                                    class="rbt-feature-value rbt-badge-5">{{ $data->min_person }}
                                                    KİŞİ</span>
                                                <span>MAKS :</span><span
                                                    class="rbt-feature-value rbt-badge-5">{{ $data->max_person }} KİŞİ
                                            </li>

                                            <li><span>Gün: </span><span class="rbt-feature-value rbt-badge-5">
                                                    {{ $data->toplam_gun }} GÜN </span>
                                                <span>Seans: </span><span class="rbt-feature-value rbt-badge-5">
                                                    {{ $data->toplam_saat }} SEANS </span>

                                            </li>
                                            <li><span>Kitle: </span><span class="rbt-feature-value rbt-badge-5">
                                                    @foreach($yeni_kitle as $key => $value)
                                                    @if($value == 0)
                                                        İlkokul
                                                    @endif
                                                    @if($value == 1)
                                                        Ortaokul
                                                    @endif
                                                    @if($value == 2)
                                                        Lise
                                                    @endif
                                                    @if($value == 3)
                                                        Üniversite
                                                    @endif
                                                    @if($value == 4)
                                                        Yetişkin
                                                    @endif
                                                    @endforeach </span>

                                            </li>
                                        </div>
                                    </ul>
                                </div>

                                <div style="margin-top:10%" class="social-share-wrapper mt--30 text-center">
                                    <div class="contact-with-us text-center">
                                        <p>Seminer hakkında detaylı bilgi için</p>
                                        <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i
                                                class="feather-mail mr--5"></i> Email: <a
                                                href="mailto:info@artelegans.com "><strong>info@artelegans.com</strong></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="{{ route('front.course') }}">
                                    <span data-text=" &nbsp;&nbsp; KURSLAR">Hepsini Gör</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Start Card Area -->
                    <div class="row g-5">

                        @foreach ($son_kurslar as $item)
                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12 sal-animate" data-sal-delay="150"
                                data-sal="slide-up" data-sal-duration="800">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('front.course.detail', $item->id) }}">

                                            <img src="{{ $item->image == null ? url('/assets/images/course/course-online-01.jpg') : url('/assets' . $item->image) }}"
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

                                        </div>

                                        <h4 class="rbt-card-title"><a
                                                href="{{ route('front.course.detail', $item->id) }}"> {{ $item->title }}
                                            </a>
                                        </h4>

                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i> {{ $item->kategori->name }} </li>
                                        </ul>

                                        <p class="rbt-card-text"> {{ $item->short_description }} </p>

                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ '/assets' . $item->ogretmen->photo }}"
                                                        alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                <a href="{{ route('front.teacher.detail', $item->id) }}">
                                                    {{ $item->ogretmen->name }} {{ $item->ogretmen->surname }} </a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">
                                            <div class="rbt-price">
                                                <span class="current-price"> {{ $item->price }} TL <span
                                                        style="font-size:15px">+KDV/SEANS</span></span>
                                            </div>
                                            <a class="rbt-btn-link"
                                                href="{{ route('front.course.detail', $item->id) }}">Detay<i
                                                    class="feather-arrow-right"></i></a>
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
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>


@endsection
@section('script-bottom')

    @include('sweetalert::alert')

@endsection
