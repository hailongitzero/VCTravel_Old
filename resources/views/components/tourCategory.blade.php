<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/16/2016
 * Time: 3:45 PM
 */
?>
<!-- page section destination-->
<section class="page-section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6 class="title-section-top font-4">Special offers</h6>
                <h2 class="title-section"><span>Tours</span> Category</h2>
                <div class="cws_divider mb-25 mt-5"></div>
                <p>Nullam ac dolor id nulla finibus pharetra. Sed sed placerat mauris. Pellentesque lacinia imperdiet interdum. Ut nec nulla in purus consequat lobortis. Mauris lobortis a nibh sed convallis.</p>
            </div>
            <div class="col-md-4"><img src="/resources/assets/pic/promo-1.png" data-at2x="/resources/assets/pic/promo-1@2x.png" alt class="mt-md-0 mt-minus-70"></div>
        </div>
    </div>
    <div class="features-tours-full-width">
        <div class="features-tours-wrap clearfix">
            @if(isset($rpvCate))
                @foreach($rpvCate as $cate)
                    <div class="features-tours-item">
                        <div class="features-media"><img src="{{$cate->IMG_TP =='R' ? $cate->IMG_URL : url('/').$cate->IMG_URL}}" data-at2x="{{$cate->IMG_TP =='R' ? substr($cate->IMG_URL, 0, -4).'@2x'.substr($cate->IMG_URL, -4, 4) : substr(url('/').$cate->IMG_URL, 0, -4).'@2x'.substr(url('/').$cate->IMG_URL, -4, 4)}}" alt>
                            <div class="features-info-top">
                                <div class="info-price font-4"><span>Total</span> {{$cate->TOT_POST}} tours</div>
                                {{--<div class="info-temp font-4"><span>local temperature</span> 30° / 86°</div>--}}
                                <p class="info-text">{{$cate->POST_INTRO}}</p>
                            </div>
                            <div class="features-info-bot">
                                <h4 class="title">
                                    {{--<span class="font-4">{{$cate->POST_NM}}</span> --}}{{$cate->POST_NM}}
                                </h4>
                                <a href="hotels-details.html" class="button">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- ! page section-->
