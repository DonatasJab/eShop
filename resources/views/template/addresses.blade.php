@extends('template')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.minimalect.min.css') }}" media="screen"/>
@stop

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <header>
                        <h1 class="section-title-inner"><span><i class="fa fa-map-marker"></i> Jūsų adresai</span></h1>
                    </header>
                    <p>Jeigu neturit prisidėję savo adreso, tai prašome padaryti čia, nes kitu atveju mes negalėsim jums išsiųsti prekės, jeigu neturėsit pridėję savo adreso. 
                    Jūs taip pat gali pridėti ir kitus papildomus adresus į kuriuos mes galėtumėm nusiųsti prekes.</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title-2"> Jūsų visi pridėti adresai yra žemiau.</h2>

                            <p> Pasikeitus jūsų asmeninei informacijai nepamirškit atnaujinti ir čia tos informacijos.</p>
                        </div>
                        <div class="w100 clearfix">
                            @foreach($addresses as $address)
                                <article>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel panel-default">
                                            <header>
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><strong>{{ $address->title }}</strong></h3>
                                                </div>
                                            </header>
                                            <div class="panel-body">
                                                <ul>
                                                    <li><span class="address-name"> <strong>{{ $address->first_name . " " . $address->last_name }}</strong></span></li>
                                                    <li><span class="address-line1"> {{ $address->address }}</span></li>
                                                    <li><span class="address-line2"> {{ $address->city }} </span></li>
                                                    <li><span> {{ $address->phone_number }} </span></li>
                                                </ul>
                                            </div>
                                            <footer>
                                                <div class="panel-footer panel-footer-address">
                                                    <a href="{{ route('profile.edit.address', ['id' => $address->id]) }}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Redaguoti</a>
                                                    <a href="{{ route('profile.destroy.address', ['id' => $address->id]) }}" class="btn btn-sm btn-danger"> <i class="fa fa-minus-circle"></i> Trinti</a>
                                                </div>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                        <div class="col-lg-12 clearfix">
                            <a class="btn btn-primary" href="{{ route('profile.add.address') }}"><i class="fa fa-plus-circle"></i> Pridėti naują adresą</a>
                        </div>
                        <div class="col-lg-12 clearfix">
                            <ul class="pager">
                                <li class="previous pull-right"><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Grįžti į parduotuvę</a>
                                </li>
                                <li class="next pull-left"><a href="{{ route('profile.home') }}">&larr; Grįžti į paskyrą</a></li>
                            </ul>
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