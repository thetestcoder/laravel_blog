@isset($categories)
    @foreach($categories as $category)
        <li class="menu-item" data-size=60><a href={{route('category', $category->slug)}}>{{$category->name}}</a></li>
    @endforeach
@endif
