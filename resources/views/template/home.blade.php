@extends('template')

@section('content')
    <section>
        <div class="banner">
            <div class="full-container">
                <div class="slider-content">
                    <ul id="pager2" class="container"></ul>
                    <span class="prevControl sliderControl">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </span>
                    <span class="nextControl sliderControl">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </span>
                    <div class="slider slider-v1" data-cycle-swipe=true data-cycle-prev=".prevControl" data-cycle-next=".nextControl" data-cycle-loader="wait">
                        <div class="slider-item slider-item-img1">
                            <div class="sliderInfo">
                                <div class="container">
                                    <div class="col-lg-12 col-md-12 col-sm-12 sliderTextFull ">
                                        <div class="inner text-center">
                                            <div class="topAnima animated">
                                                <h1 class="uppercase xlarge">Nemokamas siuntimas</h1>
                                                <h3 class="hidden-xs"> Užsisakant prekių už 100 € ir daugiau! </h3>
                                            </div>
                                            <a class="btn btn-danger btn-lg bottomAnima animated opacity0">Apsipirkti <span class="arrowUnicode">►</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ URL::asset('images/slider/slider1.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img">
                        </div>
                        <div class="slider-item slider-item-img3 ">
                            <div class="sliderInfo">
                                <div class="container">
                                    <div class="col-lg-5 col-md-4 col-sm-6 col-xs-8   pull-left sliderText white hidden-xs">
                                        <div class="inner">
                                            <h1>eShop</h1>
                                            <h3 class="price"> Nemokamas siuntimas nuo 100 €</h3>
                                            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                            <a href="category.html" class="btn btn-primary">Apsipirkti <span class="arrowUnicode">►</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ URL::asset('images/slider/slider4.jpg') }}" class="img-responsive parallaximg sliderImg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-container">
            <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
                <h3 class="section-title style2 text-center"><span>Naujausios prekės</span></h3>
                <div class="container">
                    <div class="row xsResponse">
                        @foreach($products as $product)
                            <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="product">
                                    <div class="image">
                                        @foreach($categories as $category)
                                            @if($product->category_id == $category->id)
                                                <a href="{{ route('product.home', ['category' => $category->slug, 'slug' => $product->slug]) }}"><img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-responsive"></a>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="description">
                                        @foreach($categories as $category)
                                            @if($product->category_id == $category->id)
                                                <h4><a href="{{ route('product.home', ['category' => $category->slug, 'slug' => $product->slug]) }}">{{ $product->title }}</a></h4>
                                            @endif
                                        @endforeach
                                        <p>{{ str_limit($product->description, 60) }} </p>
                                    </div>
                                    <div class="price"><span>{{ $product->price }} €</span></div>
                                    <div class="action-control">
                                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary"><span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"></i> Į krepšelį</span> </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="load-more-block text-center"><a class="btn btn-thin" href="#">Visi produktai</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.cycle2.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/icheck-1.x/icheck.min.js') }}"></script>
    <script src="{{ URL::asset('js/grids.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.touchspin.js') }}"></script>
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
@stop