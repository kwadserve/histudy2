@extends('backend.layouts.master')
@section('title', 'Öğretmenler')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Öğertmenler</h4>
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
                                            <th>Ad Soyad</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Meslek</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr class="odd">
                                                <td> <img style="width:50px" src="{{$item->photo == null ? url('assets/images/testimonial/testimonial-7.jpg') : url("assets".$item->photo)}}" alt=""> </td>
                                                <td> {{ $item->name }} {{ $item->surname }} </td>
                                                <td> {{ $item->email }} </td>
                                                <td> {{ $item->phone }} </td>
                                                <td> {{ $item->job }} </td>
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
