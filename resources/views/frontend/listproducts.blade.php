@extends('frontend.layouts.main')
@section('title', 'listproducts')
@section('main-container')
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
                    <form class="currency-form stelina-language">
                        <ul class="stelina-language-wrap">
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
<div class="main-content main-content-product no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            List Products Left Sidebar
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area  shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="shop-top-control">
                        <form class="select-item select-form">
                            <span class="title">Sort</span>
                            <select title="sort" data-placeholder="12 Products/Page" class="chosen-select">
                                <option value="1">12 Products/Page</option>
                                <option value="2">9 Products/Page</option>
                                <option value="3">10 Products/Page</option>
                                <option value="4">8 Products/Page</option>
                                <option value="5">6 Products/Page</option>
                            </select>
                        </form>
                        <form class="filter-choice select-form">
                            <span class="title">Sort by</span>
                            <select title="by" data-placeholder="Price: Low to High" class="chosen-select">
                                <option value="1">Default sorting</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by average rating</option>
                                <option value="4">Sort by newness</option>
                                <option value="5">Sort by price: low to high</option>
                            </select>
                        </form>
                        <div class="grid-view-mode">
                            <div class="inner">
                                <a href="listproducts.html" class="modes-mode mode-list active">
                                    <span></span>
                                    <span></span>
                                </a>
                                <a href="gridproducts.html" class="modes-mode mode-grid">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="custom_blog_title">
                        List Products
                    </h3>
                    <ul class="row list-products auto-clear equal-container product-list">
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="products-bottom-content">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                                <img src="assets/images/product-item-4.jpg" alt="img">
                                            </a>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-info-left">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <h5 class="product-name product_title">
                                            <a href="#">Bibliotheque</a>
                                        </h5>
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <ul class="product-attributes">
                                            <li>
                                                Material:
                                            </li>
                                            <li>
                                                <a href="#">Plastic</a>
                                            </li>
                                            <li>
                                                <a href="#"> Woody</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Color:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Black</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">White</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Brown</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-text-label">
                                                Pots Size:
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XS</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">S</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">M</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">L</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info-right">
                                        <div class="price">
                                            $45
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                            UK Free Delivery
                                        </div>
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
                                                <button class="single_add_to_cart_button button">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="products-bottom-content">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                                <img src="assets/images/product-item-1.jpg" alt="img">
                                            </a>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-info-left">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <h5 class="product-name product_title">
                                            <a href="#">Bibliotheque</a>
                                        </h5>
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <ul class="product-attributes">
                                            <li>
                                                Material:
                                            </li>
                                            <li>
                                                <a href="#">Plastic</a>
                                            </li>
                                            <li>
                                                <a href="#"> Woody</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Color:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Black</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">White</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Brown</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-text-label">
                                                Pots Size:
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XS</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">S</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">M</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">L</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info-right">
                                        <div class="price">
                                            $45
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                            UK Free Delivery
                                        </div>
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
                                                <button class="single_add_to_cart_button button">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="products-bottom-content">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                                <img src="assets/images/product-item-2.jpg" alt="img">
                                            </a>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-info-left">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <h5 class="product-name product_title">
                                            <a href="#">Bibliotheque</a>
                                        </h5>
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <ul class="product-attributes">
                                            <li>
                                                Material:
                                            </li>
                                            <li>
                                                <a href="#">Plastic</a>
                                            </li>
                                            <li>
                                                <a href="#"> Woody</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Color:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Black</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">White</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Brown</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-text-label">
                                                Pots Size:
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XS</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">S</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">M</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">L</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info-right">
                                        <div class="price">
                                            $45
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                            UK Free Delivery
                                        </div>
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
                                                <button class="single_add_to_cart_button button">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="products-bottom-content">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                                <img src="assets/images/product-item-3.jpg" alt="img">
                                            </a>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-info-left">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <h5 class="product-name product_title">
                                            <a href="#">Bibliotheque</a>
                                        </h5>
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <ul class="product-attributes">
                                            <li>
                                                Material:
                                            </li>
                                            <li>
                                                <a href="#">Plastic</a>
                                            </li>
                                            <li>
                                                <a href="#"> Woody</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Color:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Black</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">White</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Brown</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-text-label">
                                                Pots Size:
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XS</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">S</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">M</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">L</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info-right">
                                        <div class="price">
                                            $45
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                            UK Free Delivery
                                        </div>
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
                                                <button class="single_add_to_cart_button button">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="products-bottom-content">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                                <img src="assets/images/product-item-5.jpg" alt="img">
                                            </a>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-info-left">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <h5 class="product-name product_title">
                                            <a href="#">Bibliotheque</a>
                                        </h5>
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <ul class="product-attributes">
                                            <li>
                                                Material:
                                            </li>
                                            <li>
                                                <a href="#">Plastic</a>
                                            </li>
                                            <li>
                                                <a href="#"> Woody</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Color:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Black</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">White</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Brown</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-text-label">
                                                Pots Size:
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XS</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">S</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">M</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">L</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info-right">
                                        <div class="price">
                                            $45
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                            UK Free Delivery
                                        </div>
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
                                                <button class="single_add_to_cart_button button">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                    </div>
                                </div>
                                <div class="products-bottom-content">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#">
                                                <img src="assets/images/product-item-6.jpg" alt="img">
                                            </a>
                                            <a href="#" class="button quick-wiew-button">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-info-left">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <h5 class="product-name product_title">
                                            <a href="#">Bibliotheque</a>
                                        </h5>
                                        <div class="stars-rating">
                                            <div class="star-rating">
                                                <span class="star-3"></span>
                                            </div>
                                            <div class="count-star">
                                                (3)
                                            </div>
                                        </div>
                                        <ul class="product-attributes">
                                            <li>
                                                Material:
                                            </li>
                                            <li>
                                                <a href="#">Plastic</a>
                                            </li>
                                            <li>
                                                <a href="#"> Woody</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Color:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Black</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">White</a>
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">Brown</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-text-label">
                                                Pots Size:
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XS</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">S</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">M</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">L</a>
                                            </li>
                                            <li class="swatch-text-label">
                                                <a href="#">XL</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info-right">
                                        <div class="price">
                                            $45
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                            UK Free Delivery
                                        </div>
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
                                                <button class="single_add_to_cart_button button">Add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="pagination clearfix style2">
                        <div class="nav-link">
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-left"
                                                                aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right"
                                                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="wrapper-sidebar shop-sidebar">
                    <div class="widget woof_Widget">
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
                                        Dining
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb3">
                                    <label for="cb3" class="label-text">
                                        Desks
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="cb4">
                                    <label for="cb4" class="label-text">
                                        Accents
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
                                        Tables
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_filter_price">
                            <h4 class="widgettitle">
                                Price
                            </h4>
                            <div class="price-slider-wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="3000" data-unit="$"
                                     class="slider-range-price " data-value-min="0" data-value-max="1000">
                                </div>
                                <div class="price-slider-amount">
                                    <span class="from">$45</span>
                                    <span class="to">$215</span>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-brand">
                            <h3 class="widgettitle">Brand</h3>
                            <ul class="list-brand">
                                <li>
                                    <input id="cb7" type="checkbox">
                                    <label for="cb7" class="label-text">New Arrivals</label>
                                </li>
                                <li>
                                    <input id="cb8" type="checkbox">
                                    <label for="cb8" class="label-text">Dining</label>
                                </li>
                                <li>
                                    <input id="cb9" type="checkbox">
                                    <label for="cb9" class="label-text">Desks</label>
                                </li>
                                <li>
                                    <input id="cb10" type="checkbox">
                                    <label for="cb10" class="label-text">Accents</label>
                                </li>
                                <li>
                                    <input id="cb11" type="checkbox">
                                    <label for="cb11" class="label-text">Accessories</label>
                                </li>
                                <li>
                                    <input id="cb12" type="checkbox">
                                    <label for="cb12" class="label-text">Tables</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_filter_size">
                            <h4 class="widgettitle">Size</h4>
                            <ul class="list-brand">
                                <li>
                                    <input id="cb13" type="checkbox">
                                    <label for="cb13" class="label-text">14.0 mm</label>
                                </li>
                                <li>
                                    <input id="cb14" type="checkbox">
                                    <label for="cb14" class="label-text">14.4 mm</label>
                                </li>
                                <li>
                                    <input id="cb15" type="checkbox">
                                    <label for="cb15" class="label-text">14.8 mm</label>
                                </li>
                                <li>
                                    <input id="cb16" type="checkbox">
                                    <label for="cb16" class="label-text">15.2 mm</label>
                                </li>
                                <li>
                                    <input id="cb17" type="checkbox">
                                    <label for="cb17" class="label-text">15.6 mm</label>
                                </li>
                                <li>
                                    <input id="cb18" type="checkbox">
                                    <label for="cb18" class="label-text">16.0 mm</label>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-color">
                            <h4 class="widgettitle">
                                Color
                            </h4>
                            <div class="list-color">
                                <a href="#" class="color1"></a>
                                <a href="#" class="color2 "></a>
                                <a href="#" class="color3 active"></a>
                                <a href="#" class="color4"></a>
                                <a href="#" class="color5"></a>
                                <a href="#" class="color6"></a>
                                <a href="#" class="color7"></a>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <h3 class="widgettitle">
                                Popular Tags
                            </h3>
                            <ul class="tagcloud">
                                <li class="tag-cloud-link">
                                    <a href="#">Office</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Accents</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Flowering</a>
                                </li>
                                <li class="tag-cloud-link active">
                                    <a href="#">Accessories</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Hot</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Tables</a>
                                </li>
                                <li class="tag-cloud-link">
                                    <a href="#">Dining</a>
                                </li>
                            </ul>
                        </div>
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
@endsection