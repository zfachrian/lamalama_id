@extends('templates.header');

@section('title')
Home
@endsection

@section('content')

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        @foreach($banners as $banner)
        <div class="single-hero-items set-bg" data-setbg="{{ asset('storage/'.$banner->banner_image) }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h1>{{$banner->banner_title}}</h1>
                        <p>{{$banner->banner_description}}</p>
                        <a href="{{url('/shop')}}" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4">
                <a href="{{url('/shop/category/'.$category->id)}}">
                    <div class="single-banner">
                        <img src="{{asset('img/banner-' . $loop->iteration . '.jpg')}}" alt="">
                        <div class="inner-text">
                            <h4>{{$category->category_name}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="{{asset('img/products/women-large.jpg')}}">
                    <h2>New</h2>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <h3>New Product</h3>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach($newProducts as $product)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('storage/'.$product->product_img) }}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="{{ url('/shop/'.$product->id) }}">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$product->category->category_name}}</div>
                            <a href="{{ url('/shop/'.$product->id) }}">
                                <h5>{{$product->product_name}}</h5>
                            </a>
                            <div class="product-price">
                                {{formatMoney($product->product_price, "Rp. ")}},-
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="{{asset('img/time-bg.jpg')}}">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>About Us</h2>
                <p style="white-space: pre-wrap;">{{$stores->store_about}}</p>
            </div>
            <a href="{{url('/shop')}}" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <h3>Afordable Product</h3>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach($afordableProducts as $product)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset('storage/'.$product->product_img) }}" alt="">
                            <div class="sale">New</div>
                            <ul>
                                <li class="quick-view"><a href="{{ url('/shop/'.$product->id) }}">Shop Now</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$product->category->category_name}}</div>
                            <a href="{{ url('/shop/'.$product->id) }}">
                                <h5>{{$product->product_name}}</h5>
                            </a>
                            <div class="product-price">
                                {{formatMoney($product->product_price, "Rp. ")}},-
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="{{asset('img/products/man-large.jpg')}}">
                    <h2>Afordable</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<!-- <section class="latest-blog spad" style="padding-top: 0;">
    <div class="container-fluid" style="padding: 0 5%">
        <h3 style="text-align: center;font-weight: bold;margin-bottom: 32px;">Our Instagram</h3>
        <div class="embedsocial-hashtag" data-ref="eeb97c338668c6eb70280a71a3d792854fdfe2c5"><a class="feed-powered-by-es" href="https://embedsocial.com/products/embedfeed/" target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span></a></div>
        <script>
            (function(d, s, id) {
                var js;
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://embedsocial.com/cdn/ht.js";
                d.getElementsByTagName("head")[0].appendChild(js);
            }(document, "script", "EmbedSocialHashtagScript"));
        </script>
    </div>
</section> -->
@endsection