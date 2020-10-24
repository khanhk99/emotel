<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            @php($user = \Illuminate\Support\Facades\Auth::user())
            @if($user->role == 2)
                <li class="header">{{$user->name}}</li>
                <li>
                    <a href="{{ url($user->id . '/editor/rooms/index') }}">
                        <span>Quản lý phòng nghỉ</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url($user->id . '/editor/posts/index') }}">
                        <span>Quản lý bài viết</span>
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
