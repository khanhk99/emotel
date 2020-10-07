@include('admin.layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
   @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        @yield('content')

    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')
