@extends('backend.layouts.master')
@section('title', 'Kurs Ekle')

@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">KURS EKLE</h4>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">KURS İSMİ</label>
                                <input type="text" placeholder="Başlık..." name="title" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">ÖĞRETMEN</label>
                                <select name="teacher" class="form-select" id="">
                                    <option value="">Lütfen öğretmen seçin</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">KISA AÇIKLAMA</label>
                                <input type="text" placeholder="Açıklama..." class="form-control"
                                    name="short_description" id="">
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">KATEGORİ</label>
                                <select name="category" id="" class="form-select">
                                    <option value="">Lütfen kategori seçin</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">FOTOĞRAF</label>
                                <input type="file" class="form-control" name="image" id="">
                            </div>

                            <div class="col-md-6">
                                <label for="">UZUN AÇIKLAMA</label>
                                <textarea name="long_description" id="" placeholder="Açıklama..." class="form-control" cols="30"
                                    rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div style="text-align: right">
            <input type="submit" class="btn" style="background-color:gray; color:white;" name="" value="KAYDET">
        </div>
    </form>

@endsection
