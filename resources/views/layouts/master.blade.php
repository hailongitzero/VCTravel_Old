<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 18/07/2016
 * Time: 21:29
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
    <meta name="description" content="@yield('description')"> <!--insert your description here-->
    <meta name="author" content="@yield('author')"> <!--insert your name here-->
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

<!-- left menu components--!>
@include('components.leftMenu')

        <!-- header components--!>
@include('components.header')

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
<!--end right search-->

<!--start content-->
@section('content')
@show
<!--end content-->


<!--footer components-->
@include('components.footer')

@include('components.copyright')
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
<script src="resources/assets/js/jquery.flexslider-min.js"></script> <!--flexslider-->
<script src="resources/assets/js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
<script src="resources/assets/js/settings.js"></script> <!--settings-->
<!--End js-->

<script type='text/javascript'>
    /* <![CDATA[ */

    //start flexslider
    jQuery(document).ready(function() {

        $('.flex-carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 5,
            asNavFor: '.flex-slider'
        });

        $('.flex-slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: ".flex-carousel",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });

    });
    //end flexslider

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