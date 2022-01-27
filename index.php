<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MyShop - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Template">
		<meta name="description" content="MyShop - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="external/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="external/slick/slick.min.css">
		<link rel="stylesheet" type="text/css" href="external/rs-plugin/css/settings.min.css" media="screen" />
		<link rel="stylesheet" href="css/template.css">
		<link rel="stylesheet" href="font/icont-fonts.min.css">
	</head>
	<body>
		<div class="loader-wrapper">
			<div class="loader">
				<svg class="circular" viewBox="25 25 50 50">
					<circle class="loader-animation" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
				</svg>
			</div>
		</div>

		<header class="no-shadow">
			<!-- desktop-header -->
			<div class="desktop-header  header-06">

				<div class="top-line">
					<div class="container">
						<div class="pull-left">
							<!-- logo -->
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt=""/></a>
							</div>
							<!-- /logo -->
						</div>
						<div class="pull-right">
							<!-- account -->
							<div class="account dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown">
								<span class="icon icon-person "></span>
								<span class="dropdown-label hidden-sm hidden-xs">My Account</span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="login-form.html"><span class="icon icon-person"></span>My Account</a></li>
									<li><a href="wishlist.html"><span class="icon icon-favorite_border"></span>My Wishlist</a></li>
									<li><a href="compare.html"><span class="fa fa-balance-scale"></span>Compare</a></li>
									<li><a href="checkout.html"><span class="icon icon-check"></span>Checkout</a></li>
									<li><a href="#" data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock_outline"></span>Log In</a></li>
									<li><a href="login-form.html"><span class="icon icon-person_add"></span>Create an account</a></li>
								</ul>
							</div>
							<!-- /account -->
							<!-- cart -->
							<div class="main-parent-cart">
								<div class="cart">
									<div class="dropdown">
										<a class="dropdown-toggle">
											<span class="icon icon-shopping_basket"></span>
											<span class="badge badge-cart">2</span>
											<div class="dropdown-label hidden-sm hidden-xs">YOUR BAG</div>
										</a>
										<div class="dropdown-menu slide-from-top">
											<div class="container">
												<div class="top-title">RECENTLY ADDED ITEM(S)</div>
												<a href="#" class="icon icon-close cart-close"></a>
												<ul>
													<li class="item">
														<div class="img">
															<a href="#"><img src="images/product/product-01.jpg" alt=""/></a>
														</div>
														<div class="info">
															<div class="title-col">
																<h2 class="title">
																	<a href="#">Daisy Street 3/4 Sleeve Panelled Casual Shirt</a>
																</h2>
																<div class="details">
																	Black, XL
																</div>
															</div>
															<div class="price">
																$45
															</div>
															<div class="qty">
																<div class="qty-label">Qty:</div>
																<div class="style-2 input-counter">
																	<span class="minus-btn"></span>
																	<input type="text" value="1" size="5"/>
																	<span class="plus-btn"></span>
																</div>
															</div>
														</div>
														<div class="item-control">
															<div class="delete"><a href="#" class="icon icon-delete" title="Delete"></a></div>
															<div class="edit"><a href="#" class="icon icon-edit" title="Edit"></a></div>
														</div>
													</li>
													<li class="item">
														<div class="img">
															<a href="#"><img src="images/product/product-01.jpg" alt=""/></a>
														</div>
														<div class="info">
															<div class="title-col">
																<h2 class="title">
																	<a href="#">Daisy Street 3/4 Sleeve Panelled Casual Shirt</a>
																</h2>
																<div class="details">
																	Black, XL
																</div>
															</div>
															<div class="price">
																$45
															</div>
															<div class="qty">
																<div class="qty-label">Qty:</div>
																<div class="style-2 input-counter">
																	<span class="minus-btn"></span>
																	<input type="text" value="1" size="5"/>
																	<span class="plus-btn"></span>
																</div>
															</div>
														</div>
														<div class="item-control">
															<div class="delete"><a href="#" class="icon icon-delete" title="Delete"></a></div>
															<div class="edit"><a href="#" class="icon icon-edit" title="Edit"></a></div>
														</div>
													</li>
												</ul>
												<h4 class="empty-cart-js hide">Your Cart is Empty</h4>
												<div class="cart-bottom">
													<div class="pull-right">
														<div class="pull-left">
															<div class="cart-total">TOTAL:  <span> $135.00</span></div>
														</div>
														<a href="checkout.html" class="btn icon-btn-left"><span class="icon icon-check_circle"></span>CHECKOUT</a>
													</div>
													<div class="pull-left">
														<a href="shopping_cart_01.html" class="btn icon-btn-left"><span class="icon icon-shopping_basket"></span>VIEW CART</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /cart -->
						</div>
					</div>
				</div>

			</div>
			<!-- /desktop-header -->
			<!-- stuck nav -->
			<div class="stuck-nav">
				<div class="container">
					<div class="pull-left">
						<div class="stuck-menu-parent-box"></div>
					</div>
					<div class="pull-right">
						<div class="stuck-cart-parent-box"></div>
					</div>
				</div>
			</div>
			<!-- /stuck nav -->
		</header>
		<!-- Content -->
		<div id="pageContent">


			<div class="container hidden-mobile">
				<hr>
			</div>
			<div class="container">
				<h1 class="block-title">FEATURED PRODUCT</h1>
				<div class="row product-listing carousel-products-mobile products-mobile-arrow">
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
										<img src="images/product/product-01.jpg" alt="">
										<div class="label-sale left">Sale<br>10% Off</div>
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
									<div class="countdown_box">
										<div class="countdown_inner">
											<div class="countdown"
												data-date="2017-12-08"
												data-year="Yrs"
												data-month="Mths"
												data-week="Wk"
												data-day="Day"
												data-hour="Hrs"
												data-minute="Min"
												data-second="Sec"></div>
										</div>
									</div>
								</div>
								<h2 class="title">
									<a href="product.html">Tiger Mist Check Yo-Self Shirt in Plaid Check </a>
								</h2>
								<div class="price">
									<span class="new-price">$40</span>
									<span class="old-price">$45</span>
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-img">
													<img src="images/custom/filter_color1.jpg" alt="">
												</span>
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-img">
													<img src="images/custom/filter_color2.jpg" alt="">
												</span>
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<ul class="tags-list">
											<li><a href="#">XS</a></li>
											<li class="active"><a href="#">S</a></li>
											<li><a href="#">M</a></li>
											<li><a href="#">L</a></li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
										<img src="images/product/product-02.jpg" alt="">
										<div class="label-new">New</div>
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">Kiss This Drop Armhole Tank Vest With Ban The Bra Print </a>
								</h2>
								<div class="price view">
									$35
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
									<img src="images/product/product-03.jpg" alt="">
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">Calvin Klein Jeans Mid Rise Skinny Jeans</a>
								</h2>
								<div class="price view">
									$45
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
									<img src="images/product/product-04.jpg" alt="">
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">Leg Avenue Tights With All Over Vintage Bows</a>
								</h2>
								<div class="price view">
									$20
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
									<img src="images/product/product-05.jpg" alt="">
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">ASOS Short Sleeve Shirt with Pockets</a>
								</h2>
								<div class="price view">
									$40
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product not-item">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
									<img src="images/product/product-06.jpg" alt="">
									<div class="not-item">
										<div>Not<br>item</div>
									</div>
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">Adidas Originals Court Vantage Super Colour Scarlet Trainers</a>
								</h2>
								<div class="price view">
									$45
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
									<img src="images/product/product-07.jpg" alt="">
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">ASOS Racer Front Cami Top</a>
								</h2>
								<div class="price view">
									$30
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 ">
						<div class="product">
							<div class="product_inside">
								<div class="image-box">
									<a href="product.html">
									<img src="images/product/product-08.jpg" alt="">
										<div class="label-sale">Sale<br>10% Off</div>
										<div class="label-new">New</div>
									</a>
									<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
									<span>
									<span class="icon icon-visibility"></span>QUICK VIEW
									</span>
									</a>
								</div>
								<h2 class="title">
									<a href="product.html">Herschel Supply Co Novel Holdall in Spot Print</a>
								</h2>
								<div class="price view">
									$25
								</div>
								<div class="description">
									Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean
								</div>
								<div class="product_inside_hover">
									<div class="product_inside_info">
										<ul class="options-swatch options-swatch-color">
											<li>
												<a href="#">
												<span class="swatch-label color-dark-grey"></span>
												</a>
											</li>
											<li class="active">
												<a href="#">
												<span class="swatch-label color-pale-gold"></span>
												</a>
											</li>
											<li>
												<a href="#">
												<span class="swatch-label color-white border-bg"></span>
												</a>
											</li>
										</ul>
										<div class="rating">
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star empty-star"></span>
										</div>
										<a class="btn btn-product_addtocart" href="#" data-toggle="modal" data-target="#modalAddToCartProduct">
										<span class="icon icon-shopping_basket"></span>ADD TO CART
										</a>
										<a href="#"  class="quick-view btn" data-toggle="modal" data-target="#ModalquickView">
										<span>
										<span class="icon icon-visibility"></span>QUICK VIEW
										</span>
										</a>
										<ul class="product_inside_info_link">
											<li class="text-right">
												<a href="#" class="wishlist-link">
												<span class="fa fa-heart-o"></span>
												<span class="text">Add to wishlist</span>
												</a>
											</li>
											<li class="text-left">
												<a href="#" class="compare-link">
												<span class="fa fa-balance-scale"></span>
												<span class="text">Add to compare</span>
												</a>
											</li>
											<li>
												<a href="#" data-toggle="modal" data-target="#ModalquickView" class="quick-view">
													<span class="icon icon-visibility"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container hidden-mobile">
				<hr>
			</div>



		</div>
		<footer>


			<div class="copyright">
				<div class="container visible-xs">
					<div class="social-icon-round">
						<ul>
							<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
							<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
							<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
							<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
						</ul>
					</div>
				</div>
				<div class="container">
					<div class="pull-right">
						<div class="payment-list">
							<ul>
								<li><a class="icon-01" href="#"></a></li>
								<li><a class="icon-02" href="#"></a></li>
								<li><a class="icon-03" href="#"></a></li>
								<li><a class="icon-04" href="#"></a></li>
								<li><a class="icon-05" href="#"></a></li>
								<li><a class="icon-06" href="#"></a></li>
								<li><a class="icon-07" href="#"></a></li>
								<li><a class="icon-08" href="#"></a></li>
							</ul>
						</div>
					</div>
					<div class="pull-left">
						<div class="box-copyright">
							<a href="index.html">MyShop</a> &copy; 2017. <span>All Rights Reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="back-to-top">
			<span class="icon icon-keyboard_arrow_up"></span>
			<span class="text">BACK TO TOP</span>
			</a>
		</footer>



		<script src="external/jquery/jquery-2.1.4.min.js"></script>
		<script src="external/bootstrap/bootstrap.min.js"></script>
		<script src="external/countdown/jquery.plugin.min.js"></script>
		<script src="external/countdown/jquery.countdown.min.js"></script>
		<script src="external/slick/slick.min.js"></script>
		<script src="external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="external/panelmenu/panelmenu.js"></script>
		<script src="js/quick-view.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>