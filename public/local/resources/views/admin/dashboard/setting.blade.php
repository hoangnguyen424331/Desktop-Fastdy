@extends('admin.layout.main')

@section('title') Cấu hình hệ thống @endsection

@section('icon') mdi-settings @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-12 mx-auto  mt-0">

<form action="{{ $form_url }}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="card py-3 m-b-30">
<div class="card-body">
@include('admin.language.header')
</div>
</div>
<div class="tab-content" id="myTabContent1">

@foreach(DB::table('language')->orderBy('sort_no','ASC')->get() as $l)

<div class="tab-pane fade show" id="lang{{ $l->id }}" role="tabpanel" aria-labelledby="lang{{ $l->id }}-tab">

<input type="hidden" name="lid[]" value="{{ $l->id }}">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="asd">Store Types <small>(Comma Seprated)</small></label>
<textarea class="form-control" id="asd" name="l_store_type[]">{{ $data->getSData($data->s_data,$l->id,'store_type') }}</textarea>
</div>
</div>

</div>
</div>

</div>
@endforeach


<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Tên</label>
<input type="text" value="{{ $data->name }}" class="form-control" id="inputEmail6" name="name" required="required">
</div>
{{-- <div class="form-group col-md-6">
<label for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4" name="email"  required="required">
</div> --}}
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Tên tài khoản</label>
<input type="text" class="form-control" id="asd" name="username" value="{{ $data->username }}" required="required">
</div>

{{-- <div class="form-group col-md-4">
<label for="asd">Logo</label>
<input type="file" class="form-control" id="asd" name="logo">
</div> --}}

{{-- <div class="form-group col-md-2">
@if($data->logo)
<img src="{{ Asset('upload/admin/'.$data->logo) }}" width="50" style="float: right">
@endif
</div> --}}
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Đơn vị tiền <small>( VNĐ)</small></label>
<input type="text" class="form-control" id="asd" name="currency" value="{{ $data->currency }}" required="required">
</div>
{{-- <div class="form-group col-md-6">
<label for="asd">SMS API <small style="color: red">Thay thế trường Số bằng <b>{num}</b> Trường tin nhắn với <b>{msg}</b></small></label>
<input type="text" class="form-control" id="asd" name="sms_api" value="{{ $data->sms_api }}" required="required">
</div> --}}
</div>



<div class="form-row">
<div class="form-group col-md-12">
<label for="asd">Các loại cửa hàng <small>(Phân cách bởi dấu phẩy)</small></label>
<textarea class="form-control" id="asd" name="store_type" required="required">{{ $data->store_type }}</textarea>
</div>
</div>
</div>
</div>

<h4>Thiết lập Thanh toán <small style="font-size: 12px">(Để trống nếu muốn tắt Paypal)</small></h4>
<div class="card py-3 m-b-30">
<div class="card-body">
<div class="form-row">
<div class="form-group col-md-12">
<label for="asd">PayPal Client ID</label>
<input type="text" class="form-control" id="asd" name="paypal_client_id" value="{{ $data->paypal_client_id }}">
</div>

 {{-- <div class="form-group col-md-12">
<label for="asd">Stripe Publish Key</label>
<input type="text" class="form-control" id="asd" name="stripe_client_id" value="{{ $data->stripe_client_id }}">
</div> --}}

 {{-- <div class="form-group col-md-12">
<label for="asd">Stripe API Key</label>
<input type="text" class="form-control" id="asd" name="stripe_api_id" value="{{ $data->stripe_api_id }}">
</div> --}}
 </div>
</div>
</div> 
{{-- <h4>Liên kết mạng xã hội</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Facebook</label>
<input type="text" class="form-control" id="asd" name="fb" value="{{ $data->fb }}">
</div>

<div class="form-group col-md-6">
<label for="asd">Instagram</label>
<input type="text" class="form-control" id="asd" name="insta" value="{{ $data->insta }}">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Twitter</label>
<input type="text" class="form-control" id="asd" name="twitter" value="{{ $data->twitter }}">
</div>

<div class="form-group col-md-6">
<label for="asd">Youtube</label>
<input type="text" class="form-control" id="asd" name="youtube" value="{{ $data->youtube }}">
</div>
</div>
</div>
</div> --}}

<h4>Đổi mật khẩu</h4>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputPassword4">Mật khẩu hiện tại</label>
<input type="password" class="form-control" id="inputPassword4" name="password" required="required" placeholder="Nhập mật khẩu hiện tại để thai đổi">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Mật khẩu mới <small style="color:red">(nếu bạn muốn thay đổi mật khẩu hiện tại)</small></label>
<input type="password" class="form-control" id="inputPassword4" name="new_password">
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>
</form>
</div>
</div>
</div>
</div>

</section>

@endsection