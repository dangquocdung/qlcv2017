@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bảng Thông báo</div>

                <div class="panel-body">

                    Chào mừng {{ Auth::user()->name }} đã đăng nhập thành công vào hệ thống với quyền <a href="{{ Auth::user()->quyenhan->ghichu }}">{{ Auth::user()->quyenhan->quyenhan }}</a>!


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
