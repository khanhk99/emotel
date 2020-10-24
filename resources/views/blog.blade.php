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
                            <a href="{{ url('posts/detail/'. $post->id) }}">
                                <img
                                    src="{{ asset('assets/images/'.$post->avatar) }}"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    @php
                                        $str_title = $post->title;
                                        if(strlen($str_title)>30){
                                            $strCut_title = substr($str_title, 0, 30);
                                            $str_title = substr($strCut_title, 0, strrpos($strCut_title, ' ')). '...';
                                        }
                                    @endphp
                                    <h3 class="title">{!! $str_title !!}</h3>
                                    @php
                                    $str = $post->content;
                                    if (strlen($str) > 100) {
                                        $strCut = substr($str, 0, 100);
                                        $str = substr($strCut, 0, strrpos($strCut, ' ')) . '... Đọc tiếp';
                                    }
                                    @endphp
                                    <p class="description">
                                        {{  strip_tags($str) }}
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
