<ul id="pq-main-menu" class="navbar-nav ml-auto">
    <li class="menu-item">
        <a href="{{url('/')}}">Home</a>
    </li>
    <?php
        $Category = DB::table('categories')->get();
        ?>
    @foreach($Category as $category)
        @if($category->id == 1 || $category->id == 1 )
            <li class="menu-item">
                <a href="{{url('/')}}/products/{{$category->slung}}" class="navbar-link hover-underline">
                    <div class="separator"></div>
                    <span class="span">{{$category->name}}</span>
                </a>
            </li>
        @else
            <li class="menu-item">
                <a href="{{url('/')}}/products/explore/{{$category->slung}}" class="navbar-link hover-underline">
                    <div class="separator"></div>
                    <span class="span">{{$category->name}}</span>
                </a>
            </li>
        @endif
    @endforeach
    <li class="menu-item">
        <a href="{{url('/')}}/contact-us">Contact Us</a>
    </li>
</ul>
