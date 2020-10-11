@extends('admin.layouts.main')
@section('title','Quản lý tài khoản')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Người dùng</h1>
        <a href="{{ url('admin/users/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <div style="text-align: center">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên đăng nhập</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Phân cấp</th>
                    <th>Địa chỉ</th>
                    <th>Số bài viết</th>
                    <th>Số hóa đơn</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phoneNumber }}</td>
                        <td>
                        @if($user->level==1)
                            {{"Quản lý"}}
                            @elseif($user->level==2)
                            {{"Cộng tác viên"}}
                            @else
                            {{"Khách hàng"}}
                            @endif
                        </td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->countPosts }}</td>
                        <td>{{ $user->countBills }}</td>
                        <td>
                            <a href="{{ url('admin/users/update/' . $user->id) }}">Sửa</a>&nbsp
                            <a href="{{ url('admin/users/delete/' . $user->id) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagi col-md-12">
            {{ $users->links('vendor.pagination.bootstrap-4') }}
        </div>
    </section>
    <!-- /.content -->
@endsection
