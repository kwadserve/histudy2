@extends('backend.layouts.master')
@section('title', 'Blog Düzenle')

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

    <form action="{{route('panel.blog.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">BLOG DÜZENLE</h4>
                    </div>
                    <div class="card-body p-4">

                        @foreach ($data as $item)
                        <input type="hidden" name="blog_id" value="{{$item->id}}" id="">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">BAŞLIK</label>
                                <input type="text" value="{{$item->title}}" name="title" class="form-control"
                                    id="">
                            </div>
                            <div class="col-md-2">
                                <label for="">KAPAK FOTOĞRAFI</label>
                                <input type="file"  name="photo" class="form-control">
                            </div>
							<div class="col-md-7">
                                <label for="">KISA AÇIKLAMA</label>
                                <input type="text" value="{{$item->short_description}}" name="short_description" class="form-control">
                            </div>
                        </div>
						<br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">UZUN AÇIKLAMA</label>
                                <textarea name="long_description" placeholder="Açıklama..." id="long_description" class="ckeditor form-control" cols="30"
                                    rows="5">{{$item->long_description}}</textarea>
                            </div>
                        </div>

                        @endforeach


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
                                    <textarea name="content_description[]" placeholder="Açıklama..." class="form-control"\
										id="editor1" rows="5"></textarea>\
                                </div>\
                                <br>\
                                <div class="buton">\
                                    <button type="button" class="btn btn-danger delete_item_buton">-1 SATIR SİL</button>\
                                </div>\
                            </div><br><br>');
			CKEDITOR.replace( 'editor1' );
				
            });
			

            $(document).on('click', '.delete_item_buton', function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });

        });
    </script>

@endsection
