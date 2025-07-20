@include('frontend.layouts.header')

<main class="page-content">
    <div class="tm-product-details-area tm-section tm-padding-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tm-prodetails">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-10 col-12">
                                <div class="tm-prodetails-images">
                                    <div class="tm-prodetails-largeimages">
                                        @if ($product->image)
                                            <div class="tm-prodetails-largeimage">
                                                <a data-fancybox="tm-prodetails-imagegallery" href="{{ asset('uploads/products_image/'.$product->image) }}" data-caption="Product Zoom Image 1">
                                                    <img src="{{ asset('uploads/products_image/'.$product->image) }}" alt="product image">
                                                </a>
                                            </div>
                                        @endif

                                        @foreach([$product->thumbnail_1, $product->thumbnail_2, $product->thumbnail_3, $product->thumbnail_4, $product->thumbnail_5] as $index => $thumbnail)
                                            @if ($thumbnail)
                                                <div class="tm-prodetails-largeimage">
                                                    <a data-fancybox="tm-prodetails-imagegallery" href="{{ asset('uploads/products_image/product_thumbnail/'.$thumbnail) }}" data-caption="Product Zoom Image {{ $index + 2 }}">
                                                        <img src="{{ asset('uploads/products_image/product_thumbnail/'.$thumbnail) }}" alt="product image">
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    
                                    <div class="tm-prodetails-thumbnails">
                                        @if ($product->image)
                                            <div class="tm-prodetails-thumbnail">
                                                <img src="{{ asset('uploads/products_image/'.$product->image) }}" alt="product image">
                                            </div>
                                        @endif

                                        @foreach([$product->thumbnail_1, $product->thumbnail_2, $product->thumbnail_3, $product->thumbnail_4, $product->thumbnail_5] as $thumbnail)
                                            @if ($thumbnail)
                                                <div class="tm-prodetails-thumbnail">
                                                    <img src="{{ asset('uploads/products_image/product_thumbnail/'.$thumbnail) }}" alt="product image">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="tm-prodetails-content">
                                    <h4 class="tm-prodetails-title">{{ $product->name }}</h4>
                                    <span class="tm-prodetails-price">{{ $product->weight }}</span>
                                    <div class="tm-ratingbox">
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                        <span><i class="ion-android-star-outline"></i></span>
                                    </div>
                                    <div class="tm-prodetails-infos">
                                        <div class="tm-prodetails-singleinfo">
                                            <b>Product ID :</b> {{ $product->product_id }}
                                        </div>
                                        <div class="tm-prodetails-singleinfo">
                                            <b>Category :</b> <a href="#">{{ $product->category }}</a>
                                        </div>
                                        <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                                            <b>Tags :</b>
                                            <ul>
                                                <li><a href="#">{{ $product->tags }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="tm-prodetails-singleinfo">
                                            <b>Available :</b> <span class="color-theme">{{ $product->available }}</span>
                                        </div>
                                        <div class="tm-prodetails-singleinfo tm-prodetails-share">
                                            <b>Share :</b>
                                            <ul>
                                               <li><a href="#" title="Share on Facebook" onclick="shareOnFacebook('{{ url('/productDetails/' . $product->id) }}'); return false;">
                                                   <i class="ion-social-facebook"></i></a></li> 
                                               <li><a href="https://www.instagram.com/" target="_blank"  onclick="copyToClipboard('{{ url('/productDetails/' . $product->id) }}'); alert('Link copied to clipboard! Open Instagram to share the link.');"><i class="ion-social-instagram-outline"></i></a></li>
                                                <li><a href="whatsapp://send?text=https://panchratna.freelancerdigitech.com/productDetails/{{$product->id}}"><i class="ion-social-whatsapp-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>{{ $product->descriptions }}</p>
                                    <div class="tm-prodetails-quantitycart">
                                        <h6>Quantity :</h6>
                                        <div class="tm-quantitybox">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="https://api.whatsapp.com/send/?phone=917457995154&text=https://panchratna.freelancerdigitech.com/productDetails/{{$product->id}}&type=phone_number&app_absent=0" target="_blank" class="tm-button tm-button-dark" style="background:#21c063">WhatsApp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                        <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab" href="#prodetails-area1" role="tab" aria-controls="prodetails-area1" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <!-- Additional tabs can be added here -->
                            </li>
                        </ul>
                        <div class="tab-content" id="prodetails-content">
                            <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel" aria-labelledby="prodetails-area1-tab">
                                <div class="tm-prodetails-description">
                                    <h4>Product Description</h4>
                                    <p>{{ $product->descriptions }}.</p>
                                    <p>Pancharatna & Son's Jewellers moves its flagship store to a new location in Panki Road Kalyanpur . The space is an embodiment of the founders ideals, creating an immersive experience for customers.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prodetails-area2" role="tabpanel" aria-labelledby="prodetails-area2-tab">
                                <!-- Additional content for other tabs can be added here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
  function shareOnInstagram(productUrl) {
    // Copy the product URL to the clipboard
    var dummy = document.createElement('input');
    document.body.appendChild(dummy);
    dummy.value = productUrl;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);
    
    // Alert the user that the link is copied
    alert('Link copied to clipboard! Open Instagram to share the link.');
    
    // Open Instagram (this will open the Instagram app if installed)
    window.location.href = 'instagram://';
  }
  
  function shareOnFacebook(productUrl) {
    // Open Facebook share dialog with the product URL
    var facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(productUrl);
    window.open(facebookShareUrl, 'facebook-share-dialog', 'width=800,height=600');
  }
</script>

@include('frontend.layouts.footer')
