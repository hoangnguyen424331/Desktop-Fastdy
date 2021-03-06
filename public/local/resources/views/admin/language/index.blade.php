@extends('admin.layout.main')

@section('title') Quản lý ngôn ngữ @endsection

@section('icon') mdi-map-marker @endsection


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
{{-- <th>Icon</th> --}}
<th>Tên</th>
<th>Loại</th>
<th style="text-align: right">Tuỳ chọn</th>
</tr>

</thead>
<tbody>

@foreach($data as $row)

<tr>
{{-- <td width="25%">@if($row->icon) <img src="{{ Asset('upload/language/'.$row->icon) }}" height="30"> @endif</td> --}}
<td width="25%">{{ $row->name }}</td>
<td width="25%">@if($row->type == 0) Trái sang phải @else Phải sang trái @endif</td>

<td width="25%" style="text-align: right">

<a href="{{ Asset($link.$row->id.'/edit') }}" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Sửa mục này"><i class="mdi mdi-border-color"></i></a>

<button type="button" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="Xóa mục này" onclick="deleteConfirm('{{ Asset($link."delete/".$row->id) }}')"><i class="mdi mdi-delete-forever"></i></button>


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