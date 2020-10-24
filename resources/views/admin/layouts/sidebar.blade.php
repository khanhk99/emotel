<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            @php($user = \Illuminate\Support\Facades\Auth::user())
            @if($user->role == 1)
                <li class="header">LAOYOUT ADMIN</li>
                <li>
                    <a href="{{ url('admin/banners/index') }}">
                        <span>Banners</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/users/index') }}">
                        <span>Tài khoản</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/motels/index') }}">
                        <span>Nhà nghỉ</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/typerooms/index') }}">
                        <span>Loại phòng</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/rooms/index') }}">
                        <span>Phòng nhà nghỉ</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/categories/index') }}">
                        <span>Chủ đề bài viết</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/posts/index') }}">
                        <span>Bài viết</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
