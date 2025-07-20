@include ('frontend.layouts.header')

<div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('frontend/assets/images/breadcrumb-bg.jpg')}}">
<div class="container">
<div class="tm-breadcrumb">
<h2>About Us</h2>
<ul>
<li><a href="index.html">Home</a></li>
<li>About</li>
</ul>
</div>
</div>
</div>
<main class="page-content">
    <div class="tm-section tm-feature-area bg-grey">
        <div class="container">
            <div class="rate" ><h4>TODAY’S RATE</h4> </div>
        <div class="row mt-30-reverse">
        @foreach ($rate as $rate)
        <div class="col-lg-4 mt-30">
        <div class="tm-feature">
        <span class="tm-feature-icon">
        <img data-pagespeed-lazy-src="{{ asset('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{ asset('frontend/assets/images/icons/gold.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
        </span>
        <div class="tm-feature-content">
        <h1>24K</h1>
        <h4>₹{{ $rate->gold1 }}</h4>
        </div>
        </div>
        </div>
        <div class="col-lg-4 mt-30">
        <div class="tm-feature">
        <span class="tm-feature-icon">
        <img data-pagespeed-lazy-src="{{ asset('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{ asset('frontend/assets/images/icons/gold.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
        </span>
        <div class="tm-feature-content">
        <h1>22K</h1>
        <h4>₹{{ $rate->gold2 }}</h4></div>
        </div>
        </div>
        <div class="col-lg-4 mt-30">
        <div class="tm-feature">
        <span class="tm-feature-icon">
        <img data-pagespeed-lazy-src="{{ asset('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{ asset('frontend/assets/images/icons/gold.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
        </span>
        <div class="tm-feature-content">
        <h1>18K</h1>
        <h4>₹{{ $rate->gold3 }}</h4></div>
        </div>
        </div>
        <div class="col-lg-4 mt-30">
        <div class="tm-feature">
        <span class="tm-feature-icon">
        <img data-pagespeed-lazy-src="{{ asset('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{ asset('frontend/assets/images/icons/silver.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
        </span>
        <div class="tm-feature-content">
        <h1>SILVER</h1>
        <h4>₹{{ $rate->silver }}</h4></div></div>
        </div>
        </div>
        </div>
        <div class="rate" ><h5>*RATE 10 GMS UPDATED:  {{ $rate->from1 }} | VALID TILL: {{ $rate->to1 }}</h5> </div>
        </div>

    @endforeach
<div class="tm-about-area tm-padding-section bg-white">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="tm-about-image">
    
<img data-pagespeed-lazy-src="{{ asset('frontend/assets/images/ab4.jpg')}}" alt="about image" src="{{ asset('frontend/assets/pagespeed_static/1.JiBnMqyl6S.gif')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">

</div>
</div>
<div class="col-lg-6">
<div class="tm-about-content">
<h4>WELCOME TO PANCHRATNA STORE</h4>
<h6>PANCHATNA HAI MATLAB BHAROSA HAI!</h6>
<p>Established in 1982, Panchartana & Son's Jewellers Pvt. Ltd. had its roots in the city of Kanpur before establishing itself as one of the most respected jewellery houses in Kanpur. Today, the jewellery house is a family of two stores in Kalyanpur and Rawatpur.</p>
<p>Pancharatna & Son's Jewellers moves its flagship store to a new location in Panki Road Kalyanpur . The space is an embodiment of the founders ideals, creating an immersive experience for customers.</p>
</div>
</div>
</div>
</div>
</div>
<div class="tm-team-members tm-padding-section bg-grey">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-12">
<div class="tm-sectiontitle text-center">
<h3>MEET OUR TEAM</h3>
<p>PANCHATNA HAI MATLAB BHAROSA HAI!</p>
</div>
</div>
</div>
<div class="row tm-member-slider">
<div class="col-12">
<div class="tm-member">
<div class="tm-member-topside">
<img src="{{ asset('frontend/assets/images/team-member-1.jpg')}}" alt="team member">
<ul>
<li><a href="#"><i class="ion-social-facebook"></i></a></li>
<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
<li><a href="#"><i class="ion-social-skype-outline"></i></a></li>
<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
</ul>
</div>
<div class="tm-member-bottomside">
<h6>Henry Todd</h6>
<p>Founder & CEO</p>
</div>
</div>
</div>
<div class="col-12">
<div class="tm-member">
<div class="tm-member-topside">
<img src="{{ asset('frontend/assets/images/team-member-2.jpg')}}" alt="team member">
<ul>
<li><a href="#"><i class="ion-social-facebook"></i></a></li>
<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
<li><a href="#"><i class="ion-social-skype-outline"></i></a></li>
<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
</ul>
</div>
<div class="tm-member-bottomside">
<h6>Jamie McGuirk</h6>
<p>Managing Director</p>
</div>
</div>
</div>

<div class="col-12">
<div class="tm-member">
<div class="tm-member-topside">
<img src="{{ asset('frontend/assets/images/team-member-4.jpg')}}" alt="team member">
<ul>
<li><a href="#"><i class="ion-social-facebook"></i></a></li>
<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
<li><a href="#"><i class="ion-social-skype-outline"></i></a></li>
<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
</ul>
</div>
<div class="tm-member-bottomside">
<h6>Bailey Beggs</h6>
<p>Support Guru</p>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="tm-section tm-brandlogo-area tm-padding-section bg-white">
<div class="container">
<div class="row tm-brandlogo-slider">
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-1.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-2.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-3.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-4.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-5.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-1.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-2.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-3.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-4.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="#">
<img src="{{ asset('frontend/assets/images/brandlogo-5.png')}}" alt="brand-logo">
</a>
</div>
</div>
</div>
</div>
</main>

<div class="tm-footer">
    <ul id="instafeed" class="tm-instaphotos"></ul>
    <div class="tm-footer-toparea tm-padding-section bg-goldlit">
    <div class="container">
    <div class="widgets widgets-footer row">
    <div class="col-lg-3 col-md-6 col-12">
    <div class="single-widget widget-info">
    <a class="widget-info-logo" href="index.html"><img src="{{ asset('frontend/assets/images/logo.png')}}" alt="logo"></a>
    <ul>
    <li><b>Address :</b>Shop 1:Plot no. 6 Kalyanpur,Panki Road 208017 Near Yamaha Showroom</li>
    <li><b>Phone :</b><a href="tel:+91 9120305154">+91 9120305154</a></li>
    <li><b>Phone :</b><a href="tel:+91 7457995154">+91 7457995154</a></li>
    <!-- <li><b>Email :</b><a href="mailto:info@example.com">info@example.com</a></li> -->
    </ul>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
    <div class="single-widget widget-quicklinks">
    <h6 class="widget-title">Useful Link</h6>
    <ul>
    <li><a href="about.html">About Us</a></li>
    <li><a href="#">Delivery Info</a></li>
    <li><a href="#">Privacy & Policy</a></li>
    <li><a href="#">Returns & Refunds</a></li>
    <li><a href="#">Terms & Conditions</a></li>
    <li><a href="contact.html">Contact Us</a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
    <div class="single-widget widget-quicklinks">
    <h6 class="widget-title">My Account</h6>
    <ul>
    <li><a href="#">My account</a></li>
    <li><a href="#">Cart</a></li>
    <li><a href="">Wishlist</a></li>
    <li><a href="#">Newsletter</a></li>
    <li><a href="#">Check out</a></li>
    <li><a href="#">Frequently Questions</a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
    <div class="single-widget widget-newsletter">
    <h6 class="widget-title">Join Our Newsletter</h6>
    <p>Get Business news, tip and solutions to
    your problems from our experts.</p>
    <form id="tm-mailchimp-form" class="widget-newsletter-form">
    <input id="mc-email" type="text" placeholder="Enter email address">
    <button id="mc-submit" type="submit" class="tm-button">Subscribe Now
    <b></b></button>
    </form>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tm-footer-bottomarea">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-7">
    <p class="tm-footer-copyright">©
    2024. Designed by <a href="https://sudhirkumar.netlify.app/">Sudhirkdnw</a></p>
    </div>
    <div class="col-md-5">
    <div class="tm-footer-payment">
    <img data-pagespeed-lazy-src="{{ asset('frontend/assets/images/payment-methods.png')}}" alt="payment methods" src="{{ asset('frontend/assets/pagespeed_static/1.JiBnMqyl6S.gif')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tm-product-quickview" id="tm-product-quickview">
    
    <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>
    </div>
    <script type="text/javascript" data-pagespeed-no-defer>pagespeed.lazyLoadImages.overrideAttributeFunctions();</script><script src="{{ asset('frontend/assets/js/vendors/plugins.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
    </body>
    </html> 