@extends('layouts.app')

@section('title')
Thông tin cá nhân
@endsection

@section('content')
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sửa thông tin cá nhân</h1>
</div>

<div class="">
    <form action="{{route('user.update',['id'=>1])}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <!--   -->
        <div class="form-group row m-2 w-75">
            <label class="col-sm-2 col-form-label">Username: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="{{$user->username}}">
            </div>
        </div>
        <!--   -->
        <div class="form-group row m-2 w-75">
            <label class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email"  value="{{$user->email}}">
            </div>
        </div>
        <!--   -->
        <div class="form-group row m-2 w-75">
            <label class="col-sm-2 col-form-label">Họ và tên:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="fullname" value="{{$user->fullname}}">
            </div>
        </div>
        <!--   -->
        <div class="form-group row m-2 w-75">
            <label class="col-sm-2 col-form-label">Số điện thoại:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
            </div>
        </div>
        <!--   -->
        <div class="form-group row m-2 w-75">
            <label class="col-sm-2 col-form-label">Link avartar:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" required name="url_avartar">
                <!-- <input type="text" class="form-control" name="url_avartar" value="{{$user->url_avartar}}"> -->
            </div>
        
    </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary my-1">Cập nhật</button>
        </div>

    </form>

</div>
@endsection

