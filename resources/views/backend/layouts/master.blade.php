<!doctype html >
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | ArtElegans Academy </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Art Elegans Academy & Education System" name="description" />
    <meta content="ArtElegans" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/artelegans.jpg') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('backend.layouts.head-css')
</head>

@section('body')
    @include('backend.layouts.body')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('backend.layouts.topbar')
        @include('backend.layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('backend.layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->



    <!-- JAVASCRIPT -->
    @include('backend.layouts.vendor-scripts')
</body>

</html>
