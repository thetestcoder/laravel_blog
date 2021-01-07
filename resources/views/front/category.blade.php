@extends('front.layouts.master')
@section('title', $category->name.' Kategorisi'.count($articles))
@section('content')
<div class=akea-page-wrapper id=akea-page-wrapper>
    <div class=gdlr-core-page-builder-body>
        <div class="gdlr-core-pbf-wrapper " id="div_2207_0" id=gdlr-core-wrapper-1>
            <div class=gdlr-core-pbf-background-wrap></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class=gdlr-core-pbf-element>
                        <div class="gdlr-core-post-slider-item gdlr-core-item-pdb gdlr-core-item-pdlr clearfix " id="div_2207_1">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type=slider data-effect=default data-nav=navigation data-disable-autoslide=1>
                                <ul class=slides>
                                @include('front.widgets.articlelist')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-sidebar-wrapper ">
            <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" id="div_2207_2">
                    <div class=gdlr-core-pbf-sidebar-content-inner data-skin="Blog List">
                        <div class=gdlr-core-pbf-element>
                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                    @foreach($articles as $article)
                                    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href=#><img src="{{asset($article->image)}}" alt width=1000 height=486 title=pexels-photo-871053></a>
                                            </div><a href=# class=zilla-likes id=zilla-likes-6613 title="Like this"><span class=zilla-likes-count>261</span> <span class=zilla-likes-postfix></span></a></div>
                                             <div class=gdlr-core-blog-full-content-wrap>

                                                 <div class="gdlr-core-blog-full-head clearfix">
                                                     <div class=gdlr-core-blog-full-head-right>
                                                         <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_3">
                                                             <a href="{{route('single', [$article->getCategory->slug,$article->slug])}}" >{{$article->title}}</a>
                                                         </h3>
                                                         <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                             <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                 <img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50>
                                                                 <a href=# title="Posts by Jane Smith" rel=author>Jane Smith</a>
                                                             </span>
                                                             <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                 <a href=#>{{$article->created_at->diffForHumans()}}</a>
                                                             </span>
                                                             <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                 <a href=# rel=tag>{{$article->getCategory->name}}</a>
                                                             </span>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class=gdlr-core-blog-content>{!! \Illuminate\Support\Str::of($article->content)->words(100) !!}</div>
                                                 <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-style-plain" id="div_2207_3">
                                                     <span class=gdlr-core-social-share-wrap>
                                                         <a class=gdlr-core-social-share-facebook href="#" target=_blank  id="a_2207_0"  >
                                                             <i class="fa fa-facebook" ></i>
                                                         </a>
                                                         <a class=gdlr-core-social-share-google-plus href="#" target=_blank  id="a_2207_1"  >
                                                             <i class="fa fa-google-plus" ></i>
                                                         </a>
                                                         <a class=gdlr-core-social-share-pinterest href="#" target=_blank  id="a_2207_2"  >
                                                             <i class="fa fa-pinterest-p" ></i>
                                                         </a>
                                                         <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank  id="a_2207_3"  >
                                                             <i class="fa fa-stumbleupon" ></i>
                                                         </a>
                                                         <a class=gdlr-core-social-share-twitter href="#" target=_blank   id="a_2207_4"  >
                                                             <i class="fa fa-twitter" ></i>
                                                         </a>
                                                     </span>
                                                 </div>
                                             </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-right-align gdlr-core-item-pdlr">
                                    {{$articles->links()}}
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  akea-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" data-skin="Blog List" id="div_2207_9">
                            <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                <div id=text-4 class="widget widget_text akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>About Me</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    <div class=textwidget>
                                        <p><img class="alignnone size-full wp-image-6650" src=upload/about-image.png alt width=120>
                                            <br> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated.</p> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-transparent gdlr-core-button-with-border" href=# target=_blank id="a_2207_10" rel="noopener noreferrer"><span class=gdlr-core-content >more about me</span><i class="gdlr-core-pos-right arrow_right"  ></i></a></div>
                                </div>
                                <div id=text-7 class="widget widget_text akea-widget">
                                    <div class=textwidget>
                                        <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" id="div_2207_10">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_11">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_9">Follow Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_2207_12"><a href=# target=_blank class=gdlr-core-social-network-icon title=facebook id="a_2207_11" rel="noopener noreferrer"><i class="fa fa-facebook" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=pinterest id="a_2207_12" rel="noopener noreferrer"><i class="fa fa-pinterest-p" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=skype id="a_2207_13" rel="noopener noreferrer"><i class="fa fa-skype" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=twitter id="a_2207_14" rel="noopener noreferrer"><i class="fa fa-twitter" ></i></a><a href=# target=_blank class=gdlr-core-social-network-icon title=instagram id="a_2207_15" rel="noopener noreferrer"><i class="fa fa-instagram" ></i></a></div>
                                            <br> <span class=gdlr-core-space-shortcode id="span_2207_3"></span>
                                            <br>
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top" id="div_2207_13">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_10">Newsletter<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div> Fill your email below to subscribe to my newsletter<span class=gdlr-core-space-shortcode id="span_2207_4"></span>
                                            <br>
                                            <div class="tnp tnp-subscription-minimal ">
                                                <form action="#" method=post>
                                                    <input class=tnp-email type=email required name=ne value placeholder=Email>
                                                    <input class=tnp-submit type=submit value=Subscribe>
                                                </form>
                                            </div> <span class=gdlr-core-space-shortcode id="span_2207_5"></span></div>
                                    </div>
                                </div>
                                <div id=gdlr-core-recent-post-widget-2 class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Popular Post</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=upload/qingbao-meng-330658-unsplash-150x150.jpg alt width=150 height=150 title=qingbao-meng-330658-unsplash></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class=gdlr-core-recent-post-widget-title><a href=#>The Most Beautiful Green Field on Earth</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>September 5, 2019</a></span></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=upload/alexander-mils-365917-unsplash-150x150.jpg alt width=150 height=150 title=alexander-mils-365917-unsplash></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class=gdlr-core-recent-post-widget-title><a href=#>How to Shoot Food on Your Phone Like a Pro</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Kally Gordon" rel=author>Kally Gordon</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>August 5, 2019</a></span></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src=upload/gaetano-cessati-120488-unsplash-150x150.jpg alt width=150 height=150 title=gaetano-cessati-120488-unsplash></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class=gdlr-core-recent-post-widget-title><a href=#>One Of The Most Beautiful Beach In Brazil</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Paul Newman" rel=author>Paul Newman</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>July 25, 2019</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=text-5 class="widget widget_text akea-widget">
                                    <div class=textwidget>
                                        <p>
                                            <a href=#><img src=upload/banner-600.jpg alt width=300 height=600 class="alignnone size-full wp-image-6652"></a>
                                        </p>
                                    </div>
                                </div>

                               @include('front.widgets.category_widget')

                                <div id=tag_cloud-2 class="widget widget_tag_cloud akea-widget">
                                    <h3 class="akea-widget-title">
                                        <span class=akea-widget-head-text>Tags</span>
                                        <span class=akea-widget-head-divider></span>
                                    </h3>
                                    <span class=clear></span>
                                    <div class=tagcloud>
                                        <a href=# class="tag-cloud-link tag-link-117 tag-link-position-1" id="a_2207_16" aria-label="Beach (2 items)">Beach</a>
                                        <a href=# class="tag-cloud-link tag-link-130 tag-link-position-2" id="a_2207_17" aria-label="Dress (3 items)">Dress</a>
                                        <a href=# class="tag-cloud-link tag-link-10 tag-link-position-3" id="a_2207_18" aria-label="Fashion (7 items)">Fashion</a>
                                        <a href=# class="tag-cloud-link tag-link-126 tag-link-position-4" id="a_2207_19" aria-label="Food (5 items)">Food</a>
                                        <a href=# class="tag-cloud-link tag-link-140 tag-link-position-5" id="a_2207_20" aria-label="Gadget (1 item)">Gadget</a>
                                        <a href=# class="tag-cloud-link tag-link-138 tag-link-position-6" id="a_2207_21" aria-label="Holiday (1 item)">Holiday</a>
                                        <a href=# class="tag-cloud-link tag-link-14 tag-link-position-7" id="a_2207_22" aria-label="Nature (2 items)">Nature</a>
                                        <a href=# class="tag-cloud-link tag-link-142 tag-link-position-8" id="a_2207_23" aria-label="Ocean (1 item)">Ocean</a>
                                        <a href=# class="tag-cloud-link tag-link-131 tag-link-position-9" id="a_2207_24" aria-label="Photography (4 items)">Photography</a>
                                        <a href=# class="tag-cloud-link tag-link-17 tag-link-position-10" id="a_2207_25" aria-label="Post Format (7 items)">Post Format</a>
                                        <a href=# class="tag-cloud-link tag-link-139 tag-link-position-11" id="a_2207_26" aria-label="Style (1 item)">Style</a>
                                        <a href=# class="tag-cloud-link tag-link-128 tag-link-position-12" id="a_2207_27" aria-label="Tech (10 items)">Tech</a>
                                        <a href=# class="tag-cloud-link tag-link-20 tag-link-position-13" id="a_2207_28" aria-label="Tips (2 items)">Tips</a>
                                        <a href=# class="tag-cloud-link tag-link-115 tag-link-position-14" id="a_2207_29" aria-label="Travel (10 items)">Travel</a>
                                    </div>
                                </div>
                                <div id=text-6 class="widget widget_text akea-widget">
                                    <div class=textwidget>
                                        <p>
                                            <a href=#><img class="alignnone size-full wp-image-6651" src=upload/banner-250.jpg alt width=300 height=250></a>
                                        </p>
                                    </div>
                                </div>
                                <div id=gdlr-core-recent-post-widget-3 class="widget widget_gdlr-core-recent-post-widget akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Recent Post</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-full">
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href=upload/post-vr.jpg><img src=upload/post-vr-1000x486.jpg alt width=1000 height=486 title=post-vr></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>Trending</a></span></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href=#>Check Out The Most Awesome VR Headset in 2020</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Jane Smith" rel=author>Jane Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>November 7, 2019</a></span></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href=upload/yiran-ding-624696-unsplash.jpg><img src=upload/yiran-ding-624696-unsplash-1000x486.jpg alt width=1000 height=486 title=yiran-ding-624696-unsplash></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>Trending</a></span></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href=#>Or It&#8217;s Now The End of Smartphones?</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Janet Jones" rel=author>Janet Jones</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>November 7, 2019</a></span></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-recent-post-widget clearfix">
                                            <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image">
                                                <a class="gdlr-core-lightgallery gdlr-core-js " href=upload/christopher-burns-271403-unsplash.jpg><img src=upload/christopher-burns-271403-unsplash-1000x486.jpg alt width=1000 height=486 title=christopher-burns-271403-unsplash></a><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href=# rel=tag>Trending</a></span></div>
                                            <div class=gdlr-core-recent-post-widget-content>
                                                <div class="gdlr-core-recent-post-widget-title gdlr-core-title-font"><a href=#>XE Entertainment Brings You New Experience of Fun</a></div>
                                                <div class=gdlr-core-recent-post-widget-info><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=# title="Posts by Kally Gordon" rel=author>Kally Gordon</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=#>November 7, 2019</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=gdlr-core-instagram-widget-2 class="widget widget_gdlr-core-instagram-widget akea-widget">
                                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Instagram</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
                                    <div class="gdlr-core-instagram-widget clearfix">
                                        <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" width=150 height=150 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" width=150 height=150 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" width=150 height=150 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-20 gdlr-core-column-first gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" width=150 height=150 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-1><img src="upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" width=150 height=150 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-20 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/44898222_267175490542576_6183516087002698981_n7d5a.jpg" data-sub-html="So blue" data-lightbox-group=gdlr-core-img-group-1><img src="upload/44898222_267175490542576_6183516087002698981_n7d5a.jpg" width=150 height=150 alt="So blue"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " id="div_2207_14">
                    <div class=gdlr-core-pbf-background-wrap></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_2207_15">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_2207_11">Our Instagram<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                </div>
                            </div>
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-instagram-item gdlr-core-item-pdb  gdlr-core-item-pdlr">
                                    <div class="gdlr-core-instagram-item-content clearfix">
                                        <div class=" gdlr-core-column-12 gdlr-core-column-first gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="upload/43984881_188819121994766_3216343442474950648_n7d5a.jpg" width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="upload/45313783_2158345917812845_5821103427645807423_n7d5a.jpg" width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="upload/43914986_550843855339634_9131648220594836021_n7d5a.jpg" width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="upload/44371528_263042657731432_6452096443180721983_n7d5a.jpg" width=640 height=640 alt></a>
                                        </div>
                                        <div class=" gdlr-core-column-12 gdlr-core-media-image">
                                            <a class="gdlr-core-lightgallery gdlr-core-js " href="upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" data-lightbox-group=gdlr-core-img-group-2><img src="upload/44292623_399451020592905_6536115609442328805_n7d5a.jpg" width=640 height=640 alt></a>
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
