@extends('admin.layouts.main')
@section('title','Banners')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Banners</h1>
        <a href="{{ url('admin/banners/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <div style="text-align: center">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Ngày đăng</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($banners as $banner)
                    <tr>
                        <td>{{ $banner->id }}</td>
                        @php($avatar = $banner->avatar)
                        <td><img src="{{ asset('assets/images/'. $avatar) }}" style="width: 100px"></td>
                        <td>{{ $banner->created_at }}</td>
                        <td>
                            <a href="{{ url('admin/banners/delete/' . $banner->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
@endsection
