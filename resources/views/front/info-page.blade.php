@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')
        <div class=akea-page-wrapper id=akea-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " id="div_aff0_0">
                    <div class=gdlr-core-pbf-background-wrap>
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="opacity: 0.8 ;background-image: url({{$page->image}}) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_0">{{$page->title}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_aff0_0">İşte benim hikayem...</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " id="div_aff0_2">
                    <div class=gdlr-core-pbf-background-wrap id="div_aff0_3"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_4">
                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id=gdlr-core-column-1>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_aff0_5" data-sync-height=half-height>
                                    <div class=gdlr-core-pbf-background-wrap>
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="opacity: 0.8 ;background-image: url({{$page->image2}}) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30" id=gdlr-core-column-2>
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_aff0_7" data-sync-height=half-height>
                                    <div class=gdlr-core-pbf-background-wrap id="div_aff0_8"></div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_1">{{$page->title}}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_aff0_9">
                                                <div class=gdlr-core-text-box-item-content id="div_aff0_10">
                                                    <p>{!! (html_entity_decode($page->hakkimda))  !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " id="div_aff0_11">
                    <div class=gdlr-core-pbf-background-wrap id="div_aff0_12"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_13">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="About Column">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_aff0_14">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=upload/about-icon-1.png alt width=50 height=50 title=about-icon-1></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_aff0_2">Temiz ve Anlaşılır İçerik</h3></div>
                                                    <div class=gdlr-core-column-service-content id="div_aff0_15">
                                                        <p>temiz içerğiğn contenti girilecek</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="About Column">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_aff0_16">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image"><img src=upload/about-icon-2.png alt width=52 height=52 title=about-icon-2></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_aff0_3">A Lot Of Readers</h3></div>
                                                    <div class=gdlr-core-column-service-content id="div_aff0_17">
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated small.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="About Column">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" id="div_aff0_18">
                                                <div class="gdlr-core-column-service-media gdlr-core-media-image" id="div_aff0_19"><img src=upload/about-icon-3.png alt width=48 height=50 title=about-icon-3></div>
                                                <div class=gdlr-core-column-service-content-wrapper>
                                                    <div class=gdlr-core-column-service-title-wrap>
                                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" id="h3_aff0_4">Drive SEO Result</h3></div>
                                                    <div class=gdlr-core-column-service-content id="div_aff0_20">
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated small.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " id="div_aff0_21" data-skin="White Text">
                    <div class=gdlr-core-pbf-background-wrap id="div_aff0_22">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="opacity: 0.8 ;background-image: url({{$page->bg}}) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>

                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation=fadeInUp data-gdlr-animation-duration=600ms data-gdlr-animation-offset=0.8>
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_24">
                            <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_25">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_26"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=4000 data-counter-start=0 data-counter-end=100>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_27">Fotoğraf</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_28">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_29"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=4000 data-counter-start=0 data-counter-end=10>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_30">Post Yazısı</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb " id="div_aff0_31">
                                                <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" id="div_aff0_32"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration=4000 data-counter-start=0 data-counter-end=10+>0</span><span class=gdlr-core-counter-item-suffix>+</span></div>
                                                <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" id="div_aff0_33">Üye Sayımız</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " id="div_aff0_37">
                    <div class=gdlr-core-pbf-background-wrap id="div_aff0_38"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_39">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="About Column">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_aff0_40">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_aff0_5">Found in 2009 by professional American writer<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                                <div class=gdlr-core-divider-container id="div_aff0_41">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_aff0_42"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-40" data-skin="About Column">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" id="div_aff0_43">
                                                <div class=gdlr-core-text-box-item-content id="div_aff0_44">
                                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-pbf-element>
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class=gdlr-core-text-box-item-content id="div_aff0_45">
                                                    <p><strong>Yet I feel that I never was a greater artist than now.</strong> When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gdlr-core-pbf-wrapper ">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_aff0_55">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                    <div class=gdlr-core-divider-container id="div_aff0_57">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_aff0_58"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid">
                                    <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=upload/banner-1.jpg alt width=290 height=136 title=banner-1></div>
                                        </div>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=upload/banner-2.jpg alt width=290 height=136 title=banner-2></div>
                                        </div>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=upload/banner-3.jpg alt width=290 height=136 title=banner-3></div>
                                        </div>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=upload/banner-4.jpg alt width=290 height=136 title=banner-4></div>
                                        </div>
                                        <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                            <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src=upload/banner-5.jpg alt width=290 height=136 title=banner-5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
