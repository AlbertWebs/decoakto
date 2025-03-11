@extends('front.master-blog')


@section('content')
@foreach ($Blog as $blog)
 <!-- Blog Single -->
 <section class="blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-10" style="margin:0 auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pq-blog-post">
                            <div class="pq-post-media">
                                <img style="max-height:700px" decoding="async" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="blog-image">
                                {{-- <div class="pq-post-category">
                                    <a href="in-home-choose-a-light-floor-if-at-all-possible.html">marble</a>
                                </div> --}}
                            </div>
                            <div class="pq-blog-contain">
                                <div class="pq-post-meta">
                                    <ul>
                                        <li class="pq-post-meta">
                                            <a href="in-home-choose-a-light-floor-if-at-all-possible.html">
                                                {{ date('M d,Y', strtotime($blog->created_at)) }}</a>
                                        </li>
                                        <li class="pq-post-comment">
                                            <a href="in-home-choose-a-light-floor-if-at-all-possible.html">0
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <p>
                                    {!!html_entity_decode($blog->content)!!}
                                </p>


                                <blockquote class="pq-mb-30">
                                    <p> {!!html_entity_decode($blog->meta)!!}</p>

                                </blockquote>
                            </div>
                        </div>
                        <div class="pq-single-post-bottom-holder">
                            <div class="pq-single-post-left pq-single-post-info">
                                <div class="pq-single-post-tags">
                                    <span class="pq-single-post-tags-title">Tags:</span>
                                    <ul class="pq-single-post-tags-list">
                                        <li class="pq-tags-share">
                                            <a href="#">flooring</a>
                                        </li>
                                        <li class="pq-tags-share">
                                            <a href="#">laminate</a>
                                        </li>
                                        {{-- <li class="pq-tags-share">
                                            <a href="#">marbles</a>
                                        </li>
                                        <li class="pq-tags-share">
                                            <a href="#">stone</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="pq-single-post-right pq-single-post-info">
                                <div class="pq-single-post-social-share">
                                    <span class="pq-single-post-social-title">Share:</span>
                                    <ul class="pq-single-post-shortcode-list">
                                        <li class="pq-facebook-share">
                                            <a href="#"><span class="pq-share-link"><i class="fab fa-facebook-f"></i></span></a>
                                        </li>
                                        <li class="pq-twitter-share">
                                            <a href="#"><span class="pq-share-link"><i class="fab fa-twitter"></i></span></a>
                                        </li>
                                        <li class="pq-google-share">
                                            <a href="#"><span class="pq-share-link"><i class="fab fa-google-plus"></i></span></a>
                                        </li>
                                        <li class="pq-linkedin-share">
                                            <a href="#"><span class="pq-share-link"><i class="fab fa-linkedin"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                           $Current = $blog->id;
                           $NextId = $Current+1;
                           $Previous = $Current-1;
                           $NextFetch = \App\Models\Blog::find($NextId);
                           $PreviousFetch = \App\Models\Blog::find($Previous);

                        ?>
                        <div class="pq-single-post-navigation">
                            @if($PreviousFetch==null)
                            <a class="pq-single-post-nav pq-prev" href="#">
                                <div class="pq-single-post-nav-image-holder">
                                    <img src="{{url('/')}}/uploads/logo/favicon.png" class="pq-single-post-nav-image wp-post-image" alt="Decomagna">
                                </div>
                                <div class="pq-single-post-nav-content">
                                    <span class="pq-single-post-nav-label">Prev post</span>
                                    <div class="pq-single-post-nav-title">
                                        <h4>This is the First</h4>
                                    </div>
                                </div>
                            </a>
                            @else
                            <a class="pq-single-post-nav pq-prev" href="{{url('/')}}/blogs/{{$PreviousFetch->slung}}">
                                <div class="pq-single-post-nav-image-holder">
                                    <img src="{{url('/')}}/uploads/blogs/{{$PreviousFetch->image_one}}" class="pq-single-post-nav-image wp-post-image" alt="{{$PreviousFetch->title}}">
                                </div>
                                <div class="pq-single-post-nav-content">
                                    <span class="pq-single-post-nav-label">Prev post</span>
                                    <div class="pq-single-post-nav-title">
                                        <h4>{{$PreviousFetch->title}}</h4>
                                    </div>
                                </div>
                            </a>
                            @endif

                            @if($NextFetch==null)
                                <a class="pq-single-post-nav pq-next" href="#">
                                    <div class="pq-single-post-nav-content">
                                        <span class="pq-single-post-nav-label">Next post</span>
                                        <div class="pq-single-post-nav-title">
                                            <h4>This is the Last Post</h4>
                                        </div>
                                    </div>
                                    <div class="pq-single-post-nav-image-holder">
                                        <img src="{{url('/')}}/uploads/logo/favicon.png" class="pq-single-post-nav-image wp-post-image" alt="Decomagna">
                                    </div>
                                </a>
                            @else
                                <a class="pq-single-post-nav pq-next" href="{{url('/')}}/blogs/{{$NextFetch->slung}}">
                                    <div class="pq-single-post-nav-content">
                                        <span class="pq-single-post-nav-label">Next post</span>
                                        <div class="pq-single-post-nav-title">
                                            <h4>{{$NextFetch->title}}</h4>
                                        </div>
                                    </div>
                                    <div class="pq-single-post-nav-image-holder">
                                        <img src="{{url('/')}}/uploads/blogs/{{$NextFetch->image_one}}" class="pq-single-post-nav-image wp-post-image" alt="{{$NextFetch->title}}">
                                    </div>
                                </a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Single -->
@endforeach

@endsection
