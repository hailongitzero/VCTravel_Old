<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/16/2016
 * Time: 3:31 PM
 */
?>
<div class="tp-banner-container">
    <div class="tp-banner-slider">
        <ul>
            @if(isset($sliderContent))
                @foreach($sliderContent as $sldData)
                    {!! $sldData->SLD_HTML_CODE !!}
                @endforeach
            @endif
        </ul>
    </div>
    <!-- slider info-->
    <div class="slider-info-wrap clearfix">
        <div class="slider-info-content">
            @if(isset($sliderPost))
                @foreach($sliderPost as $post)
                    <div class="slider-info-item">
                        <div class="info-item-media"><img src="{{$post->IMG_URL}}" data-at2x="/resources/assets/pic/slider-info-1@2x.jpg" alt = '{{$post->IMG_ALT}}'>
                            <div class="info-item-text">
                                <div class="info-price font-1"><span>{{$post->TOUR_LENGTH}}</span> {{$post->TOUR_PRICE}} {{$post->CURRENCY_UNIT}}</div>
                                {{--<div class="info-temp font-4"><span>local temperature</span> 36° / 96.8°</div>--}}
                                <p class="info-text">{{$post->TOUR_TIT}}</p>
                            </div>
                        </div>
                        <div class="info-item-content">
                            <div class="main-title">
                                <h3 class="title"><span class="font-4">{{$post->NATIONAL_NM}}</span> {{$post->PROVINCE_NM}}</h3>
                                <div class="price"><span>{{$post->TOUR_PRICE}} {{$post->CURRENCY_UNIT}}</span> {{$post->TOUR_LENGTH}}</div><a href="hotels-details.html" class="button">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <!-- ! slider-info-->
</div>
