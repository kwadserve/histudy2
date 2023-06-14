@extends('frontend.body.master')
@section('title', 'Öğretmenler ')
@section('content')

    <div class="rbt-become-area bg-color-white rbt-section-gap">
        <div class="container">

            <div class="row pt--60 g-5">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img class="radius-10 w-100" src="{{asset('assets/images/öğretmen_ve_seminer.png')}}" alt="Corporate Template">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">BAŞVURU FORMU</span>
                        </div>
                        <h3 class="title">Öğretmen Başvuru Formu</h3>

                        <form action="{{route('front.teacher.add')}}" method="POST" class="row row--15">
                            @csrf
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input name="name" type="text">
                                    <label>İsim</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input name="surname" type="text">
                                    <label>Soyisim</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input name="phone" type="number">
                                    <label>Telefon</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" type="email">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="job" type="text">
                                    <label>Meslek</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <br>
                            <hr><br><br>

                            <div id="show_item" class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input name="seminer[]" type="text">
                                        <label>Verilecek Seminer</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success add_item_buton" id="add_item_buton" style="width:100px" type="button">
                                        <p style="width: 100%">+1 EKLE</p>
                                    </button>
                                </div>
                            </div><br>




                            <div class="col-lg-12">
                                <div class="form-submit-group">
                                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">GÖNDER</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script-bottom')
@include('sweetalert::alert')

    <script>
        $(document).ready(function() {
            $(".add_item_buton").click(function(e) {
                e.preventDefault();
                $("#show_item").prepend('<div id="show_item" class="row">\
                                <div class="col-md-10">\
                                        <div class="form-group">\
                                            <input name="seminer[]" type="text">\
                                            <label>Verilecek Seminer</label>\
                                            <span class="focus-border"></span>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-2">\
                                        <button class="btn btn-danger delete_item_buton" style="width:100px"  type="button"><p style="width: 100%"> -1 SİL </p></button>\
                                    </div>\
                                </div>\
                                    <br>');
            });

            $(document).on('click', '.delete_item_buton', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });

        });
    </script>

@endsection
