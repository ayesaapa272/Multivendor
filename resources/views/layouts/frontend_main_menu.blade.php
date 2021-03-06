<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    <div class="language_currency">
                        <ul>
                            <li class="language"><a href="#" style="color:#999999">(+880 123456789) 6.00 am - 10.00 pm</a>

                            </li>
                            <li><a href="#">Sell</a></li>
                            <li><a href="#">EMI</a></li>
                            <li><a href="#">Gift Card</a></li>
                            <li><a href="#">Customer Care</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="header_social text-right">
                        @php $categories = \App\Models\Category::with('subcategory')->orderBy('category_name','desc')->GetActive()->get();  @endphp
                    </div>
                    <div class="search_container">
                        <form action="{{route('pages.search')}}" method="post">
                            @csrf
                            <div class="hover_category">
                                <select class="select_option" name="category_name" id="categori1">
                                    <option selected >Select a categories</option>
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                {{$category->category_name}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text"><a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
                                <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                            </div>
                        </form>
                    </div>


                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                            <li><a href="shop-list.html">List View</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">other Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Types</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                            <li><a href="product-grouped.html">product grouped</a></li>
                                            <li><a href="variable-product.html">product variable</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                </ul>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="my-account.html">my account</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header-inner">
                        <div class="col-lg-4 col-md-4">
                            <div class="language_currency">

                                <a href="#" style="color:#999999">(+880 123456789) 6.00 am - 10.00 pm</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="language_currency">
                                <a href="" style="color:#999999">GET Apps</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <ul>
                                <li><a href="#">Sell</a></li>
                                <li><a href="#">EMI</a></li>
                                <li><a href="#">Gift Card</a></li>
                                <li><a href="#">Customer Care</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/logo/pnga 543.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">

                        <div class="header_right_info">
                            <div class="search_container">
                                <form action="{{route('pages.search')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="hover_category">

                                        <select class="select_option" style="color:#000" name="category_name" id="categori2">
                                            <option selected>Select a categories</option>

                                            @if(isset($categories))
                                                @foreach($categories as $category)
                                                        <option value="{{$category->id}}">
                                                            {{$category->category_name}}
                                                        </option>
                                                @endforeach
                                            @endif
                                        </select>

                                    </div>

                                    <div class="search_box">
                                        <input name="product_name" placeholder="Search product..." type="text"><a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
                                        <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="header_account_area">
                                <div class="header_account_list register">
                                    <ul>
                                        @if(! \Illuminate\Support\Facades\Auth::check())
                                            <li><a href="{{route('register')}}">{{ __('Sign Up') }}</a></li>
                                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                        @else
                                            <li><a href="{{route('logout')}}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                >{{ __('Logout') }}</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        @endif
                                        <li><a href="login.html">English</a></li>
                                    </ul>
                                </div>

                                @if( Session::has('cart') && \Illuminate\Support\Facades\Auth::check())
                                    <div class="header_account_list  mini_cart_wrapper">
                                    @php $addTocarts = Session::get('cart'); @endphp
                                       <a href="#" id="cardDiv"><span class="lnr lnr-cart"></span><span class="item_count">{{ count($addTocarts) }}</span></a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_close">
                                                	<div class="cart_text">
                                                		<h3>cart</h3>
                                                	</div>
                                                	<div class="mini_cart_close">
                                                		<a href="javascript:void(0)" id="cross"><i class="icon-x"></i></a>
                                                	</div>
                                                </div>

                                                @php
                                                    //$addTocarts = Session::get('cart');
                                                    $total=0;
                                                @endphp
                                                @if($addTocarts != null)
                                                @foreach($addTocarts as $addTocart)

                                                    @php

                                                       // $price= $addTocart['quantity'] * $addTocart['product_price'];
                                                        $total += $addTocart['quantity'] * $addTocart['product_price'];

                                                    @endphp

                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="{{asset('images/'.$addTocart['feature_image'])}}" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">{{$addTocart['product_name']}}</a>
                                                        <p>{{$addTocart['quantity']}} x <span> ${{$addTocart['quantity'] * $addTocart['product_price']}} </span></p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <form action="{{route('cart.destroy',$addTocart['id'])}}" method="post">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button type="submit"><i class="icon-x"></i></button>
                                                        </form>

                                                    </div>
                                                </div>
                                                @endforeach
                                                    @endif
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$ {{$total}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="{{route('cart.create')}}"><i class="fa fa-shopping-cart"></i> View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="{{ route('checkout') }}"><i class="fa fa-sign-in"></i> Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                   </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom sticky-header">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="location">
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-10 col-10">
                        <!--main menu start-->
                        <div class="main_menu menu_position">
                            <nav>
                                <ul class="main-ul">
                                    <li><a class="active" href="{{url('/')}}">home</a></li>
                                    @php
                                         $id = substr(strrchr(url()->current(), '/'), 1 );
                                    @endphp
                                    @if(route('topSale.show',$id) == url()->current() || route('overview',$id) == url()->current())
                                    <li><a class="active" href="{{route('topSale.show',$id)}}">Company Profile</a>

                                        <ul class="sub_menu pages">
                                            <li><a id="" href="{{route('overview',$id)}}#sec1">Company Overview</a></li>
                                            <li><a id="" href="{{route('overview',$id)}}#sec2">Company Capability</a></li>
                                            <li><a id="" href="{{route('overview',$id)}}#sec3">Business Performance</a></li>
                                        </ul>
                                    </li>
                                    @endif

                                    @if(isset($categories))
                                        @foreach($categories as $category)

                                                <li><a href="{{route('cat.show',$category->id)}}">{{$category->category_name}} @if( count($category->subcategory) >0 ) <i class="fa fa-angle-down"></i> @endif </a>
                                                    @if( count($category->subcategory) >0 )
                                                        <ul class="sub_menu pages">
                                                            @foreach($category->subcategory as $cat)
                                                            <li><a href="{{route('subcat.show',$cat->id)}}">{{$cat->subcategory_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                        @endforeach
                                    @endif
                                    <li><a href="{{ route('blog.allBog') }}"> Blog </a>
                                    <li><a href="{{route('contact.show')}}"> Contact Us</a>

                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
