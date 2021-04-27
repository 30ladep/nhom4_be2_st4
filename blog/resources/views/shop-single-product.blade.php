@extends('layout.master_layout')
@section('content')

<!-- Breadcrumbs -->
<div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="index.html">Shop</a>
        </li>
        <li class="active">
          Catalog Grid
        </li>
      </ol> <!-- end breadcrumbs -->
    </div>


    <!-- Single Product -->
    <section class="section-wrap single-product">
      <div class="container relative">
        <div class="row">

          <div class="col-sm-6 col-xs-12 mb-60">

            <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

              <div class="gallery-cell">
                <a href="img/shop/single_img_1.jpg" class="lightbox-img">
                  <img src="img/shop/single_img_1.jpg" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
                <a href="img/shop/single_img_2.jpg" class="lightbox-img">
                  <img src="img/shop/single_img_2.jpg" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
                <a href="img/shop/single_img_3.jpg" class="lightbox-img">
                  <img src="img/shop/single_img_3.jpg" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
                <a href="img/shop/single_img_4.jpg" class="lightbox-img">
                  <img src="img/shop/single_img_4.jpg" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
              <div class="gallery-cell">
                <a href="img/shop/single_img_5.jpg" class="lightbox-img">
                  <img src="img/shop/single_img_5.jpg" alt="" />
                  <i class="icon arrow_expand"></i>
                </a>
              </div>
            </div> <!-- end gallery main -->

            <div class="gallery-thumbs">

              <div class="gallery-cell">
                <img src="img/shop/single_img_1.jpg" alt="" />
              </div>
              <div class="gallery-cell">
                <img src="img/shop/single_img_2.jpg" alt="" />
              </div>
              <div class="gallery-cell">
                <img src="img/shop/single_img_3.jpg" alt="" />
              </div>
              <div class="gallery-cell">
                <img src="img/shop/single_img_4.jpg" alt="" />
              </div>
              <div class="gallery-cell">
                <img src="img/shop/single_img_5.jpg" alt="" />
              </div>

            </div> <!-- end gallery thumbs -->

          </div> <!-- end col img slider -->

          <div class="col-sm-6 col-xs-12 product-description-wrap">
            <h1 class="product-title">Summer Dress</h1>
            <span class="rating">
              <a href="#">3 Reviews</a>
            </span>
            <span class="price">
              <del>
                <span>$1550.00</span>
              </del>
              <ins>
                <span class="ammount">$1250.00</span>
              </ins>
            </span>
            <p class="product-description">A-ha Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine</p>

            <div class="select-options">
              <div class="row row-20">
                <div class="col-sm-6">
                  <select class="color-select">
                    <option value>Select color</option>
                    <option value="white">white</option>
                    <option value="grey">grey</option>
                    <option value="black">black</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                  </select>
                </div>

                <div class="col-sm-6">
                  <select class="size-options">
                    <option value>Select size</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                  </select>
                </div>
              </div>
            </div>

            <ul class="product-actions clearfix">
              
              <li>
                <a href="#" class="btn btn-color btn-lg add-to-cart left"><span>Add to Cart</span></a>
              </li>                
              <li>
                <div class="icon-add-to-wishlist left">
                  <a href="#"><i class="icon icon_heart_alt"></i></a>
                </div>
              </li> 
              <li>
                <div class="quantity buttons_added">
                  <input type="button" value="-" class="minus" /><input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text" /><input type="button" value="+" class="plus" />
                </div>
              </li>          
            </ul>

            <div class="product_meta">
              <span class="sku">SKU: <a href="#">111763</a></span>
              <span class="posted_in">Category: <a href="#">Accessories</a></span>
              <span class="tagged_as">Tags: <a href="#">Elegant</a>, <a href="#">Bag</a></span>
            </div>

            <div class="socials-share clearfix">
              <div class="social-icons rounded">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>
          </div> <!-- end col product description -->
        </div> <!-- end row -->

        <!-- tabs -->
        <div class="row">
          <div class="col-md-12">
            <div class="tabs tabs-bb">
              <ul class="nav nav-tabs">                                 
                <li class="active">
                  <a href="#tab-description" data-toggle="tab">Description</a>
                </li>                                 
                <li>
                  <a href="#tab-info" data-toggle="tab">Information</a>
                </li>                                 
                <li>
                  <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                </li>                                 
              </ul> <!-- end tabs -->
              
              <!-- tab content -->
              <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab-description">
                  <p>
                  We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged. Our subconscious mind contains such power and complexity that it literally staggers the imagination.And finally the subconscious is the mechanism through which thought impulses.
                  </p>
                </div>
                
                <div class="tab-pane fade" id="tab-info">
                  <table class="table">

                    <tbody>
                      <tr>
                        <th>CPU</th>
                        <td>2.7GHz quad-core Intel Core i5 Turbo Boost up to 3.2GHz</td>
                      </tr>
                      <tr>
                        <th>RAM</th>
                        <td>8GB (two 4GB) memory</td>
                      </tr>
                      <tr>
                        <th>Video</th>
                        <td>Intel Iris Pro Graphics</td>
                      </tr>                                     
                    </tbody>
                  </table>
                </div>
                
                <div class="tab-pane fade" id="tab-reviews">

                  <div class="reviews">
                    <ul class="reviews-list">
                      <li>
                        <div class="review-body">
                          <div class="review-content">
                            <p class="review-author"><strong>Alexander Samokhin</strong> - May 6, 2014 at 12:48 pm</p>
                            <div class="rating">
                              <a href="#"></a>
                            </div>
                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                          </div>
                        </div>
                      </li>

                      <li>
                        <div class="review-body">
                          <div class="review-content">
                            <p class="review-author"><strong>Christopher Robins</strong> - May 6, 2014 at 12:48 pm</p>
                            <div class="rating">
                              <a href="#"></a>
                            </div>
                            <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                          </div>
                        </div>
                      </li>

                    </ul>         
                  </div> <!--  end reviews -->
                </div>
                
              </div> <!-- end tab content -->

            </div>
          </div> <!-- end tabs -->
        </div> <!-- end row -->

        
      </div> <!-- end container -->
    </section> <!-- end single product -->


    <!-- Related Items -->
    <section class="section-wrap related-products pt-0">
      <div class="container">
        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase"><small>Related Products</small></h2>
          </div>
        </div>
        
        <div class="row row-10">

          <div id="owl-related-products" class="owl-carousel owl-theme nopadding">

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_1.jpg" alt="">
                  <img src="img/shop/shop_item_1_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-label">
                  <span class="sale">sale</span>
                </div>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Night Party Dress</a>
                </h3>
                <span class="price">
                  <del>
                    <span>$388.00</span>
                  </del>
                  <ins>
                    <span class="ammount">$159.99</span>
                  </ins>
                </span>
              </div>
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_2.jpg" alt="">
                  <img src="img/shop/shop_item_2_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Elegant White Dress</a>
                </h3>
                <span class="price">
                  <ins>
                    <span class="ammount">$219.00</span>
                  </ins>
                </span>
              </div>                          
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_3.jpg" alt="">
                  <img src="img/shop/shop_item_3_back.jpg" alt="" class="back-img">
                </a>
                <span class="sold-out valign">out of stock</span>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Long Black Dress</a>
                </h3>
                <span class="price">
                  <ins>
                    <span class="ammount">$99.00</span>
                  </ins>
                </span>
              </div>                        
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_4.jpg" alt="">
                  <img src="img/shop/shop_item_4_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>
              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Sexy Pink Dress</a>
                </h3>
                <span class="price">
                  <ins>
                    <span class="ammount">$120.00</span>
                  </ins>
                </span>
              </div>                        
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_5.jpg" alt="">
                  <img src="img/shop/shop_item_5_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>

              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Minty Dress</a>
                </h3>
                <span class="price">
                  <ins>
                    <span class="ammount">$399.00</span>
                  </ins>
                </span>
              </div>                          
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_6.jpg" alt="">
                  <img src="img/shop/shop_item_6_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-label">
                  <span class="sale">sale</span>
                </div>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>

              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Sexy White Dress</a>
                </h3>
                <span class="price">
                  <ins>
                    <span class="ammount">$119.00</span>
                  </ins>
                </span>
              </div>
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_7.jpg" alt="">
                  <img src="img/shop/shop_item_7_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>

              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Elegant Pink Dress</a>
                </h3>
                <span class="price">
                  <ins>
                    <span class="ammount">$1379.00</span>
                  </ins>
                </span>
              </div>              
            </div>

            <div class="product-item">
              <div class="product-img">
                <a href="#">
                  <img src="img/shop/shop_item_8.jpg" alt="">
                  <img src="img/shop/shop_item_8_back.jpg" alt="" class="back-img">
                </a>
                <div class="product-label">
                  <span class="sale">sale</span>
                </div>
                <div class="product-actions">
                  <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                    <i class="fa fa-exchange"></i>
                  </a>
                  <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                    <i class="fa fa-heart"></i>
                  </a>                    
                </div>
                <a href="#" class="product-quickview">Quick View</a>
              </div>

              <div class="product-details">
                <h3>
                  <a class="product-title" href="shop-single-product.html">Gray California Dress</a>
                </h3>
                <span class="price">
                  <del>
                    <span>$350.00</span>
                  </del>
                  <ins>
                    <span class="ammount">$150.00</span>
                  </ins>
                </span>
              </div>
            </div>

          </div> <!-- end owl -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end related products -->

@endsection