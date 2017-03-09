@extends('template')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.minimalect.min.css') }}" media="screen"/>
@stop

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <h1 class="section-title-inner"><span><i class="fa fa-unlock-alt"></i> Jūsų profilis</span></h1>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <h2 class="block-title-2"><span>Čia jūs galit redaguoti savo asmeninę informaciją ir peržiūrėti užsakymus.</span>
                            </h2>
                            <ul class="myAccountList row">
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail equalheight"><a href="{{ route('profile.orders') }}"><i class="fa fa-calendar"></i> Užsakymai</a></div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail equalheight"><a href="{{ route('profile.addresses') }}"><i class="fa fa-map-marker"></i> Mano adresai</a></div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail equalheight"><a href="{{ route('profile.add.address') }}"> <i class="fa fa-edit"> </i> Pridėti adresą</a></div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail equalheight"><a href="{{ route('profile.settings') }}"><i class="fa fa-cog"></i> Asmeninė informacija</a></div>
                                </li>
                            </ul>
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5"></div>
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