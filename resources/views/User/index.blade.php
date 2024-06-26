@extends('Layout_user')
@section('content')

<!-- banner part start-->
<section class="banner_part">

    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    @foreach ($sliders as $slider)
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>{!! $slider->slider_name !!}</h1>
                                        <p>{!! $slider->slider_content !!}</p>
                                        <a href="{{ $slider->slider_link }}" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{ asset('uploads/slider/'.$slider->slider_image) }}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <div class="slider-counter"></div> -->
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Sản Phẩm Mới</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Máy Pha Cà Phê</p>
                    <h3>Combo Máy Pha</h3>
                    <a href="#" class="feature_btn">XEM NGAY <i class="fas fa-play"></i></a>
                    <img src="{{ asset('frontend/img/feature/anh1.png') }}" alt="" width="350px">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Cà Phê Thượng Hạng</p>
                    <h3>GOLD Cà Phê</h3>
                    <a href="#" class="feature_btn">XEM NGAY <i class="fas fa-play"></i></a>
                    <img src="{{ asset('frontend/img/feature/feature.webp') }}" alt="" width="280px">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Đồ Uống mới</p>
                    <h3>Latte Thượng Hạng</h3>
                    <a href="#" class="feature_btn">XEM NGAY <i class="fas fa-play"></i></a>
                    <img src="{{ asset('frontend/img/feature/feature3.png') }}" alt="" width="280px">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Trưng bừng khai trương </p>
                    <h3>Chi nhánh Đà Nẵng</h3>
                    <a href="#" class="feature_btn">XEM NGAY <i class="fas fa-play"></i></a>
                    <img src="{{ asset('frontend/img/feature/feature4.png') }}" alt="" width="380px">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- product_list start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Sản Phẩm Nổi Bật</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($products_here as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <a href="{{ route('home.detail',$product->product_slug) }}">
                                        <img src="{{ asset('uploads/product/'.$product->product_image) }}" alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <a href="{{ route('home.detail',$product->product_slug) }}">
                                            <h4>{{ ucfirst($product->product_name) }}</h4>
                                        </a>
                                        <h3>{{ number_format($product->product_price) }}<sup class="price-agin">₫</sup>
                                        </h3>
                                        <input type="hidden" class="hidden_proid{{ $product->product_id }}" value="1">
                                        <a href="#" class="add_cart" id="{{ $product->product_id }}">+ add to cart<i
                                                class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($products_next as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <a href="{{ route('home.detail',$product->product_slug) }}">
                                        <img src="{{ asset('uploads/product/'.$product->product_image) }}" alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <a href="{{ route('home.detail',$product->product_slug) }}">
                                            <h4>{{ ucfirst($product->product_name) }}</h4>
                                        </a>
                                        <h3>{{ number_format($product->product_price) }}<sup class="price-agin">₫</sup>
                                        </h3>
                                        <input type="hidden" class="hidden_proid{{ $product->product_id }}" value="1">
                                        <a href="#" class="add_cart" id="{{ $product->product_id }}">+ add to cart<i
                                                class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->

<!-- awesome_shop start-->
<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="{{ asset('frontend/img/Sale2.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on
                        60% Off All Products</h2>
                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- awesome_shop part start-->

<!-- product_list part start-->
<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @foreach ($product_sellers as $product)
                    <div class="single_product_item">
                        <a href="{{ route('home.detail',$product->product_slug) }}">
                            <img src="{{ asset('uploads/product/'.$product->product_image) }}" alt="">
                        </a>
                        <div class="single_product_text">
                            <a href="{{ route('home.detail',$product->product_slug) }}">
                                <h4>{{ ucfirst($product->product_name) }}</h4>
                            </a>
                            <h3>{{ number_format($product->product_price) }}<sup class="price-agin">₫</sup></h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part end-->

<!-- subscribe_area part start-->
<section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->

<!-- subscribe_area part start-->
<section class="client_logo padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/phuclong.jpg') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/Logo-90.png') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/logotrungnguyen.png') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/highlands_logo.webp') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/Nescafe-Logo.png') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/logo_starbucks.jpeg') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/logo_king.webp') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/logo-vinacf.jpeg') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/logo-cafe-pho.jpeg') }}" width="125px" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{ asset('frontend/img/qtcoffee/logo_tcfh.webp') }}" width="125px" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->
@endsection