@extends('front.master')

@section('content')
@foreach ($Blog as $blog)
<main>
    <br><br>
    <article>
      <!--
      - #SPECIAL DISH
    -->

      <section class="special-dish text-center" aria-labelledby="dish-label">
        <div class="special-dish-banner">
          <img
            src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}"
            width="940"
            height="900"
            loading="lazy"
            alt="{{$blog->title}}"
            class="img-cover"
          />
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">
            <h2 class="headline-1s section-title text-center line-height-normal capitalize bolder" >{{$blog->title}}</h2>

            <p class="section-text">
                {!!html_entity_decode($blog->content)!!}
            </p>


          </div>
        </div>
      </section>

      <!--
      - #EVENT
    -->

      <section class="section event blogd" aria-label="event">
        <div class="container">
          <h2 class="section-title headline-1 text-center">Other blogs</h2>

          <ul class="grid-list gridblog owl-carousel">
            <?php
              $Others = DB::table('blogs')->get();
            ?>
            @foreach ($Others as $others)
            @if($blog->id == $others->id)

            @else
            <li>
                <div class="event-card has-before hover:shine">
                  <div
                    class="card-banner img-holder"
                    style="--width: 350; --height: 450">
                    <a href="{{url('/')}}/blogs/{{$others->slung}}" class="nzula">
                      <img src="{{url('/')}}/uploads/blogs/{{$others->image_one}}" width="350" height="450" loading="lazy"   alt="{{$blog->title}}"   class="img-cover"/>
                    </a>

                    <time class="publish-date label-2" datetime="2022-09-15">
                       {{ date('d/m/Y', strtotime($others->created_at)) }}
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
            @endif
            @endforeach
          </ul>

          <a href="blog.html" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>

        </div>
      </section>
    </article>
  </main>
  @endforeach
@endsection
