@extends('template')

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
                    <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-shopping-cart"></i> Krepšelis</span></h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar col-xs-6 col-xxs-12 text-center-xs">
                    <h4 class="caps"><a href="{{ route('home') }}"><i class="fa fa-chevron-left"></i> Tęsti apsipirkimą</a></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="cartContent w100">
                                @if(count($items))
                                    <table class="cartTable table-responsive" style="width:100%">
                                        <tbody>
                                            <tr class="CartProduct cartTableHeader">
                                                <td style="width:15%">Nuotrauka</td>
                                                <td style="width:40%">Prekės pavadinimas</td>
                                                <td style="width:15%">&nbsp;</td>
                                                <td style="width:15%">Kiekis</td>
                                                <td style="width:15%">Išviso</td>
                                            </tr>
                                            @foreach($items as $item)
                                                <tr class="CartProduct">
                                                    <td class="CartProductThumb">
                                                        <div>
                                                            @foreach($categories as $category)
                                                                @if($item->options->category_id == $category->id)
                                                                    <a href="{{ route('product.home', ['category' => $category->slug, 'slug' => $item->options->slug]) }}">
                                                                        <img src="{{ $item->options->image }}" alt="{{ $item->name }}">
                                                                    </a>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="CartDescription">
                                                            @foreach($categories as $category)
                                                                @if($item->options->category_id == $category->id)
                                                                    <h4>
                                                                        <a href="{{ route('product.home', ['category' => $category->slug, 'slug' => $item->options->slug]) }}">{{ $item->name }}</a>
                                                                    </h4>
                                                                @endif
                                                            @endforeach
                                                            <div class="price"><span>{{ number_format($item->price, 2) }} €</span></div>
                                                        </div>
                                                    </td>
                                                    <td class="delete"><a href="{{ route('cart.delete', ['id' => $item->rowId]) }}"> <i class="glyphicon glyphicon-trash fa-2x"></i></a></td>
                                                    <td><input type="text" class="quanitySniper" value="{{ $item->qty }}" name="quanitySniper"></td>
                                                    <td class="price">{{ number_format($item->subtotal, 2) }} €</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>Krepšelis yra tuščias!</p>
                                @endif
                            </div>
                            <div class="cartFooter w100">
                                <div class="box-footer">
                                    <div class="pull-left"><a href="{{ route('home') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> &nbsp; Tęsti apsipirkimą</a></div>
                                    <div class="pull-right">
                                        <a href="{{ route('checkout') }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> &nbsp; Užsisakyti</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
                    <div class="contentBox">
                        <div class="w100 costDetails">
                            <div class="table-block" id="order-detail-content">
                                <div class="w100 cartMiniTable">
                                    <table id="cart-summary" class="std table">
                                        <tbody>
                                        <tr>
                                            <td>Kaina</td>
                                            <td class="price">{{ $total }} €</td>
                                        </tr>
                                        <tr>
                                            <td>Siuntimas</td>
                                            <td class="price"><span class="success">0.00 €</span></td>
                                        </tr>
                                        <tr>
                                            <td>Nuolaida</td>
                                            <td class="price">0.00 €</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Išviso</td>
                                                <td class=" site-color" id="total-price">{{ $total }} €</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div class="gap"></div>
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
@stop