@include ('frontend.layouts.header')

<div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{asset ('frontend/assets/images/breadcrumb-bg.jpg')}}">
<div class="container">
<div class="tm-breadcrumb">
<h2>Products</h2>
<ul>
<li><a href="/">Home</a></li>
<li>Shop</li>
</ul>
</div>
</div>
</div>

<div id="tm-latest-products-area" class="tm-section tm-latest-products-area tm-padding-section bg-white">
<div class="container">
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
</div>
</div>

</div>
</div>








@include ('frontend.layouts.footer')