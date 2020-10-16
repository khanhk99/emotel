@extends('layouts.main')
@section('content')
    <div class="motelBanner">
    </div>
    <div class="motelIntro">
        <div class="container">
            <h1 class="motelIntro__title headLine">{{ $motel->name  }}</h1>
            <div class="motelIntro__basic d-flex justify-content-between align-items-center">
                <div class="motelIntro__basicInfo">
                    <p class="motelIntro__rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="motelIntro__address">
                        <i class="fas fa-map-marker-alt"></i>
                        {{$motel->address}}</p>
                </div>
                <div class="motelIntro__book text-right">
                    <h3>Giá chỉ từ: <br/><span>{{ $motel->prices }}</span></h3>
                    <button class="btn btn-danger"><a href="tel:{{$motel->phoneNumber}}" style="color:#ffffff;">Đặt
                            phòng</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="motelImgSlide">
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    @php
                        $arr_images = explode('--', $motel->avatar)
                    @endphp
                    @foreach($arr_images as $image)
                        @if($image != '')
                            <div class="swiper-slide"
                                 style="background-image:url({{ asset('assets/images/'. $image) }})"></div>
                        @endif
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    @php
                        $arr_images = explode('--', $motel->avatar)
                    @endphp
                    @foreach($arr_images as $image)
                        @if($image != '')
                            <div class="swiper-slide"
                                 style="background-image:url({{ asset('assets/images/'. $image) }})"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
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
                    <a href="#">
                        <div class="header-mobile__item">
                            <i class="fas fa-hands-helping"></i>
                            <p>Giới thiệu</p>
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

    <div class="motelDescription">
        <div class="container">
            <h3 class="headLine">Mô tả nhà nghỉ</h3>
            <div class="s-content">
                {{$motel->description}}
            </div>
        </div>
    </div>

    <div class="comments">
        <div class="container">
            <h3 class="headLine">6 bình luận</h3>
            <div class="addComment">
                <h4>Để lại bình luận</h4>
                <form action="">
                    <textarea name="" id="" rows="3" class="form-control"></textarea>
                    <button class="btn btn-secondary" type="submit">Gửi</button>
                </form>
            </div>
            <div class="commentsSection">
                <div class="singleComment">
                    <img
                        src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/86261405_704465800091407_4091667273901670400_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=oSNzdMaLfdQAX-B6cUo&_nc_ht=scontent.fhph1-1.fna&oh=154ba97bffbb7e6b6a32a415c6c0d252&oe=5F9F3427"
                        class="singleComment__image"
                    />
                    <div class="singleComment__details">
                        <h3 class="singleComment__name">Nancy</h3>
                        <p class="singleComment__date">NOVEMBER 13, 2019 AT 2:21PM</p>

                        <div class="singleComment__content s-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                voluptas earum impedit necessitatibus, nihil?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="singleComment">
                    <img
                        src="https://scontent.fhph1-1.fna.fbcdn.net/v/t1.0-9/86261405_704465800091407_4091667273901670400_n.jpg?_nc_cat=1&_nc_sid=09cbfe&_nc_ohc=oSNzdMaLfdQAX-B6cUo&_nc_ht=scontent.fhph1-1.fna&oh=154ba97bffbb7e6b6a32a415c6c0d252&oe=5F9F3427"
                        class="singleComment__image"
                    />
                    <div class="singleComment__details">
                        <h3 class="singleComment__name">Nancy</h3>
                        <p class="singleComment__date">NOVEMBER 13, 2019 AT 2:21PM</p>

                        <div class="singleComment__content s-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                autem, eum officia, fugiat saepe enim sapiente iste iure! Quam
                                voluptas earum impedit necessitatibus, nihil?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relatedPost">
        <div class="container">
            <h3 class="haedLine text-center">Nhà nghỉ gần đó</h3>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="singlePost">
                            <a href="">
                                <img
                                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">Chỗ ở độc đáo</h3>
                                    <p class="rating">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </p>
                                    <p class="price">$151.12/đêm</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="singlePost">
                            <a href="">
                                <img
                                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">Chỗ ở độc đáo</h3>
                                    <p class="rating">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </p>
                                    <p class="price">$151.12/đêm</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="singlePost">
                            <a href="">
                                <img
                                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">Chỗ ở độc đáo</h3>
                                    <p class="rating">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </p>
                                    <p class="price">$151.12/đêm</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="singlePost">
                            <a href="">
                                <img
                                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">Chỗ ở độc đáo</h3>
                                    <p class="rating">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </p>
                                    <p class="price">$151.12/đêm</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="singlePost">
                            <a href="">
                                <img
                                    src="https://a0.muscache.com/im/pictures/15159c9c-9cf1-400e-b809-4e13f286fa38.jpg?im_w=720"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">Chỗ ở độc đáo</h3>
                                    <p class="rating">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </p>
                                    <p class="price">$151.12/đêm</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    ...
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
@endsection
