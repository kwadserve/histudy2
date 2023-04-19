@extends('backend.layouts.master')
@section('title', 'Öğretmen Ekle')
@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ÖĞRETMEN EKLE</h4>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">İSMİ</label>
                                <input type="text" placeholder="Başlık..." name="name" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">SOY İSİM</label>
                                <input type="text" placeholder="Başlık..." name="surname" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">EMAİL</label>
                                <input type="text" placeholder="Başlık..." name="email" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">TELEFON</label>
                                <input type="text" placeholder="Başlık..." name="phone" class="form-control"
                                    id="">
                            </div>
                        </div>
                        <br><br>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">MESLEK</label>
                                    <input type="text" placeholder="Başlık..." name="job" class="form-control"
                                        id="">
                                </div>
                                <div class="col-md-3">
                                    <label for="">FOTOĞRAF</label>
                                    <input type="file" class="form-control" name="image" id="">
                                </div>

                                <div class="col-md-6">
                                    <label for="">AÇIKLAMA</label>
                                    <textarea name="description" id="" placeholder="Açıklama..." class="form-control" cols="30"
                                        rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div style="text-align: right">
                <input type="submit" class="btn" style="background-color:gray; color:white;" name=""
                    value="KAYDET">
            </div>
    </form>

@endsection
