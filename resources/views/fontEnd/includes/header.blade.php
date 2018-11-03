<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(isset($tinymce))
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    @endif
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/chosen.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/style.css')}}">
    <script type="text/javascript" src="{{asset('public/fontEnd/js/jquery.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">


    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="index-opt-1">

<div class="wrapper">
    <form id="block-search-mobile" method="get" class="block-search-mobile">
        <div class="form-content">
            <div class="control">
                <a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
                <input type="text" name="search" placeholder="Search" class="input-subscribe">
                <button type="submit" class="btn search">
                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </form>
    <div id="block-quick-view-popup" class="block-quick-view-popup">
        <div class="quick-view-content">
            <a class="popup-btn-close"><i class="fa fa-times" aria-hidden="true"></i></a>
            <div class="slide-quick">
                <div class="product-thumbs">
                    <a href="#" class="img-product-thumb"><img src="{{asset('public/fontEnd/images/s-pop1.jpg')}}" alt="p1"></a>
                    <a href="#" class="img-product-thumb"><img src="{{asset('public/fontEnd/images/s-pop2.jpg')}}" alt="p1"></a>
                    <a href="#" class="img-product-thumb"><img src="{{asset('public/fontEnd/images/s-pop3.jpg')}}" alt="p1"></a>
                    <a href="#" class="img-product-thumb"><img src="{{asset('public/fontEnd/images/s-pop4.jpg')}}" alt="p1"></a>
                </div>
            </div>
            <div class="product-items">
                <div class="product-image">
                    <a href="#"><img src="{{asset('public/fontEnd/images/popup-pro.jpg')}}" alt="p1"></a>
                </div>
                <div class="product-info">
                    <div class="product-name"><a href="#">Acer's Aspire S7 is a thin and portable laptop</a></div>
                    <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a>
                    <div class="product-infomation">
                        Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black and Decker FireStorm line of 12V tools allowing...
                    </div>
                </div>
                <div class="product-info-price">
                        <span class="price">
                            <ins>$229.00</ins>
                            <del>$259.00</del>
                        </span>
                    <div class="quantity">
                        <h6 class="quantity-title">Quantity:</h6>
                        <div class="buttons-added">
                            <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                            <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                            <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <a href="#" class="btn-add-to-cart">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER -->
    <header class="site-header header-opt-1">

        <!-- header-top -->
        <div class="header-top">
            <div class="container">

                <!-- hotline -->
                <ul class="nav-top-left krystal-nav" >
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="menu-item-has-children ">
                        <a href="{{url('/')}}" class="dropdown-toggle">
                            <span>Demos</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                                <a href="{{url('/')}}" class="switcher-flag icon">Demo 1</a>
                            </li>
                            <li class="switcher-option">
                                <a href="index2.html" class="switcher-flag icon">Demo 2</a>
                            </li>
                            <li class="switcher-option">
                                <a href="index3.html" class="switcher-flag icon">Demo 3</a>
                            </li>
                            <li class="switcher-option">
                                <a href="index4.html" class="switcher-flag icon">Demo 4</a>
                            </li>
                            <li class="switcher-option">
                                <a href="index5.html" class="switcher-flag icon">Demo 5</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="grid-product.html" class="dropdown-toggle">
                            <span>Shop</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                                <a href="grid-product.html" class="switcher-flag icon">Grid Product</a>
                            </li>
                            <li class="switcher-option">
                                <a href="grid-product-right.html" class="switcher-flag icon">Grid Product Right</a>
                            </li>
                            <li class="switcher-option">
                                <a href="list-product.html" class="switcher-flag icon">List Product</a>
                            </li>
                            <li class="switcher-option">
                                <a href="list-product-right.html" class="switcher-flag icon">List Product Right</a>
                            </li>
                            <li class="switcher-option">
                                <a href="detail.html" class="switcher-flag icon">Detail Product</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children ">
                        <a href="{{url('/')}}" class="dropdown-toggle">
                            <span>Pages</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                                <a href="about-us.html" class="switcher-flag icon">About Us</a>
                            </li>
                            <li class="switcher-option">
                                <a href="shopping-cart.html" class="switcher-flag icon">Shopping Cart</a>
                            </li>
                            <li class="switcher-option">
                                <a href="{{url('checkout')}}" class="switcher-flag icon">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="blog-list.html">Blog</a></li>
                </ul><!-- hotline -->

                <!-- heder links -->
                <ul class="nav-top-right krystal-nav">
                    <li ><a href="#">Newsletter</a></li>
                    <li class="menu-item-has-children"><a href="#" class="dropdown-toggle"><img src="{{asset('public/fontEnd/images/home1/l1.jpg')}}" alt="flag">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="{{asset('public/fontEnd/images/home1/l1.jpg')}}" alt="flag">English</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="{{asset('public/fontEnd/images/home1/l2.jpg')}}" alt="flag">Hungary</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="{{asset('public/fontEnd/images/home1/l3.jpg')}}" alt="flag">German</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="{{asset('public/fontEnd/images/home1/l4.jpg')}}" alt="flag">French</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="{{asset('public/fontEnd/images/home1/l5.jpg')}}" alt="flag">Canada</a>
                            </li>
                        </ul>
                    </li>
                    @if(isset(Auth::user()->type) && Auth::user()->type > 1)
                    <li class="menu-item-has-children">
                        <a href="#" class="dropdown-toggle">
                            <span>Management</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                            <a href="{{url('/product-management')}}" class="switcher-flag icon">Products</a>
                            </li>
                            <li class="switcher-option">
                            <a href="{{url('/category-management')}}" class="switcher-flag icon">Category</a>
                            </li>
                            <li class="switcher-option">
                                <a href="{{url('/subcategory-management')}}" class="switcher-flag icon">Sub Category</a>
                            </li>
                            <li class="switcher-option">
                                <a href="{{url('/city-management')}}" class="switcher-flag icon">City</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i>Register</a></li>
                    @else
                        <li> <a href="#" > {{ Auth::user()->name }} </a></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >
                                Logout
                                <span class="caret"></span></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest

                </ul><!-- heder links -->

            </div>
        </div> <!-- header-top -->

        <!-- header-content -->
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 nav-left">
                        <!-- logo -->
                        <strong class="logo">
                            <a href="#"><img src="{{asset('public/fontEnd/images/home1/logo.jpg')}}" alt="logo"></a>
                        </strong><!-- logo -->
                    </div>
                    <div class="col-md-8 nav-mind">

                        <!-- block search -->
                        <div class="block-search">
                            <div class="block-content">
                                <div class="categori-search  ">
                                    <select data-placeholder="All Categories" class="chosen-select categori-search-option">
                                        <option value="">All Categories</option>
                                        <optgroup label="- Electronics">
                                            <option>Batteries & Chargens</option>
                                            <option>Headphone & Headsets</option>
                                            <option>Mp3 Player & Acessories</option>
                                        </optgroup>
                                        <optgroup label="- Smartphone & Table">
                                            <option>Batteries & Chargens</option>
                                            <option>Headphone & Headsets</option>
                                            <option>Mp3 Player & Acessories</option>
                                        </optgroup>
                                        <optgroup label="- Electronics">
                                            <option>Batteries & Chargens</option>
                                            <option>Headphone & Headsets</option>
                                            <option>Mp3 Player & Acessories</option>
                                        </optgroup>
                                        <optgroup label="- Smartphone & Table">
                                            <option>Batteries & Chargens</option>
                                            <option>Headphone & Headsets</option>
                                            <option>Mp3 Player & Acessories</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control" placeholder="Searh entire store here...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- block search -->
                    </div>
                    <div class="col-md-2 nav-right">

                        <!-- block mini cart -->

                        <span data-action="toggle-nav" class="menu-on-mobile hidden-md style2">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span>
                            </span>

                        <div class="block-minicart dropdown style2">



                            <a class="minicart" href="#">

                                    <span class="counter qty">

                                        <span class="cart-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>

                                        <span class="counter-number">2</span>

                                    </span>

                                <span class="counter-your-cart">

                                        <span class="counter-label">Your Cart:</span>

                                        <span class="counter-price">$00.00</span>

                                    </span>

                            </a>

                            <div class="parent-megamenu">

                                <form>

                                    <div class="minicart-content-wrapper" >

                                        <div class="subtitle">

                                            You have <span>2</span> item(s) in your cart

                                        </div>

                                        <div class="minicart-items-wrapper">

                                            <ol class="minicart-items">

                                                <li class="product-inner">

                                                    <div class="product-thumb style1">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('public/fontEnd/images/home1/c1.jpg')}}" alt="c1"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Xbox One S Halo Collection Bund</a></div>

                                                        <a href="#" class="remove"><i class="fa fa-times" aria-hidden="true"></i></a>

                                                        <span class="price price-dark">

                                                                <ins>$229.00</ins>

                                                            </span>

                                                    </div>

                                                </li>

                                                <li class="product-inner">

                                                    <div class="product-thumb style1">

                                                        <div class="thumb-inner">

                                                            <a href="#"><img src="{{asset('public/fontEnd/images/home1/c2.jpg')}}" alt="c2"></a>

                                                        </div>

                                                    </div>

                                                    <div class="product-innfo">

                                                        <div class="product-name"><a href="#">Acer's Aspire S7 is a thin and portable...</a></div>
                                                        <a href="#" class="remove"><i class="fa fa-times" aria-hidden="true"></i></a>

                                                        <span class="price">

                                                                <ins>$229.00</ins>

                                                                <del>$259.00</del>

                                                            </span>

                                                    </div>

                                                </li>

                                            </ol>

                                        </div>

                                        <div class="subtotal">

                                            <span class="label">Total :</span>

                                            <span class="price">$480.00</span>

                                        </div>

                                        <div class="actions">

                                            <a class="btn btn-viewcart" href="#">View cart</a>

                                            <a class="btn btn-checkout" href="{{url('checkout')}}">Checkout</a>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div><!-- block mini cart -->
                        <a href="#" class="hidden-md search-hidden"><span class="pe-7s-search"></span></a>
                        <a class="wishlist-minicart" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>

                    </div>
                </div>
            </div>
        </div>