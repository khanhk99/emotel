@extends('admin.layouts.main')
@section('title','Sửa phòng')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Sửa phòng</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ url('admin/rooms/update/'. $room->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Chọn nhà nghỉ</label>
                <select name="motelID" class="form-control">
                    <option value="{{$room->motelID}}">{{$room->motel->name}}</option>
                    @foreach($motels as $motel)
                        <option value="{{$motel->id}}">{{$motel->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Loại phòng</label><br>
                <select name="typeID" class="form-control">
                    <option value="{{$room->typeID}}">{{$room->typeRoom->name}}</option>
                    @foreach($typeRooms as $typeRoom)
                        <option value="{{$typeRoom->id}}">{{$typeRoom->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Số phòng</label>
                <input type="number" name="roomNumber" class="form-control" value="{{$room->roomNumber}}">
            </div>
            <div class="form-group">
                <label>Giá giờ</label>
                <input type="number" name="priceHour" class="form-control" value="{{$room->priceHour}}">
            </div>
            <div class="form-group">
                <label>Giá qua đêm</label>
                <input type="number" name="priceDay" class="form-control" value="{{$room->priceDay}}">
            </div>
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('assets/images/'. $room->avatar) }}" style="width: 100px">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" class="form-control">{{$room->description}}</textarea>
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
