<div id=gdlr-core-category-background-widget-2 class="widget widget_gdlr-core-category-background-widget akea-widget">
    <h3 class="akea-widget-title"><span class=akea-widget-head-text>Category</span><span class=akea-widget-head-divider></span></h3><span class=clear></span>
    <ul class=gdlr-core-category-background-widget>
        @foreach($categories as $category)
            <li class=gdlr-core-with-bg id="li_2207_0"><a href=#><span class=gdlr-core-category-background-widget-content ><span class=gdlr-core-category-background-widget-title >{{$category->name}}</span><span class=gdlr-core-category-background-widget-count >5</span></span></a></li>
        @endforeach
    </ul>
</div>
