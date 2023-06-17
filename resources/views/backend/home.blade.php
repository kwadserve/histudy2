@extends('backend.layouts.master')
@section('title') @lang('translation.Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')



<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <center>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">SEMINERLER</span>
                        <h2 class="mb-3">
                            {{$kurs_sayac}}
                        </h2>
                    </div>

                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
                </center>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <center>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">ÖĞRETMENLER</span>
                        <h2 class="mb-3">
                            {{$ogretmen_sayac}}
                        </h2>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
                </center>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <center>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">ÖĞRENCİLER</span>
                        <h2 class="mb-3">
                            {{$ogrenci_sayac}}
                        </h2>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
                </center>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <center>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">BLOG</span>
                        <h2 class="mb-3">
                            2
                        </h2>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                    </div>
                </div>
            </center>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row-->



<div class="row">

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">ÖĞRETMENLER</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown">
                        <a href="{{route('panel.teacher.list')}}">
                            <button type="button" class="btn btn-primary">Tümünü Gör</button>
                        </a>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    @foreach ($ogretmenler as $item)
                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="{{asset('assets/'.$item->photo) }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">{{$item->name}} {{$item->surname}}</a></h5>
                            <span class="text-muted">{{$item->email}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">ÖĞRENCİLER</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown">
                        <a href="{{route('panel.student.list')}}">
                            <button type="button" class="btn btn-primary">Tümünü Gör</button>
                        </a>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    @foreach ($ogrenciler as $item)
                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="/assets/images/uploads/teacher_images/1763700432314925.png" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">{{$item->name}} {{$item->surname}}</a></h5>
                            <span class="text-muted">{{$item->email}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-5">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">SEMİNERLER</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown align-self-start">
                        <a href="{{route('panel.course.list')}}">
                            <button type="button" class="btn btn-primary">Tümünü Gör</button>
                        </a>
                    </div>
                </div>

            </div><!-- end card header -->

            <div class="card-body px-0 pt-2 ">
                    <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                        <table class="table align-middle table-nowrap ">
                            <tbody>

                                @foreach ($kurslar as $item)
                                    
                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ asset('assets/'.$item->image) }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">{{$item->title}}</a></h5>
                                            <span class="text-muted">{{$item->kategori->name}}</span>
                                        </div>
                                    </td>

                                    <td>
                                        <h6 class="mb-1"><a href="" class="text-dark">{{$item->price}} TL / SEANS</a></h6>
                                        <span class="text-muted">TOTAL: {{($item->price)*($item->toplam_saat)}} TL</span>
                                    </td>

                                    
                                </tr>

                                @endforeach
                                

                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <!-- end col -->
</div><!-- end row -->
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
