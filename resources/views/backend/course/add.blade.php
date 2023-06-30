@extends('backend.layouts.master')
@section('title', 'Seminer Ekle')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $message)
            {

            <script>
                swal("Hata", "{{ $message }}", 'error', {
                    button: true,
                    button: "Tamam",
                });
            </script>
            }
        @endforeach
    @endif

    <form action="{{ route('panel.course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SEMİNER EKLE</h4>
                    </div>
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">SEMİNER İSMİ</label>
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

                            <div class="col-md-2">
                                <label for="">ÖĞRETMEN</label>
                                <select name="teacher" class="form-select" id="">
                                    <option value="">Lütfen öğretmen seçin</option>
                                    @foreach ($teach as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} {{ $item->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-1">
                                <label for="">FİYATI</label>
                                <input type="number" name="price" class="form-control" id="">
                            </div>

                            <div class="col-md-1">
                                <label for="">MİN KİŞİ</label>
                                <input type="number" class="form-control" name="min" id="">
                            </div>
                            <div class="col-md-1">
                                <label for="">MAKS KİŞİ</label>
                                <input type="number" class="form-control" name="max" id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">FOTOĞRAF</label>
                                <input type="file" class="form-control" name="image" id="">
                            </div>

                        </div>
                        <br><br>



                        <div class="row">
                            <div class="col-md-2">
                                <label for="">BAŞLANGIÇ TARİHİ</label>
                                <input type="datetime-local" class="form-control" name="start" id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">BİTİŞ TARİHİ</label>
                                <input type="datetime-local" class="form-control" name="finish" id="">
                            </div>
                            <div class="col-md-1">
                                <label for="">TOPLAM GÜN</label>
                                <input type="number" class="form-control" name="toplam_saat" id="">
                            </div>
                            <div class="col-md-1">
                                <label for="">TOPLAM SAAT</label>
                                <input type="number" class="form-control" name="toplam_gun" id="">
                            </div>
                            <div class="col-md-2">
                                <label for="kitle">KİTLE <span style="color:red" title="ZORUNLU">*</span></label>
                                <select multiple name="kitle[]"  class="form-control" id="kitle" >
                                    <option value="0">OKUL ÖNCESİ</option>
                                    <option value="1">İLKOKUL</option>
                                    <option value="2">ORTAOKUL</option>
                                    <option value="3">LİSE</option>
                                    <option value="4">YETİŞKİN</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="">KISA AÇIKLAMA</label>
                                <textarea placeholder="Açıklama..." name="short_description" id="" class="form-control" cols="30"
                                    rows="2"></textarea>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">UZUN AÇIKLAMA</label>
                                <textarea name="long_description" placeholder="Açıklama..." id="long_description" class="ckeditor form-control"
                                    cols="30" rows="2"></textarea>
                            </div>
                        </div>




                        <br><br>

                        <hr>
                        <h5>SEMİNER İÇERİĞİ</h5><br>

                        <div id="show_item">
                            <div class="show">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">İçerik Başlık</label>
                                        <input type="text" placeholder="Başlık..." class="form-control"
                                            name="content_title[]" id="">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="">İçerik Açıklama</label>
                                    <textarea name="content_description[]" placeholder="Açıklama..." class="ckeditor form-control" id=""
                                        rows="5"></textarea>
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
            <input type="submit" class="btn" style="background-color:gray; color:white;" name=""
                value="KAYDET">
        </div>
    </form>


@endsection

@section('script-bottom')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function() {

            $(".add_item_buton").click(function(e) {
                var degis = Math.floor(Math.random() * 1000);
                e.preventDefault();
                $("#show_item").prepend(
                    '<br><div class="show">\
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
                                        <textarea name="content_description[]" placeholder="Açıklama..." class="ckeditor form-control" id="e' +
                    degis + '" rows="5"></textarea>\
                                    </div>\
                                    <br>\
                                    <div class="buton">\
                                        <button type="button" class="btn btn-danger delete_item_buton">-1 SATIR SİL</button>\
                                    </div>\
                                </div><br><br>');
                                CKEDITOR.replace('e'+degis);

            });


            $(document).on('click', '.delete_item_buton', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });

        });
    </script>

@endsection
