@extends('backend.layouts.master')
@section('title', 'Kategoriler ')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kategoriler</h4>
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
                                            <th>Görsel</th>
                                            <th>Başlık</th>
                                            <th>Açıklama</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr class="odd">
                                                <td> <img style="width:100px" src="/assets{{ $item->image }}"
                                                        alt=""> </td>
                                                <td> {{ $item->name }} </td>
                                                <td> {{ $item->description }} </td>
                                                <td>
                                                    <a href="{{ route('panel.category.edit', $item->id) }}"><button
                                                            class="btn btn-info">Düzenle</button></a>
                                                    <a><button onclick="silme({{ $item->id }})"
                                                            class="btn btn-danger">Sil</button></a>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function silme(id) {
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
                    window.location.href = "/panel/kategori/sil/" + id;
                }
            });
        }
    </script>
@endsection
