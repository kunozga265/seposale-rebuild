<div>
    <section class="cart-page customer-details" >
        <div class="auto-container">
            <h3 class="heading">Customer Details<span class="dot">.</span></h3>
            <div class="default-form">
                <div class="row clearfix">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="field-inner">
                            <label for="">Full Name</label>
                            <input type="text" name="username" value="" placeholder="Your Name" required="">
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <label for="">Email</label>
                            <input type="email" name="email" value="" placeholder="Email Address"
                                   required="">
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <label for="">Site Location</label>
                            <input type="text" name="subject" value="" placeholder="Subject" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-page">
        <div class="auto-container">
            <h3 class="heading">Products and Services<span class="dot">.</span></h3>
            <div class="table-responsive">
                <table class="table cart-table">
                    <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                    <tr>
                        <td>
                            <i wire:click="removeProduct({{$key}})" class="flaticon-delete remove-icon"></i>
                        </td>
                        <td>
                            <div class="product-box">
                                <img src="{{asset('images/gallery/thanthwe.jpg')}}" alt="">
                                <div>
                                <h3><a href="#">Thanthwe (42.5)</a></h3>
                                <div>Cement</div>
                                </div>
                            </div><!-- /.product-box -->
                        </td>
                        <td>MK{{number_format($product['cost'],2)}}</td>
                        <td>
                            <div class="quantity-box">
                                <button wire:click="decrementQuantity({{$key}})" type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input wire:model="products.{{$key}}.quantity" type="number" id="" value="1" min="1" />
                                <button wire:click="incrementQuantity({{$key}})" type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </td>
                        <td>
                           MK{{number_format($product['cost']* (is_numeric($product['quantity'])?$product['quantity']:0),2)}}
                        </td>

                    </tr>
                    @endforeach
                    </tbody>

                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
            <div class="row">
                <div class="col-lg-7">
                    <form action="#" class="default-form cart-cupon__form">
                        <input type="text" placeholder="Enter Coupon Code" class="cart-cupon__input">
                        <button class="theme-btn btn-style-one" type="submit">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Apply coupon</span>
                        </button>
                    </form><!-- /.contact-one__form -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <table class="cart-total">
                        <tr>
                            <td>Subtotal</td>
                            <td>MK{{number_format($subtotal,2)}}</td>
                        </tr>
                        <tr>
                            <td>Extra Transport Cost</td>
                            <td>MK0.00 </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td class="cart-total__total">MK{{number_format($total,2)}}</td>
                        </tr>
                    </table>
{{--                    <ul class="cart-total list-unstyled">--}}
{{--                        <li>--}}
{{--                            <span>Subtotal</span>--}}
{{--                            <span>MK{{number_format($subtotal,2)}}</span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <span>Extra Transport Cost</span>--}}
{{--                            <span>MK0.00 </span>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <span>Total</span>--}}
{{--                            <span class="cart-total__total">MK{{number_format($total,2)}}</span>--}}
{{--                        </li>--}}
{{--                    </ul><!-- /.cart-total -->--}}
                    <div class="cart-page__buttons">
{{--                        <a class="theme-btn btn-style-two" href="cart.html">--}}
{{--                            <i class="btn-curve"></i>--}}
{{--                            <span class="btn-title">update</span>--}}
{{--                        </a>--}}
                        <a class="theme-btn btn-style-one" href="#">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Checkout</span>
                        </a>
                    </div><!-- /.button-box -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cart-page -->


</div>
