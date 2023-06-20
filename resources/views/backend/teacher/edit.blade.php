@extends('backend.layouts.master')
@section('title', 'Öğretmen Düzenle')
@section('content')


    @if($errors->any())
        @foreach ($errors->all() as $e)
        <p style="color:red"> {{$e}}</p>    
        
        @endforeach
    @endif

    @foreach ($data as $item)
        
    <form action="{{route('panel.teacher.upgrade')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="teacher_id" value="{{$item->id}}" id="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ÖĞRETMEN EKLE</h4>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-md-2">
                                <label for="">İSİM <span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" value="{{$item->name}}" name="name" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">SOY İSİM<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" value="{{$item->surname}}" name="surname" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">EMAİL<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" value="{{$item->email}}" name="email" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">TELEFON<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" value="{{$item->phone}}" name="phone" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">MESLEK<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" value="{{$item->job}}" name="job" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">FOTOĞRAF</label>
                                <input type="file" class="form-control" name="image" id="">
                            </div>
                        </div>
                        <br><br>

                        
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">İnstagram</label>
                                <input type="text" value="{{$item->instagram}}" name="instagram" class="form-control"
                                    id="">
                            </div>
                            
                            <div class="col-md-3">
                                <label for="">Twitter</label>
                                <input type="text" value="{{$item->twitter}}" name="twitter" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">Facebook</label>
                                <input type="text" value="{{$item->facebook}}" name="facebook" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">Linkedin</label>
                                <input type="text" value="{{$item->linkedin}}" name="linkedin" class="form-control"
                                    id="">
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            

                            <div class="col-md-12">
                                <label for="">BİYOGRAFİ<span title="ZORUNLU" style="color:red"> *</span></label>
                                <textarea name="description" id="description" placeholder="Açıklama..." class="ckeditor form-control" cols="30"
                                    rows="1">{{$item->description}}</textarea>
                            </div>
                        </div>
                        <br><br>
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
@section('script-bottom')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
