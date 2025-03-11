@extends('front.master')

@section('content')
{{-- --}}
<main>
    <article>

            <section class="section event bg-white-whity" aria-label="event" style="font-size:15px !important; color:#000000; line-height: normal; ">
                <div class="container" style="text-align:center;">
                    @foreach ($Terms as $faq)
                    <h3 style="color: rgb(87,68,57); font-size:2.2rem">{{$faq->title}}</h3>
                    <p>{!!html_entity_decode($faq->content)!!}</p>
                    @endforeach
                </div>
            </section>
    </article>
</main>
{{-- --}}
@endsection
