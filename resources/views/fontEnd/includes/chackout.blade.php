@extends('./fontEnd/master')

@section("content")
    <main class="site-main shopping-cart">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="{{url('/')}}">Home </a></li>
                <li class="active"><a href="#">Shopping Cart</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <form class="form-cart">
                        <div class="table-cart">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="tb-image"></th>
                                    <th class="tb-product">Product Name</th>
                                    <th class="tb-price text-center">Price</th>
                                    <th class="tb-qty text-center">Quantity</th>
                                    <th class="tb-total">Total</th>
                                    <th class="tb-remove">Action</th>
                                </tr>
                                </thead>
                                @php
                                $total = 0;
                                @endphp
                                @foreach($allPdt as $value)
                                <tbody>
                                @php
                                $spdt = Session::get("pdtId");
                                $sqty = Session::get("qtyId");
                                $index = array_search($value->id, $spdt);
                                $total += checkOutPrice($value->price,$value->discount,$sqty[$index]);

                                @endphp
                                    {{--{{ $index }} ----}}
                                <tr>
                                    <td class="tb-image"><a href="#" class="item-photo"><img src="{{url('/')}}/{{pictureHelper($value->id, $value->picture1, $value->picture2, $value->picture3)}}" alt="cart"></a></td>
                                    <td class="tb-product">
                                        <div class="product-name"><a href="#">{{$value->title}}</a></div>
                                    </td>
                                    <td class="tb-price text-center">
                                        <span class="price">৳ {{checkOutPrice($value->price,$value->discount,1)}}</span>
                                    </td>
                                    <td class="tb-price text-center">
                                        <span class="price">{{$sqty[$index]}}</span>
                                    </td>
                                    <td class="tb-total">
                                        <span class="price">৳ {{checkOutPrice($value->price,$value->discount,$sqty[$index])}}</span>
                                    </td>
                                    <td class="tb-remove text-center">
                                        <a href="#" class="action-remove"><span><i class="fa fa-times" aria-hidden="true"></i></span></a>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="cart-actions">
                            <button type="submit" class="btn-continue">
                                <span>Continue Shopping</span>
                            </button>
                            <button type="submit" class="btn-clean" >
                                <span>Update Shopping Cart</span>
                            </button>
                            <button type="submit" class="btn-update" >
                                <span>Clear Shopping Cart</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 padding-left-5">
                    <div class="order-summary">
                        <h4 class="title-shopping-cart">Order Summary</h4>
                        <div class="checkout-element-content">
                            <span class="order-left">Subtotal:<span>৳ {{$total}}</span></span>
                            <span class="order-left">Shipping:<span>Free Shipping</span></span>
                            <span class="order-left">Total:<span>৳ {{$total}}</span></span>
                            <ul>
                                <li><label class="inline" ><input type="checkbox"><span class="input"></span>I have promo code</label></li>
                            </ul>
                            <button type="submit" class="btn-checkout" >
                                <span>Check Out</span>
                            </button>
                            @if(isset(Auth::user()->type))
                            @else
                                <p style="font-size: 25px">For purchase <br/> You need to <a href="{{url('/')}}/login" class="btn-link">login</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section">You may be also interested</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/r1.jpg" alt="r1"></a>
                                </div>
                                <span class="onsale">-50%</span>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Women Hats</a></div>
                                <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
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
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/r2.jpg" alt="r2"></a>
                                </div>
                                <span class="onnew">new</span>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Basketball Sports Shoes</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
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
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/r3.jpg" alt="r3"></a>
                                </div>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Dark Green Prada Sneakers</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
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
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/r4.jpg" alt="r4"></a>
                                </div>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Clutches in Men's Bags for Men</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/r5.jpg" alt="r5"></a>
                                </div>
                                <span class="onsale">-50%</span>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Parka With a Hood</a></div>
                                <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
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
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="images/home1/r6.jpg" alt="r6"></a>
                                </div>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Smartphone MTK6737 Quad Core.</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-section-brand">
            <div class="container">
                <div class="section-brand style1">
                    <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                        <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="images/home1/brand1.jpg" alt="brand1"></a>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->

@endsection