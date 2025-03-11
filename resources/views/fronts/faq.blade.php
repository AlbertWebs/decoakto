@extends('front.master')

@section('content')
{{-- --}}
<main>
    <article>
        @foreach ($Faq as $faq)
            <section class="section event bg-white-whity" aria-label="event">
                <div class="container">
                    <h2 class="headline-1 section-title text-black-blacky text-center">{{$faq->title}}</h1>
                            <div class="text-black-blacky">
                                <p>{!!html_entity_decode($faq->content)!!}</p>
                            </div>
                </div>
            </section>
        @endforeach
    </article>
</main>
{{-- --}}
@endsection
