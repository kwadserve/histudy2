@extends('frontend.body.master')
@section('title', 'Öğretmenler ')
@section('content')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Öğretmenler</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('front.home') }}">Anasayfa</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Öğretmenler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-team-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5">

                @foreach ($data as $item)
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="rbt-team team-style-default style-three small-layout rbt-hover">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{ route('front.teacher.detail', [$item->id,hocaLink($item->id)]) }}">
                                        <img style="height: 80%" src="{{ $item->photo == null ? url('/assets/images/team/team-01.jpg') : url('/assets' . $item->photo) }}"
                                            alt="Corporate Template">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="{{ route('front.teacher.detail', $item->id) }}">
                                        <h4 class="title"> {{ $item->name }} {{ $item->surname }} </h4>
                                    </a>

                                    @foreach ($item->Kategoriler() as $key => $cat)
                                        <p class="subtitle theme-gradient">
                                            {{ $cat->name }} {{ $key != count($item->Kategoriler()) - 1 ? ',' : '' }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Team  -->
                @endforeach


            </div>

        </div>
    </div>

@endsection
