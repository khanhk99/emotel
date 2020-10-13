@extends('admin.layouts.main')
@section('title','Quản lý bài viết')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Bài viết</h1>
        <a href="{{ url('admin/posts/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <div style="text-align: center">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Người đăng</th>
                    <th>Chủ đề</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh đại diện</th>
                    <th>Nội dung</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->userID }}</td>
                        <td>{{ $post->categoryID }}</td>
                        <td>{{ $post->title }}</td>
                        @php($avatar = $post->avatar)
                        <td><img src="{{ asset('assets/images/'. $avatar) }}" style="width: 100px"></td>
                        <td>{!! $post->content !!}</td>
                        <td>
                            <a href="{{ url('admin/posts/update/' . $post->id) }}">Sửa </a>&nbsp
                            <a href="{{ url('admin/posts/delete/' . $post->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagi col-md-12">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
        </div>
    </section>
    <!-- /.content -->
@endsection
