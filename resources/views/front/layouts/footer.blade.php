<footer>
    <div class="akea-footer-wrapper ">
        <div class="akea-footer-container akea-container clearfix">
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=text-2 class="widget widget_text akea-widget">
                    <h3 class="akea-widget-title"><span
                            class=akea-widget-head-text>{{$setting->title ?? ''}}</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>
                    <div class=textwidget>
                        <p>Karabük Üniversitesi
                            <br> <span class=gdlr-core-space-shortcode id="span_2207_6"></span>
                            <br> +1-2355-3345-5
                            <br> <span class=gdlr-core-space-shortcode id="span_2207_7"></span>
                            <br> <a id="a_2207_30" href=mailto:call@akeablog.co>umutlion@blogpost.com</a></p>
                    </div>
                </div>
            </div>
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=gdlr-core-custom-menu-widget-2 class="widget widget_gdlr-core-custom-menu-widget akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Kategoriler</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>
                    <div class=menu-category-container>
                        <ul id=menu-category class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">
                            @include('front.widgets.category_header')
                        </ul>
                    </div>
                </div>
            </div>
            <div class="akea-footer-column akea-item-pdlr akea-column-20">
                <div id=text-3 class="widget widget_text akea-widget">
                    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Bizi takip edin</span><span
                            class=akea-widget-head-divider></span></h3><span class=clear></span>

                    <div class=textwidget>
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align"
                             id="div_2207_16">
                            <a href="{{$setting->twitter ?? ''}}" target=_blank class=gdlr-core-social-network-icon
                               title=twitter id="a_2207_31" rel="noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="{{$setting->github ?? ''}}" target=_blank class=gdlr-core-social-network-icon
                               title=github
                               id="a_2207_32" rel="noopener noreferrer">
                                <i class="fa fa-github"></i>
                            </a>
                            <a href="{{$setting->linkedin ?? ''}}" target=_blank class=gdlr-core-social-network-icon
                               title=linkedin id="a_2207_33" rel="noopener noreferrer">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="{{$setting->medium ?? ''}}" target=_blank class=gdlr-core-social-network-icon
                               title=medium
                               id="a_2207_34" rel="noopener noreferrer">
                                <i class="fa fa-medium"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=akea-copyright-wrapper>
        <div class="akea-copyright-container akea-container clearfix">
            <div class="akea-copyright-left akea-item-pdlr">Copyright 2021 Umut Çaylı Blog, All Right Reserved</div>
        </div>
    </div>
</footer>
</div>
</div><a href=#akea-top-anchor class="akea-footer-back-to-top-button  akea-with-recent-post-bar "
         id=akea-footer-back-to-top-button><i class="fa fa-angle-up"></i></a>
<div class="akea-footer-recent-post-button " id=akea-footer-recent-post-button><i class=icon_plus></i></div>
<div class="akea-footer-recent-post-bar " id=akea-footer-recent-post-bar>
    <div class=akea-footer-recent-post-bar-close><i class=icon_minus-06></i></div>

</div>

<script src='{{asset('front/')}}/js/jquery/jquery.js'></script>
<script src='{{asset('front/')}}/js/jquery/jquery-migrate.min.js'></script>
<script>
    var zilla_likes = {
        "ajaxurl": ""
    };
</script>
<script src='{{asset('front/')}}/plugins/zilla-likes/scripts/zilla-likes.js'></script>
<script src='{{asset('front/')}}/plugins/goodlayers-core/plugins/combine/script.js'></script>
<script>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "#"
    };
</script>
<script src='{{asset('front/')}}/plugins/goodlayers-core/include/js/page-builder.js'></script>
<script src='{{asset('front/')}}/js/jquery/ui/effect.min.js'></script>
<script src='{{asset('front/')}}/js/script-core.js'></script>


<script src="{{asset('front/')}}/plugins/quform/js/plugins.js"></script>
<script src="{{asset('front/')}}/plugins/quform/js/scripts.js"></script>

<!-- user login -->
<script src="{{asset('front/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="{{asset('front/')}}/vendor/animsition/js/animsition.min.js"></script>
<script src="{{asset('front/')}}/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('front/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('front/')}}/vendor/select2/select2.min.js"></script>
<script src="{{asset('front/')}}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('front/')}}/vendor/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('front/')}}/vendor/countdowntime/countdowntime.js"></script>
<script src="{{asset('front/')}}/js/main.js"></script>

</body>
</html>
