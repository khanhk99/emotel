@extends('layouts.main')
@section('content')
    <!-- Page title -->
    <div class="pageTitle">
        <div class="container">
            <h1>Nhà nghỉ</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi maxime
                beatae quam
            </p>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active">Nhà nghỉ</li>
            </ul>
        </div>
    </div>

    <div class="postList">
        <div class="container">
            <div class="row">
                @foreach($motels as $motel)
                    <div class="col-md-4">
                        <div class="singlePost">
                            <a href="{{ url('motels/detail/' . $motel->id) }}">
                                @php
                                    $avatar_motel = explode('--',$motel->avatar);
                                @endphp
                                @if(count($avatar_motel)>1)
                                    <img
                                        src="{{ asset('assets/images/'. $avatar_motel[1]) }}"
                                        alt=""
                                        height="180px"
                                    />
                                @else
                                    <img
                                        src="{{ asset('assets/images/'. $avatar_motel[0]) }}"
                                        alt=""
                                        height="180px"
                                    />
                                @endif
                                <div class="singlePost__content">
                                    <h3 class="title">{{ $motel->name }}</h3>
                                    <p class="rating">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </p>
                                    <p class="price">{{ number_format($motel->prices,0,',','.') }} đ</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="pagi col-md-12">
                    {{ $motels->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
