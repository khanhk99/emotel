@extends('layouts.main')
@section('content')
    <div class="singlePostBanner"
         style="background-image: url('https://cdn1.ivivu.com/iVivu/2020/03/05/14/bangkok-cr-370x190.jpg');">
        <div class="container">
            <h1 class="text-light text-center">{{ $post->title }}</h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('posts') }}">Bài viết</a></li>
            </ul>
        </div>
    </div>

    <div class="singlePostContent">
        <div class="container">
            <div class="s-content">
                {{$post->content}}
            </div>
        </div>
    </div>

    {{--    <div class="comments">--}}
    {{--      <div class="container">--}}
    {{--        <h3 class="headLine">6 bình luận</h3>--}}
    {{--        <div class="addComment">--}}
    {{--          <h4>Để lại bình luận</h4>--}}
    {{--          <form action="">--}}
    {{--            <textarea name="" id="" rows="3" class="form-control"></textarea>--}}
    {{--            <button class="btn btn-secondary" type="submit">Gửi</button>--}}
    {{--          </form>--}}
    {{--        </div>--}}
    {{--        <div class="commentsSection">--}}
    {{--          <div class="singleComment">--}}
    {{--            <img--}}
    {{--              src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/86261405_704465800091407_4091667273901670400_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=oSNzdMaLfdQAX-B6cUo&_nc_ht=scontent.fhph1-1.fna&oh=154ba97bffbb7e6b6a32a415c6c0d252&oe=5F9F3427"--}}
    {{--              class="singleComment__image"--}}
    {{--            />--}}
    {{--            <div class="singleComment__details">--}}
    {{--              <h3 class="singleComment__name">Nancy</h3>--}}
    {{--              <p class="singleComment__date">NOVEMBER 13, 2019 AT 2:21PM</p>--}}

    {{--              <div class="singleComment__content s-content">--}}
    {{--                <p>--}}
    {{--                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
    {{--                  Pariatur quidem laborum necessitatibus, ipsam impedit vitae--}}
    {{--                  autem, eum officia, fugiat saepe enim sapiente iste iure! Quam--}}
    {{--                  voluptas earum impedit necessitatibus, nihil?--}}
    {{--                </p>--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--          <div class="singleComment">--}}
    {{--            <img--}}
    {{--              src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/86261405_704465800091407_4091667273901670400_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=oSNzdMaLfdQAX-B6cUo&_nc_ht=scontent.fhph1-1.fna&oh=154ba97bffbb7e6b6a32a415c6c0d252&oe=5F9F3427"--}}
    {{--              class="singleComment__image"--}}
    {{--            />--}}
    {{--            <div class="singleComment__details">--}}
    {{--              <h3 class="singleComment__name">Nancy</h3>--}}
    {{--              <p class="singleComment__date">NOVEMBER 13, 2019 AT 2:21PM</p>--}}

    {{--              <div class="singleComment__content s-content">--}}
    {{--                <p>--}}
    {{--                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
    {{--                  Pariatur quidem laborum necessitatibus, ipsam impedit vitae--}}
    {{--                  autem, eum officia, fugiat saepe enim sapiente iste iure! Quam--}}
    {{--                  voluptas earum impedit necessitatibus, nihil?--}}
    {{--                </p>--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--      </div>--}}
    {{--    </div>--}}

    <div class="relatedPost">
        <div class="container">
            <h3 class="haedLine text-center">Bài viết khác</h3>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($postAlls as $postAll)
                        <div class="swiper-slide">
                            <div class="singlePost">
                                <?php $link = 'posts/detail/' . $postAll->id ?>
                                <a href="{{ url($link) }}">
                                    <img
                                        src="{{ asset('assets/images/'. $postAll->avatar) }}"
                                        alt=""
                                    />
                                    <div class="singlePost__content">
                                        <h3 class="title">{{ $postAll->title }}</h3>
                                        <p class="description">
                                            <?php
                                            $str = $postAll->content;
                                            if (strlen($str) > 100) {
                                                $strCut = substr($str, 0, 100);
                                                $str = substr($strCut, 0, strrpos($strCut, ' ')). '...' ;
                                            }
                                            ?>
                                            {!!  $str  !!}
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    @endforeach
                    ...
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
@endsection
