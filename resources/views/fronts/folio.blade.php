@extends('front.master')

@section('content')

  <main style="position: relative; clear:both; padding:100px; background-color: #ffffff !important">
    @foreach ($Folio as $item)
    <div class="product_versions" style="text-align: center; line-height:normal; background-color: rgb(238,238,240); padding:100px">
        <h1 class="blue-heading">{{$item->name}}</h1>


         <h3 class="product_version_h3" style="font-weight: 100; max-width:700px; margin:0px auto; color: rgb(87,68,57);">
            {!!html_entity_decode($item->meta)!!}
         </h3>

     </div>




    <div class="product_version_before_slider">
            <div class="great_orders">
                <div class="slider-container" id="slider1">
                    <div class="slider">
                        <div class="slide">
                            <img
                                src="{{url('/')}}/uploads/portfolios/{{$item->image_one}}"
                            />
                        </div>
                        <div class="slide">
                            <img
                                src="{{url('/')}}/uploads/portfolios/{{$item->image_two}}"
                            />
                        </div>
                        <div class="slide">
                            <img
                                src="{{url('/')}}/uploads/portfolios/{{$item->image_three}}"
                            />
                        </div>
                        <!-- Add more slide elements with appropriate images -->
                    </div>

                    <div class="preview">
                        <!-- Preview images will be generated dynamically through JavaScript -->
                    </div>
                </div>
            </div>
    </div>
    <div class="great_orders folio-text">
            {!!html_entity_decode($item->content)!!}
    </div>
    @endforeach

  </main>

@endsection
