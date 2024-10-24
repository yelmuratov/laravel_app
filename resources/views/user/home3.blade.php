<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vereesa - Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/chosen.min.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/jquery.scrollbar.min.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home">
<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                <div class="header-language">
                    <div class="vereesa-language vereesa-dropdown">
                        <a href="#" class="active language-toggle" data-vereesa="vereesa-dropdown">
								<span>
									English (USD)
								</span>
                        </a>
                        <ul class="vereesa-submenu">
                            <li class="switcher-option">
                                <a href="#">
										<span>
											French (EUR)
										</span>
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
										<span>
											Japanese (JPY)
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="header-user-links">
                    <li>
                        <a href="/login">Login or Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/images/logo.png" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
                                <div class="category">
                                    <select title="cate" data-placeholder="All Categories" class="chosen-select"
                                            tabindex="1">
                                        <option value="United States">Accessories</option>
                                        <option value="United Kingdom">Chairs</option>
                                        <option value="Afghanistan">Tables</option>
                                        <option value="Aland Islands">Sofas</option>
                                        <option value="Albania">New Arrivals</option>
                                        <option value="Algeria">Storage</option>
                                    </select>
                                </div>
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart vereesa-mini-cart block-header vereesa-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-vereesa="vereesa-dropdown">
                                Cart
                                <span class="count">
									0
									</span>
                            </a>
                            <div class="no-product vereesa-submenu">
                                <p class="text">
                                    You have
                                    <span>
											 0 item(s)
										</span>
                                    in your bag
                                </p>
                            </div>
                        </div>
                        <div class="block-account block-header vereesa-dropdown">
                            <a href="javascript:void(0);" data-vereesa="vereesa-dropdown">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </a>
                            <div class="header-account vereesa-submenu">
                                <div class="header-user-form-tabs">
                                    <ul class="tab-link">
                                        <li class="active">
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="header-tab-login" class="tab-panel active">
                                            <form method="post" class="login form-login">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <label class="form-checkbox">
                                                        <input type="checkbox" class="input-checkbox">
                                                        <span>
																Remember me
															</span>
                                                    </label>
                                                    <input type="submit" class="button" value="Login">
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <div id="header-tab-rigister" class="tab-panel">
                                            <form method="post" class="register form-register">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="button" value="Register">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
						<span class="icon-bar">
							<span></span>
							<span></span>
							<span></span>
						</span>
                        <span class="text">All Departments</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="vereesa-nav-vertical vertical-menu vereesa-clone-mobile-menu">
                            <li class="menu-item">
                                <a href="#" class="vereesa-menu-item-title" title="New Arrivals">New Arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a title="Hot Sale" href="#" class="vereesa-menu-item-title">Hot Sale</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a title="Accessories" href="#" class="vereesa-menu-item-title">Accessories</a>
                                <span class="toggle-submenu"></span>
                                <ul role="menu" class=" submenu">
                                    <li class="menu-item">
                                        <a title="Clock" href="#" class="vereesa-item-title">Clock</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Chairs" href="#" class="vereesa-item-title">Chairs</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="New Arrivals" href="#" class="vereesa-item-title">New Arrivals</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Accessories" href="#" class="vereesa-item-title">Accessories</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Storage" href="#" class="vereesa-item-title">Storage</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a title="Chairs" href="#" class="vereesa-menu-item-title">Chairs</a>
                            </li>
                            <li class="menu-item">
                                <a title="Lamp" href="#" class="vereesa-menu-item-title">Lamp</a>
                            </li>
                            <li class="menu-item">
                                <a title="Lighting" href="#" class="vereesa-menu-item-title">Lighting</a>
                            </li>
                            <li class="menu-item">
                                <a title="Homewares" href="#" class="vereesa-menu-item-title">Homewares</a>
                            </li>
                            <li class="menu-item">
                                <a title="Bottles" href="#" class="vereesa-menu-item-title">Bottles</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="vereesa-clone-mobile-menu vereesa-nav main-menu " id="menu-main-menu">
                            <li class="menu-item  menu-item-has-children">
                                <a href="/" class="vereesa-menu-item-title" title="Home">Home</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a href="/">Home 01</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/home2">Home 02</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/home3">Home 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="/gridproducts" class="vereesa-menu-item-title" title="Shop">Shop</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a href="/gridproducts">Grid Fullwidth</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/gridproducts_leftsidebar">Grid Left sidebar</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/gridproducts_bannerslider">Grid Bannerslider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/listproducts">List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item  menu-item-has-children item-megamenu">
                                <a href="#" class="vereesa-menu-item-title" title="Pages">Pages</a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu mega-menu menu-page">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="vereesa-custommenu default">
                                                <h2 class="widgettitle">Shop Pages</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="/shoppingcart">Shopping Cart</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/checkout">Checkout</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/contact">Contact us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/404">404</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/login">Login/Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="vereesa-custommenu default">
                                                <h2 class="widgettitle">Product</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="/productdetails-fullwidth">Product Fullwidth</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/productdetails-leftsidebar">Product left sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/productdetails-rightsidebar">Product right sidebar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item  menu-item-has-children">
                                <a href="/inblog_right-siderbar" class="vereesa-menu-item-title"
                                   title="Blogs">Blogs</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="vereesa-menu-item-title" title="Blog Style">Blog Style</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="submenu">
                                            <li class="menu-item">
                                                <a href="/bloggrid">Grid</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="/blogmasonry">Masonry</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="/bloglist">List</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="/bloglist-leftsidebar">List Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="vereesa-menu-item-title" title="Post Layout">Post Layout</a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="submenu">
                                            <li class="menu-item">
                                                <a href="/inblog_left-siderbar">Left Sidebar</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="/inblog_right-siderbar">Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="/about" class="vereesa-menu-item-title" title="About">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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
<div class="main-content">
    <div class="fullwidth-template">
        <div class="home-slider style1 rows-space-30">
            <div class="container">
                <div class="slider-owl owl-slick equal-container nav-center"
                     data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":true, "dots":false, "infinite":true, "speed":1000, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                    <div class="slider-item style1">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    New Arrivals!
                                </h5>
                                <h3 class="title-big">
                                    Living Room<br/>
                                    Limited Items
                                </h3>
                                <div class="price">
                                    Price from:
                                    <span class="number-price">
											€75.00
										</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style2">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    Table Supplies Sale!
                                </h5>
                                <h3 class="title-big">
                                    Up to <span>75%</span> On All <br/> Store Items
                                </h3>
                                <a href="#" class="button btn-shop-now">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item style3">
                        <div class="slider-inner equal-element">
                            <div class="slider-infor">
                                <h5 class="title-small">
                                    New Arrivals!
                                </h5>
                                <h3 class="title-big">
                                    Living Room<br/>
                                    Limited Items
                                </h3>
                                <div class="price">
                                    Price from:
                                    <span class="number-price">
											€75.00
										</span>
                                </div>
                                <a href="#" class="button btn-browse">Browse</a>
                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style12">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Best Seller</h3>
                                        <div class="description">
                                            Check out our new furniture collection!
                                        </div>
                                        <a href="#" class="button btn-shop-now">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style14">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">End this weekend</h4>
                                        <h3 class="title">Big Sale <br/>75% Off</h3>
                                        <div class="code">
                                            Use promo Code:
                                            <span class="nummer-code">VEREESA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="banner">
                            <div class="item-banner style12 type2">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Lookbook</h3>
                                        <div class="description">
                                            Bedroom Collections <br/>Summer Lookbook
                                        </div>
                                        <a href="#" class="button btn-view-the-look">view all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-tabs  default rows-space-40">
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
        <div class="banner-wrapp rows-space-60">
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="item-banner style6">
                                <div class="inner">
                                    <div class="container">
                                        <div class="banner-content">
                                            <h4 class="vereesa-subtitle">Celebrate Day Sale!</h4>
                                            <h3 class="title">Save <span>25%</span> Of On All<br/>Bedroom Collection
                                            </h3>
                                            <a href="#" class="button btn-view-promotion">View Promotion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-in-stock-wrapp">
            <div class="container">
                <h3 class="custommenu-title-blog white">
                    Featured Products
                </h3>
                <div class="vereesa-product style3">
                    <ul class="row list-products auto-clear equal-container product-grid">
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-3">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
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
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-10.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
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
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
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
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
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
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
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
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-3.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
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
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item  col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12 style-3">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
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
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
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
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
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
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-5.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
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
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-thumb">
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
                                                <a href="#" tabindex="0">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-inner">
                                        <a href="#" tabindex="0">
                                            <img src="assets/images/product-item-black-6.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a href="#" class="button quick-wiew-button" tabindex="0">Quick View</a>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#" tabindex="0">Baniversary Chair</a>
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
                                            <span>€375</span>
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="quantity">
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                       class="input-qty qty" size="4">
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <button class="add_to_cart_button button" tabindex="0">SHOP NOW</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style10">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">Best Seller!</h4>
                                        <h3 class="title">Big Deal Of Day</h3>
                                        <div class="description">
                                            We’ve been waiting 4 you!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style11">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="vereesa-subtitle">Let’s us make your style!</h4>
                                        <h3 class="title">Convertry Collection </h3>
                                        <div class="description">
                                            A complete shopping guide on what & how to decor!
                                        </div>
                                        <a href="#" class="button btn-shopping-us">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vereesa-blog-wraap">
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
<div class="instagram-wrapp">
    <div>
        <h3 class="custommenu-title-blog">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            Vereesa’s Instagram Feed
        </h3>
        <div class="vereesa-instagram">
            <div class="instagram owl-slick equal-container"
                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":false, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":5}},{"breakpoint":"1200","settings":{"slidesToShow":4}},{"breakpoint":"992","settings":{"slidesToShow":3}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":2}}]'>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-1.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-2.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-3.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-4.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
                <div class="item-instagram">
                    <a href="#">
                        <img src="assets/images/item-instagram-5.jpg" alt="img">
                    </a>
                    <span class="text">
                        <i class="icon fa fa-instagram" aria-hidden="true"></i>
			        </span>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer style7">
    <div class="container">
        <div class="container-wapper">
            <div class="row">
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget-box">
                        <div class="single-img">
                            <a href="/"><img src="assets/images/logo.png" alt="img"></a>
                        </div>
                        <div class="text-content-elememnt">
                            <p>
                                Shop the latest products right from
                                your home .
                            </p>
                            <p>We have furniture supplies & accessories from top brands.</p>
                        </div>
                    </div>
                    <div class="vereesa-socials">
                        <ul class="socials">
                            <li>
                                <a href="#" class="social-item" target="_blank">
                                    <i class="icon fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-item" target="_blank">
                                    <i class="icon fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-item" target="_blank">
                                    <i class="icon fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="vereesa-custommenu default">
                        <h2 class="widgettitle">Links</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">Tables</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Lighting</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Lighting</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Gift Vouchers</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Accessories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="vereesa-custommenu default">
                        <h2 class="widgettitle">Information</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">FAQs</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Track Order</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Delivery</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Contact Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Return</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="vereesa-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Newsletter</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                                Get notified of new products, limited releases, and more.
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Your email letter">
                            <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 border-custom">
                    <span></span>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="coppyright">
                            Copyright © 2019
                            <a href="#">Vereesa</a>
                            . All rights reserved
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="vereesa-payment">
                            <img src="assets/images/payments.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="/">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="#">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="#">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="/login">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop">
    <i class="pe-7s-angle-up"></i>
</a>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/jquery.plugin-countdown.min.js"></script>
<script src="assets/js/jquery-countdown.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/mobile-menu.js"></script>
<script src="assets/js/chosen.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/jquery.elevateZoom.min.js"></script>
<script src="assets/js/jquery.actual.min.js"></script>
<script src="assets/js/fancybox/source/jquery.fancybox.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/owl.thumbs.min.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="assets/js/frontend-plugin.js"></script>
</body>
</html>