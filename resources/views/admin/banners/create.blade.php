@extends('admin.layouts.main')
@section('title','Thêm banner mới')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm banner mới</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ url('admin/banners/create') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Chọn ảnh</label>
                <input type="file" id="file-banner" name="image" accept="image/*" />
            </div>
            <img id="blah" src="#" alt="your image" />
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/banners/index') }}">
                    Quay lại
                </a>
            </div>
        </form>
    </section>
    <!-- /.content -->
    </div>
@endsection
