<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/16/2016
 * Time: 3:50 PM
 */
?>
<!-- recomended section-->
<section class="small-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6 class="title-section-top font-4">Top rated</h6>
                <h2 class="title-section"><span>Recommended</span> Tours</h2>
                <div class="cws_divider mb-25 mt-5"></div>
                <p>Maecenas commodo odio ut vulputate cursus. Integer in egestas lectus. Nam volutpat feugiat mi vitae mollis. Aenean tristique dolor bibendum mi scelerisque ultrices non at lorem.</p>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
        </div>
        <div class="row">
            <!-- Recommended item-->
            @if(isset($tourRecommended))
                @foreach($tourRecommended as $tourRcm)
                    <div class="col-md-4">
                        <div class="recom-item">
                            <div class="recom-media"><a href="hotels-details.html">
                                    <div class="pic"><img src="{{$tourRcm->IMG_TP =='R' ? $tourRcm->IMG_URL : url('/').$tourRcm->IMG_URL}}" data-at2x="{{$tourRcm->IMG_TP =='R' ? substr($tourRcm->IMG_URL, 0, -4).'@2x'.substr($tourRcm->IMG_URL, -4, 4) : substr(url('/').$tourRcm->IMG_URL, 0, -4).'@2x'.substr(url('/').$tourRcm->IMG_URL, -4, 4)}}" alt></div></a>
                                <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$tourRcm->PROVINCE_NM}}, {{$tourRcm->NATIONAL_NM}}</div>
                            </div>
                            <!-- Recomended Content-->
                            <div class="recom-item-body recom-item-body-fix"><a href="hotels-details.html">
                                    <h6 class="blog-title">{{$tourRcm->TOUR_TIT}}</h6></a>
                                {{--<div class="stars stars-4"></div>--}}
                                <div class="recom-price"><span class="font-2">{{$tourRcm->TOUR_PRICE.' '.$tourRcm->CURRENCY_UNIT}}</span><br/> {{$tourRcm->TOUR_LENGTH}}</div>
                                <p class="mb-30">{{$tourRcm->TOUR_SHT_CNT}}</p><a href="hotels-details.html" class="cws-button cws-button-fix small alt">Book now</a>
                                <div class="action font-2">{{$tourRcm->TOUR_PRM_PRICE}}%</div>
                            </div>
                            <!-- Recomended Image-->
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- ! recomended section-->
