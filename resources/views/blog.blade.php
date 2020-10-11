@extends('layouts.main')
@section('content')
    <!-- Page title -->
    <div class="pageTitle">
        <div class="container">
            <h1>Bài viết</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi maxime
                beatae quam
            </p>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active">Bài viết</li>
            </ul>
        </div>
    </div>

    <div class="postList">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="singlePost">
                            <a href="">
                                <img
                                    src="{{ asset('assets/images/'.$post->avatar) }}"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">{{ $post->title }}</h3>
                                    <p class="description">
                                        {{ $post->content }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="pagi col-md-12">
                    {{ $posts->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
