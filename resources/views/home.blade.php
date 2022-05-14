@extends('layouts.app')

@section('title')
Trang chủ
@endsection

@section('banner')
<div class="banner">
    chưa có banner
</div>
@endsection



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <!-- <div class="card-header">{{ __('Tên sản phẩm') }}</div> -->
        <!-- san pham 1 -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chưa có nội dung!') }}
                </div>
            </div>
        </div>
        <!-- san pham 2 -->
        <div class="col-md-3">
            <div class="card">
                <!-- <div class="card-header">{{ __('Tên sản phẩm') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chưa có nội dung!') }}
                </div>
            </div>
        </div>
        <!-- san pham 3 -->
        <div class="col-md-3">
            <div class="card">
                <!-- <div class="card-header">{{ __('Tên sản phẩm') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chưa có nội dung!') }}
                </div>
            </div>
        </div>
        <!-- san pham 4 -->
        <div class="col-md-3">
            <div class="card">
                <!-- <div class="card-header">{{ __('Tên sản phẩm') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Chưa có nội dung!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
