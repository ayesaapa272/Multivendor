
@extends('layouts.app_main')

@section('content')


     <!--breadcrumbs area start-->
     <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>Cart</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

     <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                @if(Session::has('cart'))
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0 ;
                                                $subTotal = 0 ;
                                            @endphp
                                            @foreach(Session::get('cart') as $cart)
                                                @php
                                                    $total += ( $cart['quantity'] * $cart['product_price'] );
                                                    $subTotal += ( ($total * $cart['product_tax']) / 100 ) + $total;
                                                @endphp
                                                <tr>
                                                   <td class="product_remove"><a href="{{route('cart.show', $cart['id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img src="{{url('images/' . $cart['feature_image'])}}" alt=""></a></td>
                                                    <td class="product_name"><a href="#">{{$cart['product_name']}}</a></td>
                                                    <td class="product-price">BDT {{ $cart['product_price'] }}</td>
                                                    <td class="product_quantity">
                                                        <form action="{{route('cart.update' )}}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="id" value="{{$cart['id']}}">
                                                            <input min="1" max="100" name="quantity" value="{{$cart['quantity']}}" type="number">
                                                            <input type="submit" value="Update" class="btn btn-success">
                                                        </form>
                                                    </td>
                                                    <td class="product_total">BDT {{ $cart['product_price'] * $cart['quantity'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-center text-info">Cart Empty</p>
                                @endif
                            </div>

                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                @if( Session::has('cart') )
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                       <div class="cart_subtotal">
                                           <p>Subtotal</p>
                                           <p class="cart_amount">BDT {{round($total)}}</p>
                                       </div>
                                       <div class="cart_subtotal ">
                                           <p>Shipping</p>
                                           <p class="cart_amount"> BDT {{round($subTotal)}}</p>
                                       </div>
                                       <a href="#">Calculate shipping</a>

                                       <div class="cart_subtotal">
                                           <p>Total</p>
                                           <p class="cart_amount">BDT {{round($subTotal)}}</p>
                                       </div>
                                       <div class="checkout_btn">
                                           <a href="Checkout.html">Proceed to Checkout</a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!--coupon code area end-->
        </div>
    </div>
     <!--shopping cart area end -->

@endsection
