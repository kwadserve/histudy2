@extends('backend.layouts.master')
@section('title','Kategori Düzenle')
    
@section('content')

@foreach ($data as $item)
    
<form action="{{route('panel.category.uggrade')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="cat_id" value="{{$item->id}}" id="">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">KATEGORİ DÜZENLE</h4>
                </div>
                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-md-3">
                            <label for="">KATEGORİ</label>
                            <input type="text" class="form-control" value="{{$item->name}}" name="name" id="">
                        </div>
                        <div class="col-md-3">
                            <label for="">FOTOĞRAF</label>
                            <input type="file" class="form-control" name="image" id="">
                        </div>

                        <div class="col-md-6">
                            <label for="">AÇIKLAMA</label>
                            <textarea name="description" id=""  class="form-control" cols="30"
                                rows="1">{{$item->description}}</textarea>
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
@endforeach

    
@endsection
