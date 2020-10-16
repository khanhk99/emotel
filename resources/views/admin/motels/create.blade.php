@extends('admin.layouts.main')
@section('title','Thêm nhà nghỉ mới')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm nhà nghỉ mới</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ url('admin/motels/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên nhà nghỉ</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label>avatar</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" name="phoneNumber" class="form-control" value="{{ old('phoneNumber') }}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label>Giá phòng trung bình</label>
                <input type="number" name="prices" class="form-control" value="{{ old('prices') }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/motels/index') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
