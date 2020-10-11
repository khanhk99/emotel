@extends('admin.layouts.main')
@section('title','Sửa nhà nghỉ')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Sửa nhà nghỉ</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ url('admin/motels/update/'.$motel->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên nhà nghỉ</label>
                <input type="text" name="name" class="form-control" value="{{$motel->name}}">
            </div>
            <div class="form-group">
                <label>avatar</label>
                <input type="file" name="image" class="form-control">
                <img src="{{asset('assets/images/'. $motel->avatar)}}">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" value="{{$motel->address}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label>Giá phòng trung bình</label>
                <input type="number" name="prices" class="form-control" value="{{$motel->prices }}">
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
