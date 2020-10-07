@extends('admin.layouts.main')
@section('title','Sửa phòng')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm banner mới</h1>
        <form method="post" action="{{ url('admin/categories/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Chọn chủ đề</label>
                <select name="categoryID">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="content"></textarea>
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
