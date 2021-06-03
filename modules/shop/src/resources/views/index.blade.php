{!! $products->scripts() !!}

<div class="container">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="row justify-content-between">

                <div class="col-md-9">

                    <div class="row">
                        <div class="col-md-8"> {!! $products->search() !!}</div>
                        <div class="col-md-2">
                            {!! $products->limit(); !!}
                        </div>
                        <div class="col-md-2">
                            {!! $products->sort(); !!}
                        </div>
                    </div>

                    <div class="row shop-products related-products">

                        @php $i=0; @endphp

                        @foreach($products->results() as $product)

                            @php $i++; @endphp

                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 item-{{$product->id}}" itemtype="http://schema.org/Product" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00">
                                <div class="product">

                                    <input type="hidden" name="price" value="{{$product->price}}">
                                    <input type="hidden" name="content_id" value="{{$product->id}}">

                                    <a href="{{site_url($product->url)}}" class="d-flex h-100 w-100">
                                        <div class="image"
                                             style="background-image: url('{{$product->thumbnail(650,650)}}');">
                                        </div>
                                    </a>

                                    <div class="m-t-20">
                                        <a href="{{site_url($product->url)}}">
                                            <div class="heading-holder text-md-left text-center">
                                                <h5>{{$product->title}}</h5>
                                            </div>
                                        </a>

                                        <div class="row justify-content-center">
                                            <div class="col-6 price-holder ">
                                                <p>
                                                    <span class="price">$ {{$product->price}}</span>
                                                </p>
                                            </div>

                                            <div class="col-6 d-flex justify-content-end">
                                                <a href="javascript:;"
                                                   onclick="mw.cart.add('.shop-products .item-{{$product->id}}');"
                                                   class="btn btn-primary">
                                                    <i class="material-icons">shopping_cart</i> <span
                                                        class="name-of-product-shop ">Add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    {!! $products->pagination() !!}

                </div>


                <div class="col-md-3">
                    <div class="card">

                        {!! $products->filtersActive() !!}

                        {!! $products->tags() !!}

                        {!! $products->categories() !!}

                        {!! $products->filters() !!}

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
