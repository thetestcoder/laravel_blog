<!DOCTYPE html>
<html lang=en-US class=no-js>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">


    <title>@yield('title', 'Blog Sitesi')</title>


    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/akea-style-custom.css' type=text/css media=all>


    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=PT+Serif' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Open+Sans' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek' type=text/css media=all>


</head>

<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>
<div class=akea-mobile-header-wrap>
    <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation " id=akea-mobile-header>
        <div class="akea-mobile-header-container akea-container clearfix">
            <div class="akea-logo  akea-item-pdlr">
                <div class=akea-logo-inner>
                    <a class href=index.html><img src=upload/logo-2-1.png alt width=140 height=33 title=logo-2></a>
                </div>
            </div>
            <div class=akea-mobile-menu-right>
                <div class=akea-main-menu-search id=akea-mobile-top-search><i class="fa fa-search"></i></div>
                <div class=akea-top-search-wrap>
                    <div class=akea-top-search-close></div>
                    <div class=akea-top-search-row>
                        <div class=akea-top-search-cell>
                            <form role=search method=get class=search-form action=#>
                                <input type=text class="search-field akea-title-font" placeholder=Search... value name=s>
                                <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                <input type=submit class=search-submit value=Search>
                                <div class=akea-top-search-close><i class=icon_close></i></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                    <div class="akea-overlay-menu-content akea-navigation-font">
                        <div class=akea-overlay-menu-close></div>
                        <div class=akea-overlay-menu-row>
                            <div class=akea-overlay-menu-cell>
                                <ul id=menu-main-navigation class=menu>
                                    <li class="menu-item menu-item-home current-menu-item"><a href=index.html aria-current=page>Home</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item menu-item-home current-menu-item "><a href=index.html aria-current=page>Homepage</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=contact.html>Contact</a></li>
                                            <li class="menu-item"><a href=author.html>Author</a></li>
                                            <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                            <li class="menu-item"><a href=price-table.html>Price Table</a></li>
                                            <li class="menu-item"><a href=maintenance.html>Maintenance</a></li>
                                            <li class="menu-item"><a href=coming-soon.html>Coming Soon</a></li>
                                            <li class="menu-item"><a href=404.html>404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Kategoriler</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=photography.html>Photography</a></li>
                                            <li class="menu-item"><a href=travel.html>Travel</a></li>
                                            <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                            <li class="menu-item"><a href=food.html>Food</a></li>
                                            <li class="menu-item"><a href=technology.html>Technology</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>
                                            <li class="menu-item"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-full-no-sidebar.html>Blog Full</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                    <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-columns-with-frame.html>Blog Columns</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                    <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href=about-us.html>About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="akea-body-outer-wrapper ">
    <div class="akea-body-wrapper clearfix  akea-with-frame">
        <header class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide" data-navigation-offset=75px>
            <div class=akea-header-background></div>
            <div class="akea-header-container  akea-container">
                <div class="akea-header-container-inner clearfix">
                    <div class="akea-navigation akea-item-pdlr clearfix ">
                        <div class=akea-main-menu id=akea-main-menu>
                            <ul id=menu-main-navigation-1 class=sf-menu>
                                <li class="menu-item menu-item-home current-menu-item akea-normal-menu"><a href=index.html class=sf-with-ul-pre>Home</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item menu-item-home current-menu-item " data-size=60><a href=index.html>Homepage</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>Pages</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href=contact.html>Contact</a></li>
                                        <li class="menu-item" data-size=60><a href=author.html>Author</a></li>
                                        <li class="menu-item" data-size=60><a href=gallery.html>Gallery</a></li>
                                        <li class="menu-item" data-size=60><a href=price-table.html>Price Table</a></li>
                                        <li class="menu-item" data-size=60><a href=maintenance.html>Maintenance</a></li>
                                        <li class="menu-item" data-size=60><a href=coming-soon.html>Coming Soon</a></li>
                                        <li class="menu-item" data-size=60><a href=404.html>404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>Category</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href=photography.html>Photography</a></li>
                                        <li class="menu-item" data-size=60><a href=travel.html>Travel</a></li>
                                        <li class="menu-item" data-size=60><a href=fashion.html>Fashion</a></li>
                                        <li class="menu-item" data-size=60><a href=food.html>Food</a></li>
                                        <li class="menu-item" data-size=60><a href=technology.html>Technology</a></li>
                                    </ul>
                                </li>
                                <li class=akea-center-nav-menu-item>
                                    <div class=akea-above-logo>
                                        <a href=index.html><img src={{asset('front/')}}/upload/logo-1-1.png alt width=348 height=252 title=logo-1></a>
                                    </div>
                                    <div class="akea-logo  akea-item-pdlr">
                                        <div class=akea-logo-inner>
                                            <a class href=index.html><img src=upload/logo-2-1.png alt width=140 height=33 title=logo-2></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=blog-full-right-sidebar-with-frame.html class=sf-with-ul-pre>Layout</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>

                                        <li class="menu-item menu-item-has-children" data-size=60><a href=blog-full-no-sidebar.html class=sf-with-ul-pre>Blog Full</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a href=blog-grid-overlay-no-space.html class=sf-with-ul-pre>Blog Grid Overlay</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size=60><a href=blog-columns-with-frame.html class=sf-with-ul-pre>Blog Columns</a>
                                            <ul class=sub-menu>
                                                <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item akea-normal-menu"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                <li class="menu-item akea-normal-menu"><a href=about-us.html>About</a></li>
                            </ul>
                            <div class=akea-navigation-slide-bar id=akea-navigation-slide-bar></div>
                        </div>
                        <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                            <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu><a class="akea-overlay-menu-icon akea-right-menu-button akea-top-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                                <div class="akea-overlay-menu-content akea-navigation-font">
                                    <div class=akea-overlay-menu-close></div>
                                    <div class=akea-overlay-menu-row>
                                        <div class=akea-overlay-menu-cell>
                                            <ul id=menu-main-navigation-2 class=menu>
                                                <li class="menu-item menu-item-home current-menu-item"><a href=index.html aria-current=page>Home</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item menu-item-home current-menu-item "><a href=index.html aria-current=page>Homepage</a></li></ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=contact.html>Contact</a></li>
                                                        <li class="menu-item"><a href=author.html>Author</a></li>
                                                        <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                                        <li class="menu-item"><a href=price-table.html>Price Table</a></li>
                                                        <li class="menu-item"><a href=maintenance.html>Maintenance</a></li>
                                                        <li class="menu-item"><a href=coming-soon.html>Coming Soon</a></li>
                                                        <li class="menu-item"><a href=404.html>404 Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=photography.html>Photography</a></li>
                                                        <li class="menu-item"><a href=travel.html>Travel</a></li>
                                                        <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                                        <li class="menu-item"><a href=food.html>Food</a></li>
                                                        <li class="menu-item"><a href=technology.html>Technology</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>
                                                        <li class="menu-item"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                                        <li class="menu-item menu-item-has-children"><a href=blog-full-no-sidebar.html>Blog Full</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                                <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                                <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                                <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                                <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item menu-item-has-children"><a href=blog-columns-with-frame.html>Blog Columns</a>
                                                            <ul class=sub-menu>
                                                                <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                                <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                                <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href=about-us.html>About</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=akea-main-menu-search id=akea-top-search><i class="fa fa-search"></i></div>
                            <div class=akea-top-search-wrap>
                                <div class=akea-top-search-close></div>
                                <div class=akea-top-search-row>
                                    <div class=akea-top-search-cell>
                                        <form role=search method=get class=search-form action=#>
                                            <input type=text class="search-field akea-title-font" placeholder=Search... value name=s>
                                            <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                            <input type=submit class=search-submit value=Search>
                                            <div class=akea-top-search-close><i class=icon_close></i></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="akea-main-menu-left-wrap akea-main-menu-left-social clearfix akea-item-pdlr akea-navigation-top">
                            <a href=# target=_blank class=akea-top-bar-social-icon title=facebook>
                                <i class="fa fa-facebook" ></i>
                            </a>
                            <a href=# target=_blank class=akea-top-bar-social-icon title=google-plus>
                                <i class="fa fa-google-plus" ></i>
                            </a>
                            <a href=# target=_blank class=akea-top-bar-social-icon title=pinterest>
                                <i class="fa fa-pinterest-p" ></i>
                            </a>
                            <a href=# target=_blank class=akea-top-bar-social-icon title=twitter>
                                <i class="fa fa-twitter" ></i>
                            </a>
                            <a href=# target=_blank class=akea-top-bar-social-icon title=vimeo>
                                <i class="fa fa-vimeo" ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
