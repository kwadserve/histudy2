@extends('backend.layouts.master')
@section('title', 'Yorumlar')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yorumlar</h4>
                </div>
                <div class="card-body">

                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="table table-bordered dt-responsive table-striped nowrap w-100 dataTable no-footer dtr-inline"
                                    role="grid" aria-describedby="datatable_info" style="width: 1567px;">
                                    <thead>
                                        <tr role="row">
                                            <th>İsim soyisim</th>
                                            <th>Email</th>
                                            <th>Yorum</th>
                                            <th>Tarihi</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr class="odd">
                                                <td> {{ $item->kisi->name }} {{ $item->kisi->surname }} </td>
                                                <td> {{ $item->kisi->email }} </td>
                                                <td> {{ $item->comment }} </td>
                                                <td> {{ $item->created_at }} </td>
                                                <td>
                                                    <a ><button onclick="sil_kurs({{$item->id}})" class="btn btn-danger">Sil</button></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>


@endsection
@section('script-bottom')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	function sil_kurs(id){
		Swal.fire({
		  title: 'Emin misiniz?',
		  text: "Silmek istediğinize emin misiniz?",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Sil!'
		}).then((result) => {
		  if (result.isConfirmed) {
			window.location.href="/panel/blog/yorum/sil/"+id;
		  }
		});
	}
				

</script>

@endsection

