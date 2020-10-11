@extends('admin.layouts.main')
@section('title','Quản lý chủ đề')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Chủ đề bài viết</h1>
        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">
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
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <a href="{{ url('admin/categories/delete/' . $category->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagi col-md-12">
            {{ $categories->links('vendor.pagination.bootstrap-4') }}
        </div>
    </section>
    <!-- /.content -->
@endsection
