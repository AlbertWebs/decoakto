@extends('front.master-category')


@section('content')
@foreach ($Categories as $Category)
 <!-- Breadcrumb -->
<br><br><br><br><br><br>
    @if($Category->has_products == 1)
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow animated fadeInRight">
                <div class="pq-section-title pq-style-1">
                    <h5 class="pq-section-main-title">{{$PageTitle}}</h5>
                </div>
            </div>
            <div class="col-lg-4 wow animated fadeInRight">
                <div class="button-align">
                    <a class="pq-button pq-button-flat" href="{{url('/')}}/products/{{$Category->slung}}">
                        <div class="pq-button-block">
                        <span class="pq-button-text">Explore Options </span>
                        <span class="pq-button-line-right"></span>
                        <i class="ion ion-ios-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="divider pq-right-border pq-45"></div>
            </div>
        </div>

    </div>
    @endif

<!-- Breadcrumb -->

<!-- About Us -->
    <section class="blog-single">
        <div class="container">
           <iframe id="category-content-frame-{{$Category->id}}" class="category-content-frame" src="{{ route('embed.category', ['id' => $Category->id]) }}" style="width:100%;border:0;" scrolling="no"></iframe>
           <script>
           (function(){
               var frame = document.getElementById('category-content-frame-{{$Category->id}}');
               if(!frame){ return; }
               function setHeight(h){
                   var height = parseInt(h, 10);
                   if (!isNaN(height) && height > 0) {
                       frame.style.height = height + 'px';
                   }
               }
               window.addEventListener('message', function(e){
                   if (!e || !e.data) return;
                   if (e.data.type === 'category-embed-height' && e.data.id === {{ $Category->id }}) {
                       setHeight(e.data.height);
                   }
               });
           })();
           </script>
        </div>
    </section>


    {{--  --}}
@endforeach

@endsection
