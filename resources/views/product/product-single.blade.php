@extends('master')

@section('title', '| Product Name')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>{{ $p->name }}</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="{{ url('products/bycategory') }}">Category 1</a>
                    </li>
                    <li><a href="{{ url('products/bycategory') }}">Category 2</a>
                    </li>
                    <li>$p->Name</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">

            <!-- *** LEFT COLUMN *** -->
            <div class="col-md-12">

                {{--  <p class="lead">Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain me be. So landlord by we unlocked sensible it. Fat cannot use denied excuse son law. Wisdom happen suffer common the appear ham beauty
                    her had. Or belonging zealously existence as by resources.
                </p>  --}}
                <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a>
                </p>

                <div class="row" id="productMain">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <img src="{{ url($pi[0]->image) }}" alt="" class="img-responsive">
                        </div>

                        <div class="ribbon sale">
                            <div class="theribbon">SALE</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                    </div>
                    <div class="col-sm-6">
                        <div class="box">

                            <form action="{{ url('orders/addtocart') }}" method="POST">
                               {{ csrf_field() }}
                                (input type="hidden" name ='product_id' value={{$p->id}})

                                <div class="sizes">

                                    <h3>Available sizes</h3>

                                    @foreach($pd as $item)
                                    <label>
                                        <a href="#">{{$item->size}}</a>
                                        <input type="radio" name="product_detail_id" value="{{ $item->id }}"  class="size-input">
                                    </label>
                                    @endforeach
                                    <!-- <label for="size_m">
                                        <a href="#">M</a>
                                        <input type="radio" id="size_m" name="size" value="m" class="size-input">
                                    </label>
                                    <label for="size_l">
                                        <a href="#">L</a>
                                        <input type="radio" id="size_l" name="size" value="l" class="size-input">
                                    </label> -->

                                </div>

                                <p class="price">Rp. {{number_format($p->price,2)}}</p>

                                <p class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                   <!--  <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i>
                                    </button> -->
                                </p>

                            </form>
                        </div>

                        <div class="row" id="thumbs">

                            @foreach($pi as $item)
                            <div class="col-xs-4">
                                <a href="{{ url($item->image) }}" class="thumb">
                                    <img src="{{ url($item ->image) }}" alt="" class="img-responsive">
                                </a>
                            </div>
                            @endforeach
                            <!-- <div class="col-xs-4">
                                <a href="{{ url('img/detailbig2.jpg') }}" class="thumb">
                                    <img src="{{ url('img/detailsquare2.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="{{ url('img/detailbig3.jpg') }}" class="thumb">
                                    <img src="{{ url('img/detailsquare3.jpg') }}" alt="" class="img-responsive">
                                </a> -->
                            </div>
                        </div>
                    </div>

                </div>


                <div class="box" id="details">
                    <p>
                        <h4>Product details</h4>
                        <p>{{$p->description}}</p>


                        <!-- <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                        <h4>Material & care</h4>
                        <ul>
                            <li>Polyester</li>
                            <li>Machine wash</li>
                        </ul>
                        <h4>Size & Fit</h4>
                        <ul>
                            <li>Regular fit</li>
                            <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                        </ul> -->

                        <!-- <blockquote>
                            <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                            </p>
                        </blockquote> -->
                </div>

                <div class="box social" id="product-social">
                    <h4>Show it to your friends</h4>
                    <p>
                        <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box text-uppercase">
                            <h3>You may also like these products</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product">
                            <div class="image">
                                <a href="{{ url('products/detail') }}">
                                    <img src="{{ url('img/product2.jpg') }}" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>

                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product">
                            <div class="image">
                                <a href="{{ url('products/detail') }}">
                                    <img src="{{ url('img/product3.jpg') }}" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="product">
                            <div class="image">
                                <a href="{{ url('products/detail') }}">
                                    <img src="{{ url('img/product1.jpg') }}" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <div class="text">
                                <h3>Fur coat</h3>
                                <p class="price">$143</p>
                            </div>
                        </div>
                        <!-- /.product -->
                    </div>

                </div>
            </div>
            <!-- *** LEFT COLUMN END *** -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

@endsection