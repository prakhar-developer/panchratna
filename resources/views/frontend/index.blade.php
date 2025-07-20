@include ('frontend.layouts.header')

<div class="tm-heroslider-area bg-grey">
    <div class="tm-heroslider-slider">

@foreach ($banner as $banner)
@if ($banner->image != "")
<div class="tm-heroslider" data-bgimage="{{ asset('uploads/banner_image/'.$banner->image) }}" ></div>
@endif
@endforeach

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
<img 
    data-pagespeed-lazy-src="{{ asset('frontend/assets/images/icons/icon-free-shipping.png') }}" 
    alt="Gold" 
    src="{{ asset('frontend/assets/images/icons/gold.svg') }}" 
    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" 
    onerror="this.onerror=null; this.src='{{ asset('frontend/assets/images/icons/gold.svg') }}';">
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
<img data-pagespeed-lazy-src="{{asset ('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{asset ('frontend/assets/images/icons/gold.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null; this.src='{{ asset('frontend/assets/images/icons/gold.svg') }}';">
</span>
<div class="tm-feature-content">
<h1>22K</h1>
<h4>₹{{ $rate->gold2 }}</h4></div>
</div>
</div>
<div class="col-lg-4 mt-30">
<div class="tm-feature">
<span class="tm-feature-icon">
<img data-pagespeed-lazy-src="{{asset ('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{asset ('frontend/assets/images/icons/gold.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</span>
<div class="tm-feature-content">
<h1>18K</h1>
<h4>₹{{ $rate->gold3 }}</h4></div>
</div>
</div>
<div class="col-lg-4 mt-30">
<div class="tm-feature">
<span class="tm-feature-icon">
<img data-pagespeed-lazy-src="{{asset ('frontend/assets/images/icons/icon-free-shipping.png')}}" alt="Gold" src="{{asset ('frontend/assets/images/icons/silver.svg')}}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</span>
<div class="tm-feature-content">
<h1>SILVER</h1>
<h4>₹{{ $rate->silver }}</h4></div></div>
</div>
</div>
</div>
<div class="rate" ><h5>*RATE 10 GMS UPDATED:  {{ $rate->from1 }} | VALID TILL: {{ $rate->to1 }}</h5> </div>
</div>
</div>
@endforeach
<div class="tm-section tm-offer-area tm-padding-section bg-goldlit">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-12 order-2 order-lg-1">
    <div class="tm-offer-content">
    <h6>EXCLUSIVE JEWELLERY DESIGNS</h6>
    <h1><span>GOLD & DIAMOND</span></h1>
    <h6>Panchratna & Son's Jewellers, was a first-generation entrepreneur and entered the jewellery industry 90 years ago at the age of 20. With his pure determination and hard work, he was able to set high standards of product quality and transparency in the industry.</h6>
    <img src="{{asset ('frontend/assets/images/about.png')}}" alt="about">
    </div>
    </div>
    <div class="col-lg-6 col-12 order-1 order-lg-2  about2">
        <img src="{{asset ('frontend/assets/images/about2.png')}}" alt="about">

   </div>
    </div>
    </div>
    </div>
    </div>

<div class="tm-section tm-brandlogo-area tm-padding-section bg-white">
<div class="container">
    <div class="check">
    <h6>A BRAND THAT KEEP THE PROMISE OF TRUST </h6>
    <h2>PANCHRATNA & SON'S JEWELLERS</h2>
    </div>
<div class="bigcard  order-lg-2" >

<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img src="{{asset ('frontend/assets/images/icons/bis.png')}}" alt="brand-logo">
        <a href="https://www.bis.gov.in/hallmarking-overview/" target="_blank" ><p class="para">100% BIS JEWELLERY.</p></a>
    </div>
    </div>
<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img src="{{asset ('frontend/assets/images/icons/gia.png')}}" alt="brand-logo">
        <a href="https://www.gia.edu/" target="_blank" ><p class="para">100% GIA CERTIFIED SOLITAIRES.</p></a>
    </div>
    </div>
<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img src="{{asset ('frontend/assets/images/icons/gullak.png')}}" alt="brand-logo">
        <a href="#" target="_blank" ><p class="para">MONTHLY SAVING SCHEME (GULLAK).</p></a>
    </div>
    </div>
<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img src="{{asset ('frontend/assets/images/icons/billing.png')}}" alt="brand-logo">
        <a href="#" target="_blank" ><p class="para">LIFETIME BUYBACK GUARANTEE.</p></a>
    </div>
    </div>
<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img src="{{asset ('frontend/assets/images/icons/diamond.png')}}" alt="brand-logo">
        <a href="https://www.igi.org/" target="_blank" ><p class="para">100% CERTIFIED DIAMOND JEWELLERY.</p></a>
    </div>
    </div>
<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img src="{{asset ('frontend/assets/images/icons/rupee.png')}}" alt="brand-logo">
        <p class="para">100% TRANSPARENCY IN BILLING.</p>
    </div>
    </div>
<div class="card border-primary mb-3" style="max-width: 10rem; max-height:10rem ;">
    <div class="card-body text-primary smallrectangle">
        <img href=""src="{{asset ('frontend/assets/images/icons/quality.png')}}" alt="brand-logo">
        <a href="https://gjepc.org/the-organisation.php" target="_blank" ><p class="para">100% NATURAL COLORED STONES.</p></a>
        
    </div>
    </div>
</div>
<div class="check">
    <h2>NOW, YOU CAN VERIFY HUID THROUGH THE BIS APP</h2>
    </div>

<div class="row tm-brandlogo-slider">
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot1.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot2.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot3.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot4.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot5.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot6.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot7.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot8.png')}}" alt="brand-logo">
</a>
</div>
<div class="col-12 tm-brandlogo">
<a href="">
<img src="{{asset ('frontend/assets/images/icons/Screenshot9.png')}}" alt="brand-logo">
</a>
</div>

</div>
</div>
</div>
        
<div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-goldlit">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-12">
<div class="tm-sectiontitle text-center">
<p>WHAT EVER THE OCCASION WE HAVE JEWELLERY FOR YOU</p>
<h3>SHOP BY COLLECTION</h3>
</div>
</div>
</div>
<div class="row tm-products-slider">
<div class="col-lg-3 col-md-4 col-sm-6 col-12">
<div class="tm-product tm-scrollanim">
<div class="tm-product-topside">
<div class="tm-product-images">
<img src="{{asset ('frontend/assets/images/ab1.jpg')}}" alt="product image">

</div>


</div>
<div class="tm-product-bottomside">
<h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
earring</a></h6>
<div class="tm-ratingbox">
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span><i class="ion-android-star-outline"></i></span>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-12">
<div class="tm-product tm-scrollanim">
<div class="tm-product-topside">
<div class="tm-product-images">
<img src="{{asset ('frontend/assets/images/ab3.jpg')}}" alt="product image">
</div>
<div class="tm-product-badges">
</div>
</div>
<div class="tm-product-bottomside">
<h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
earring</a></h6>
<div class="tm-ratingbox">
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span><i class="ion-android-star-outline"></i></span>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-12">
<div class="tm-product tm-scrollanim">
<div class="tm-product-topside">
<div class="tm-product-images">
<img src="{{asset ('frontend/assets/images/home2.jpeg')}}" alt="product image">
</div>

</div>
<div class="tm-product-bottomside">
<h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
earring</a></h6>
<div class="tm-ratingbox">
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span><i class="ion-android-star-outline"></i></span>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-12">
<div class="tm-product tm-scrollanim">
<div class="tm-product-topside">
<div class="tm-product-images">
<img src="{{asset ('frontend/assets/images/gl2.jpg')}}" alt="product image">
</div>

</div>
<div class="tm-product-bottomside">
<h6 class="tm-product-title"><a href="product-details.html">Stylist daimond
earring</a></h6>
<div class="tm-ratingbox">
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span><i class="ion-android-star-outline"></i></span>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-12">
<div class="tm-product tm-scrollanim">
<div class="tm-product-topside">
<div class="tm-product-images">
<img src="{{asset ('frontend/assets/images/ab4.jpg')}}" alt="product image">
</div>

</div>
<div class="tm-product-bottomside">
<h6 class="tm-product-title"><a href="product-details.html">Stylist daimond earring</a></h6>
<div class="tm-ratingbox">
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span class="is-active"><i class="ion-android-star-outline"></i></span>
<span><i class="ion-android-star-outline"></i></span>
</div>
</div>
</div>
</div>

</div>

</div>
</div>
</div>
</div>




<div id="tm-latest-products-area" class="tm-section tm-latest-products-area tm-padding-section bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-12">
<div class="tm-sectiontitle text-center">
<h3>NEW ARRIVAL PRODUCTS</h3>
<p>Our popular products are so beautyful to see that the shoppers are easily attracted
to them.</p>
</div>
</div>
</div>
<div class="row mt-50-reverse">

@foreach ($product as $product) <!-- Assuming $products is a collection of products -->
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50">
    <div class="tm-product tm-scrollanim">
        <div class="tm-product-topside">
            <div class="tm-product-images">
                <img data-pagespeed-lazy-src="{{ asset('uploads/products_image/'.$product->image) }}" alt="product image" src="{{ asset('frontend/assets/pagespeed_static/1.JiBnMqyl6S.gif') }}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                <img data-pagespeed-lazy-src="{{ asset('uploads/products_image/product_thumbnail/'.$product->thumbnail_1) }}" alt="product image" src="{{ asset('frontend/assets/pagespeed_static/1.JiBnMqyl6S.gif') }}" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
            </div>
            <ul class="tm-product-actions">
                <li><a href="{{ route('frontend.productDetails', ['id' => $product->id]) }}"><i class="ion-android-cart"></i>See Details</a></li>
            </ul>
            <div class="tm-product-badges">
                <span class="tm-product-badges-new">New</span>
                <span class="tm-product-badges-sale">{{ $product->available }}</span>
            </div>
        </div>
        <div class="tm-product-bottomside">
            <h6 class="tm-product-title"><a href="{{ route('frontend.productDetails', ['id' => $product->id]) }}">{{ $product->name }}</a></h6>
            <div class="tm-ratingbox">
                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                <span><i class="ion-android-star-outline"></i></span>
            </div>
            <span class="tm-product-price">{{ $product->weight }}</span>
        </div>
    </div>
</div>
@endforeach

</div>
<div class="tm-product-loadmore text-center mt-50">
<a href="{{ route('frontend.product')}}" class="tm-button">All Products</a>
</div>
</div>
</div>


<!-- ---------------------------------------------------->
<div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-home">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-12">
    <div class="tm-sectiontitle text-center">
  
    <h3>CONNECT WITH US</h3>
    </div>
    </div>
    </div>


    <div class="card cardicon">
        
        <a class="card-img-top" href="https://api.whatsapp.com/send/?phone=917457995154&text&type=phone_number&app_absent=0" target="_blank">
            <img  src="{{asset ('frontend/assets/images/icons/cwu1.png')}}" alt="Card image cap">
            </a>
  
    <a class="card-img-top" href="tel:7457995154">
    <img  src="{{asset ('frontend/assets/images/icons/cwu2.png')}}" alt="Card image cap">
    </a>
    
    <a class="card-img-top" href="https://api.whatsapp.com/send/?phone=917457995154&text&type=phone_number&app_absent=0" target="_blank">
        <img  src="{{asset ('frontend/assets/images/icons/cwu3.png')}}" alt="Card image cap">
        </a>
    </div>
    

    
   
    
    </div>
<!-- ---------------------------------------------------->


</div>
</div>
</div>

<div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section bg-white">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-12">
<div class="tm-sectiontitle text-center">
<p>SHOP OUR INSTAGRAM</p>
<a href="https://www.instagram.com/panchratnajewellers?igsh=MTA5OGtmaGd0NjNqaQ%3D%3D"><h3>#PANCHRATNA SONS AND JEWELLARS .1980</h3></a>
</div>
</div>
</div>
</div>
<img src="{{ asset('frontend/assets/images/instagram.png') }}" alt="">
</main>     
@include ('frontend.layouts.footer')