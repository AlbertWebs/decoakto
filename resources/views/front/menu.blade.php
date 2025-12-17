<ul id="pq-main-menu" class="navbar-nav ml-auto">
    <?php
        $currentUrl = Request::url();
        $currentPath = Request::path();
    ?>
    <li class="menu-item">
        <a href="{{url('/')}}" class="{{ $currentPath == '' || $currentPath == '/' ? 'active' : '' }}">Home</a>
    </li>
    <?php
        $Category = DB::table('categories')->limit('3')->get();
    ?>
    @foreach($Category as $category)
        @if($category->has_products == 1 )
            <li class="menu-item">
                <a href="{{url('/')}}/products/{{$category->slung}}" class="navbar-link hover-underline {{ strpos($currentPath, 'products/'.$category->slung) !== false ? 'active' : '' }}">
                    <div class="separator"></div>
                    <span class="span">{{$category->name}}</span>
                </a>
            </li>
        @else
            <li class="menu-item">
                <a href="{{url('/')}}/products/explore/{{$category->slung}}" class="navbar-link hover-underline {{ strpos($currentPath, 'products/explore/'.$category->slung) !== false || strpos($currentPath, 'products/'.$category->slung) !== false ? 'active' : '' }}">
                    <div class="separator"></div>
                    <span class="span">{{$category->name}}</span>
                </a>
            </li>
        @endif
    @endforeach
    <li class="menu-item">
        <a href="{{url('/')}}/blogs" class="{{ strpos($currentPath, 'blogs') !== false ? 'active' : '' }}">Updates</a>
    </li>
    <li class="menu-item">
        <a href="{{url('/')}}/contact-us" class="{{ strpos($currentPath, 'contact') !== false ? 'active' : '' }}">Contact Us</a>
    </li>
</ul>
