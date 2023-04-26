@extends('backend.layouts.master')
@section('title', 'Öğretmen Ekle')
@section('content')


    @if($errors->any())
        @foreach ($errors->all() as $e)
        <p style="color:red"> {{$e}}</p>    
        
        @endforeach
    @endif

    <form action="{{route('panel.teacher.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
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
                                <input type="text" placeholder="Başlık..." name="name" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">SOY İSİM<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" placeholder="Başlık..." name="surname" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">EMAİL<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" placeholder="Başlık..." name="email" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">TELEFON<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" placeholder="Başlık..." name="phone" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">MESLEK<span title="ZORUNLU" style="color:red"> *</span></label>
                                <input type="text" placeholder="Başlık..." name="job" class="form-control"
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
                                <input type="text" placeholder="İnstagram kullanıcı adı..." name="instagram" class="form-control"
                                    id="">
                            </div>
                            
                            <div class="col-md-3">
                                <label for="">Twitter</label>
                                <input type="text" placeholder="Twitter kullanıcı adı..." name="twitter" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">Facebook</label>
                                <input type="text" placeholder="Facebook kullanıcı adı..." name="facebook" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-3">
                                <label for="">Linkedin</label>
                                <input type="text" placeholder="Linkedin kullanıcı adı..." name="linkedin" class="form-control"
                                    id="">
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            

                            <div class="col-md-12">
                                <label for="">BİYOGRAFİ<span title="ZORUNLU" style="color:red"> *</span></label>
                                <textarea name="description" id="description" placeholder="Açıklama..." class="ckeditor form-control" cols="30"
                                    rows="1"></textarea>
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

@endsection
@section('script-bottom')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
