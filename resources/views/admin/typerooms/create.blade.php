@extends('admin.layouts.main')
@section('title','Thêm loại phòng')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm loại phòng</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ url('admin/typerooms/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên</label><br>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/typerooms/index') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
