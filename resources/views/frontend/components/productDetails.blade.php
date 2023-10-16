<div class="row details-snippet1">
    <div class="col-md-7">
    <div class="row">
        <div class="col-md-2 mini-preview">
            @foreach($product->images as $image)
                <img class="img-fluid mini-preview-img" src="{{ asset($image) }}" alt="Preview" onclick="magnify('{{ asset($image) }}', 3)">
            @endforeach
        </div>
        <div class="col-md-10">
            <div class="product-image img-magnifier-container">
                <img id="main-image" class="img-fluid" src="{{ asset($product->images[0]) }}" alt="Main Image">
                <!-- The magnifier glass will be placed here -->
            </div>
        </div>
    </div>
    </div>
      <div class="col-md-5">
          <div class="category"><span class="theme-text">Category:</span> Women</div>
          <div class="title">{{ $product->name }}</div>
          
          <div class="price my-2">${{ $product->salePrice }} <strike class="original-price">${{ $product->originalPrice }}</strike></div>
          <div class="theme-text subtitle">Brief Description:</div>
          <div class="brief-description">
          {{ $product->smallDescription }}
          </div>

        <!-- COLORS -->
          <div>
              <div class="subtitle my-3 theme-text">Colors:</div>
              <div class="select-colors d-flex">
                  <div class="color red"></div>
                  <div class="color silver"></div>
                  <div class="color black"></div>
              </div>
          </div>

          <hr>
          <div class="row">
              <div class="col-md-3">
                  <label for="Quantity">Quantity</label>
                  <div class="input-group text-center mb-3" style="width:130px;">
                    <button class="input-group-text decrement-btn">-</button>
                    <input type="text" name="qty" id="qty" class="form-control text-center qty-input" value="1">
                    <button class="input-group-text increment-btn">+</button>
                </div>
              </div>
              <div class="col-md-9"><button class="btn addBtn btn-block mt-3">Add to basket</button></div>
          </div>

      </div>
  </div>


  <div class="additional-details my-5 text-center">
      <!-- Nav pills -->
      <ul class="nav nav-tabs justify-content-center">
          <li class="nav-tabs">
              <a class="nav-link active" data-toggle="tab" data-bs-toggle="tab" href="#home">Description</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu1">Reviews</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu2">Specifications</a>
          </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content mt-4 mb-3">
          <div class="tab-pane container active" id="home">
              <div class="description">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident magni assumenda consectetur facere eius. Minus reprehenderit placeat ullam vel ab eaque sequi impedit, ipsum soluta temporibus fugit ipsa. Dolor libero modi molestiae dicta, vitae minus laborum error cum consequatur autem minima eveniet porro obcaecati quibusdam possimus eos, debitis sint magnam, explicabo accusantium aspernatur ipsa repellat tempore nihil. Cum placeat voluptate dignissimos dicta harum consectetur, nemo debitis tempore. Quod culpa perspiciatis unde natus. Modi expedita, ab repellendus reiciendis sed voluptate, culpa laborum ad, consectetur quas tempora quo? Quibusdam doloribus magnam maxime, accusamus officiis odit reiciendis labore laudantium. Molestiae corporis temporibus ad?
              </div>
          </div>
          <div class="tab-pane container fade" id="menu1">
              <div class="review">
                  <p>PUT REVIEWS DESIGN HERE</p>
              </div>
          </div>
          <div class="tab-pane container fade" id="menu2">
              <div class="specification">
                  <p>PUT SPECIFICATIONS HERE</p>
              </div>
          </div>
      </div>
  </div>

  <script>

function magnify(imgSrc, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById('main-image');

    // Remove the existing magnifier glass if it exists
    var existingGlass = document.querySelector(".img-magnifier-glass");
    if (existingGlass) {
        existingGlass.remove();
    }

    /* Create magnifier glass: */
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    /* Insert magnifier glass: */
    img.parentElement.insertBefore(glass, img);
    /* Set background properties for the magnifier glass: */
    glass.style.backgroundImage = "url('" + imgSrc + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;
    /* Execute a function when someone moves the magnifier glass over the image: */
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    /* And also for touch screens: */
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos, x, y;
        /* Prevent any other actions that may occur when moving over the image */
        e.preventDefault();
        /* Get the cursor's x and y positions: */
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /* Prevent the magnifier glass from being positioned outside the image: */
        if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
        if (x < w / zoom) { x = w / zoom; }
        if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
        if (y < h / zoom) { y = h / zoom; }
        /* Set the position of the magnifier glass: */
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /* Display what the magnifier glass "sees": */
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /* Get the x and y positions of the image: */
        a = img.getBoundingClientRect();
        /* Calculate the cursor's x and y coordinates, relative to the image: */
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /* Consider any page scrolling: */
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return { x: x, y: y };
    }
}

// When the document is ready, initialize the magnifier on the main image
document.addEventListener("DOMContentLoaded", function() {
    magnify("{{ asset($product->images[0]) }}", 5);
});
</script>
  <script>
    // Get all mini preview images
    const miniPreviews = document.querySelectorAll('.mini-preview-img');
    const mainImage = document.getElementById('main-image');

    // Add click event listeners to each mini preview image
    miniPreviews.forEach(preview => {
        preview.addEventListener('click', function() {
            // Change the main product image source to the clicked mini preview image
            mainImage.src = preview.src;
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function () {
        $('.increment-btn').click(function (e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value < 10)
            {
                value++;
                $('.qty-input').val(value);
            }
        });
        

        $('.decrement-btn').click(function (e) {
            e.preventDefault();

            var dec_value = $('.qty-input').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value > 1)
            {
                value--;
                $('.qty-input').val(value);
            }
        });
    });
</script>
  