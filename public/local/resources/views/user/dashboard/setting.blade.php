@extends('user.layout.main')

@section('title') Cập nhật thông tin của hàng @endsection

@section('icon') mdi-settings @endsection


@section('content')

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-12 mx-auto  mt-0">
{!! Form::model($data, ['url' => [$form_url],'files' => true,'method' => 'POST'],['class' => 'col s12']) !!}

@include('admin.user.form',['type' => 'user'])

</form>
</div>
</div>

</div>
</div>

</section>

@endsection