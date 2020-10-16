@extends('admin.layouts.main')
@section('title','Quản lý phòng nhà nghỉ')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Phòng nhà nghỉ</h1>
        <a href="{{ url('admin/rooms/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <div style="text-align: center">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên nhà nghỉ</th>
                    <th>Loại phòng</th>
                    <th>Số phòng</th>
                    <th>Giá giờ</th>
                    <th>Giá qua đêm</th>
                    <th>Ảnh đại diện</th>
                    <th>Mô tả</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->id }}</td>
                        <td>{{ $room->motel->name }}</td>
                        <td>{{ $room->typeRoom->name }}</td>
                        <td>{{ $room->roomNumber }}</td>
                        <td>{{ $room->priceHour }}</td>
                        <td>{{ $room->priceDay }}</td>
                        @php
                            $arr_images = explode('--', $room->avatar)
                        @endphp
                        <td>
                            @foreach($arr_images as $image)
                                @if($image != '')
                                <img src="{{ asset('assets/images/'. $image) }}" style="width: 100px">
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $room->description }}</td>
                        <td>
                            <a href="{{ url('admin/rooms/update/' . $room->id) }}">Sửa</a>&nbsp
                            <a href="{{ url('admin/rooms/delete/' . $room->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagi col-md-12">
            {{ $rooms->links('vendor.pagination.bootstrap-4') }}
        </div>
    </section>
    <!-- /.content -->
@endsection
