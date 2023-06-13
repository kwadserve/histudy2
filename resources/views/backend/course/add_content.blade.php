@extends('backend.layouts.master')
@section('title', 'İçerik Ekle')

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

    <form action="{{route('panel.course.edit_icerik_store')}}" method="POST" enctype="multipart/form-data">
        @csrf
		<input type="hidden" value="{{$kurs_id}}" name="kurs_id">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SEMİNER İÇERİK EKLE</h4>
                    </div>
                    <div class="card-body p-4">
                        <div id="show_item">
                            <div class="show">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">İçerik Başlık</label>
                                        <input type="text" placeholder="Başlık..." class="ckeditor form-control" name="content_title"
                                            id="">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                	<div class="col-md-12">
									
										<label for="">İçerik Açıklama</label>
										<textarea name="content_description" placeholder="Açıklama..." 
												  class="ckeditor form-control" id="" rows="5">
											
										</textarea>
									</div>
                                </div>
                                <br>
                                
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
<script src="/ckeditor/ckeditor.js"></script>
@endsection
