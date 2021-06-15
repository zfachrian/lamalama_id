@extends('templates.header');

@section('title')
Shop
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text product-more">
          <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
          <a href="{{url('/shop')}}"><i class="fa fa-shopping-cart"></i> Shop</a>
          <span>Detail</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
  <div class="container">
    <div class="row">
      <div class="col-lg">
        <div class="row">
          <div class="col-lg-6">
            <div class="product-pic-zoom">
              <img class="product-big-img" src="{{ asset('storage/'.$product->product_img) }}" alt="">
              <div class="zoom-icon">
                <i class="fa fa-search-plus"></i>
              </div>
            </div>
            <div class="product-thumbs">
              <div class="product-thumbs-track ps-slider owl-carousel">
                <div class="pt active" data-imgbigurl="{{ asset('storage/'.$product->product_img) }}"><img src="{{ asset('storage/'.$product->product_img) }}" alt=""></div>
                @if($product->product_img2)
                <div class="pt" data-imgbigurl="{{ asset('storage/'.$product->product_img2) }}"><img src="{{ asset('storage/'.$product->product_img2) }}" alt=""></div>
                @endif
                
                @if($product->product_img3)
                <div class="pt" data-imgbigurl="{{ asset('storage/'.$product->product_img3) }}"><img src="{{ asset('storage/'.$product->product_img3) }}" alt=""></div>
                @endif

                @if($product->product_img4)
                <div class="pt" data-imgbigurl="{{ asset('storage/'.$product->product_img4) }}"><img src="{{ asset('storage/'.$product->product_img4) }}" alt=""></div>
                @endif
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-details">
              <div class="pd-title">
                <span>{{$product->category->category_name}}</span>
                <h5 style="color:#e7ab3c; font-weight: bold;">Kode: {{$product->product_code}}</h5>
                <h3>{{$product->product_name}}</h3>
              </div>
              <div class="pd-desc">
                <h4 class="mt-4">{{formatMoney($product->product_price, "Rp. ")}},-</h4>
                <h4 class="mt-4">Transfer Pembayaran</h4>
                <h5>{{$stores->store_bank_account}}</h5>
              </div>
              <div class="pd-desc">
                <p style="white-space: pre-wrap;">{{$product->product_description}}</p>
              </div>
              <a href="{{'https://api.whatsapp.com/send?phone='. $stores->store_wa .'&text='.  $stores->store_text_buy .' '. $product->product_name . '%20('.$product->product_code.')'}}" class="primary-btn pd-cart" style="margin-right:10px;">Beli</a>
              @if($product->product_trade_status == 1) 
              <a data-toggle="modal" data-target="#tukarModal" href="#" class="primary-btn pd-cart" style="background-color: brown;">Tukar</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Related Products</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($relatedProducts as $product)
      <div class="col-lg-3 col-sm-6">
        <div class="product-item">
          <div class="pi-pic">
            <a href="{{ url('/shop/'.$product->id) }}">
              <img src="{{ asset('storage/'.$product->product_img) }}" alt="">
            </a>
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
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Related Products Section End -->

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tukarModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="tukarModal" tabindex="-1" role="dialog" aria-labelledby="tukarModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mohon Dibaca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Tukarkan product fashion anda yang telah tak terpakai dengan product kami, pilih product dan kirimkan gambar product anda dan tim kami akan melakukan peninjauan, jika product sepadan maka proses tukar bisa dilakukan.
        </p>
        <br>
        <h3><b>Info Tukar</b></h3>
        <p>

          Tukar barang minimal 2 item product. Klik button "Lanjut Tukar" untuk melanjutkan, proses akan dilanjutkan ke chat whatsap dan anda akan diarahkan untuk memilih produk ke 2.
        </p>
      </div>
      <div class="modal-footer">
        <a href="#" class="primary-btn pd-cart" data-dismiss="modal" style="background-color: grey;">Close</a>
        <a href="{{'https://api.whatsapp.com/send?phone='. $stores->store_wa .'&text='. $stores->store_text_trade .' '. $product->product_name . '%20('.$product->product_code.')'}}" class="primary-btn pd-cart" style="background-color: brown;">Tukar</a>
      </div>
    </div>
  </div>
</div>
@endsection