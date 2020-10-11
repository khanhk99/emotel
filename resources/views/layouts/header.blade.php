@php
    use Illuminate\Support\Facades\Auth;
    $user = Auth::user();
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Trang chủ</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"/>
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datedropper/2.0/datedropper.min.css"
        integrity="sha512-b3G++vj/Z9EQMoVJaza9C48TzmHjcQKDNqXeLRoBzVD8DmFv0f6Pp/hGQW81ok1rOYxfZbpnlpoXXyJ06Aolcw=="
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}"/>
</head>
<body>
<!-- Header -->
<header>
    <div class="container">
        <div class="header d-flex align-items-center justify-content-between">
            <img class="header__logo" src="{{ asset('assets/resource/images/logo.png') }}" alt=""/>

            <div class="header__menu">
                <ul>
                    <li><a href="{{ url('/') }}" class="header__menuItem active">Trang chủ</a></li>
                    <li><a href="#" class="header__menuItem">Giới thiệu</a></li>
                    <li><a href="{{ url('posts') }}" class="header__menuItem">Tin tức</a></li>
                    <li><a href="#" class="header__menuItem">Hỗ trợ</a></li>
                </ul>
            </div>

            <div class="header__right">
                <a href="#" class="header__rightItem">Trở thành chủ nhà/người tổ chức</a>
            </div>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="header__rightUser">
                    <i class="fas fa-bars"></i>
                    <span>{{ $user->name }}</span>
                    <div class="header__userMenu">
                        <ul>
                            <!-- Account Management -->
                            <li class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Quản lý tài khoản') }}
                            </li>

                            <li>
                                <a href="{{ route('profile.show') }}">{{ __('Hồ sơ') }}</a>
                            </li>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li>
                                    <a href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a>
                                </li>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Management -->
                            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <li class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </li>

                                <!-- Team Settings -->
                                <li>
                                    <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">{{ __('Team Settings') }}</a>
                                </li>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <li>
                                        <a href="{{ route('teams.create') }}">{{ __('Create New Team') }}</a>
                                    </li>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <li class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </li>

                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team"/>
                                @endforeach

                                <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
            @else
                <div class="header__rightUser">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-user"></i>
                    <div class="header__userMenu">
                        <ul>
                            <li><a href="{{ url('register') }}">Đăng ký</a></li>
                            <li><a href="{{ url('login') }}">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
</header>

<div class="header-mobile">
    <div class="container">
        <ul>
            <li>
                <a href="{{ url('/') }}">
                    <div class="header-mobile__item">
                        <i class="fas fa-home"></i>
                        <p>Trang chủ</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="header-mobile__item">
                        <i class="fas fa-network-wired"></i>
                        <p>Giới thiệu</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ url('posts') }}">
                    <div class="header-mobile__item">
                        <i class="fas fa-hands-helping"></i>
                        <p>Tin tức</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="header-mobile__item">
                        <i class="fas fa-users"></i>
                        <p>Người dùng</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
