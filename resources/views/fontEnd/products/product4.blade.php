<div class="container">
    <div class="title-of-section">Recently Viewed Products</div>
    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false"
         data-dots="false" data-loop="true" data-margin="0"
         data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
        @foreach($allpdt['2'] as $pdt)
            <div class="product-item style1">

                <div class="product-inner equal-elem">

                    <div class="product-thumb">

                        <div class="thumb-inner">

                            {{-- <a href="#"><img src="{{asset('public/images/product')}}/{{$pdt->id}}-1.{{$pdt->picture1}}" height="250px" alt="r1"></a>--}}

                            <a href="{{url('/')}}/{{Replace($pdt->cname)}}/{{Replace($pdt->scname)}}/{{Replace($pdt->id)}}/{{Replace($pdt->title)}}">
                                <img src="{{url('/')}}/{{pictureHelper($pdt->id, $pdt->picture1, $pdt->picture2, $pdt->picture3)}}" alt="product image">
                            </a>
                        </div>
                        @if($pdt->discount > 0)
                            <span class="onsale">-{{$pdt->discount}}%</span>
                        @endif
                        <a href="#" class="quick-view">Quick View</a>
                    </div>
                    <div class="product-innfo">
                        <div class="product-name"><a href="#">{{$pdt->title}}</a></div>
                        <span class="price">
                         <ins>{!! discount($pdt->price, $pdt->discount) !!}</ins>

                            @if($pdt->discount > 0)
                                <del>৳ {{ $pdt->price }}</del>
                            @endif

                        </span>
                        <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                        <div class="group-btn-hover style2">
                            <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                            <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                            <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        @endforeach
    </div>
</div>


{{--@php--}}
{{--print_r($allpdt)--}}
{{--@endphp--}}