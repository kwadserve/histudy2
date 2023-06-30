@extends('backend.layouts.master')
@section('title', 'Seminer Düzenle')

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

    @foreach ($data as $info)
    <?php
    $liste = explode(',',$info->kitle_min);
    ?>
        <form action="{{ route('panel.course.upgrade',$info->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">SEMİNER DÜZENLE</h4>
                        </div>
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">SEMİNER İSMİ</label>
                                    <input type="text" value="{{ $info->title }}" name="title" class="form-control"
                                        id="">
                                </div>

                                <div class="col-md-2">
                                    <label for="">KATEGORİ</label>
                                    <select name="category" id="" class="form-select">
                                        <option value="">Lütfen kategori seçin</option>
                                        @foreach ($cat as $item)
                                            <option {{ $info->category_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}"> {{ $item->name }} </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="">ÖĞRETMEN</label>
                                    <select name="teacher" class="form-select" id="">
                                        <option value="">Lütfen öğretmen seçin</option>
                                        @foreach ($teach as $item)
                                            <option {{ $info->teacher_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->name }} {{ $item->surname }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-1">
                                    <label for="">FİYATI</label>
                                    <input type="number" value="{{ $info->price }}" name="price" class="form-control"
                                        id="">
                                </div>

                                <div class="col-md-1">
                                    <label for="">MİN KİŞİ</label>
                                    <input type="number" value="{{ $info->min_person }}" class="form-control"
                                        name="min" id="">
                                </div>
                                <div class="col-md-1">
                                    <label for="">MAKS KİŞİ</label>
                                    <input type="number" value="{{ $info->max_person }}" class="form-control"
                                        name="max" id="">
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
                                    <input type="datetime-local" value="{{ $info->start }}" class="form-control"
                                        name="start" id="">
                                </div>
                                <div class="col-md-2">
                                    <label for="">BİTİŞ TARİHİ</label>
                                    <input type="datetime-local" value="{{ $info->finish }}" class="form-control"
                                        name="finish" id="">
                                </div>
                                <div class="col-md-1">
                                    <label for="">TOPLAM GÜN</label>
                                    <input type="number" value="{{ $info->toplam_gun }}" class="form-control"
                                        name="toplam_saat" id="">
                                </div>
                                <div class="col-md-1">
                                    <label for="">TOPLAM SAAT</label>
                                    <input type="number" value="{{ $info->toplam_saat }}" class="form-control"
                                        name="toplam_gun" id="">
                                </div>



                                <div class="col-md-2">
                                    <label for="">KİTLE</label>
                                    <select multiple name="kitle[]"  class="form-control" id="kitle">
                                        <option {{array_search('0',$liste) ? 'selected' : ''}} value="0">OKUL ÖNCESİ</option>
                                        <option {{array_search('1',$liste) ? 'selected' : ''}} value="1">İLKOKUL</option>
                                        <option {{array_search('2',$liste) ? 'selected' : ''}} value="2">ORTAOKUL</option>
                                        <option {{array_search('3',$liste) ? 'selected' : ''}} value="3">LİSE</option>
                                        <option {{array_search('4',$liste) ? 'selected' : ''}} value="4">YETİŞKİN</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="">KISA AÇIKLAMA</label>
                                    <textarea  name="short_description" id="" class="form-control"
                                        cols="30" rows="2">{{ $info->short_description }}</textarea>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">UZUN AÇIKLAMA</label>
                                    <textarea name="long_description"  id="long_description"
                                        class="ckeditor form-control" cols="30" rows="2">{!! $info->long_description !!}</textarea>
                                </div>
                            </div>

                            <br><br>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div style="text-align: right">
                <input type="submit" class="btn" style="background-color:gray; color:white;" name=""
                    value="KAYDET">
            </div>
        </form>
    @endforeach


@endsection

@section('script-bottom')
    <script src="/ckeditor/ckeditor.js"></script>

@endsection
