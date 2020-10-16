@extends('admin.layouts.main')
@section('title','Thêm phòng mới')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm banner mới</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ url('admin/rooms/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Chọn nhà nghỉ</label>
                <select name="motelID" class="form-control">
                    @foreach($motels as $motel)
                    <option value="{{$motel->id}}">{{$motel->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Loại phòng</label><br>
                <select name="typeID" class="form-control">
                    @foreach($typeRooms as $typeRoom)
                        <option value="{{$typeRoom->id}}">{{$typeRoom->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Số phòng</label>
                <input type="number" name="roomNumber" class="form-control" value="{{ old('roomNumber') }}">
            </div>
            <div class="form-group">
                <label>Giá giờ</label>
                <input type="number" name="priceHour" class="form-control" value="{{ old('priceHour') }}">
            </div>
            <div class="form-group">
                <label>Giá qua đêm</label>
                <input type="number" name="priceDay" class="form-control" value="{{ old('priceDay') }}">
            </div>
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" name="images[]" class="form-control" value="{{ old('images') }}" multiple>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/rooms/index') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
