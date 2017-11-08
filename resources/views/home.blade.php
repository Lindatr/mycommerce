@extends('master')

@section('title', '| Home')

@section('content')


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<!-- *** HOMEPAGE CAROUSEL *** -->
<div class="home-carousel">
    <div class="dark-mask"></div>
    <div class="container">
        <div class="homepage owl-carousel">
            <div class="item">
                <div class="row">
                    <div class="col-sm-5 right">
                        <p>
                            <img src="img/logo.png" alt="">
                        </p>
                        <h1>Multipurpose responsive theme</h1>
                        <p>Business. Corporate. Agency.
                            <br />Portfolio. Blog. E-commerce.</p>
                    </div>
                    <div class="col-sm-7">
                        <img class="img-responsive" src="img/template-homepage.png" alt="">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">

                    <div class="col-sm-7 text-center">
                        <img class="img-responsive" src="img/template-mac.png" alt="">
                    </div>

                    <div class="col-sm-5">
                        <h2>46 HTML pages full of features</h2>
                        <ul class="list-style-none">
                            <li>Sliders and carousels</li>
                            <li>4 Header variations</li>
                            <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                            <li>+ 11 extra pages showing template features</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-sm-5 right">
                        <h1>Design</h1>
                        <ul class="list-style-none">
                            <li>Clean and elegant design</li>
                            <li>Full width and boxed mode</li>
                            <li>Easily readable Roboto font and awesome icons</li>
                            <li>7 preprepared colour variations</li>
                        </ul>
                    </div>
                    <div class="col-sm-7">
                        <img class="img-responsive" src="img/template-easy-customize.png" alt="">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-sm-7">
                        <img class="img-responsive" src="img/template-easy-code.png" alt="">
                    </div>
                    <div class="col-sm-5">
                        <h1>Easy to customize</h1>
                        <ul class="list-style-none">
                            <li>7 preprepared colour variations.</li>
                            <li>Easily to change fonts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.project owl-slider -->
    </div>
</div>
<!-- *** HOMEPAGE CAROUSEL END *** -->

<div id="heading-breadcrumbs">
    <div class="container">
    </div>
</div>

<div id="content">
    <div class="container">
        <p class="text-muted lead text-center">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
        <ul class="owl-carousel testimonials same-height-row">

            @foreach($categories as $c)
                
                 <li class="item">
                    <div class="product">
                        <div class="image">
                            <a href="{{ url('/products/bycategory') }}">
                                <img src="{{ url($c->categoryImage) }}" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="{{ url('/products/bycategory') }}">{{ $c->categoryName }}</a></h3>
                            {{--  <p class="price">$143.00</p>  --}}
                        </div>
                        <!-- /.text -->
                    </div>
                </li>
            @endforeach

        </ul>

    </div>
    <!-- /.container -->
</div>


@endsection