<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/16/2016
 * Time: 3:21 PM
 */
$maxMenuLevel = $menuLevel->MN_LVL;
?>
<header>
    <!-- site top panel-->
    <div class="site-top-panel">
        <div class="container p-relative">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <!-- lang select wrapper-->
                    <div class="top-left-wrap font-3">
                        <div class="mail-top"><a href="mailto:support.suntour@example.com"> <i class="fa fa-envelope-o" aria-hidden="true"></i></i>suntour@example.com</a></div><span>/</span>
                        <div class="tel-top"><a href="tel:(723)-700-1183"> <i class="fa fa-phone" aria-hidden="true"></i>(723)-700-1183</a></div>
                    </div>
                    <!-- ! lang select wrapper-->
                </div>
                <div class="col-md-6 col-sm-5 text-right">
                    <div class="top-right-wrap">
                        <div class="top-login"><a href="index.html#">{{trans('header.myAccount')}}</a></div>
                        <div class="curr-wrap dropdown">
                            <div>
                                <ul>
                                    <li><a href="index.html#" class="lang-sel icl-en">{{trans('header.currency')}}<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="index.html#">USD</a></li>
                                            <li><a href="index.html#">EUR</a></li>
                                            <li> <a href="index.html#">GBP</a></li>
                                            <li> <a href="index.html#">AUD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="lang-wrap dropdown">
                            <div>
                                <ul>
                                    <li><a href="index.html#" class="lang-sel icl-en">{{trans('header.language')}} <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="index.html#">English</a></li>
                                            <li> <a href="index.html#">Deutsch</a></li>
                                            <li> <a href="index.html#">Espanol</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ! site top panel-->
    <!-- Navigation panel-->
    <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
            <!-- Logo ( * your text or image into link tag *)-->
            <div class="nav-logo-wrap local-scroll"><a href="index.html" class="logo"><img src="/resources/assets/img/logo.png" data-at2x="/resources/assets/img/logo@2x.png" alt></a></div>
            <!-- Main Menu-->
            <div class="inner-nav desktop-nav">
                <ul class="clearlist">
                    <!-- Item With Sub-->
                    @if(isset($menuData))
                        @foreach($menuData as $mnData)
                            @if($mnData->MN_LVL == 0)
                                <?php $hasChild = fasle; ?>
                                @foreach ($menuData as $mnChildData)
                                    @if($mnData->MN_ID == $mnChildData->MN_PRT_ID)
                                        <?php $hasChild = true; ?>
                                        @break
                                    @endif
                                @endforeach
                                @if($mnData->MN_DSP_TP = 'L')
                                    <li class="megamenu">
                                        @if($hasChild == true)
                                            <a href="index.html" class="mn-has-sub active">Home <i class="fa fa-angle-down button_open"></i></a>
                                        @else
                                            <a href="{{ $mnData->MN_NM_LINK }}">{{$mnData->MN_NM_VI }} </a>
                                        @endif
                                    </li>
                                @else
                                    <li>
                                        @if($hasChild == true)
                                            <a href="index.html" class="mn-has-sub active">Home <i class="fa fa-angle-down button_open"></i></a>
                                        @else
                                            <a href="{{ $mnData->MN_NM_LINK }}">{{$mnData->MN_NM_VI }} </a>
                                        @endif
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    @endif
                    <li><a href="index.html" class="mn-has-sub active">Home <i class="fa fa-angle-down button_open"></i></a>
                        <ul class="mn-sub">
                            <li class="active"><a href="index.html">Standart Slider</a></li>
                            <li><a href="index-search.html">Main Search</a></li>
                            <li><a href="index-slider.html">Full Slider</a></li>
                            <li><a href="index-video.html">Video Slider</a></li>
                        </ul>
                    </li>
                    <!-- End Item With Sub-->
                    <li class="slash">/</li>
                    <!-- Item With Sub-->
                    <li><a href="hotels-search.html" class="mn-has-sub">Hotels <i class="fa fa-angle-down button_open"></i></a>
                        <!-- Sub-->
                        <ul class="mn-sub">
                            <li><a href="hotels-list.html">Hotels list</a></li>
                            <li><a href="hotels-search.html">Hotels search</a></li>
                            <li><a href="hotels-details.html">Hotels details</a></li>
                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <li class="slash">/</li>
                    <!-- Item With Sub-->
                    <li class="megamenu"><a href="page-about-us.html" class="mn-has-sub">Pages <i class="fa fa-angle-down button_open"></i></a>
                        <!-- Sub-->
                        <ul class="mn-sub mn-has-multi">
                            <li class="mn-sub-multi"><a class="mn-group-title">Pages</a>
                                <ul>
                                    <li><a href="page-about-us.html">About Us</a></li>
                                    <li><a href="page-services.html">Services</a></li>
                                    <li><a href="page-procces.html">Our Procces</a></li>
                                    <li><a href="page-our-team.html">Our Team</a></li>
                                    <li><a href="page-profile.html">Profile</a></li>
                                    <li><a href="page-elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="mn-sub-multi"><a class="mn-group-title">Portfolio</a>
                                <ul>
                                    <li><a href="portfolio-3-col.html">Three Columns</a></li>
                                    <li><a href="portfolio-4-col.html">Four Columns</a></li>
                                    <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                    <li><a href="portfolio-with-sidebar.html">With Sidebar</a></li>
                                    <li><a href="portfolio-gallery.html">Gallery</a></li>
                                    <li><a href="page-portfolio-single.html">Portfolio Single</a></li>
                                </ul>
                            </li>
                            <li class="mn-sub-multi"><a class="mn-group-title">Blog</a>
                                <ul>
                                    <li><a href="blog-2-col-sidebar.html">Two Columns + Sidebar</a></li>
                                    <li><a href="blog-3-col.html">Three Columns</a></li>
                                    <li><a href="blog-4-col.html">Four Columns</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <!-- span /-->
                    <!-- Item With Sub-->
                    <!-- End Item With Sub-->
                    <li class="slash">/</li>
                    <!-- Item With Sub-->
                    <li><a href="shop-grid.html" class="mn-has-sub">Shop <i class="fa fa-angle-down button_open"></i></a>
                        <!-- Sub-->
                        <ul class="mn-sub">
                            <li><a href="shop-grid.html">Shop Grid</a></li>
                            <li><a href="shop-cart.html">Shop Cart</a></li>
                            <li><a href="shop-checkout.html">Shop Checkout</a></li>
                            <li><a href="shop-single.html">Shop Single Product</a></li>
                        </ul>
                        <!-- End Sub-->
                    </li>
                    <!-- End Item With Sub-->
                    <li class="slash">/</li>
                    <!-- Item-->
                    <li><a href="page-contact.html">Contact</a></li>
                    <!-- End Item-->
                    <!-- Search-->
                    <li class="search"><a href="index.html#" class="mn-has-sub">Search</a>
                        <ul class="search-sub">
                            <li>
                                <div class="container">
                                    <div class="mn-wrap">
                                        <form method="post" class="form">
                                            <div class="search-wrap">
                                                <input type="text" placeholder="Where will you go next?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="close-button"><span>Search</span></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- End Search-->
                </ul>
            </div>
            <!-- End Main Menu-->
        </div>
    </nav>
    <!-- End Navigation panel-->
</header>
