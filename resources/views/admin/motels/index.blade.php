@extends('admin.layouts.main')
@section('title','Quản lý nhà nghỉ')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Nhà nghỉ</h1>
        <a href="{{ url('admin/motels/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <div style="text-align: center">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Người quản lý</th>
                    <th>Ảnh đại diện</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Mô tả</th>
                    <th>Giá trung bình</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($motels as $motel)
                    <tr>
                        <td>{{ $motel->id }}</td>
                        <td>{{ $motel->name }}</td>
                        <td>{{ $motel->user->username }}</td>
                        @php
                            $arr_images = explode('--', $motel->avatar)
                        @endphp
                        <td>
                            @foreach($arr_images as $image)
                                @if($image != '')
                                    <img src="{{ asset('assets/images/'. $image) }}" style="width: 100px">
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $motel->address }}</td>
                        <td>{{ $motel->phoneNumber }}</td>
                        <td>{{ $motel->description }}</td>
                        <td>{{ $motel->prices }}</td>
                        <td>
                            <a href="{{ url('admin/motels/update/' . $motel->id) }}">Sửa </a>&nbsp
                            <a href="{{ url('admin/motels/delete/' . $motel->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagi col-md-12">
            {{ $motels->links('vendor.pagination.bootstrap-4') }}
        </div>
    </section>
    <!-- /.content -->
@endsection
