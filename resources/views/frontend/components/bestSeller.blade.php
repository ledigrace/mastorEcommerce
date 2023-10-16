<!-- best seller -->
<section id="collection">
  <h1 class="text-center mt-5">BEST SELLERS</h1>
  <div class="collections container">
      @foreach ($bestSellerProducts as $bestSellerProduct)
      <div class="content">
          <img src="{{ isset($bestSellerProduct->images[0]) ? asset($bestSellerProduct->images[0]) : 'path_to_default_image_if_no_images' }}" alt="img" />
          <div class="img-content">
              <p>{{ $bestSellerProduct->name }}</p>
              <button><a href="#">SHOP NOW</a></button>
          </div>
      </div>
      @endforeach
  </div>
</section>
<!-- end of best seller -->