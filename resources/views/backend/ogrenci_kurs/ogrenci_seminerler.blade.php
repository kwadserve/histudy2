@extends('backend.layouts.master')
@section('title', 'Seminerler')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Seminerler</h4>
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
                                            <th>Seminer Başlığı</th>
                                            <th>Seminer Hocası</th>
                                            <th>Katılma Tarihi</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)

                                            <tr class="odd">
                                                <td> {{ $item->title }} </td>
                                                <td> {{ $item->ogretmen->name }} {{ $item->ogretmen->surname }} </td>
                                                <td> {{substr($item->created_at,0,10)}} </td>
                                                <td> 
                                                    <button  type="button" class="btn btn-danger">Sil</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
         function sil(a,b) {
            Swal.fire({
                title: 'Silinsin mi?',
                text: "Semineri silmek istediğinize emin misiniz?"+a + b,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sil!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{route('panel.ogrenci.kurs.sil')}}/"+id;
                }
            })
        }
    </script>
@endsection
