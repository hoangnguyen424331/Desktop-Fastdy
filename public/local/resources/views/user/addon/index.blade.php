@extends('user.layout.main')

@section('title') Quản lý Phụ thu @endsection

@section('icon') mdi-silverware-fork-knife @endsection


@section('content')

<section class="pull-up">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card py-3 m-b-30">
                    <div class="row">
                        <div class="col-md-12" style="text-align: right;"><a href="{{ Asset($link.'add') }}" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Thêm mới</a>&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Giá phụ thu</th>
                                    <th style="text-align: right">Tuỳ chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td width="25%">{{ $row->name }}</td>
                                    <td width="25%">{{ $c.$row->price }}</td>
                                    <td width="25%" style="text-align: right">
                                        <a href="{{ Asset($link.$row->id.'/edit') }}" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Sửa"><i class="mdi mdi-border-color"></i></a>
                                        <button type="button" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="Xoá" onclick="deleteConfirm('{{ Asset($link."delete/".$row->id) }}')"><i class="mdi mdi-delete-forever"></i></button>
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
</section>

@endsection