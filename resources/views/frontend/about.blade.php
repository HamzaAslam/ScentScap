@extends('frontend.layouts.main')
@section('title', 'about')
@section('main-container')
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="frontend/images/logo.png" alt="img">
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
<div class="main-content main-content-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index-2.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-about col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">About Us</h3>
                    <div class="page-main-content">
                        <div class="header-banner banner-image">
                            <div class="banner-wrap">
                                <div class="banner-header">
                                    <div class="col-lg-5 col-md-offset-7">
                                        <div class="content-inner">
                                            <h2 class="title">
                                                New Collection <br/> for you
                                            </h2>
                                            <div class="sub-title">
                                                Shop the latest products right <br/>
                                                We have beard supplies from top brands.
                                            </div>
                                            <a href="#" class="stelina-button button">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="stelina-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-rocket-ship"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                EU Free Delivery
                                            </h4>
                                            <div class="text">
                                                Free Delivery on all order from EU with price more than $90.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-lg-offset-1">
                                <div class="stelina-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">02</span>
                                            <span class="icon flaticon-return"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Money Guarantee
                                            </h4>
                                            <div class="text">
                                                30 Days money back guarantee no question asked!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-lg-offset-1">
                                <div class="stelina-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">03</span>
                                            <span class="icon flaticon-padlock"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Online Support 24/7
                                            </h4>
                                            <div class="text">
                                                We’re here to support to you 24/7. Let’s shopping now!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-member">
                            <div class="row">
                                <div class="col-sm-12 border-custom">
                                    <span></span>
                                </div>
                            </div>
                            <h2 class="custom_blog_title center">
                                stelina’s Important Persons
                            </h2>
                            <div class="team-member-slider nav-center owl-slick"
                                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}'
                                 data-responsive='[{"breakpoint":"0","settings":{"slidesToShow":1}},{"breakpoint":"480","settings":{"slidesToShow":1}},{"breakpoint":"767","settings":{"slidesToShow":2}},{"breakpoint":"991","settings":{"slidesToShow":3}},{"breakpoint":"1199","settings":{"slidesToShow":3}},{"breakpoint":"2000","settings":{"slidesToShow":3}}]'>
                                <div class="stelina-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="frontend/images/member3.png" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder stelina Outfit
                                        </div>
                                    </div>
                                </div>
                                <div class="stelina-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="frontend/images/member2.png" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder stelina Outfit
                                        </div>
                                    </div>
                                </div>
                                <div class="stelina-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="frontend/images/member1.png" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder stelina Outfit
                                        </div>
                                    </div>
                                </div>
                                <div class="stelina-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="frontend/images/member3.png" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder stelina Outfit
                                        </div>
                                    </div>
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