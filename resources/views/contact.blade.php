@extends('templates.header');

@section('title')
Contact
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
          <span>Contact</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Map Section Begin -->
<div class="map spad">
  <div class="container">
    <div class="map-inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5487296087344!2d112.74360501531348!3d-7.2920719947368875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbbbfb8ad99d%3A0x61cceaea0ac163a2!2sConecworld!5e0!3m2!1sid!2sid!4v1622718274946!5m2!1sid!2sid" height="610" style="border:0" allowfullscreen="">
      </iframe>
      <div class="icon">
        <i class="fa fa-map-marker"></i>
      </div>
    </div>
  </div>
</div>
<!-- Map Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="contact-title">
          <h4>About Us</h4>
        </div>
        <p>{{$stores->store_about}}</p>
      </div>
    </div>
    <div class="mt-5"></div>
    <div class="row">
      <div class="col-lg-5">
        <div class="contact-title">
          <h4>Contacts Us</h4>
        </div>
        <div class="contact-widget">
          <div class="cw-item">
            <div class="ci-icon">
              <i class="ti-location-pin"></i>
            </div>
            <div class="ci-text">
              <span>Address:</span>
              <p>{{$stores->store_address}}</p>
            </div>
          </div>
          <div class="cw-item">
            <div class="ci-icon">
              <i class="ti-mobile"></i>
            </div>
            <div class="ci-text">
              <span>Phone:</span>
              <p>{{$stores->store_phone}}</p>
            </div>
          </div>
          <div class="cw-item">
            <div class="ci-icon">
              <i class="ti-email"></i>
            </div>
            <div class="ci-text">
              <span>Email:</span>
              <p>{{$stores->store_email}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
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
</section>
<!-- Contact Section End -->
<section class="latest-blog spad" style="padding-top: 0;">
    
</section>
@endsection