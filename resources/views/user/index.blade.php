@extends('../main')

@section("title")
	Vereesa - Home
@endsection

@section("content")
<div class="header-device-mobile">
	<div class="wapper">
		<div class="item mobile-logo">
			<div class="logo">
				<a href="#">
					<img src="assets/images/logo.png" alt="img">
				</a>
			</div>
		</div>
		<div class="item item mobile-search-box has-sub">
			<a href="#">
					<span class="icon">
						<i class="fa fa-search" aria-hidden="true"></i>
					</span>
			</a>
			<div class="block-sub">
				<a href="#" class="close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</a>
				<div class="header-searchform-box">
					<form class="header-searchform">
						<div class="searchform-wrap">
							<input type="text" class="search-input" placeholder="Enter keywords to search...">
							<input type="submit" class="submit button" value="Search">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="item mobile-settings-box has-sub">
			<a href="#">
					<span class="icon">
						<i class="fa fa-cog" aria-hidden="true"></i>
					</span>
			</a>
			<div class="block-sub">
				<a href="#" class="close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</a>
				<div class="block-sub-item">
					<h5 class="block-item-title">Currency</h5>
					<form class="currency-form vereesa-language">
						<ul class="vereesa-language-wrap">
							<li class="active">
								<a href="#">
										<span>
											English (USD)
										</span>
								</a>
							</li>
							<li>
								<a href="#">
										<span>
											French (EUR)
										</span>
								</a>
							</li>
							<li>
								<a href="#">
										<span>
											Japanese (JPY)
										</span>
								</a>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		<div class="item menu-bar">
			<a class=" mobile-navigation  menu-toggle" href="#">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</div>
</div>
<div>
	<div class="fullwidth-template">
		<div class="home-slider-banner rows-space-40">
			<div class="container">
				<div class="row10">
					<div class="col-lg-8 silider-wrapp">
						<div class="home-slider">
							<div class="slider-owl owl-slick equal-container nav-center"
									data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
									data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
								<div class="slider-item style7">
									<div class="slider-inner equal-element">
										<div class="slider-infor">
											<h5 class="title-small">
												Sale up to 40% off!
											</h5>
											<h3 class="title-big">
												The home scandinavian
											</h3>
											<div class="price">
												New Price:
												<span class="number-price">
													€270.00
												</span>
											</div>
											<a href="#" class="button btn-browse">Browse</a>
											<a href="#" class="button btn-shop-the-look bgroud-style">Shop Now</a>
										</div>
									</div>
								</div>
								<div class="slider-item style8">
									<div class="slider-inner equal-element">
										<div class="slider-infor">
											<h5 class="title-small">
												Black Friday Sale!
											</h5>
											<h3 class="title-big">
												Lighting Collection Big Sale
											</h3>
											<div class="price">
												Save Price:
												<span class="number-price">
													€170.00
												</span>
											</div>
											<a href="#" class="button btn-shop-product">Shop Now</a>
										</div>
									</div>
								</div>
								<div class="slider-item style9">
									<div class="slider-inner equal-element">
										<div class="slider-infor">
											<h5 class="title-small">
												Vereesa Lamp Collection
											</h5>
											<h3 class="title-big">
												The inspiration behind our store
											</h3>
											<a href="#" class="button btn-chekout">Shop Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 banner-wrapp">
						<div class="banner">
							<div class="item-banner style7">
								<div class="inner">
									<div class="banner-content">
										<h3 class="title">Lighting Collection</h3>
										<div class="description">
											Inspire ur lighting style with us.
										</div>
										<a href="#" class="button btn-lets-do-it">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="banner">
							<div class="item-banner style8">
								<div class="inner">
									<div class="banner-content">
										<h3 class="title">Norm Alarm Clock</h3>
										<div class="description">
											Vereesa style, day by day!
										</div>
										<span class="price">€379.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vereesa-product produc-featured rows-space-65">
			<div class="container">
				<h3 class="custommenu-title-blog">
					Deal of the day
				</h3>
				<div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":false, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":4}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
					<div class="product-item style-5">
						<div class="product-inner equal-element">
							<div class="product-top">
								<div class="flash">
										<span class="onnew">
											<span class="text">
												new
											</span>
										</span>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<div class="yith-wcwl-add-button">
										<a href="#">Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="product-thumb">
								<div class="thumb-inner">
									<a href="#">
										<img src="assets/images/product-item-17.jpg" alt="img">
									</a>
								</div>
								<a href="#" class="button quick-wiew-button">Quick View</a>
								<div class="product-count-down">
									<div class="vereesa-countdown" data-y="2019" data-m="9" data-w="2" data-d="30"  data-h="20" data-i="60" data-s="60"></div>
								</div>
							</div>
							<div class="product-info">
								<h5 class="product-name product_title">
									<a href="#">Plastic Dining Chair</a>
								</h5>
								<div class="group-info">
									<div class="stars-rating">
										<div class="star-rating">
											<span class="star-3"></span>
										</div>
										<div class="count-star">
											(3)
										</div>
									</div>
									<div class="price">
										<del>
											€65
										</del>
										<ins>
											€45
										</ins>
									</div>
								</div>
							</div>
							<div class="loop-form-add-to-cart">
								<form class="cart">
									<div class="single_variation_wrap">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" value="1" title="Qty"
														class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
										</div>
										<button class="single_add_to_cart_button button">Add to cart</button>
									</div>
									<div class="variations">
										<div class="variation">
											<label class="variation-label">
												Capacity:
											</label>
											<div class="variation-value">
												<a href="#" class="change-value text">
													<span>XS</span>
												</a>
												<a href="#" class="change-value text">
													<span>S</span>
												</a>
												<a href="#" class="change-value text">
													<span>M</span>
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="product-item style-5">
						<div class="product-inner equal-element">
							<div class="product-top">
								<div class="flash">
										<span class="onnew">
											<span class="text">
												new
											</span>
										</span>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<div class="yith-wcwl-add-button">
										<a href="#">Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="product-thumb">
								<div class="thumb-inner">
									<a href="#">
										<img src="assets/images/product-item-21.jpg" alt="img">
									</a>
								</div>
								<a href="#" class="button quick-wiew-button">Quick View</a>
								<div class="product-count-down">
									<div class="vereesa-countdown" data-y="2019" data-m="9" data-w="2" data-d="30"  data-h="20" data-i="60" data-s="60"></div>
								</div>
							</div>
							<div class="product-info">
								<h5 class="product-name product_title">
									<a href="#">Plastic Dining Chair</a>
								</h5>
								<div class="group-info">
									<div class="stars-rating">
										<div class="star-rating">
											<span class="star-3"></span>
										</div>
										<div class="count-star">
											(3)
										</div>
									</div>
									<div class="price">
										<del>
											€65
										</del>
										<ins>
											€45
										</ins>
									</div>
								</div>
							</div>
							<div class="loop-form-add-to-cart">
								<form class="cart">
									<div class="single_variation_wrap">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" value="1" title="Qty"
														class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
										</div>
										<button class="single_add_to_cart_button button">Add to cart</button>
									</div>
									<div class="variations">
										<div class="variation">
											<label class="variation-label">
												Capacity:
											</label>
											<div class="variation-value">
												<a href="#" class="change-value text">
													<span>M</span>
												</a>
												<a href="#" class="change-value text">
													<span>L</span>
												</a>
												<a href="#" class="change-value text">
													<span>XL</span>
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="product-item style-5">
						<div class="product-inner equal-element">
							<div class="product-top">
								<div class="flash">
										<span class="onnew">
											<span class="text">
												new
											</span>
										</span>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<div class="yith-wcwl-add-button">
										<a href="#">Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="product-thumb">
								<div class="thumb-inner">
									<a href="#">
										<img src="assets/images/product-item-20.jpg" alt="img">
									</a>
								</div>
								<a href="#" class="button quick-wiew-button">Quick View</a>
								<div class="product-count-down">
									<div class="vereesa-countdown" data-y="2019" data-m="9" data-w="2" data-d="30"  data-h="20" data-i="60" data-s="60"></div>
								</div>
							</div>
							<div class="product-info">
								<h5 class="product-name product_title">
									<a href="#">Plastic Dining Chair</a>
								</h5>
								<div class="group-info">
									<div class="stars-rating">
										<div class="star-rating">
											<span class="star-3"></span>
										</div>
										<div class="count-star">
											(3)
										</div>
									</div>
									<div class="price">
										<del>
											€65
										</del>
										<ins>
											€45
										</ins>
									</div>
								</div>
							</div>
							<div class="loop-form-add-to-cart">
								<form class="cart">
									<div class="single_variation_wrap">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" value="1" title="Qty"
														class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
										</div>
										<button class="single_add_to_cart_button button">Add to cart</button>
									</div>
									<div class="variations">
										<div class="variation">
											<label class="variation-label">
												Capacity:
											</label>
											<div class="variation-value">
												<a href="#" class="change-value text">
													<span>XS</span>
												</a>
												<a href="#" class="change-value text">
													<span>M</span>
												</a>
												<a href="#" class="change-value text">
													<span>L</span>
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="product-item style-5">
						<div class="product-inner equal-element">
							<div class="product-top">
								<div class="flash">
										<span class="onnew">
											<span class="text">
												new
											</span>
										</span>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<div class="yith-wcwl-add-button">
										<a href="#">Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="product-thumb">
								<div class="thumb-inner">
									<a href="#">
										<img src="assets/images/product-item-22.jpg" alt="img">
									</a>
								</div>
								<a href="#" class="button quick-wiew-button">Quick View</a>
								<div class="product-count-down">
									<div class="vereesa-countdown" data-y="2019" data-m="9" data-w="2" data-d="30"  data-h="20" data-i="60" data-s="60"></div>
								</div>
							</div>
							<div class="product-info">
								<h5 class="product-name product_title">
									<a href="#">Plastic Dining Chair</a>
								</h5>
								<div class="group-info">
									<div class="stars-rating">
										<div class="star-rating">
											<span class="star-3"></span>
										</div>
										<div class="count-star">
											(3)
										</div>
									</div>
									<div class="price">
										<del>
											€65
										</del>
										<ins>
											€45
										</ins>
									</div>
								</div>
							</div>
							<div class="loop-form-add-to-cart">
								<form class="cart">
									<div class="single_variation_wrap">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" value="1" title="Qty"
														class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
										</div>
										<button class="single_add_to_cart_button button">Add to cart</button>
									</div>
									<div class="variations">
										<div class="variation">
											<label class="variation-label">
												Capacity:
											</label>
											<div class="variation-value">
												<a href="#" class="change-value text">
													<span>XS</span>
												</a>
												<a href="#" class="change-value text">
													<span>S</span>
												</a>
												<a href="#" class="change-value text">
													<span>L</span>
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="product-item style-5">
						<div class="product-inner equal-element">
							<div class="product-top">
								<div class="flash">
										<span class="onnew">
											<span class="text">
												new
											</span>
										</span>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<div class="yith-wcwl-add-button">
										<a href="#">Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="product-thumb">
								<div class="thumb-inner">
									<a href="#">
										<img src="assets/images/product-item-19.jpg" alt="img">
									</a>
								</div>
								<a href="#" class="button quick-wiew-button">Quick View</a>
								<div class="product-count-down">
									<div class="vereesa-countdown" data-y="2019" data-m="9" data-w="2" data-d="30"  data-h="20" data-i="60" data-s="60"></div>
								</div>
							</div>
							<div class="product-info">
								<h5 class="product-name product_title">
									<a href="#">Plastic Dining Chair</a>
								</h5>
								<div class="group-info">
									<div class="stars-rating">
										<div class="star-rating">
											<span class="star-3"></span>
										</div>
										<div class="count-star">
											(3)
										</div>
									</div>
									<div class="price">
										<del>
											€65
										</del>
										<ins>
											€45
										</ins>
									</div>
								</div>
							</div>
							<div class="loop-form-add-to-cart">
								<form class="cart">
									<div class="single_variation_wrap">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" value="1" title="Qty"
														class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
										</div>
										<button class="single_add_to_cart_button button">Add to cart</button>
									</div>
									<div class="variations">
										<div class="variation">
											<label class="variation-label">
												Capacity:
											</label>
											<div class="variation-value">
												<a href="#" class="change-value text">
													<span>XS</span>
												</a>
												<a href="#" class="change-value text">
													<span>M</span>
												</a>
												<a href="#" class="change-value text">
													<span>L</span>
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="product-item style-5">
						<div class="product-inner equal-element">
							<div class="product-top">
								<div class="flash">
										<span class="onnew">
											<span class="text">
												new
											</span>
										</span>
								</div>
								<div class="yith-wcwl-add-to-wishlist">
									<div class="yith-wcwl-add-button">
										<a href="#">Add to Wishlist</a>
									</div>
								</div>
							</div>
							<div class="product-thumb">
								<div class="thumb-inner">
									<a href="#">
										<img src="assets/images/product-item-18.jpg" alt="img">
									</a>
								</div>
								<a href="#" class="button quick-wiew-button">Quick View</a>
								<div class="product-count-down">
									<div class="vereesa-countdown" data-y="2019" data-m="9" data-w="2" data-d="30"  data-h="20" data-i="60" data-s="60"></div>
								</div>
							</div>
							<div class="product-info">
								<h5 class="product-name product_title">
									<a href="#">Plastic Dining Chair</a>
								</h5>
								<div class="group-info">
									<div class="stars-rating">
										<div class="star-rating">
											<span class="star-3"></span>
										</div>
										<div class="count-star">
											(3)
										</div>
									</div>
									<div class="price">
										<del>
											€65
										</del>
										<ins>
											€45
										</ins>
									</div>
								</div>
							</div>
							<div class="loop-form-add-to-cart">
								<form class="cart">
									<div class="single_variation_wrap">
										<div class="quantity">
											<div class="control">
												<a class="btn-number qtyminus quantity-minus" href="#">-</a>
												<input type="text" data-step="1" data-min="0" value="1" title="Qty"
														class="input-qty qty" size="4">
												<a href="#" class="btn-number qtyplus quantity-plus">+</a>
											</div>
										</div>
										<button class="single_add_to_cart_button button">Add to cart</button>
									</div>
									<div class="variations">
										<div class="variation">
											<label class="variation-label">
												Capacity:
											</label>
											<div class="variation-value">
												<a href="#" class="change-value text">
													<span>XS</span>
												</a>
												<a href="#" class="change-value text">
													<span>S</span>
												</a>
												<a href="#" class="change-value text">
													<span>L</span>
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-wrapp">
			<div class="container">
				<div class="banner">
					<div class="item-banner style17">
						<div class="inner">
							<div class="banner-content">
								<h3 class="title">Living Room Furniture</h3>
								<div class="description">
									You have no chair & Are you <br />ready to grow? come & shop with us!
								</div>
								<div class="banner-price">
									Price from:
									<span class="number-price">€45.00</span>
								</div>
								<a href="#" class="button btn-shop-now">SHOP NOW</a>
								<a href="#" class="button btn-view-collection">VIEW COLLECTION</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-wrapp rows-space-65">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="banner">
							<div class="item-banner style4">
								<div class="inner">
									<div class="banner-content">
										<h4 class="vereesa-subtitle">Chair Essential!</h4>
										<h3 class="title">Lounge Chair</h3>
										<div class="description">
											Hot Lounge Chair are now available in our stock.
										</div>
										<a href="#" class="button btn-shop-now">SHOP NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="banner">
							<div class="item-banner style5">
								<div class="inner">
									<div class="banner-content">
										<h3 class="title">Lighting Room<br />Collection</h3>
										<span class="code">
											Use code:
											<span>
												VARESSA
											</span>
											Get
											<span>
												25% Off
											</span>
											for all Accessories items!
										</span>
										<a href="#" class="button btn-shop-now">SHOP NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="vereesa-tabs  default">
			<div class="container">
				<div class="tab-head">
					<ul class="tab-link">
						<li class="active">
							<a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
						</li>
						<li class="">
							<a data-toggle="tab" aria-expanded="true" href="#new_arrivals">New Arrivals </a>
						</li>
						<li class="">
							<a data-toggle="tab" aria-expanded="true" href="#top-rated">Top Rated</a>
						</li>
					</ul>
				</div>
				<div class="tab-container">
					<div id="bestseller" class="tab-panel active">
						<div class="vereesa-product">
							<ul class="row list-products auto-clear equal-container product-grid">
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-1.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button">Quick View</a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text over">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-2.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text over">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-3.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-4.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text over">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-5.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-6.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text over">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-7.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text over">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-8.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div id="new_arrivals" class="tab-panel">
						<div class="vereesa-product">
							<ul class="row list-products auto-clear equal-container product-grid">
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-9.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button">Quick View</a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-10.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-11.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-13.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-14.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-15.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-16.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-2.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div id="top-rated" class="tab-panel">
						<div class="vereesa-product">
							<ul class="row list-products auto-clear equal-container product-grid">
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-10.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button">Quick View</a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-12.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-8.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-4.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-9.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-13.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-16.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text active">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
									<div class="product-inner equal-element">
										<div class="product-top">
											<div class="flash">
												<span class="onnew">
													<span class="text">
														new
													</span>
												</span>
											</div>
											<div class="yith-wcwl-add-to-wishlist">
												<div class="yith-wcwl-add-button">
													<a href="#">Add to Wishlist</a>
												</div>
											</div>
										</div>
										<div class="product-thumb">
											<div class="thumb-inner">
												<a href="#">
													<img src="assets/images/product-item-8.jpg" alt="img">
												</a>
											</div>
											<a href="#" class="button quick-wiew-button"></a>
										</div>
										<div class="product-info">
											<h5 class="product-name product_title">
												<a href="#">Plastic Dining Chair</a>
											</h5>
											<div class="group-info">
												<div class="stars-rating">
													<div class="star-rating">
														<span class="star-3"></span>
													</div>
													<div class="count-star">
														(3)
													</div>
												</div>
												<div class="price">
													<del>
														€65
													</del>
													<ins>
														€45
													</ins>
												</div>
											</div>
										</div>
										<div class="loop-form-add-to-cart">
											<form class="cart">
												<div class="single_variation_wrap">
													<div class="quantity">
														<div class="control">
															<a class="btn-number qtyminus quantity-minus" href="#">-</a>
															<input type="text" data-step="1" data-min="0" value="1"
																	title="Qty" class="input-qty qty" size="4">
															<a href="#" class="btn-number qtyplus quantity-plus">+</a>
														</div>
													</div>
													<button class="single_add_to_cart_button button">Add to cart
													</button>
												</div>
												<div class="variations">
													<div class="variation">
														<label class="variation-label">
															Capacity:
														</label>
														<div class="variation-value">
															<a href="#" class="change-value text active">
																<span>10ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>20ml</span>
															</a>
															<a href="#" class="change-value text">
																<span>50ml</span>
															</a>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter-wrapp rows-space-70">
			<div class="container">
				<div class="vereesa-newsletter style3 ">
					<div class="newsletter-head">
						<h3 class="title">Sign up Newsletter</h3>
						<div class="subtitle">
							Subscribe to get more special Deals,<br />
							Events & Promotions
						</div>
					</div>
					<div class="newsletter-form-wrap">
						<input class="input-text email email-newsletter" type="email" name="email" placeholder="Your email letter">
						<button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
					</div>
				</div>
			</div>
		</div>
		<div class="vereesa-blog-wraap default">
			<div class="container">
				<h3 class="custommenu-title-blog">
					Our Latest News
				</h3>
				<div class="vereesa-blog default">
					<div class="owl-slick equal-container nav-center"
							data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}'
							data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
						<div class="vereesa-blog-item equal-element layout1">
							<div class="post-thumb">
								<a href="#">
									<img src="assets/images/slider-blog-thumb-1.jpg" alt="img">
								</a>
								<div class="category-blog">
									<ul class="list-category">
										<li class="category-item">
											<a href="#">Skincare</a>
										</li>
									</ul>
								</div>
								<div class="post-item-share">
									<a href="#" class="icon">
										<i class="fa fa-share-alt" aria-hidden="true"></i>
									</a>
									<div class="box-content">
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="#">
											<i class="fa fa-pinterest"></i>
										</a>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="blog-info">
								<div class="blog-meta">
									<div class="post-date">
										Agust 17, 09:14 am
									</div>
									<span class="view">
										<i class="icon fa fa-eye" aria-hidden="true"></i>
										631
									</span>
									<span class="comment">
										<i class="icon fa fa-commenting" aria-hidden="true"></i>
										84
									</span>
								</div>
								<h2 class="blog-title">
									<a href="#">We bring you the best by working</a>
								</h2>
								<div class="main-info-post">
									<p class="des">
										Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
										Mauris nec ante magna.
									</p>
								</div>
							</div>
						</div>
						<div class="vereesa-blog-item equal-element layout1">
							<div class="post-thumb">
								<a href="#">
									<img src="assets/images/slider-blog-thumb-2.jpg" alt="img">
								</a>
								<div class="category-blog">
									<ul class="list-category">
										<li class="category-item">
											<a href="#">HOW TO</a>
										</li>
									</ul>
								</div>
								<div class="post-item-share">
									<a href="#" class="icon">
										<i class="fa fa-share-alt" aria-hidden="true"></i>
									</a>
									<div class="box-content">
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="#">
											<i class="fa fa-pinterest"></i>
										</a>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="blog-info">
								<div class="blog-meta">
									<div class="post-date">
										Agust 17, 09:14 am
									</div>
									<span class="view">
										<i class="icon fa fa-eye" aria-hidden="true"></i>
										631
									</span>
									<span class="comment">
										<i class="icon fa fa-commenting" aria-hidden="true"></i>
										84
									</span>
								</div>
								<h2 class="blog-title">
									<a href="#">We know that buying furniture</a>
								</h2>
								<div class="main-info-post">
									<p class="des">
										Using Lorem Ipsum allows designers to put together layouts
										and the form content
									</p>
								</div>
							</div>
						</div>
						<div class="vereesa-blog-item equal-element layout1">
							<div class="post-thumb">
								<div class="video-vereesa-blog">
									<figure>
										<img src="assets/images/slider-blog-thumb-3.jpg" alt="img" width="370"
												height="280">
									</figure>
									<a class="quick-install" href="#" data-videosite="vimeo"
										data-videoid="134060140"></a>
								</div>
								<div class="category-blog">
									<ul class="list-category">
										<li class="category-item">
											<a href="#">VIDEO</a>
										</li>
									</ul>
								</div>
								<div class="post-item-share">
									<a href="#" class="icon">
										<i class="fa fa-share-alt" aria-hidden="true"></i>
									</a>
									<div class="box-content">
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="#">
											<i class="fa fa-pinterest"></i>
										</a>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="blog-info">
								<div class="blog-meta">
									<div class="post-date">
										Agust 17, 09:14 am
									</div>
									<span class="view">
										<i class="icon fa fa-eye" aria-hidden="true"></i>
										631
									</span>
									<span class="comment">
										<i class="icon fa fa-commenting" aria-hidden="true"></i>
										84
									</span>
								</div>
								<h2 class="blog-title">
									<a href="#">We design functional furniture</a>
								</h2>
								<div class="main-info-post">
									<p class="des">
										Risus non porta suscipit lobortis habitasse felis, aptent
										interdum pretium ut.
									</p>
								</div>
							</div>
						</div>
						<div class="vereesa-blog-item equal-element layout1">
							<div class="post-thumb">
								<a href="#">
									<img src="assets/images/slider-blog-thumb-4.jpg" alt="img">
								</a>
								<div class="category-blog">
									<ul class="list-category">
										<li class="category-item">
											<a href="#">Skincare</a>
										</li>
									</ul>
								</div>
								<div class="post-item-share">
									<a href="#" class="icon">
										<i class="fa fa-share-alt" aria-hidden="true"></i>
									</a>
									<div class="box-content">
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#">
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="#">
											<i class="fa fa-pinterest"></i>
										</a>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="blog-info">
								<div class="blog-meta">
									<div class="post-date">
										Agust 17, 09:14 am
									</div>
									<span class="view">
										<i class="icon fa fa-eye" aria-hidden="true"></i>
										631
									</span>
									<span class="comment">
										<i class="icon fa fa-commenting" aria-hidden="true"></i>
										84
									</span>
								</div>
								<h2 class="blog-title">
									<a href="#">We know that buying furniture</a>
								</h2>
								<div class="main-info-post">
									<p class="des">
										Class integer tellus praesent at torquent cras, potenti erat fames
										volutpat etiam.
									</p>
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
