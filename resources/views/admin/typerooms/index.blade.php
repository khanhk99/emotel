@extends('admin.layouts.main')
@section('title','Loại phòng')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>typeroom</h1>
        <a href="{{ url('admin/typerooms/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <div style="text-align: center">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Ngày tạo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($typeRooms as $typeRoom)
                    <tr>
                        <td>{{ $typeRoom->id }}</td>
                        <td>{{ $typeRoom->name }}</td>
                        <td>{{ $typeRoom->created_at }}</td>
                        <td>
                            <a href="{{ url('admin/typerooms/delete/' . $typeRoom->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
@endsection
