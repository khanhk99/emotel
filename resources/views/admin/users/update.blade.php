@extends('admin.layouts.main')
@section('title','Sửa tài khoản')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Sửa {{$user->username}}</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        <form method="post" action="{{url('admin/users/update/'.$user->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên hiển thị</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <input type="checkbox" name="changePassword" id="changePassword">
                <label>Đổi mật khẩu</label>
                <input type="password" name="password" class="form-control password" disabled="">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" name="rewritePassword" class="form-control password" disabled>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="number" name="phoneNumber" class="form-control" value="{{$user->phoneNumber}}">
            </div>
            <div class="form-group">
                <label>Phân cấp</label>
                @php
                    $level = $user->level;
                    $admin = '';
                    $editor = '';
                    $subscriber = '';
                    switch ($level){
                    case 1:
                    $admin = 'selected';
                    break;
                    case 2:
                    $editor = 'selected';
                    break;
                    case 3:
                    $subscriber = 'selected';
                    break;
                    }

                @endphp
                <select name="level" class="form-control">
                    <option value="1" {{$admin}}>Quản lý</option>
                    <option value="2" {{$editor}}>Cộng tác viên</option>
                    <option value="3" {{$subscriber}}>Khách hàng</option>
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
    <script>
        $(document).ready(function () {
            $("#changePassword").change(function () {
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                } else {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection

