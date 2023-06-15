@extends('frontend.body.master')
@section('title','İletişim')
@section('content')

<div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--60">
                    <span class="subtitle bg-secondary-opacity">İletişim</span>
                    <h2 class="title">Bizimle İletişime Geçin</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-headphones"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Telefon Numarası</h4>
                        <p><a href="tel:+905444669099">0 535 345 80 81</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-mail"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Email</h4>
                        <p><a href="mailto:academy@artelegans.com">academy@artelegans.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-map-pin"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Konum</h4>
                        <p>Şevket Özçelik Sok. No:59/809 Güven İş Hanı 35210 Konak Alsancak/İZMİR</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-contact-address">
    <div class="container">

        <div class="row pt--60 g-5">

            

            <div class="col-lg-8">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">ÖNERİ FORMU</span>
                    </div>
                    <h3 class="title">Seminer Öneri Formu</h3>

                    <form action="http://localhost:8000/oneri/ekle" method="POST" class="row row--15">
                        <input type="hidden" name="_token" value="1tgRBFcWAbN6F7yl7M3JE6amtkueTSC67QwVJ9My">                            <div class="col-lg-4">
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
                                <input name="dogum" type="date">
                                <label>Doğum Tarihi</label>
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

            <div class="col-lg-4">
                <div class="thumbnail">
                    <img class="radius-10 w-100" src="/assets/images/tabs-10.jpg" alt="Corporate Template">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="rbt-google-map bg-color-white rbt-section-gapTop">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1570410.2152222446!2d27.206224664548188!3d39.75745041878098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd90dc28ce5b1%3A0xca42910a941734b0!2sArtElegans%20Foto%C4%9Fraf%20Akademisi!5e0!3m2!1str!2str!4v1686697211947!5m2!1str!2str" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection