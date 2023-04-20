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
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr class="odd">
                                                <td> <img style="width:100px" src="{{"/assets".$item->image}}"> </td>
                                                <td> {{ $item->title }}  </td>
                                                <td> {{ $item->category_id }} </td>
                                                <td> {{ $item->teacher_id }} </td>
                                                <td> {{ $item->price }} </td>
                                                <td>
                                                    <a href=""><button class="btn btn-info">Düzenle</button></a>
                                                    <a href=""><button class="btn btn-danger">Sil</button></a>
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
