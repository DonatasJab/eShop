@extends('template')

@section('content')
    <div class="container main-container headerOffset">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <h1 class="section-title-inner"><span><i
                        class="glyphicon glyphicon-shopping-cart"></i> Užsakymas</span></h1>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
                <h4 class="caps"><a href="{{ route('home') }}"><i class="fa fa-chevron-left"></i> Grįžti į parduoutuvę</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="w100 clearfix">
                            <div class="row">
                                <div style="clear: both"></div>
                                <form action="{{ route('checkout') }}" method="POST">
                                    <div class="onepage-checkout col-lg-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                           href="#BillingInformation" aria-expanded="true"
                                                           aria-controls="BillingInformation">
                                                            Pristatymo adresas
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="BillingInformation" class="panel-collapse collapse in" role="tabpanel"
                                                     aria-labelledby="BillingInformation">
                                                    <div class="panel-body">
                                                        <div id="exisitingAddressBox" class="collapse in">
                                                            <div class="form-group uppercase"><strong>Pasirinkit pristatymo adresą</strong></div>
                                                            <div class="form-group required maxwidth300">
                                                                <label for="address">Pasirinkit adresą<sup>*</sup></label>
                                                                <select class="form-control" name="address" id="address">
                                                                    <option disabled>-- Adresų pavadinimai --</option>
                                                                    @foreach($addresses as $address)
                                                                        <option value="{{ $address->id }}">{{ $address->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordion" href="#Deliverymethod" aria-expanded="false"
                                                           aria-controls="Deliverymethod">Pristatymo metodas
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="Deliverymethod" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="Deliverymethod">
                                                    <div class="panel-body">
                                                        <div class="w100 row">
                                                            <div class="form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12">
                                                                <table style="width:100%"
                                                                       class="table-bordered table tablelook2">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Metodas</td>
                                                                        <td>Informacija</td>
                                                                        <td>Kaina</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="radio"><input type="radio" checked>Pristatymas į namus</label></td>
                                                                        <td>Siuntinį gausit po 2 darbo dienų</td>
                                                                        <td>Nemokamai!</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordion" href="#Paymentmethod" aria-expanded="false"
                                                           aria-controls="Paymentmethod">
                                                            Mokėjimo būdas
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="Paymentmethod" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="Paymentmethod">
                                                    <div class="panel-body">
                                                        <div class="onepage-payment">
                                                            <label class="radio"><input type="radio" checked>Grynais atsiemant</label>
                                                                <div class="pull-left">
                                                                    <button class="btn btn-primary btn-lg" type="submit">Užsakyti &nbsp; <i class="fa fa-arrow-circle-right"></i></button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
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
        <div style="clear:both"></div>
    </div>
    <div class="gap"></div>
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
    <script>
        $(document).ready(function () {
            $('input#newAddress').on('ifChanged', function (event) {
                $('#newBillingAddressBox').collapse("show");
                $('#exisitingAddressBox').collapse("hide");
            });

            $('input#exisitingAddress').on('ifChanged', function (event) {
                $('#newBillingAddressBox').collapse("hide");
                $('#exisitingAddressBox').collapse("show");
            });

            $('input#newShippingAddress').on('ifChanged', function (event) {
                $('#newShippingAddressBox').collapse("show");

            });

            $('input#existingShippingAddress').on('ifChanged', function (event) {
                $('#newShippingAddressBox').collapse("hide");
            });

            $('input#creditCard').on('ifChanged', function (event) {
                $('#creditCardCollapse').collapse("toggle");
            });

            $('input#CashOnDelivery').on('ifChanged', function (event) {
                $('#CashOnDeliveryCollapse').collapse("toggle");
            });
        });
    </script>
@stop