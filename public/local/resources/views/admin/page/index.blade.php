@extends('admin.layout.main')

@section('title') Chỉnh sửa Bài viết cho ứng dụng @endsection

@section('icon') mdi-map-marker @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-12 mx-auto  mt-0">

{!! Form::model($data, ['url' => [$form_url],'files' => true],['class' => 'col s12']) !!}

@include('admin.page.form')

</form>

</div>
</div>
</div>
</section>

@endsection

@section('js')
<script    src="{{Asset('assets/vendor/summernote/summernote-bs4.min.js') }}"></script>
<script    src="{{Asset('assets/js/summernote-data.js') }}"></script>
@endsection

@section('css')
<link rel="stylesheet" href="{{Asset('assets/vendor/summernote/summernote-bs4.css') }}"/>
@endsection