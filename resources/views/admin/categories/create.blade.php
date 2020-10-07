@extends('admin.layouts.main')
@section('title','Thêm chủ đề mới')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm chủ đề mới</h1>
        <form method="post" action="{{ url('admin/categories/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên chủ đề</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/categories/index') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
