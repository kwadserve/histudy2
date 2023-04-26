@extends('frontend.body.master')

@section('css')
    @include('sweetalert::alert')
@endsection
@section('content')




    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                                <h3 class="title">Kayıt ol!</h3>

                                @if ($errors->any())
                                    @foreach ($errors->all() as $e)
                                        <div class="alert">
                                            <p style="color:red">{{ $e }}</p>
                                        </div>
                                    @endforeach
                                @endif

                                <form action="{{ route('front.register.store') }}" method="POST" class="max-width-auto">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="name" type="text">
                                                <label>Ad</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <input name="surname" type="text">
                                                <label>Soyad</label>
                                                <span class="focus-border"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="phone" type="text">
                                                <label>Telefon</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <input name="email" type="text">
                                                <label>Email</label>
                                                <span class="focus-border"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="password" type="password">
                                                <label>Şifre</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <input name="password_confirm" type="password">
                                                <label>Şifre Tekrar</label>
                                                <span class="focus-border"></span>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <input name="address" type="text">
                                        <label>Adres</label>
                                        <span class="focus-border"></span>
                                    </div>

                                    <p>Zaten bir hesabın varsa <a href=""><span> giriş yap!</span></a></p>

                                    <div class="form-submit-group">
                                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Kayıt Ol</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </span>
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
