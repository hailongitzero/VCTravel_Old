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
                        <div class="info-item-media"><img src="{{$post->IMG_TP =='R' ? $post->IMG_URL : url('/').$post->IMG_URL}}" data-at2x="{{$post->IMG_TP =='R' ? substr($post->IMG_URL, 0, -4).'@2x'.substr($post->IMG_URL, -4, 4) : substr(url('/').$post->IMG_URL, 0, -4).'@2x'.substr(url('/').$post->IMG_URL, -4, 4)}}" alt = '{{$post->IMG_ALT}}'>
                            <div class="info-item-text">
                                <div class="info-price font-1"><span>{{$post->TOUR_LENGTH}}</span> {{$post->TOUR_PRICE}} {{$post->CURRENCY_UNIT}}</div>
                                {{--<div class="info-temp font-4"><span>local temperature</span> 36° / 96.8°</div>--}}
                                <p class="info-text">{{$post->TOUR_TIT}}</p>
                            </div>
                        </div>
                        <div class="info-item-content">
                            <div class="main-title">
                                <h3 class="title"><span class="font-2">{{$post->NATIONAL_NM}}</span> {{$post->PROVINCE_NM}}</h3>
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
