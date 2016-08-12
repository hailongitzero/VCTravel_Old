<?php
/**
 * Created by Hai Long.
 * User: HaiLong
 * Date: 13/07/2016
 * Time: 23:03
 */
?>

        <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <meta charset="utf-8">

    <title>@yield('title')</title> <!--insert your title here-->
    <meta name="description" content="Love Travel HTML5 version"> <!--insert your description here-->
    <meta name="author" content="nicDark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

    <!--START CSS-->
    <link rel="stylesheet" href="resources/assets/css/style.css"> <!--main-->
    <link rel="stylesheet" href="resources/assets/css/grid.css"> <!--grid-->
    <link rel="stylesheet" href="resources/assets/css/responsive.css"> <!--responsive-->
    <link rel="stylesheet" href="resources/assets/rs-plugin/css/settings.css" media="screen" /> <!--rev slider-->
    <link rel="stylesheet" href="resources/assets/showbizpro/css/settings.css" media="screen" /> <!--showbiz-->
    <link rel="stylesheet" href="resources/assets/css/animate.css"> <!--animate-->
    <link rel="stylesheet" href="resources/assets/css/superfish.css" media="screen"> <!--menu-->
    <link rel="stylesheet" href="resources/assets/css/fancybox/jquery.fancybox.css"> <!--main fancybox-->
    <link rel="stylesheet" href="resources/assets/css/fancybox/jquery.fancybox-thumbs.css"> <!--fancybox thumbs-->
    <link rel="stylesheet" href="resources/assets/css/isotope.css"> <!--isotope-->
    <link rel="stylesheet" href="resources/assets/css/flexslider.css"> <!--flexslider-->
    <!--END CSS-->

    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--FAVICONS-->
    <link rel="shortcut icon" href="resources/assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="resources/assets/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="resources/assets/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="resources/assets/img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->


</head>
<body id="startpage">

<!--start left menu open-->
<div class="leftmenuopen leftmenuopendark"> <!--leftmenuopenlight or leftmenuopendark-->
    <p class="titlecloseleftmenu">OUR BEST DESTINATIONS</p>
    <ul>
        <li class="evidenceleftmenu"><p class="red">NORT AMERICA<span class="bulletevidenceleftmenu"></span></p></li>
        <li><p><a href="index.htm#">New York</a></p></li>
        <li><p><a href="index.htm#">Los Angeles</a></p></li>
        <li><p><a href="index.htm#">San Francisco</a></p></li>
        <li><p><a class="leftmenumore" href="index.htm#">See more</a></p></li>
        <li class="evidenceleftmenu"><p class="yellow">SOUTH AMERICA<span class="bulletevidenceleftmenu"></span></p></li>
        <li><p><a href="index.htm#">Rio De Janeiro</a></p></li>
        <li><p><a href="index.htm#">Buenos Aires</a></p></li>
        <li><p><a href="index.htm#">Ushuaia</a></p></li>
        <li><p><a class="leftmenumore" href="index.htm#">See more</a></p></li>
        <li class="evidenceleftmenu"><p class="green">EUROPE<span class="bulletevidenceleftmenu"></span></p></li>
        <li><p><a href="index.htm#">Rome</a></p></li>
        <li><p><a href="index.htm#">Paris</a></p></li>
        <li><p><a href="index.htm#">London</a></p></li>
        <li><p><a class="leftmenumore" href="index.htm#">See more</a></p></li>
    </ul>
</div>
<!--end left menu open-->
<!--start header-->
<header id="navigationmenu" class="fade-down animate1 navigationmenulight">

    <!--start left menu close-->
    <div class="leftmenuclose">
        <img alt="" src="resources/assets/img/header/leftmenuclose.png">
    </div>
    <!--end left menu close-->

    <!--start container-->
    <div class="container">

        <!--start navigation-->
        <div class="grid_12 gridnavigation">

            <img class="logo fade-up animate4" alt="" src="resources/assets/img/logo.png">
            <!--start navigation-->
            <ul class="sf-menu" id="nav">

                <li class="current yellow">
                    <span class="menufilter"></span>
                    <a href="index.htm"><strong>HOME</strong></a>

                    <ul>
                        <li><a href="index.htm">Slider Full Width</a></li>
                        <li><a href="index-with-full-screen-slider.htm">Slider Full Screen</a></li>
                        <li><a href="index-with-carousel-full-width.htm">Carousel Version</a></li>
                        <li>
                            <a href="index-one-page-1.htm">One Page Version</a>

                            <ul>
                                <li><a href="index-one-page-1.htm">Normal Style</a></li>
                                <li><a href="index-one-page-2.htm">Transparent Style</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="index-full-screen-light.htm">Home Full Screen</a>

                            <ul>
                                <li><a href="index-full-screen-light.htm">With Light Menu</a></li>
                                <li><a href="index-full-screen-dark.htm">With Dark Menu</a></li>
                            </ul>

                        </li>
                    </ul>

                </li>

                <li class="orange">
                    <span class="menufilter"></span>
                    <a href="index.htm#"><strong>PAGES</strong></a>
                    <ul>
                        <li>
                            <a href="prices.htm">Our Prices</a>
                        </li>
                        <li>
                            <a href="tours.htm">Our Tours</a>
                        </li>
                        <li>
                            <a href="destinations.htm">Our Destinations</a>
                        </li>
                        <li>
                            <a href="about-us.htm">About us</a>

                            <ul>
                                <li><a href="about-us.htm">First Solution</a></li>
                                <li><a href="about-us-2.htm">Second Solution</a></li>
                                <li><a href="about-us-3.htm">Third Solution</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="team.htm">Our Team</a>
                        </li>
                        <li>
                            <a href="single-project.htm">Single Project</a>
                        </li>
                        <li>
                            <a href="page-right-sidebar.htm">Page</a>

                            <ul>
                                <li><a href="page-right-sidebar.htm">With right sidebar</a></li>
                                <li><a href="page-left-sidebar.htm">With left sidebar</a></li>
                                <li><a href="page-full-width.htm">Full Width</a></li>
                                <li><a href="page-full-width-centered.htm">Centered Page</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="columns.htm">Grid System</a>
                        </li>
                    </ul>
                </li>

                <li class="red">
                    <span class="menufilter"></span>
                    <a href="index.htm#"><strong>GALLERY</strong></a>
                    <ul>
                        <li>
                            <a href="index.htm#">Gallery with same size</a>

                            <ul>
                                <li><a href="gallery-2-column.htm">2 column</a></li>
                                <li><a href="gallery-3-column.htm">3 column</a></li>
                                <li><a href="gallery-4-column.htm">4 column</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="index.htm#">Gallery With Filter</a>

                            <ul>
                                <li><a href="gallery-with-filter-2-column.htm">2 column</a></li>
                                <li><a href="gallery-with-filter-3-column.htm">3 column</a></li>
                                <li><a href="gallery-with-filter-4-column.htm">4 column</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="index.htm#">Gallery Masonry</a>

                            <ul>
                                <li><a href="gallery-masonry-2-column.htm">2 column</a></li>
                                <li><a href="gallery-masonry-3-column.htm">3 column</a></li>
                                <li><a href="gallery-masonry-4-column.htm">4 column</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="index.htm#">Gallery Masonry With Filter</a>

                            <ul>
                                <li><a href="gallery-masonry-with-filter-2-column.htm">2 column</a></li>
                                <li><a href="gallery-masonry-with-filter-3-column.htm">3 column</a></li>
                                <li><a href="gallery-masonry-with-filter-4-column.htm">4 column</a></li>
                            </ul>

                        </li>
                    </ul>
                </li>

                <li class="violet">
                    <span class="menufilter"></span>
                    <a href="index.htm#"><strong>BLOG</strong></a>
                    <ul>
                        <li>
                            <a href="blog-standard-right-sidebar.htm">Blog Standard</a>

                            <ul>
                                <li><a href="blog-standard-right-sidebar.htm">With right sidebar</a></li>
                                <li><a href="blog-standard-left-sidebar.htm">With left sidebar</a></li>
                                <li><a href="blog-standard-full-width.htm">Full Width Archive</a></li>
                                <li><a href="blog-standard-full-width-centered.htm">Centered Archive</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="blog-masonry-3-column.htm">Blog Masonry Infinite Scroll</a>

                            <ul>
                                <li><a href="blog-masonry-2-column.htm">2 columns</a></li>
                                <li><a href="blog-masonry-3-column.htm">3 columns</a></li>
                                <li><a href="blog-masonry-4-column.htm">4 columns</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="blog-masonry-3-column-pagination.htm">Blog Masonry With Pagination</a>

                            <ul>
                                <li><a href="blog-masonry-2-column-pagination.htm">2 columns</a></li>
                                <li><a href="blog-masonry-3-column-pagination.htm">3 columns</a></li>
                                <li><a href="blog-masonry-4-column-pagination.htm">4 columns</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="single-post-right-sidebar.htm">Single Post</a>

                            <ul>
                                <li><a href="single-post-right-sidebar.htm">With right sidebar</a></li>
                                <li><a href="single-post-left-sidebar.htm">With left sidebar</a></li>
                                <li><a href="single-post-full-width.htm">Full Width Post</a></li>
                                <li><a href="single-post-full-width-centered.htm">Centered Post</a></li>
                            </ul>

                        </li>
                    </ul>
                </li>

                <li class="green">
                    <span class="menufilter"></span>
                    <a href="index.htm#"><strong>CONTACTS</strong></a>
                    <ul>
                        <li>
                            <a href="contact-dark.htm">Dark Map</a>
                        </li>
                        <li>
                            <a href="contact-light.htm">Color Map</a>
                        </li>
                        <li>
                            <a href="contact-with-text.htm">With Text</a>
                        </li>
                    </ul>
                </li>

                <li class="evidencelabelmenu blue">
                    <span class="menufilter"></span>
                    <a href="http://themeforest.net/item/love-travel-creative-travel-agency-theme-html5/6578458?ref=nicdark"><strong>PURCHASE</strong></a>
                </li>

            </ul>
            <!--end navigationmenu-->

        </div>
        <!--end navigation-->

    </div>
    <!--end container-->

    <div class="rightsearchclose">
        <img alt="" src="resources/assets/img/header/rightsearch.png">
    </div>

</header>
<!--end header-->

<!--start right search-->
<div class="rightsearchopen">

    <!--search form-->
    <form role="search" method="get" id="searchform" class="searchform" action="index.htm#">
        <div>
            <label class="screen-reader-text" for="s">SEARCH</label>
            <input type="text" value="" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="Search" />
        </div>
    </form>
    <!--end search form-->

    <span class="rightsearchopenclose"></span>

</div>
<!--end right search--><!--start slide-->
<section class="sectionhome fade-down">

    <!--start rev slider-->
    <div class="tp-banner-container">
        <div class="tp-banner tp-banner-full-width" >
            <ul>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >
                    <img src="resources/assets/img/rev-slider/1/slide1.jpg" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                    <div class="tp-caption lfr"
                         data-x="550"
                         data-y="200"
                         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="2000"
                         data-start="200"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3"><img src="resources/assets/img/rev-slider/1/model.png" alt="">
                    </div>

                    <div class="tp-caption customin customout"
                         data-x="534"
                         data-y="227"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2400"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3"><img src="resources/assets/img/rev-slider/1/arrow1.png" alt="">
                    </div>

                    <div class="tp-caption customin customout"
                         data-x="453"
                         data-y="302"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2600"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3"><img src="resources/assets/img/rev-slider/1/arrow2.png" alt="">
                    </div>

                    <div class="tp-caption customin customout"
                         data-x="372"
                         data-y="377"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2800"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3"><img src="resources/assets/img/rev-slider/1/arrow3.png" alt="">
                    </div>

                    <div class="tp-caption greybgtextslider skewfromleft customout"
                         data-x="220"
                         data-y="220"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="2000"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">WE "LOVE TRAVEL" AND YOU ?
                    </div>

                    <div class="tp-caption greybgtextslider skewfromleft customout"
                         data-x="106"
                         data-y="295"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="2000"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 9">AMAZING MULTIPORPOSE THEME
                    </div>

                    <div class="tp-caption greybgtextslider skewfromleft customout"
                         data-x="40"
                         data-y="370"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="2000"
                         data-start="1700"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 9">IDEAL FOR ALL YOUR BUSINESS
                    </div>

                </li>
                <!-- SLIDE  -->

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >
                    <img src="resources/assets/img/rev-slider/2/slide2.jpg" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                </li>
                <!-- SLIDE  -->

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >
                    <img src="resources/assets/img/rev-slider/3/slide3.jpg" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                </li>
                <!-- SLIDE  -->

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--end rev slider-->

</section>
<!--end slide--><!--start services-->
<section id="homeservices" class="sectionhome fade-up">

    <!--start container-->
    <div class="container clearfix">

        <!--start 1 service-->
        <div class="grid_4 homeservice">

            <div class="imgserviceopen">
                <img alt="" src="resources/assets/img/service/service1open.jpg" />
            </div>

            <div class="imgservice">
                <!--start percentagehome-->
                <div class="percentagehome" data-percent="90">
                    <img alt="" src="resources/assets/img/service/service1.png" />
                </div>
                <!--end percentagehome-->
            </div>

            <h2><a href="index.htm#">ADVENTURE</a></h2>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <!--end 1 service-->

        <!--start 2 service-->
        <div class="grid_4 homeservice">

            <div class="imgserviceopen">
                <img alt="" src="resources/assets/img/service/service2open.jpg" />
            </div>

            <div class="imgservice">

                <!--start percentagehome-->
                <div class="percentagehome" data-percent="80">
                    <img alt="" src="resources/assets/img/service/service2.png" />
                </div>
                <!--end percentagehome-->

            </div>

            <h2><a href="index.htm#">RELAX</a></h2>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <!--end 2 service-->

        <!--start 3 service-->
        <div class="grid_4 homeservice">

            <div class="imgserviceopen">
                <img alt="" src="resources/assets/img/service/service3open.jpg" />
            </div>

            <div class="imgservice">

                <!--start percentagehome-->
                <div class="percentagehome" data-percent="70">
                    <img alt="" src="resources/assets/img/service/service3.png" />
                </div>
                <!--end percentagehome-->

            </div>

            <h2><a href="index.htm#">HONEYMOON</a></h2>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <!--end 3 service-->

    </div>
    <!--end container-->

</section>
<!--end services--><div class="divider"><span></span></div>
<!--start promotions-->
<section class="sectionhome" id="homepromotions">

    <!--start container-->
    <div class="container clearfix">

        <div class="grid_4">
            <a class="btnpromotion rotate-In-Down-Left animate1" href="index.htm#"><p class="blue">LAST MINUTE</p></a>
        </div>

        <div class="grid_4">
            <h1 class="bounce-in animate2">THE BEST PROMOTIONS</h1>
            <h4 class="bounce-in animate3">LOREM IPSUM DOLOR SIT AMET CONSECTEUR ADIP</h4>
        </div>

        <div class="grid_4">
            <a class="btnpromotion rotate-In-Down-Right animate1" href="index.htm#"><p class="green">PROMOTIONS</p></a>
        </div>

    </div>
    <!--end container-->

</section>
<!--end promotions--><div class="divider"><span></span></div>
<!--start homedestinations-->
<section id="homedestinations">

    <!--start container for arrows-->
    <div class="container arrowscarousel yellow clearfix">

        <!--start arrows carousel-->
        <div class="grid_6">
            <div id="showbiz_left_2" class="arrowcarouselprev fade-right"></div>
        </div>
        <div class="grid_6">
            <div id="showbiz_right_2" class="arrowcarouselnext fade-left"></div>
        </div>
        <!--end arrows carousel-->

    </div>
    <!--end container for arrows-->

    <!--start container-->
    <div class="container clearfix showbiz-container">



        <div class="showbiz" data-left="#showbiz_left_2" data-right="#showbiz_right_2" data-play="#showbiz_play_2">
            <div class="overflowholder">
                <ul>


                    <li>
                        <!--start destination 1-->
                        <div class="destinationcarousel single-carousel">

                            <img alt="" class="imgdestination" src="resources/assets/img/destinations/destination1.jpg">

                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">

                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="resources/assets/img/destinations/avatar1.jpg">
                                </div>
                                <!--end avatar-->

                                <!--title-->
                                <p class="titledestination">
                                    <a href="index.htm#">Phuket - Thailandia</a>
                                </p>
                                <!--end title-->

                            </div>
                            <!--end avatarandtitle-->

                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>

                            <div class="infodestination">

                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>

                            </div>

                        </div>
                        <!--end destination 1-->
                    </li>


                    <li>
                        <!--start destination 2-->
                        <div class="destinationcarousel single-carousel">

                            <img alt="" class="imgdestination" src="resources/assets/img/destinations/destination2.jpg">

                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">

                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="resources/assets/img/destinations/avatar2.jpg">
                                </div>
                                <!--end avatar-->

                                <!--title-->
                                <p class="titledestination">
                                    <a href="index.htm#">Venice - Italy</a>
                                </p>
                                <!--end title-->

                            </div>
                            <!--end avatarandtitle-->

                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>

                            <div class="infodestination">

                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>

                            </div>

                        </div>
                        <!--end destination 2-->
                    </li>


                    <li>
                        <!--start destination 3-->
                        <div class="destinationcarousel single-carousel">

                            <img alt="" class="imgdestination" src="resources/assets/img/destinations/destination3.jpg">

                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">

                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="resources/assets/img/destinations/avatar3.jpg">
                                </div>
                                <!--end avatar-->

                                <!--title-->
                                <p class="titledestination">
                                    <a href="index.htm#">Temple - Thailand</a>
                                </p>
                                <!--end title-->

                            </div>
                            <!--end avatarandtitle-->

                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>

                            <div class="infodestination">

                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>

                            </div>

                        </div>
                        <!--end destination 3-->
                    </li>


                    <li>
                        <!--start destination 4-->
                        <div class="destinationcarousel single-carousel">

                            <img alt="" class="imgdestination" src="resources/assets/img/destinations/destination4.jpg">

                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">

                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="resources/assets/img/destinations/avatar4.jpg">
                                </div>
                                <!--end avatar-->

                                <!--title-->
                                <p class="titledestination">
                                    <a href="index.htm#">Barcelona - Spain</a>
                                </p>
                                <!--end title-->

                            </div>
                            <!--end avatarandtitle-->

                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>

                            <div class="infodestination">

                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>

                            </div>

                        </div>
                        <!--end destination 4-->
                    </li>


                    <li>
                        <!--start destination 5-->
                        <div class="destinationcarousel single-carousel">

                            <img alt="" class="imgdestination" src="resources/assets/img/destinations/destination1.jpg">

                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">

                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="resources/assets/img/destinations/avatar1.jpg">
                                </div>
                                <!--end avatar-->

                                <!--title-->
                                <p class="titledestination">
                                    <a href="index.htm#">Phuket - Thailandia</a>
                                </p>
                                <!--end title-->

                            </div>
                            <!--end avatarandtitle-->

                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>

                            <div class="infodestination">

                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>

                            </div>

                        </div>
                        <!--end destination 5-->
                    </li>

                    <li>
                        <!--start destination 6-->
                        <div class="destinationcarousel single-carousel">

                            <img alt="" class="imgdestination" src="resources/assets/img/destinations/destination2.jpg">

                            <!--start avatarandtitle-->
                            <div class="avatarandtitle">

                                <!--start avatar-->
                                <div class="avatardestination">
                                    <img alt="" src="resources/assets/img/destinations/avatar2.jpg">
                                </div>
                                <!--end avatar-->

                                <!--title-->
                                <p class="titledestination">
                                    <a href="index.htm#">Venice - Italy</a>
                                </p>
                                <!--end title-->

                            </div>
                            <!--end avatarandtitle-->

                            <p class="descriptiondestination">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>

                            <div class="infodestination">

                                <div class="viewdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/viewicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="likedestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/likeicon.png">
                                        234
                                    </span>
                                </div>

                                <div class="commentsdestination">
                                    <span>
                                        <img alt="" src="resources/assets/img/destinations/commenticon.png">
                                        234
                                    </span>
                                </div>

                            </div>

                        </div>
                        <!--end destination 6-->
                    </li>


                </ul>
            </div>
        </div>


    </div>
    <!--end container-->

</section>
<!--end homedestinations--><div class="divider"><span></span></div>
<!--start hometour-->
<section id="hometours">

    <!--start container-->
    <div class="container clearfix">

        <div class="grid_12">
            <div class="titlesection">
                <h1>AWESOME TOURS</h1>
                <h4>LOREM IPSUM DOLOR SIT AMET CONSECTEUR ADIP</h4>
            </div>
        </div>

        <!--start grid-->
        <div class="grid_6">

            <!--START HOME TOUR-->
            <div class="hometour hometour-0 blue fade-down animate1">

                <!--start tophometour-->
                <div class="tophometour">
                    <div class="titleimghometour">
                        <p class="titlehometour">WEST COAST - USA</p>
                        <img alt="" class="imghometour" src="resources/assets/img/tours/tour1.jpg">
                    </div>
                    <div class="datedescriptionhometour">
                        <div class="datedayhometour">
                            <p class="datehometour">
                                JANUARY - 3 to 17
                            </p>
                            <div class="dayhometour">
                                <p>15</p>
                                <span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptionhometour">
                            <p><strong class="titledescriptionhometour">Title description</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus ultrices purus, volutpat malesuada sapien sollicitudin vitae.</p>
                        </div>
                    </div>
                </div>
                <!--end tophometour-->

                <!--start bottomhometour-->
                <div class="bottomhometour">

                    <!--start tabs-->
                    <div class="tabshometour">

                        <div class="hometabs"><ul><li><a title="Weather" href="index.htm#tabs-1"><img class="iconhometabsdefault" alt="" src="resources/assets/img/tours/weather.png" /><img class="iconhometabsactive" alt="" src="resources/assets/img/tours/weatheractive.png" /></a></li><li><a title="Price" href="index.htm#tabs-2"><img class="iconhometabsdefault" alt="" src="resources/assets/img/tours/money.png" /><img class="iconhometabsactive" alt="" src="resources/assets/img/tours/moneyactive.png" /></a></li><li><a title="Gallery" href="index.htm#tabs-3"><img class="iconhometabsdefault" alt="" src="resources/assets/img/tours/gallery.png" /><img class="iconhometabsactive" alt="" src="resources/assets/img/tours/galleryactive.png" /></a></li></ul>
                            <div class="contenthometab weatherhometab" id="tabs-1">
                                <img alt="" src="resources/assets/img/tours/weathertour-blue.png" /><p><strong>RAIN 35 C°</strong></p>
                            </div>
                            <div class="contenthometab moneyhometab" id="tabs-2">
                                <img alt="" src="resources/assets/img/tours/moneytour-blue.png" /><p><strong>2.000 $</strong></p>
                            </div>
                            <div class="contenthometab galleryhometab" id="tabs-3">
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="resources/assets/img/tours/gallery1.jpg"><img src="resources/assets/img/tours/gallery1.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="resources/assets/img/tours/gallery2.jpg"><img src="resources/assets/img/tours/gallery2.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="resources/assets/img/tours/gallery3.jpg"><img src="resources/assets/img/tours/gallery3.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="resources/assets/img/tours/gallery4.jpg"><img src="resources/assets/img/tours/gallery4.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="resources/assets/img/tours/gallery5.jpg"><img src="resources/assets/img/tours/gallery5.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-1" href="resources/assets/img/tours/gallery6.jpg"><img src="resources/assets/img/tours/gallery6.jpg" alt="" /></a>
                            </div>
                        </div>

                    </div>
                    <!--end tabs-->

                    <!--start listhometour-->
                    <div class="listhometour">
                        <ul>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                        </ul>
                    </div>
                    <!--end listhometour-->

                    <!--start footer hometour-->
                    <div class="footerhometour">

                        <div class="contacthometour">
                            <a href="index.htm#">
								<span>
									<img alt="" src="resources/assets/img/tours/contacticon.png">
									CONTACT
								</span>
                            </a>
                        </div>

                        <div class="morehometour">
                            <a href="index.htm#">
								<span>
									<img alt="" src="resources/assets/img/tours/moreicon.png">
									MORE
								</span>
                            </a>
                        </div>

                    </div>
                    <!--end footer hometour-->

                </div>
                <!--end bottomhometour-->

            </div>
            <!--END HOME TOUR-->

        </div>
        <!--end grid-->


        <!--start grid-->
        <div class="grid_6">

            <!--START HOME TOUR-->
            <div class="hometour hometour-1 green fade-down animate2">

                <!--start tophometour-->
                <div class="tophometour">
                    <div class="titleimghometour">
                        <p class="titlehometour">YUCATAN - MEXICO</p>
                        <img alt="" class="imghometour" src="resources/assets/img/tours/tour2.jpg">
                    </div>
                    <div class="datedescriptionhometour">
                        <div class="datedayhometour">
                            <p class="datehometour">
                                JANUARY - 3 to 17
                            </p>
                            <div class="dayhometour">
                                <p>15</p>
                                <span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptionhometour">
                            <p><strong class="titledescriptionhometour">Title description</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus ultrices purus, volutpat malesuada sapien sollicitudin vitae.</p>
                        </div>
                    </div>
                </div>
                <!--end tophometour-->

                <!--start bottomhometour-->
                <div class="bottomhometour">

                    <!--start tabs-->
                    <div class="tabshometour">

                        <div class="hometabs"><ul><li><a title="Weather" href="index.htm#tabs-4"><img class="iconhometabsdefault" alt="" src="resources/assets/img/tours/weather.png" /><img class="iconhometabsactive" alt="" src="resources/assets/img/tours/weatheractive.png" /></a></li><li><a title="Price" href="index.htm#tabs-5"><img class="iconhometabsdefault" alt="" src="resources/assets/img/tours/money.png" /><img class="iconhometabsactive" alt="" src="resources/assets/img/tours/moneyactive.png" /></a></li><li><a title="Gallery" href="index.htm#tabs-6"><img class="iconhometabsdefault" alt="" src="resources/assets/img/tours/gallery.png" /><img class="iconhometabsactive" alt="" src="resources/assets/img/tours/galleryactive.png" /></a></li></ul>
                            <div class="contenthometab weatherhometab" id="tabs-4">
                                <img alt="" src="resources/assets/img/tours/weathertour-green.png" /><p><strong>CLOUDY 35 C°</strong></p>
                            </div>
                            <div class="contenthometab moneyhometab" id="tabs-5">
                                <img alt="" src="resources/assets/img/tours/moneytour-green.png" /><p><strong>2.500 $</strong></p>
                            </div>
                            <div class="contenthometab galleryhometab" id="tabs-6">
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="resources/assets/img/tours/gallery1.jpg"><img src="resources/assets/img/tours/gallery1.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="resources/assets/img/tours/gallery2.jpg"><img src="resources/assets/img/tours/gallery2.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="resources/assets/img/tours/gallery3.jpg"><img src="resources/assets/img/tours/gallery3.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="resources/assets/img/tours/gallery4.jpg"><img src="resources/assets/img/tours/gallery4.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="resources/assets/img/tours/gallery5.jpg"><img src="resources/assets/img/tours/gallery5.jpg" alt="" /></a>
                                <a class="fancybox-thumbs" data-fancybox-group="gallery-2" href="resources/assets/img/tours/gallery6.jpg"><img src="resources/assets/img/tours/gallery6.jpg" alt="" /></a>
                            </div>
                        </div>

                    </div>
                    <!--end tabs-->

                    <!--start listhometour-->
                    <div class="listhometour">
                        <ul>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                            <li><p>Lorem ipsum dolor sit<span class="bulletlisthometour"></span></p></li>
                        </ul>
                    </div>
                    <!--end listhometour-->

                    <!--start footer hometour-->

                    <div class="footerhometour">

                        <div class="contacthometour">
                            <a href="index.htm#">
								<span>
									<img alt="" src="resources/assets/img/tours/contacticon.png">
									CONTACT
								</span>
                            </a>
                        </div>

                        <div class="morehometour">
                            <a href="index.htm#">
								<span>
									<img alt="" src="resources/assets/img/tours/moreicon.png">
									MORE
								</span>
                            </a>
                        </div>

                    </div>
                    <!--end footer hometour-->

                </div>
                <!--end bottomhometour-->

            </div>
            <!--END HOME TOUR-->

        </div>
        <!--end grid-->


    </div>
    <!--end container-->

</section>
<!--end hometour--><div class="divider"><span></span></div>
<!--start homeclients-->
<section class="sectionhome">

    <!--start container-->
    <div class="container clearfix">

        <div class="grid_12">
            <div class="titlesection">
                <h1>TOUR OPERATORS</h1>
                <h4>LOREM IPSUM DOLOR SIT AMET CONSECTEUR ADIP</h4>
            </div>
        </div>

        <div class="grid_3">
            <div class="imgclient fade-left animate1">
                <img alt="" src="resources/assets/img/clients/client1.png">
            </div>
        </div>

        <div class="grid_3">
            <div class="imgclient fade-left animate2">
                <img alt="" src="resources/assets/img/clients/client2.png">
            </div>
        </div>

        <div class="grid_3">
            <div class="imgclient fade-left animate3">
                <img alt="" src="resources/assets/img/clients/client3.png">
            </div>
        </div>

        <div class="grid_3">
            <div class="imgclient fade-left animate4">
                <img alt="" src="resources/assets/img/clients/client4.png">
            </div>
        </div>

    </div>
    <!--end container-->

</section>
<!--end homeclients--><div class="divider"><span></span></div>
<!--start footer-->
<footer id="footer">

    <!--start container-->
    <div class="container clearfix">

        <div class="grid_3 gridfooter">
            <h3>LOVE TRAVEL</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lorem, mattis quis convallis ac</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lorem, mattis quis convallis ac</p>
        </div>

        <div class="grid_3 gridfooter">
            <h3>CONTACTS</h3>
            <p>Address: Broadway Road 234 - 35127<br />Phone: +001 3072341187<br />Mail: info@lovetravel.com</p>
            <p class="socialfooter"><a href="index.htm#"><img alt="" src="resources/assets/img/footer/facebook.jpg" /></a><a href="index.htm#"><img alt="" src="resources/assets/img/footer/dribble.jpg" /></a><a href="index.htm#"><img alt="" src="resources/assets/img/footer/twitter.jpg" /></a><a href="index.htm#"><img alt="" src="resources/assets/img/footer/instagram.jpg" /></a><a href="index.htm#"><img alt="" src="resources/assets/img/footer/google.jpg" /></a></p>
        </div>

        <div class="grid_3 gridfooter">
            <h3>TWEET</h3>

            <div id="tweets"></div>

        </div>

        <div class="grid_3 gridfooter">
            <h3>NEWSLETTER</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lorem, mattis quis convallis ac</p>

            <!--start form-->
            <form class="newsletterfooter">
                <input type="text" />
                <input type="submit" />
            </form>
            <!--end form-->

        </div>

    </div>
    <!--end container-->

</footer>
<!--end footer-->

<!--start copyright-->
<section id="copyright">

    <!--start container-->
    <div class="container">

        <div class="grid_12">
            <p>© Copyright 2013 by Nicdark - All Rights Reserved</p>
        </div>

    </div>
    <!--end container-->

    <div class="backtotop">
        <a href="index.htm#startpage"><img alt="" src="resources/assets/img/footer/arrowbacktotop.png" /></a>
    </div>

</section>
<!--end copyright-->
<!--Start js-->
<script src="resources/assets/js/jquery.min.js"></script> <!--Jquery-->
<script src="resources/assets/js/jquery-ui.js"></script> <!--Jquery UI-->
<script src="resources/assets/js/excanvas.js"></script> <!--canvas need for ie-->
<script src="resources/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!--rev slider-->
<script src="resources/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!--rev slider-->
<script type="text/javascript" src="resources/assets/showbizpro/js/jquery.themepunch.plugins.min.js"></script> <!--showbiz-->
<script type="text/javascript" src="resources/assets/showbizpro/js/jquery.themepunch.showbizpro.min.js"></script> <!--showbiz-->
<script src="resources/assets/js/scroolto.js"></script> <!--Scrool To-->
<script src="resources/assets/js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
<script src="resources/assets/js/jquery.easy-pie-chart.js"></script> <!--Chart-->
<script src="resources/assets/js/fancybox/jquery.fancybox.js"></script> <!--main fancybox-->
<script src="resources/assets/js/fancybox/jquery.fancybox-thumbs.js"></script> <!--fancybox thumbs-->
<script src="resources/assets/js/jquery.inview.min.js"></script> <!--inview-->
<script src="resources/assets/js/menu/hoverIntent.js"></script> <!--superfish-->
<script src="resources/assets/js/menu/superfish.min.js"></script> <!--superfish-->
<script src="resources/assets/js/menu/tinynav.min.js"></script> <!--tinynav-->
<script src="resources/assets/js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
<script src="resources/assets/js/settings.js"></script> <!--settings-->
<!--End js-->

<script type='text/javascript'>
    /* <![CDATA[ */


    //start carousel
    jQuery(document).ready(function() {

        jQuery('.showbiz-container').showbizpro({
            dragAndScroll:"on",
            visibleElementsArray:[4,3,2,1]
        });

    });
    //end carousel


    //start revolution slider
    var revapi;

    jQuery(document).ready(function() {

        revapi = jQuery('.tp-banner-full-width').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight:650,
                    hideThumbs:10,
                    navigationType:"none",
                    fullWidth:"on",
                    forceFullWidth:"on"
                });

    });	//ready
    //end revolution slider


    //start chart
    $(document).ready(function(){

        $('.percentagehome').easyPieChart({
            size: 140,
            rotate: 0,
            lineWidth: 10,
            animate: 1000,
            barColor: '#55738F',
            trackColor: 'transparent',
            scaleColor: false,
            lineCap: 'butt',
        });

    });
    //end chart

    //start tour
    $(document).ready(function(){

        var qnthometour = $('.hometour').length;


        setInterval(function(){

            i=0;

            while ( i < qnthometour ){

                //title and img hometours height
                var titleimghometourheight = $(".hometour-"+i+" .titleimghometour").height();
                var datedayhometourheight = $(".hometour-"+i+" .datedayhometour").height();

                $(".hometour-"+i+" .descriptionhometour").css({
                    "height": titleimghometourheight - datedayhometourheight
                });

                //tabshometourheight
                var tabshometourheight = $(".hometour-"+i+" .tabshometour").height();
                var footerhometourheight = $(".hometour-"+i+" .footerhometour").height();

                $(".hometour-"+i+" .listhometour").css({
                    "height": tabshometourheight - footerhometourheight
                });

                i++;
            }

        }, 0);

    });
    //end tour


    //start tab and tooltip
    $(document).ready(function() {
        $(".hometabs").tabs();
        $( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
    });
    //end tab and tooltip


    //start scroll
    $(document).ready(function() {
        //description hometour
        $(".descriptionhometour").niceScroll({
            touchbehavior:false,
            cursorcolor:"#EBEEF2",
            cursoropacitymax:0.9,
            cursorwidth:3,
            autohidemode:true,
            cursorborder:"0px solid #2848BE",
            cursorborderradius:"0px"

        });

        //list home tour
        $(".listhometour, .listarchivedestination").niceScroll({
            touchbehavior:true,
            cursorcolor:"#EBEEF2",
            cursoropacitymax:0.9,
            cursorwidth:3,
            autohidemode:true,
            cursorborder:"0px solid #2848BE",
            cursorborderradius:"0px"

        });
    });
    //end scroll


    //start fancybox
    $(document).ready(function(){

        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : true,
            arrows    : true,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });

    });
    //end fancybox


    /* ]]> */
</script>


<!--analyitcs-->
<script>

</script>
<!--analytics-->


</body>
</html>