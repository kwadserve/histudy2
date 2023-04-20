@extends('backend.layouts.master')
@section('title','Kategori Ekle')
    
@section('content')

<form action="{{route('panel.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">KATEGORİ EKLE</h4>
                </div>
                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-md-3">
                            <label for="">KATEGORİ</label>
                            <input type="text" class="form-control" placeholder="İsim..." name="name" id="">
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
        <input type="submit" class="btn" style="background-color:gray; color:white;" name="" value="KAYDET">
    </div>
</form>
    
@endsection
