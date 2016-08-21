<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/16/2016
 * Time: 3:53 PM
 */?>
<!-- call out section-->
<section class="page-section pt-90 pb-80 bg-main pattern relative">
    <div class="container">
        <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
                <div class="col-md-5">
                    <h6 class="title-section-top gray font-4">subscribe today</h6>
                    <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2>
                    <i class="fa fa-envelope-o call-out-icon" aria-hidden="true"></i>
                    {{--<i class="flaticon-suntour-email call-out-icon"></i>--}}
                </div>
                <div class="col-md-7">
                    <form action="php/contacts-process.htm" method="post" class="form contact-form mt-10">
                        <div class="input-container">
                            <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row">
                            <i class="fa fa-envelope-o icon-left" aria-hidden="true"></i>
                            <button type="submit" class="subscribe-submit">
                                <i class="fa fa-arrow-right icon-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ! call out section-->
