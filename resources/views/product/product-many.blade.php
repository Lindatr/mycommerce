@extends('master')

@section('title', '| All Product')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Category Name</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li>Category Name</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">

            <!-- *** LEFT COLUMN *** -->
            <div class="col-sm-3">

                <!-- *** MENUS AND FILTERS *** -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Categories</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked category-menu">
                            <li>
                                <a href="{{ url('products/bycategory') }}">Men <span class="badge pull-right">42</span></a>
                                <ul>
                                    <li><a href="{{ url('products/bycategory') }}">T-shirts</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Shirts</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Pants</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="{{ url('products/bycategory') }}">Ladies  <span class="badge pull-right">123</span></a>
                                <ul>
                                    <li><a href="{{ url('products/bycategory') }}">T-shirts</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Skirts</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Pants</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('products/bycategory') }}">Kids  <span class="badge pull-right">11</span></a>
                                <ul>
                                    <li><a href="{{ url('products/bycategory') }}">T-shirts</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Skirts</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Pants</a>
                                    </li>
                                    <li><a href="{{ url('products/bycategory') }}">Accessories</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>

                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Brands</h3>
                        <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
                    </div>

                    <div class="panel-body">

                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Armani (10)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Versace (12)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Carlo Bruni (15)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Jack Honey (14)
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>

                        </form>

                    </div>
                </div>

                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title clearfix">Colours</h3>
                        <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
                    </div>

                    <div class="panel-body">

                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> <span class="colour white"></span> White (14)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> <span class="colour green"></span> Green (20)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> <span class="colour red"></span> Red (10)
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>

                        </form>

                    </div>
                </div>

                <!-- *** MENUS AND FILTERS END *** -->

                {{--  <div class="banner">
                    <a href="{{ url('products/bycategory') }}">
                        <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                    </a>
                </div>  --}}
                <!-- /.banner -->

            </div>
            <!-- /.col-md-3 -->
            <!-- *** LEFT COLUMN END *** -->

            <!-- *** RIGHT COLUMN *** -->
            <div class="col-sm-9">

                <p class="text-muted lead">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>

                <div class="row products">

                    @for ($i = 0; $i < 5; $i++)

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="image">
                                    <a href="{{ url('products/detail') }}">
                                        <img src="{{ url('img/product1.jpg') }}" alt="" class="img-responsive image1">
                                    </a>
                                </div>
                                <!-- /.image -->
                                <div class="text">
                                    <h3><a href="{{ url('products/detail') }}">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                    {{--  <p class="buttons">
                                        <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                        <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>  --}}
                                </div>
                                <!-- /.text -->

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
                            <!-- /.product -->
                        </div>

                    @endfor
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.products -->

                {{--  <div class="row">
                    <div class="col-md-12 banner">
                        <a href="#">
                            <img src="img/banner2.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>  --}}


                <div class="pages">
                    
                    {{--  <p class="loadMore">
                        <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                    </p>  --}}

                    <ul class="pagination">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>


            </div>
            <!-- /.col-md-9 -->
            <!-- *** RIGHT COLUMN END *** -->

        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

@endsection