@extends('layouts.main')

@section('content')
<div class="page-content-wrapper">
      <!-- Hero Slides-->
      <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('img/bg-img/2.jpg')">
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="container">
              <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Grocery Items</h4>
              <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">grocery items</p><a class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms" data-wow-duration="1000ms">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('img/bg-img/1.jpg')">
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="container">
              <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Fresh Vegitables</h4>
              <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Fresh Fruits & Vegetables</p><a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="1000ms">Buy Now</a>
            </div>
          </div>
        </div>
      
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('img/bg-img/3.jpg')">
          <div class="slide-content h-100 d-flex align-items-center">
            <div class="container">
              <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Best Spinach</h4>
              <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">organic Spinach</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="1000ms">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Catagories-->
      <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="section-heading">
            <h6 class="ml-1">Product Category</h6>
          </div>
          <div class="product-catagory-wrap">
            <div class="row g-3">
              <!-- Single Catagory Card-->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html"><i class="lni lni-heart"></i><span>Women's</span></a></div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html"><i class="lni lni-juice"></i><span>Juice</span></a></div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html"><i class="lni lni-pizza"></i><span>Foods</span></a></div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html"><i class="lni lni-basketball"></i><span>Sports</span></a></div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html"><i class="lni lni-tshirt"></i><span>Men's</span></a></div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body"><a href="catagory.html"><i class="lni lni-island"></i><span>Travel</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Flash Sale Slide-->
      <div class="flash-sale-wrapper">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Flash Sale</h6><a class="btn btn-primary btn-sm" href="flash-sale.html">View All</a>
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.html"><img src="img/product/1.png" alt=""><span class="product-title">Black Table Lamp</span>
                  <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.html"><img src="img/product/2.png" alt=""><span class="product-title">Modern Sofa</span>
                  <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.html"><img src="img/product/3.png" alt=""><span class="product-title">Classic Garden Chair</span>
                  <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">99% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.html"><img src="img/product/1.png" alt=""><span class="product-title">Black Table Lamp</span>
                  <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.html"><img src="img/product/2.png" alt=""><span class="product-title">Modern Sofa</span>
                  <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body"><a href="single-product.html"><img src="img/product/3.png" alt=""><span class="product-title">Classic Garden Chair</span>
                  <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">99% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div></a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Products-->
      <div class="top-products-area clearfix py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Top Products</h6><a class="btn btn-danger btn-sm" href="shop-grid.html">View All</a>
          </div>
          <div class="row g-3">
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/11.png" alt=""></a><a class="product-title d-block" href="single-product.html">Beach Cap</a>
                  <p class="sale-price">$13<span>$42</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-primary">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/5.png" alt=""></a><a class="product-title d-block" href="single-product.html">Wooden Sofa</a>
                  <p class="sale-price">$74<span>$99</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/6.png" alt=""></a><a class="product-title d-block" href="single-product.html">Roof Lamp</a>
                  <p class="sale-price">$99<span>$113</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-danger">-15%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/9.png" alt=""></a><a class="product-title d-block" href="single-product.html">Sneaker Shoes</a>
                  <p class="sale-price">$87<span>$92</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-danger">-11%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/8.png" alt=""></a><a class="product-title d-block" href="single-product.html">Wooden Chair</a>
                  <p class="sale-price">$21<span>$25</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card top-product-card">
                <div class="card-body"><span class="badge badge-warning">Hot</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/4.png" alt=""></a><a class="product-title d-block" href="single-product.html">Polo Shirts</a>
                  <p class="sale-price">$38<span>$41</span></p>
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Cool Facts Area-->
      <div class="cta-area">
        <div class="container">
          <div class="cta-text p-4 p-lg-5" style="background-image: url(img/bg-img/24.jpg)">
            <h4>Winter Sale 50% Off</h4>
            <p>Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-danger" href="#">Shop Today</a>
          </div>
        </div>
      </div>
      <!-- Weekly Best Sellers-->
      <div class="weekly-best-seller-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="pl-1">Weekly Best Sellers</h6><a class="btn btn-success btn-sm" href="shop-list.html">View All</a>
          </div>
          <div class="row g-3">
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/10.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Modern Red Sofa</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-primary">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/7.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Office Chair</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-danger">-10%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/12.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Sun Glasses</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><span class="badge badge-warning">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/13.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Wall Clock</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div><a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Discount Coupon Card-->
      <div class="container">
        <div class="card discount-coupon-card border-0">
          <div class="card-body">
            <div class="coupon-text-wrap d-flex align-items-center p-3">
              <h5 class="text-white pr-3 mb-0">Get 20% <br> discount</h5>
              <p class="text-white pl-3 mb-0">To get discount, enter the<strong class="px-1">GET20</strong>code on the checkout page.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Featured Products Wrapper-->
      <div class="featured-products-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="pl-1">Featured Products</h6><a class="btn btn-warning btn-sm" href="featured-products.html">View All</a>
          </div>
          <div class="row g-3">
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/14.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Blue Skateboard</a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/15.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Travel Bag</a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/16.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Cotton T-shirts</a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/6.png" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="single-product.html">Roof Lamp </a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Night Mode View Card-->
      <div class="night-mode-view-card pb-3">
        <div class="container">
          <div class="card settings-card">
            <div class="card-body">
              <div class="single-settings d-flex align-items-center justify-content-between">
                <div class="title"><i class="lni lni-night"></i><span>Night Mode</span></div>
                <div class="data-content">
                  <div class="toggle-button-cover">
                    <div class="button r">
                      <input class="checkbox" id="darkSwitch" type="checkbox">
                      <div class="knobs"></div>
                      <div class="layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
