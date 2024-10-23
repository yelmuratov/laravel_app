<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vereesa - Checkout</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
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
<body class="inblog-page">
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
                                                        <a href="/productdetails-leftsidebar">Product left
                                                            sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/productdetails-rightsidebar">Product right
                                                            sidebar</a>
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
<div class="main-content main-content-checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Checkout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 class="custom_blog_title">
            Checkout
        </h3>
        <div class="checkout-wrapp">
            <div class="shipping-address-form-wrapp">
                <div class="shipping-address-form  checkout-form">
                    <div class="row-col-1 row-col">
                        <div class="shipping-address">
                            <h3 class="title-form">
                                Shipping Address
                            </h3>
                            <p class="form-row form-row-first">
                                <label class="text">First name</label>
                                <input title="first" type="text" class="input-text">
                            </p>
                            <p class="form-row form-row-last">
                                <label class="text">Last name</label>
                                <input title="last" type="text" class="input-text">
                            </p>
                            <p class="form-row forn-row-col forn-row-col-1">
                                <label class="text">Country</label>
                                <select title="country" data-placeholder="United Kingdom" class="chosen-select"
                                        tabindex="1">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-2">
                                <label class="text">State</label>
                                <select title="state" data-placeholder="London" class="chosen-select" tabindex="1">
                                    <option value="United States">London</option>
                                    <option value="United Kingdom">tokyo</option>
                                    <option value="Afghanistan">Seoul</option>
                                    <option value="Aland Islands">Mexico city</option>
                                    <option value="Albania">Mumbai</option>
                                    <option value="Algeria">Delhi</option>
                                    <option value="American Samoa">New York</option>
                                    <option value="Andorra">Jakarta</option>
                                    <option value="Angola">Sao Paulo</option>
                                    <option value="Anguilla">Osaka</option>
                                    <option value="Antarctica">Karachi</option>
                                    <option value="Antigua and Barbuda">Matx-cơ-va</option>
                                    <option value="Argentina">Toronto</option>
                                    <option value="Armenia">Boston</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-3">
                                <label class="text">City</label>
                                <select title="city" data-placeholder="London" class="chosen-select" tabindex="1">
                                    <option value="United States">London</option>
                                    <option value="United Kingdom">tokyo</option>
                                    <option value="Afghanistan">Seoul</option>
                                    <option value="Aland Islands">Mexico city</option>
                                    <option value="Albania">Mumbai</option>
                                    <option value="Algeria">Delhi</option>
                                    <option value="American Samoa">New York</option>
                                    <option value="Andorra">Jakarta</option>
                                    <option value="Angola">Sao Paulo</option>
                                    <option value="Anguilla">Osaka</option>
                                    <option value="Antarctica">Karachi</option>
                                    <option value="Antigua and Barbuda">Matx-cơ-va</option>
                                    <option value="Argentina">Toronto</option>
                                    <option value="Armenia">Boston</option>
                                </select>
                            </p>
                            <p class="form-row form-row-first">
                                <label class="text">Zip code</label>
                                <input title="zip" type="text" class="input-text">
                            </p>
                            <p class="form-row form-row-last">
                                <label class="text">Address</label>
                                <input title="address" type="text" class="input-text">
                            </p>
                        </div>
                    </div>
                    <div class="row-col-2 row-col">
                        <div class="your-order">
                            <h3 class="title-form">
                                Your Order
                            </h3>
                            <ul class="list-product-order">
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/images/item-order1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            €45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/images/item-order2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            €45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="order-total">
									<span class="title">
										Total Price:
									</span>
                                <span class="total-price">
										€95
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="button button-payment">PAYMENT</a>
            </div>
            <div class="payment-method-wrapp">
                <div class="payment-method-form checkout-form">
                    <div class="row-col-1 row-col">
                        <div class="payment-method">
                            <h3 class="title-form">
                                Payment Method
                            </h3>
                            <div class="group-button-payment">
                                <a href="#" class="button btn-credit-card">CREDIT CARD</a>
                                <a href="#" class="button btn-paypal">paypal</a>
                            </div>
                            <p class="form-row form-row-card-number">
                                <label class="text">Card number</label>
                                <input type="text" class="input-text" placeholder="xxx - xxx - xxx - xxx">
                            </p>
                            <p class="form-row forn-row-col forn-row-col-1">
                                <label class="text">Month</label>
                                <select title="month" data-placeholder="01" class="chosen-select" tabindex="1">
                                    <option value="thang01">01</option>
                                    <option value="thang02">02</option>
                                    <option value="thang03">03</option>
                                    <option value="thang04">04</option>
                                    <option value="thang05">05</option>
                                    <option value="thang06">06</option>
                                    <option value="thang07">07</option>
                                    <option value="thang08">08</option>
                                    <option value="thang09">09</option>
                                    <option value="thang10">10</option>
                                    <option value="thang11">11</option>
                                    <option value="thang12">12</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-2">
                                <label class="text">Year</label>
                                <select title="Year" data-placeholder="2017" class="chosen-select" tabindex="1">
                                    <option value="nam2010">2010</option>
                                    <option value="nam2011">2011</option>
                                    <option value="nam2012">2012</option>
                                    <option value="nam2013">2013</option>
                                    <option value="nam2014">2014</option>
                                    <option value="nam2015">2015</option>
                                    <option value="nam2016">2016</option>
                                    <option value="nam2017">2017</option>
                                    <option value="nam2018">2018</option>
                                    <option value="nam2019">2019</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-3">
                                <label class="text">CVV</label>
                                <select title="CVV" data-placeholder="238" class="chosen-select" tabindex="1">
                                    <option value="cvv1">238</option>
                                    <option value="cvv2">354</option>
                                    <option value="cvv3">681</option>
                                    <option value="cvv4">254</option>
                                    <option value="cvv5">687</option>
                                    <option value="cvv6">123</option>
                                    <option value="cvv7">951</option>
                                    <option value="cvv8">852</option>
                                    <option value="cvv9">753</option>
                                    <option value="vcc10">963</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="row-col-2 row-col">
                        <div class="your-order">
                            <h3 class="title-form">
                                Your Order
                            </h3>
                            <ul class="list-product-order">
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/images/item-order1.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            €45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item-order">
                                    <div class="product-thumb">
                                        <a href="#">
                                            <img src="assets/images/item-order2.jpg" alt="img">
                                        </a>
                                    </div>
                                    <div class="product-order-inner">
                                        <h5 class="product-name">
                                            <a href="#">3D Dining Chair</a>
                                        </h5>
                                        <span class="attributes-select attributes-color">Black,</span>
                                        <span class="attributes-select attributes-size">XXL</span>
                                        <div class="price">
                                            €45
                                            <span class="count">x1</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="order-total">
									<span class="title">
										Total Price:
									</span>
                                <span class="total-price">
										€95
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-control">
                    <a href="#" class="button btn-back-to-shipping">BACK TO SHIPPING</a>
                    <a href="#" class="button btn-pay-now">PAY NOW</a>
                </div>
            </div>
            <div class="end-checkout-wrapp">
                <div class="end-checkout checkout-form">
                    <div class="icon">
                    </div>
                    <h3 class="title-checkend">
                        Congratulation! Your order has been processed.
                    </h3>
                    <div class="sub-title">
                        Aenean dui mi, tempus non volutpat eget, molestie a orci.
                        Nullam eget sem et eros laoreet rutrum.
                        Quisque sem ante, feugiat quis lorem in.
                    </div>
                    <a href="#" class="button btn-return">Return to Store</a>
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
            <a href="#">
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