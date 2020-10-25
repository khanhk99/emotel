@extends('layouts.main')
@section('content')
    <div id="headerCover" style="background-color: rgba(0, 0, 0, 1); height: 90px;"></div>
    <div class="motelRooms">
        <div class="container">
            <h3 class="headLine">Danh sách phòng</h3>
            <div class="motelRooms__list">
                @foreach($rooms as $room)
                    <div class="motelRooms__item" data-toggle="tab" href="#menu{{$room->id}}">
                        <h3>{{ $room->roomNumber }}</h3>
                        <p>{{ $room->typeRoom->name }}</p>
                    </div>
                @endforeach
                <div></div>
            </div>
            <!-- Tab panes -->
            <div class="motelRooms__listItemDetails tab-content">
                @foreach($rooms as $room)
                    <div class="tab-pane container fade" id="menu{{$room->id}}">
                        <table class="table">
                            <tr>
                                <td>Số phòng</td>
                                <td>{{$room->roomNumber}}</td>
                            </tr>
                            <tr>
                                <td>Loại phòng</td>
                                <td>{{$room->typeRoom->name}}</td>
                            </tr>
                            <tr>
                                <td>Giá giờ</td>
                                <td>{{$room->priceHour}}</td>
                            </tr>
                            <tr>
                                <td>Giá ngày</td>
                                <td>{{$room->priceDay}}</td>
                            </tr>
                            <tr>
                                <td>Mô tả</td>
                                <td>
                                    <div class="s-content">
                                        {!! $room->description !!}
                                    </div>
                                </td>
                            </tr>
                            @php
                                $avatar_room = explode('--', $room->avatar);
                            @endphp
                            <tr>
                                <td>Ảnh phòng</td>
                                <td>
                                    <img src="{{ asset('assets/images/'. $avatar_room[1]) }}" alt="" width="300px">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="btn btn-danger">
                                        <a href="tel:{{ $room->motel->phoneNumber }}" style="color:#ffffff;">Đặt ngay</a>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
