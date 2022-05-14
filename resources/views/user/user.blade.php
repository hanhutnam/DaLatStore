@extends('layouts.app')

@section('title')
Thông tin cá nhân
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thông tin cá nhân</h1>
</div>
    @if (session('success'))
    <div class="alert alert-success " role="alert">
        {{ session('success') }}
    </div>
    @endif
<br>
<div class="">
    <form class="">
        <!-- tên nhà hàng  -->
        <div class="form-group row ">
            <label class="col-sm-2 col-form-label ">Username: </label>
            <div class="col-sm-10 col-form-label">
                {{$user->username}}
            </div>
        </div>
        <!-- email  -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10 col-form-label">
                {{$user->email}}
            </div>
        </div>
        <!-- fullname  -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Họ và tên:</label>
            <div class="col-sm-10 col-form-label">
                {{$user->fullname}}
            </div>
        </div>
        <!-- điện thoại  -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Số điện thoại:</label>
            <div class="col-sm-10 col-form-label">
                {{$user->phone}}
            </div>
        </div>
        <!-- avatar -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ảnh đại diện:</label>
            <div class="col-sm-10 col-form-label">
                <img src="{{ url('public/images/'.$user->url_avartar) }}" style="height: 100px; width: 150px;">
            </div>
        </div>
        <div class="text-center">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-3">
                    <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-primary my-1">Chỉnh sửa</a>
                </div>
            </div>


        </div>

    </form>

</div>

@endsection


@section('js')
<script>
    $("div.alert").delay(2000).slideUp();
</script>
@endsection