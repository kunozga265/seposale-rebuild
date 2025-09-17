<div>
    <section class="shop-page">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar">
                        <div class="shop-category shop-sidebar__single">
                            <h3 class="shop-sidebar__title">Categories</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">All</a></li>
                                <li><a href="#">Cement</a></li>
                                <li><a href="#">Quarry Products</a></li>
                                <li><a href="#">Cement Blocks</a></li>
                                <li><a href="#">River Sand</a></li>
                                <li><a href="#">Other</a></li>
                            </ul>
                        </div><!-- /.shop-category -->
                    </div><!-- /.shop-sidebar -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-9">
                    {{-- <div class="product-sorting default-form">--}}
                    {{-- <p>Showing 1–9 of 12 results</p>--}}
                    {{-- <div class="form-group">--}}
                    {{-- <select class="custom-select-box">--}}
                    {{-- <option value="">Sort by Price</option>--}}
                    {{-- <option value="">Sort by Date</option>--}}
                    {{-- <option value="">Sort by Ratings</option>--}}
                    {{-- </select>--}}
                    {{-- </div><!-- /.form-group -->--}}

                    {{-- </div><!-- /.product-sorting -->--}}


                    <div>
                        @foreach ($products as $product)

                        @if ($product->id < 7)



                            <div class="product-card">
                            <div class="product-card__image">
                                <img src="{{asset($product->photo)}}" alt="">
                            </div><!-- /.product-card__image -->
                            <div class="product-card__content">
                                <div>
                                    <div class="flex justify-between items-center">
                                        <h3 class="product-card__title">
                                            <a href="#">{{ $product->name }}</a>
                                        </h3>
                                        <div class="product-card__stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.product-card__stars -->
                                    </div>


                                    <div class="d-flex">
                                        @foreach ($product->variants as $variant)
                                        <div wire:click="addToCart" class="variant">

                                            <div class="d-flex">
                                                <div class="description">
                                                    <div class="cart">
                                                        <span class="flaticon-shopping-cart"></span>
                                                    </div>
                                                    {{$variant->description}}
                                                </div>
                                                <a class="theme-btn btn-style-two" href="#">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">MK {{ number_format($variant->cost,0) }}</span>
                                                </a>
                                            </div>
                                            <p class="">Units: {{ $variant->unit }}</p>

                                        </div>
                                        @endforeach
                                    </div>

                                </div>

                            </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->

                    @endif
                    @endforeach



                </div>

                {{-- <div class="text-center load-more-products">--}}
                {{-- <a class="theme-btn btn-style-one" href="#">--}}
                {{-- <i class="btn-curve"></i>--}}
                {{-- <span class="btn-title">Load More</span>--}}
                {{-- </a>--}}
                {{-- </div><!-- /.text-center -->--}}
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.shop-page -->
</div>