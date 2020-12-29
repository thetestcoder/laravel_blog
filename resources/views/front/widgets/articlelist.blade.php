@if(count($articles)>0)
@foreach($articles as $article)
    <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
        <div class="gdlr-core-blog-thumbnail-wrap clearfix">
            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                <a href=#><img src="{{$article->image}}" alt width=1000 height=486 title=pexels-photo-871053></a>
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
            <div class=gdlr-core-blog-content>{{Str::limit($article->content,150)}}</div>
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
    @else
        <div class="alert alert-danger">
            <h1>Bu kategoriye ait yazı bulunamadı.</h1>
        </div>
@endif

