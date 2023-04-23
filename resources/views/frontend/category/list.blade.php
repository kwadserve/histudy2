@extends('frontend.body.master')
@section('title', 'Kategoriler')
@section('content')

    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Kategoriler</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Kategoriler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-categories-area bg-color-extra2 rbt-section-gap">
        <div class="container">

            <div class="row g-5">

                @foreach ($data as $item)
                    <!-- Start Category Box Layout  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="rbt-cat-box rbt-cat-box-1 variation-3 text-center">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-filter-one-toggle.html">
                                        <img src="{{ $item->image == null ? url('assets/images/category/image/web-design.jpg') : url('assets' . $item->image) }} "
                                            alt="Category Images">
                                        <div class="read-more-btn">
                                            <span class="rbt-btn btn-sm btn-white radius-round">20 Courses</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="course-filter-one-toggle.html"> {{$item->name}} </a></h5>
                                    <p class="description"> {{$item->description}} </p>
                                </div>
                            </div>
                            <br><br>


                        </div>

                    </div>
                    <!-- End Category Box Layout  -->
                @endforeach


            </div>
        </div>
    </div>



@endsection
