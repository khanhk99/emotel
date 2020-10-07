@extends('admin.layouts.main')
@section('title','Thêm tài khoản mới')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Sửa tài khoản</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        <form method="post" action="{{ url('admin/users/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Tên hiển thị</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" name="rewritePassword" class="form-control">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="number" name="phoneNumber" class="form-control">
            </div>
            <div class="form-group">
                <label>Phân cấp</label>
                <select name="level" class="form-control">
                    <option value="1">Quản lý</option>
                    <option value="2">Cộng tác viên</option>
                    <option value="3">Khách hàng</option>
                </select>
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/users/index') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
