@extends('layouts.main')
@section('content')
    <!-- Banner -->
    <div class="banner d-flex justify-content-center align-items-center"
         style="   background-image: url('https://a0.muscache.com/im/pictures/18084f37-67e0-400f-bfd8-55eea0e89508.jpg'); ">
        <div class="container">
            <div class="clientForm">
                <form action="">
                    <div class="clientForm__item">
                        Địa điểm
                        <select class="place-chooser" name="places" id="place-chooser">
                            <option value="HN">Hà Nội</option>
                            <option value="NA">Nghệ An</option>
                            <option value="HCM">Hồ Chí Minh</option>
                        </select>
                    </div>
                    <div class="clientForm__item">
                        Ngày khởi hành
                        <input id="start-date" type="text"/>
                    </div>
                    <div class="clientForm__item">
                        Ngày rời đi
                        <input id="end-date" type="text"/>
                    </div>
                    <div class="clientForm__item">
                        Số người
                        <select class="number-chooser" name="places">
                            <option value="1">1 người</option>
                            <option value="2">2 người</option>
                            <option value="3">3 người</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="heading">
                <h3>Trải nghiệm kỳ nghỉ tuyệt vời</h3>
                <p>Combo khách sạn - vé máy bay - đưa đón sân bay giá tốt nhất</p>
            </div>
        </div>
    </div>

    <!-- Top motel -->
    <div class="topMotel">
        <div class="container">
            <h2 class="headLine text-center">Top nhà nghỉ</h2>
            <p class="subHeadLine text-center">Nhanh tay đặt ngay. Để mai sẽ lỡ</p>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($motels as $motel)
                        <div class="swiper-slide">
                            <div class="singlePost">
                                <a href="{{ url('motels/detail/' . $motel->id) }}">
                                    @php
                                        $avatar_motel = explode('--',$motel->avatar);
                                    @endphp
                                    @if(count($avatar_motel)>1)
                                        <img
                                            src="{{ asset('assets/images/'. $avatar_motel[1]) }}"
                                            alt=""
                                        />
                                    @else
                                        <img
                                            src="{{ asset('assets/images/'. $avatar_motel[0]) }}"
                                            alt=""
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
                    ...
                </div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <a href="#" class="more">Xem thêm</a>
        </div>
    </div>

    <!-- Place -->
    <div class="places">
        <div class="container">
            <h2 class="headLine text-center">Địa điểm nổi tiếng</h2>
            <p class="subHeadLine text-center">
                Lên rừng xuống biển. Trọn vẹn Việt Nam
            </p>
            <!-- Masonry -->
            <div class="grid d-flex justify-content-center">
                <div class="grid-sizer"></div>
                <div
                    class="grid-item grid-item--width2"
                    style="
              background-image: url('//cdn1.ivivu.com/iVivu/2019/03/07/16/phuquoc-755x190.jpg');
            "
                >
                    <div class="content">
                        <h3 class="text-light">Nha trang</h3>
                        <p class="text-light">214 nhà nghỉ</p>
                    </div>
                </div>
                <div
                    class="grid-item grid-item--width2"
                    style="
              background-image: url('//cdn1.ivivu.com/iVivu/2019/03/07/16/phuquoc-755x190.jpg');
            "
                >
                    <div class="content">
                        <h3 class="text-light">Nha trang</h3>
                        <p class="text-light">214 nhà nghỉ</p>
                    </div>
                </div>
                <div
                    class="grid-item grid-item"
                    style="
              background-image: url('//cdn1.ivivu.com/iVivu/2019/03/07/16/phuquoc-755x190.jpg');
            "
                >
                    <div class="content">
                        <h3 class="text-light">Nha trang</h3>
                        <p class="text-light">214 nhà nghỉ</p>
                    </div>
                </div>
                <div
                    class="grid-item grid-item"
                    style="
              background-image: url('//cdn1.ivivu.com/iVivu/2019/03/07/16/phuquoc-755x190.jpg');
            "
                >
                    <div class="content">
                        <h3 class="text-light">Nha trang</h3>
                        <p class="text-light">214 nhà nghỉ</p>
                    </div>
                </div>
                <div
                    class="grid-item grid-item--width2"
                    style="
              background-image: url('//cdn1.ivivu.com/iVivu/2019/03/07/16/phuquoc-755x190.jpg');
            "
                >
                    <div class="content">
                        <h3 class="text-light">Nha trang</h3>
                        <p class="text-light">214 nhà nghỉ</p>
                    </div>
                </div>
                <div
                    class="grid-item grid-item--width2"
                    style="
              background-image: url('//cdn1.ivivu.com/iVivu/2019/03/07/16/phuquoc-755x190.jpg');
            "
                >
                    <div class="content">
                        <h3 class="text-light">Nha trang</h3>
                        <p class="text-light">214 nhà nghỉ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Posts -->
    <div class="post">
        <div class="container">
            <h2 class="headLine text-center">Kinh nghiệm du lịch</h2>
            <p class="subHeadLine text-center">
                Lên rừng xuống biển. Trọn vẹn Việt Nam
            </p>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="singlePost">
                            <?php $link = 'posts/detail/' . $post->id ?>
                            <a href="{{ url($link) }}">
                                <img
                                    src="{{ asset('assets/images/'. $post->avatar) }}"
                                    alt=""
                                />
                                <div class="singlePost__content">
                                    <h3 class="title">{{ $post->title }}</h3>
                                    <p class="description">
                                        @php
                                            $str = $post->content;
                                            if(strlen($str)>100){
                                                $strCut = substr($str, 0, 100);
                                                $str = substr($strCut, 0, strrpos($strCut, ' ')). '...  <a href="' . $link . '">Đọc tiếp</a>';
                                            }
                                        @endphp
                                        {!! $str !!}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12">
                    <a href="{{ url('posts') }}" class="more">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
@endsection
