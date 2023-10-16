<!-- all products section -->

<section class="all-products mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ALL PRODUCTS</h1>
                <hr>
            </div>
        </div>
    </div>
</section>

<section class="card-shop">
    <div class="container">
        <!-- Topic Cards -->
        <div id="cards_landscape_wrap-2">
            <div class="container">
                <div class="row">
                    @foreach($allProducts as $product)
                        <div class="col-md-6 col-sm-6 col-md-3 col-xxl-3">
                            <a href="{{ url('/product/' . $product->slug) }}">
                                <div class="card-flyer">
                                    <div class="text-box">
                                        <div class="image-box">
                                            @if(count($product->images) > 0)
                                                <img src="{{ asset($product->images[0]) }}" alt="{{ $product->name }}" />
                                            @else
                                                <img src="{{ asset('path_to_default_image_if_no_images_available') }}" alt="Default Image" />
                                            @endif
                                        </div>
                                        <div class="text-container">
                                            <h6>{{ $product->name }}</h6>
                                            <p>${{ $product->salePrice }}</p>
                                            <!-- add to cart buttons and buy now buttons -->
                                            <div class="shop-btn1">
                                                <button class="btn">ADD TO BAG <i class="bi bi-bag"></i></button>
                                                <button class="btn">BUY NOW <i class="bi bi-bag-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>






<!-- end all products section -->
