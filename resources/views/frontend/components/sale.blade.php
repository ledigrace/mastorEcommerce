<!-- card shop section2 -->
<section class="card-shop">
  <div class="container">
    <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
      <div class="container">
        <h4 class="text-start">HOT SALES</h4>
        <div class="row">
          @foreach ($saleProducts as $saleProduct)
          <div class="col-md-6 col-sm-6 col-md-3 col-xxl-3">
            <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="{{ isset($saleProduct->images[0]) ? asset($saleProduct->images[0]) : 'path_to_default_image_if_no_images' }}" alt="Product Image" />
                  </div>
                  <div class="text-container">
                    <h6>{{ $saleProduct->name }}</h6>
                    <p>{{ $saleProduct->originalPrice }}</p>
                    <p>{{ $saleProduct->salePrice }}</p>
                    <!-- add to cart buttons and buy now buttons -->
                    <div class="shop-btn1">
                      <button class="btn">ADD TO BAG <i class="bi bi-bag"></i></button>
                      <button class="btn"> BUY NOW <i class="bi bi-bag-fill"></i></button>
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
<!-- end of card shop section 2 -->
