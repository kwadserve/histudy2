@extends('backend.layouts.master')
@section('title', 'Kurs Ekle')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $message){

            <script>
                swal("Hata", "{{ $message }}", 'error', {
                    button: true,
                    button: "Tamam",
                });
            </script>
        }
        @endforeach
    @endif

    <form action="{{route('panel.course.store')}}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-md-2">
                                <label for="">KATEGORİ</label>
                                <select name="category" id="" class="form-select">
                                    <option value="">Lütfen kategori seçin</option>
                                    @foreach ($cat as $item)
                                        <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-1">
                                <label for="">KURS FİYATI</label>
                                <input type="number"  name="price" class="form-control"
                                    id="">
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
                                <label for="">ÖĞRETMEN</label>
                                <select name="teacher" class="form-select" id="">
                                    <option value="">Lütfen öğretmen seçin</option>
                                    @foreach ($teach as $item)

                                        <option value="{{ $item->id }}">{{ $item->name }} {{ $item->surname }}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">FOTOĞRAF</label>
                                <input type="file" class="form-control" name="image" id="">
                            </div>

                            <div class="col-md-6">
                                <label for="">UZUN AÇIKLAMA</label>
                                <textarea name="long_description" id="" placeholder="Açıklama..." class="form-control" cols="30"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <br><br>

                        <hr>
                        <h5>KURS İÇERİĞİ</h5><br>

                        <div id="show_item">
                            <div class="show">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">İçerik Başlık</label>
                                        <input type="text" placeholder="Başlık..." class="form-control" name="content_title[]"
                                            id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="">İçerik Açıklama</label>
                                    <textarea name="content_description[]" placeholder="Açıklama..." class="form-control" id="" rows="5"></textarea>
                                </div>
                                <br>
                                <div class="buton">
                                    <button type="button" class="btn btn-success add_item_buton">+1 SATIR EKLE</button>
                                </div>
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

@section('script-bottom')
    <script>
        $(document).ready(function() {
            $(".add_item_buton").click(function(e) {
                e.preventDefault();
                $("#show_item").prepend('<br><div class="show">\
                                <div class="row">\
                                    <div class="col-md-12">\
                                        <label for="">İçerik Başlık</label>\
                                        <input type="text" placeholder="Başlık..." class="form-control" name="content_title[]"\
                                            id="">\
                                    </div>\
                                </div>\
                                <br>\
                                <div class="row">\
                                    <label for="">İçerik Açıklama</label>\
                                    <textarea name="content_description[]" placeholder="Açıklama..." class="form-control" id="" rows="5"></textarea>\
                                </div>\
                                <br>\
                                <div class="buton">\
                                    <button type="button" class="btn btn-danger delete_item_buton">-1 SATIR SİL</button>\
                                </div>\
                            </div><br><br>');
            });

            $(document).on('click', '.delete_item_buton', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });

        });
    </script>

@endsection
