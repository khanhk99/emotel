@extends('editor.layouts.main')
@section('title','Thêm bài viết mới')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm bài viết mới</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        @php
            $user = \Illuminate\Support\Facades\Auth::user();
        @endphp
        <form method="post" action="{{ url($user->id. '/editor/posts/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Chọn chủ đề</label>
                <select name="categoryID" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="content" class="form-control" id="ckeditor">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url($user->id. '/categories/index') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
