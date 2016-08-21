<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/16/2016
 * Time: 3:21 PM
 */
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
                                @if($mnData->MN_DSP_TP == 'G')
                                    <li class="megamenu">
                                        <a href="{{ $mnData->MN_NM_LINK }}" class="mn-has-sub active">{{$mnData->MN_NM }} <i class="fa fa-angle-down button_open"></i></a>
                                        <ul class="mn-sub mn-has-multi">
                                            @foreach($menuData as $mnFirstChild)
                                                @if($mnFirstChild->MN_LVL == 1 && $mnFirstChild->MN_PRT_ID == $mnData->MN_ID)
                                                    <li class="mn-sub-multi"><a class="mn-group-title">{{$mnFirstChild->MN_NM}}</a>
                                                        <ul>
                                                            @foreach($menuData as $mnSecondChild)
                                                                @if($mnSecondChild->MN_LVL == 2 && $mnSecondChild->MN_PRT_ID == $mnFirstChild->MN_ID)
                                                                    <li><a href="page-about-us.html">{{$mnSecondChild->MN_NM}}</a></li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $mnData->MN_NM_LINK }}" class="mn-has-sub active">{{$mnData->MN_NM }} <i class="fa fa-angle-down button_open"></i></a>
                                        <ul class="mn-sub">
                                            @foreach($menuData as $mnFirstChild)
                                                @if($mnFirstChild->MN_LVL == 1 && $mnFirstChild->MN_PRT_ID == $mnData->MN_ID)
                                                    <li><a href="{{$mnFirstChild->MN_NM_LINK}}">{{$mnFirstChild->MN_NM}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                                @if($mnData->MN_SEQ < $menuInitData['mnMaxSeq'])
                                    <li class="slash">/</li>
                                @endif
                            @endif
                        @endforeach
                    @endif
                    {{--<!-- Search-->--}}
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
