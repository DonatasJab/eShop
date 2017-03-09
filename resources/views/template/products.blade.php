@extends('template')

@section('stylesheet')
    <link href="{{ URL::asset('css/category-2.css')}}" rel="stylesheet">
@stop


@section('content')
    <section class="main-container-wrapper clearfix" id="main-container-wrapper">
        <div class="container main-container">
            <div class="row">
                <div class="catColumnWrapper">
                    <div class="col-lg-3 col-md-3 col-sm-12 filterColumn">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapseCategory">
                                        <span class="pull-right hasMinus"> <i class="i-minus"></i></span> Kategorija</a>
                                    </h4>
                                </div>
                                <div id="collapseCategory" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="nav nav-list">
                                            @foreach($categories as $categorie)
                                                <li><a href="{{ route('category', ['category' => $categorie->slug]) }}">{{ $categorie->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 categoryColumn">
                        <div class="row categoryProduct xsResponse clearfix">
                            @foreach($products as $product)
                                <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                    <div class="product">
                                        <div class="image">
                                            <a href="{{ route('product.home', ['category' => $category->slug, 'slug' => $product->slug]) }}"><img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-responsive"></a>
                                        </div>
                                        <div class="description">
                                            <h4><a href="{{ route('product.home', ['category' => $category->slug, 'slug' => $product->slug]) }}">{{ $product->title }}</a></h4>
                                            <div class="grid-description">
                                                <p>{{ str_limit($product->description, 60) }}</p>
                                            </div>
                                        </div>
                                        <div class="price"><span>{{ $product->price }} €</span></div>
                                        <div class="action-control"><a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary"> <span class="add2cart"><i
                                                class="glyphicon glyphicon-shopping-cart"> </i> Į krepšelį</span> </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="w100 categoryFooter">
                            <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
                                @if(count($products) == 1)
                                    <p>Rasta {{ count($products) }} prekė</p>
                                @elseif(count($products) <= 9)
                                    <p>Rastos {{ count($products) }} prekės</p>
                                @elseif(count($products) >= 10 || count($products) % 10 == 0)
                                    <p>Rasta {{ count($products) }} prekių</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.parallax-1.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('plugins/icheck-1.x/icheck.min.js') }}"></script>
    <script src="{{ URL::asset('js/grids.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.touchspin.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('js/hideMaxListItem-min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('ul.long-list').hideMaxListItems({
                'max': 6,
                'speed': 500,
                'moreText': 'VIEW MORE ([COUNT])',
                'lessText': 'VIEW LESS',
                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            });
        });
    </script>
    <script src="{{ URL::asset('js/jquery.scrollme.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var isMobile = function () {
                return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
            };

            if (isMobile()) {
                $('.animateme').removeClass('animateme');
                $('.category-wrapper').addClass('ismobile');
                $('.main-container-wrapper').addClass('ismobile');
                $('#category-intro').addClass('ismobile');
            }
            $('.shrtByP a').click(function () {
                $('.shrtByP a').removeClass('active');
                $(this).addClass('active');
            });

            $('.filterToggle').click(function () {
                $(this).toggleClass('filter-is-off');
                $('.filterToggle span').toggleClass('is-off');
                $('.catColumnWrapper').toggleClass('filter-is-off');
                $('.catColumnWrapper .col-sm-4').toggleClass('col-sm-3 col-lg-3 col-md-3');

                var $elements = $('.categoryProduct > .item');
                var columns = $elements.detectGridColumns();
                $elements.equalHeightGrid(columns);


                setTimeout(function () {
                            $('.categoryProduct > .item').responsiveEqualHeightGrid();
                        }, 500);
            });

            $('[data-toggle="collapse"]').click(function (e) {
                $('#accordion').on('show.bs.collapse', function (e) {
                    $(e.target).prev().addClass('active').find('span').removeClass('hasPlus').addClass('hasMinus');
                })
                $('#accordion').on('hide.bs.collapse', function (e) {
                    $(e.target).prev().addClass('active').find('span').addClass('hasPlus').removeClass('hasMinus');
                })
            });
        });

        $(window).bind('resize load', function () {
            if ($(this).width() < 767) {
                $('#accordion .panel-collapse').collapse('hide');
                $('#accordion .panel-heading ').find('span').removeClass('hasMinus').addClass('hasPlus');
            } else {
                $('#accordion .panel-collapse').removeClass('out').addClass('in').css('height', 'auto');
                $('#accordion .panel-heading ').find('span').removeClass('hasPlus').addClass('hasMinus');
            }
        });
    </script>
@stop