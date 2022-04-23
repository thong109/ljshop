@extends('layout')
@section('content')
<section id="hoatdong">
    <div class="container">
        <!-- Main Heading -->
        <div class="heading text-center" >
            <h4>Danh sách yêu thích</h4>
            <div style="border-bottom: 1px solid white;margin-bottom: 10px;"></div>
        </div>
    </div>
    <!-- New Arrival -->
    <div class="arrival-block container">
        <!-- Item -->
        @foreach ($wishlist as $w)
        <div class="item">
            <!-- Images -->
            <img class="img-1" src="{{asset('public/uploads/product/'.$w->getProductFavorite->product_image)}}" alt="" > <img class="img-2" src="{{asset('public/uploads/product/'.$w->getProductFavorite->product_image)}}" alt="" >
            <!-- Overlay  -->
            <div class="overlay">
                <!-- Price -->
                <div class="position-center-center"> <a href="{{asset('public/uploads/product/'.$w->getProductFavorite->product_image)}}" data-lighter><i class="fa fa-eye"> Preview</i></a> </div>
                <div class="position-top"><a href="{{URL::to('del-wishlist/'.$w->product_favorite_id)}}">Delete</a></div>
            </div>
            <div class="item-name" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chi tiết Royal Canin - Poodle adult 1.5kg">
                <a id="wistlist_producturl14" href="{{URL::to('/chi-tiet/'.$w->getProductFavorite->product_slug)}}">{{ $w->getProductFavorite->product_name }}</a>
                  <p>{{ $w->getProductFavorite->product_content }}</p>
                </div>
        </div>
        @endforeach
    </div>

</section>
@endsection
