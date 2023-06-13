@extends('backend.layouts.master')
@section('title', 'Seminer Ekle')

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

    <form action="{{route('panel.course.icerik_update')}}" method="POST" enctype="multipart/form-data">
        @csrf
		
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SEMİNER İÇERİK DÜZENLE</h4>
                    </div>
                    <div class="card-body p-4">
						@foreach($data as $item)
						<input type="hidden" value="{{$item->id}}" name="gelen_id">
						<input type="hidden" value="{{$item->course_id}}" name="kurs_id">

                        <div id="show_item">
                            <div class="show">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">İçerik Başlık</label>
                                        <input type="text" value="{{$item->title}}" class="ckeditor form-control" name="content_title"
                                            id="">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                	<div class="col-md-12">
									
										<label for="">İçerik Açıklama</label>
										<textarea name="content_description"  class="ckeditor form-control" id="" rows="5">
											{{$item->description}}
										</textarea>
									</div>
                                </div>
                                <br>
                                
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
@endsection
