@extends('front.layouts.master')
@section('title', 'Contact')
@section('content')
    <div class=akea-page-wrapper id=akea-page-wrapper>

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">
                {{ \Illuminate\Support\Facades\Session::get('success') }}
                @php
                    \Illuminate\Support\Facades\Session::forget('success');
                @endphp
            </div>
        @endif

        <div class=gdlr-core-page-builder-body>
            <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 245px 0px;">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h1 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 45px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #1e1e1e ;">Contact Akea<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h1></div>
                            </div>
                        </div>
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <div class="gdlr-core-title-item-title gdlr-core-skin-title  gdlr-core-title-font" style="font-size: 23px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;color: #9f9f9f ;">Get in tour with us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 50px 0px;" data-skin="White Text">
                <div class=gdlr-core-pbf-background-wrap style="background-color: #f5f5f5 ;"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="White Link" id=gdlr-core-column-1>
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -160px 0px 0px 0px;padding: 75px 0px 15px 50px;">
                                <div class=gdlr-core-pbf-background-wrap style="background-color: #f28f4e ;border-radius: 4px 0px 0px 4px;-moz-border-radius: 4px 0px 0px 4px;-webkit-border-radius: 4px 0px 0px 4px;background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-moz-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-o-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-webkit-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff ;font-size: 32px ;min-width: 32px ;min-height: 32px ;"></i></div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 17px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Phone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 15px ;text-transform: none ;color: #ffffff ;">
                                                <p>A wonderful serenity has taken possession of my entire soul, like these.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 16px ;text-transform: none ;color: #ffffff ;">
                                                <p><a href=#>5416970746</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="White Link" id=gdlr-core-column-2>
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -160px -1px 0px -1px;padding: 75px 10px 15px 40px;">
                                <div class=gdlr-core-pbf-background-wrap style="background-color: #f28f4e ;border-radius: 0px 0px 0px 0px;-moz-border-radius: 0px 0px 0px 0px;-webkit-border-radius: 0px 0px 0px 0px;background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-moz-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-o-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-webkit-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon fa fa-envelope-open-o" style="color: #ffffff ;font-size: 32px ;min-width: 32px ;min-height: 32px ;"></i></div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 17px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 15px ;text-transform: none ;color: #ffffff ;">
                                                <p>A wonderful serenity has taken possession of my entire soul, like these.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 16px ;text-transform: none ;color: #ffffff ;">
                                                <p><a href=#>contact@akeagoodlayers.com</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="White Link" id=gdlr-core-column-3>
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -160px 0px 0px 0px;padding: 75px 40px 15px 10px;">
                                <div class=gdlr-core-pbf-background-wrap style="background-color: #f28f4e ;border-radius: 0px 4px 4px 0px;-moz-border-radius: 0px 4px 4px 0px;-webkit-border-radius: 0px 4px 4px 0px;background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-moz-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-o-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));-webkit-background: linear-gradient(rgba(242, 143, 78, 1), rgba(236, 106, 42, 1));"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><i class=" gdlr-core-icon-item-icon icon_compass_alt" style="color: #ffffff ;font-size: 32px ;min-width: 32px ;min-height: 32px ;"></i></div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 17px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Location<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 15px ;text-transform: none ;color: #ffffff ;">
                                                <p>A wonderful serenity has taken possession of my entire soul, like these.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 16px ;text-transform: none ;color: #ffffff ;">
                                                <p><a href=#>View on Google</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 20px 0px;">
                <div class=gdlr-core-pbf-background-wrap style="background-color: #f3f3f3 ;"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 810px ;">
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 12px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 34px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #010101 ;">and we will get back to you.
                                                    <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                            <div class=gdlr-core-text-box-item-content style="font-size: 16px ;text-transform: none ;">
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                            <div role=form class=wpcf7 id=wpcf7-f1979-p1964-o1 lang=en-US dir=ltr>
                                                <div class=screen-reader-response></div>
                                                <form class="quform" action="{{route('contact.post')}}" method="post" enctype="multipart/form-data" onclick="">
                                                    @csrf
                                                    <div class="quform-elements">
                                                        <div class="quform-element">

                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                        <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                                    </span>

                                                        </div>
                                                        <div class="quform-element">

                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                        <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                                    </span>

                                                        </div>
                                                        <div class="quform-element">

                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                        <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                                    </span>

                                                        </div>

                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button"><span>Send</span></button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=gdlr-core-pbf-element>
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 40px ;" id=gdlr-core-title-item-1>
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <div class="gdlr-core-title-item-title gdlr-core-skin-title  gdlr-core-title-font" style="font-size: 19px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #989898 ;">and we will get back to you.<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
                <div class=gdlr-core-pbf-background-wrap style="background-color: #ffffff ;"></div>

            </div>
            <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                <div class="wpgmp_map_container wpgmp-map-1" rel=map1>
                                    <iframe style="width:100%; height:480px; border:0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d19905.696399556287!2d-0.3007084089960577!3d51.417531259591925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s2334+Peterson+Street+Kingston+UK+London+H14D!5e0!3m2!1sen!2s!4v1546697086219" width="600" height="450" ></iframe>
                                    <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
