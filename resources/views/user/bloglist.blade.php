<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vereesa - Blog List</title>
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
	<div class="main-content main-content-blog list right-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="/">Home</a>
							</li>
							<li class="trail-item trail-end active">
								Our blog
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area content-blog col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<div class="site-main">
						<h3 class="custom_blog_title">
							Our Blog
						</h3>
						<div class="blog-list list-style">
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-1.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">ACCESSORIES</a>
									</div>
									<h3 class="post-title">
										<a href="#">Fast-Track Your lorem ipsum<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Egg whites, turkey sausage, wheat toast, water. Of course they don’t want us to eat[...]
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-2.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">ACCESSORIES,</a>
										<a href="#">CLOTHING,</a>
										<a href="#">HAND BAGS</a>
									</div>
									<h3 class="post-title">
										<a href="#">Open The Gates For Lorem<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
											Mauris nec ante magna.
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-3.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">BACKPACK</a>
									</div>
									<h3 class="post-title">
										<a href="#">We bring you the best by working Men<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Lorem ipsum dolor sit amet conse ctetur adipisicing elit do eiusmod tempor. Dolor sit amet[...]
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-4.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">LIFE STYLE</a>
									</div>
									<h3 class="post-title">
										<a href="#">How to Build Your Perfect Lighting<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
											Mauris nec ante magna.
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-5.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">LIFE STYLE</a>
									</div>
									<h3 class="post-title">
										<a href="#">New Designer Outdoor Furniture <span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
											Mauris nec ante magna.
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination clearfix style2">
							<div class="nav-link">
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="#" class="page-numbers">1</a>
								<a href="#" class="page-numbers">2</a>
								<a href="#" class="page-numbers current">3</a>
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar sidebar-blog col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="wrapper-sidebar">
						<div class="widget widget-socials">
							<h3 class="widgettitle">
								Follow us
							</h3>
							<div class="content-socials">
								<div class="social-list">
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="widget widget-categories">
							<h3 class="widgettitle">Categories</h3>
							<ul class="list-categories">
								<li>
									<input type="checkbox" id="cb1">
									<label for="cb1" class="label-text">
										New Arrivals
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb2">
									<label for="cb2" class="label-text">
										Lighting
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb3">
									<label for="cb3" class="label-text">
										Tables
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb4">
									<label for="cb4" class="label-text">
										Chairs
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb5">
									<label for="cb5" class="label-text">
										Accessories
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb6">
									<label for="cb6" class="label-text">
										Lamp
									</label>
								</li>
							</ul>
						</div>
						<div class="widget widget-post">
							<h3 class="widgettitle">Popular Articles</h3>
							<ul class="vereesa-posts">
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post1.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Life Style</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post2.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Lookbook</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post3.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Street Style</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>

							</ul>
						</div>
						<div class="widget widget-tags">
							<h3 class="widgettitle">
								Popular Tags
							</h3>
							<ul class="tagcloud">
								<li class="tag-cloud-link">
									<a href="#">Fashion</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Chairs</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hat</a>
								</li>
								<li class="tag-cloud-link active">
									<a href="#">Accessories</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hot</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Lamp</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Lighting</a>
								</li>
							</ul>
						</div>
						<div class="widget newsletter-widget">
							<div class="newsletter-form-wrap ">
								<h3 class="title">Subscribe to Our Newsletter</h3>
								<div class="subtitle">
									More special Deals, Events & Promotions
								</div>
								<input type="email" class="email" placeholder="Your email letter">
								<button type="submit" class="button submit-newsletter">Subscribe</button>
							</div>
						</div>
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