@extends('backend.layouts.master')
@section('title', 'Kurslar')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kurslar</h4>
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
                                            <th>Kategori</th>
                                            <th>Öğretmen</th>
                                            <th>Fiyat</th>
                                            <th>Aktiflik</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr class="odd">

                                                <td>
                                                    <img style="width:100px"
                                                        src="{{ $item->image == null ? url('/assets/images/course/course-online-01.jpg') : url('/assets' . $item->image) }}"
                                                        alt="Card image">

                                                </td>
                                                <td> {{ $item->title }} </td>
                                                <td> {{ $item->kategori->name }} </td>
                                                <td> {{ $item->ogretmen->name }} {{ $item->ogretmen->surname }}</td>
                                                <td> {{ $item->price }} </td>
                                                <td>
                                                    <a onclick="degis({{$item->id}})">
                                                        <button type="button"
                                                            style="background-color: {{ $item->aktiflik == 1 ? 'lightgreen' : 'red' }}"
                                                            class="btn btn-success">Değiştir</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('panel.icerik.liste',$item->id)}}"><button class="btn btn-success">İçerik</button></a>
                                                    <a href="{{route('panel.course.edit',$item->id)}}"><button class="btn btn-info">Düzenle</button></a>
                                                    <a onclick="kurs_sil({{$item->id}})"><button class="btn btn-danger">Sil</button></a>
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
        function degis(id) {
            Swal.fire({
                title: 'Emin misiniz?',
                text: "Aktifliği değiştirmek istediğinize emin misiniz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Değiştir!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{route('panel.aktiflik')}}/"+id;
                }
            })
        }

        function kurs_sil(id) {
            Swal.fire({
                title: 'Silinsin mi?',
                text: "Semineri silmek istediğinize emin misiniz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sil!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{route('panel.kurs.sil')}}/"+id;
                }
            })
        }
    </script>


@endsection
