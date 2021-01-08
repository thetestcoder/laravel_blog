@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')
    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/single.min.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/akea-style-custom.css' type=text/css media=all>

    <div class=akea-page-wrapper id=akea-page-wrapper>
        <div class=akea-header-transparent-substitute></div>
        <div class="akea-content-container akea-container ">
            <div class=" akea-sidebar-wrap clearfix akea-line-height-0 akea-sidebar-style-none">
                <div class=" akea-sidebar-center gdlr-core-column-60 akea-line-height">
                    <div class="akea-content-wrap akea-item-pdlr clearfix">
                        <div class=akea-content-area>
                            <article id=post-7008 class="post-7008 post type-post status-publish format-standard has-post-thumbnail hentry category-food tag-food">
                                <div class="akea-single-article clearfix">
                                    <div class="akea-single-article-title-wrap akea-align-center">
                                        <header class="akea-single-article-head clearfix">
                                            <div class=akea-single-article-head-right>
                                                <h1 class="akea-single-article-title">{{$article->title}}</h1>
                                                <div class=akea-blog-info-wrapper>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-author vcard author post-author "><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><span class=fn><a href=# title="Posts by Janet Jones" rel=author>Janet Jones</a></span></div>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-category "><a href=# rel=tag>Food</a></div>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-tag "><a href=# rel=tag>Food</a></div>
                                                    <div class="akea-blog-info akea-blog-info-font akea-blog-info-comment-number "><span class=akea-head><i class=icon_comment_alt ></i></span>0</div>
                                                </div>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="akea-single-article-thumbnail akea-media-image"><img src="{{asset($article->image)}}" alt width=1300 height=530 title=chinh-le-duc-264152-unsplash><a href=# class=zilla-likes id=zilla-likes-7008 title="Like this"><span class=zilla-likes-count>11</span> <span class=zilla-likes-postfix></span></a></div>
                                    <div class=akea-single-article-content>
                                        <div class=akea-breadcrumbs>
                                            <div class=akea-breadcrumbs-container>
                                                <div class=akea-breadcrumbs-item> <span property=itemListElement typeof=ListItem><a property=item typeof=WebPage title="Go to Akea." href="{{asset('/')}}" class=home><span property=name>Home</span></a>
                                                        <meta property=position content=1>
                                                        </span>&#183;<span property=itemListElement typeof=ListItem><a property=item typeof=WebPage title="Go to the Food category archives." href="#" class="taxonomy category"><span property=name>{{$article->getCategory->name}}</span></a>
                                                        <meta property=position content=2>
                                                        </span>&#183;<span class="post post-post current-item">{{$article->title}}</span></div>
                                            </div>
                                        </div>
                                        <h4>{{$article->title}}</h4>
                                        <p>{!! \Illuminate\Support\Str::of($article->content)->words(2000) !!}</p>
                                        <p><strong>Read This :&nbsp;&nbsp;</strong>&nbsp;<a href=../../../11/11/gutenberg-post-ex-1/index.html#>Traveling in Turkey</a></p>
                                        <ul class="wp-block-gallery aligncenter columns-5 is-cropped">
                                            @foreach($images as $image)
                                                <li class=blocks-gallery-item>
                                                    <figure>
                                                        <a href="{{asset($image->image)}}"><img src="{{asset($image->image)}}" alt data-id=6400 data-link=https://demo.goodlayers.com/akea/2018/05/04/top-5-beach-you-will-need-to-visit-once-in-your-life/rachel-park-366508-unsplash/ class=wp-image-6400 ></a>
                                                    </figure>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <p>{!! \Illuminate\Support\Str::of($article->content)->substr(3000, 10000) !!}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=gdlr-core-page-builder-body></div>
        <div class="akea-bottom-page-builder-container akea-container">
            <div class="akea-bottom-page-builder-sidebar-wrap akea-sidebar-style-none">
                <div class=akea-bottom-page-builder-sidebar-class>
                    <div class="akea-bottom-page-builder-content akea-item-pdlr">
                        <div class="akea-single-nav-area clearfix"><span class="akea-single-nav akea-single-nav-left"><span class="akea-text akea-title-font" >Previous Post</span><a href=../../05/how-to-dress-in-red-style/index.html rel=prev><span class="akea-single-nav-title akea-title-font" >How To Dress In Red Style</span></a></span><span class="akea-single-nav akea-single-nav-right"><span class="akea-text akea-title-font" >Next Post</span><a href=../../14/taking-photo-in-the-middle-of-nature/index.html rel=next><span class="akea-single-nav-title akea-title-font" >Taking Photo In The Middle Of Nature</span></a></span>
                        </div>

                        <div class="akea-single-social-share akea-item-rvpdlr clearfix">
                            <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-social-share-right-text gdlr-core-item-mglr gdlr-core-style-plain" style="padding-bottom: 0px ;">
                                    <span class=gdlr-core-social-share-wrap>
                                        <a class=gdlr-core-social-share-facebook href="#" target=_blank >
                                            <i class="fa fa-facebook" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-google-plus href="#" target=_blank >
                                            <i class="fa fa-google-plus" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-pinterest href="#" target=_blank >
                                            <i class="fa fa-pinterest-p" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-stumbleupon href="#" target=_blank  >
                                            <i class="fa fa-stumbleupon" ></i>
                                        </a>
                                        <a class=gdlr-core-social-share-twitter href="#" target=_blank >
                                            <i class="fa fa-twitter" ></i>
                                        </a>
                                    </span>
                                <span class=gdlr-core-social-share-count>
                                        <span class="gdlr-core-divider gdlr-core-skin-divider"  ></span>
                                        <span class=gdlr-core-count>0</span>
                                        <span class=gdlr-core-suffix>Shares</span>
                                    </span>
                            </div>
                        </div>
                        <div class="akea-single-magazine-author-tags clearfix"><a href=# rel=tag>Food</a></div>
                        <div class="akea-single-related-post-wrap akea-item-rvpdlr">
                            <h3 class="akea-single-related-post-title akea-item-mglr">Related Posts</h3>
                            <div class="gdlr-core-blog-item-holder clearfix">
                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-blog-grid ">
                                        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href=#><img src={{asset('front/')}}/upload/brenda-godinez-228181-unsplash-900x537.jpg alt width=900 height=537 title=brenda-godinez-228181-unsplash></a>
                                                <div class=gdlr-core-blog-thumbnail-category><a href=# rel=tag>Food</a>,<a href=# rel=tag>Photography</a></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-blog-grid-content-wrap>
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;"><a href=# >10 Best Way to Styling Your Food</a></h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' height=50 width=50><a href=../../../../author/author1/index.html title="Posts by Jane Smith" rel=author>Jane Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=../../../10/11/index.html>October 11, 2018</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-30">
                                    <div class="gdlr-core-blog-grid ">
                                        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                <a href=../../../09/05/the-most-beautiful-green-field-on-earth/index.html><img src={{asset('front/')}}/upload/qingbao-meng-330658-unsplash-900x537.jpg alt width=900 height=537 title=qingbao-meng-330658-unsplash></a>
                                                <div class=gdlr-core-blog-thumbnail-category><a href=# rel=tag>Food</a>,<a href=# rel=tag>Photography</a></div>
                                            </div>
                                        </div>
                                        <div class=gdlr-core-blog-grid-content-wrap>
                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;"><a href=../../../09/05/the-most-beautiful-green-field-on-earth/index.html >The Most Beautiful Green Field on Earth</a></h3>
                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><img alt src='upload/avatar.jpeg' class='avatar avatar-50 photo' height=50 width=50><a href=../../../../author/author2/index.html title="Posts by Paul Newman" rel=author>Paul Newman</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href=../../../09/05/index.html>September 5, 2018</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=comments class=akea-comments-area>
                            <div id=respond class=comment-respond>
                                <h4 id="reply-title" class="comment-reply-title akea-content-font">Leave a Reply <small><a rel=nofollow id=cancel-comment-reply-link href=index.html#respond style=display:none;>Cancel Reply</a></small></h4>
                                <form action=# method=post id=commentform class=comment-form novalidate>
                                    <div class=comment-form-comment>
                                        <textarea id=comment name=comment cols=45 rows=8 aria-required=true placeholder=Comment*></textarea>
                                    </div>
                                    <div class=akea-comment-form-author>
                                        <input id=author name=author type=text value placeholder=Name* size=30 aria-required=true>
                                    </div>
                                    <div class=akea-comment-form-email>
                                        <input id=email name=email type=text value placeholder=Email* size=30 aria-required=true>
                                    </div>
                                    <div class=akea-comment-form-url>
                                        <input id=url name=url type=text value placeholder=Website size=30>
                                    </div>
                                    <div class=clear></div>
                                    <p class=comment-form-cookies-consent>
                                        <input id=wp-comment-cookies-consent name=wp-comment-cookies-consent type=checkbox value=yes>
                                        <label for=wp-comment-cookies-consent>Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class=form-submit>
                                        <input name=submit type=submit id=submit class=submit value="Post Comment">
                                    </p>
                                    <p class="antispam-group antispam-group-q" style="clear: both;">
                                        <label>Current ye@r <span class=required>*</span></label>
                                        <input type=hidden name=antspm-a class="antispam-control antispam-control-a" value=2019>
                                        <input type=text name=antspm-q class="antispam-control antispam-control-q" value=5.4 autocomplete=off>
                                    </p>
                                    <p class="antispam-group antispam-group-e" style="display: none;">
                                        <label>Leave this field empty</label>
                                        <input type=text name=antspm-e-email-url-website class="antispam-control antispam-control-e" value autocomplete=off>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
