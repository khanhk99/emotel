@extends('layouts.main')
@section('content')
    <!-- Banner -->
    <!-- Banner -->
    <div
        class="banner d-flex justify-content-center align-items-center"
        style="
        background-image: url('https://a0.muscache.com/im/pictures/18084f37-67e0-400f-bfd8-55eea0e89508.jpg');
      "
    >
        <div class="container ">
            <div class="background">
                <div class="heading text-center">
                    <h3>Trải nghiệm kỳ nghỉ tuyệt vời</h3>
                    <p>Combo khách sạn - vé máy bay - đưa đón sân bay giá tốt nhất</p>
                </div>
                <div class="find-motel d-flex justify-content-center">
                    <button class="find-btn"><i class="fas fa-map-marker-alt"></i> Tìm kiếm gần đây</button>
                    <button class="find-btn" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit"></i> Nhập địa chỉ</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var latMobile= 0;
        var longMobile= 0;
        function checkGPS()
        {
            $("#cssload").show();

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, error);
            }
        }

        function success(pos) {
            var crd = pos.coords;

            $.ajax({
                method: "POST",
                url: "/saveGPSUserAPI",
                data: { lat: pos.coords.latitude, long: pos.coords.longitude }
            }).done(function( msg ) {
                dieuHuong('/search-hotel?lat='+crd.latitude+'&long='+crd.longitude+'&distance=0.081');
            });
        }

        function defaultGPS(lat,long) {
            dieuHuong('/search-hotel?lat='+lat+'&long='+long+'&distance=0.081');
        }

        function dieuHuong(link){
            if ($('#nn').is(":checked"))
            {
                link += '&hotelType[]='+$('#nn').val();
            }

            if ($('#ks').is(":checked"))
            {
                link += '&hotelType[]='+$('#ks').val();
            }

            if ($('#homestay').is(":checked"))
            {
                link += '&hotelType[]='+$('#homestay').val();
            }

            if ($('#chdv').is(":checked"))
            {
                link += '&hotelType[]='+$('#chdv').val();
            }

            window.location= link;
        }

        function error(err) {
            if(latMobile>0 && longMobile>0){
                defaultGPS(latMobile,longMobile);
            }else{
                var check= confirm('Bạn không thể sử dụng chức năng này nếu không chia sẻ vị trí, bạn có muốn dùng vị trí mặc định không ?');
                if(check){
                    defaultGPS(21.010569,105.799379);
                }else{
                    $("#cssload").hide();
                }
            }
        }

        function submitCity()
        {
            $("#cssload").show();
            var idCity= $('#city').val();
            var idDistrict= $('#district').val();
            dieuHuong('/search-hotel?city='+idCity+'&district='+idDistrict);
        }
    </script>
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
                                    @php
                                        $str_title = $post->title;
                                        if(strlen($str_title)>30){
                                            $strCut_title = substr($str_title, 0, 30);
                                            $str_title = substr($strCut_title, 0, strrpos($strCut_title, ' ')). '...';
                                        }
                                    @endphp
                                    <h3 class="title">{!! $str_title !!}</h3>
                                    <p class="description">
                                        @php
                                            $str = $post->content;
                                            if(strlen($str)>100){
                                                $strCut = substr($str, 0, 100);
                                                $str = substr($strCut, 0, strrpos($strCut, ' ')). '...  <a href="' . $link . '">Đọc tiếp</a>';
                                            }
                                        @endphp
                                        {{ strip_tags($str) }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-12">
                <a href="{{ url('posts') }}" class="more">Xem thêm</a>
            </div>
        </div>
    </div>
@endsection
