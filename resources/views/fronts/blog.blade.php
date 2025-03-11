@extends('front.master')

@section('content')
<main>
    <article>
      <!--
      - #EVENT
    -->

      <section class="section event blogd" aria-label="event">
        <div class="container">
          <h2 class="section-title headline-1 text-center top-topper">
            Our Blogs
          </h2>

          <ul class="grid-list">
            @foreach ($Blog as $blog)
            <li>
                <div class="event-card has-before hover:shine">
                  <div
                    class="card-banner img-holder"
                    style="--width: 350; --height: 450">
                    <a href="{{url('/')}}/blogs/{{$blog->slung}}" class="nzula">
                      <img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" width="350" height="450" loading="lazy"   alt="{{$blog->title}}"   class="img-cover"/>
                    </a>

                    <time class="publish-date label-2" datetime="2022-09-15">
                       {{ date('d/m/Y', strtotime($blog->created_at)) }}
                    </time>
                  </div>

                  <div class="card-content">
                    <p class="card-subtitle label-2 text-center">
                      Decomagna
                    </p>

                    <h3 class="card-title title-2 text-center">
                      {{$blog->title}}
                    </h3>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">Download Our Catalogue <i class="fa fa-download"></i></span>

            <span class="text text-2" aria-hidden="true">Download Our Catalogue <i class="fa fa-download"></i></span>
          </a>
        </div>
      </section>
    </article>
  </main>
@endsection
