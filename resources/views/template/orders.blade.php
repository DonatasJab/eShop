@extends('template')

@section('stylesheet')
    <link href="{{ URL::asset('css/footable-0.1.css') }}" rel="stylesheet">
@stop

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <header>
                        <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Užsakymų sąrašas</span></h1>
                    </header>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title-2"> Jūsų užsakymų sąrašas</h2>
                        </div>
                        <div style="clear:both"></div>
                        <div class="col-xs-12 col-sm-12">
                            @if(count($orders))
                                <table class="footable">
                                    <thead>
                                    <tr>
                                        <th><span title="table sorted by this column on load">Užsakymo ID</span></th>
                                        <th>Kaina</th>
                                        <th>Užsakymo data</th>
                                        <th>Statusas</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td style="width: 15%;">#{{ $order->id }}</td>
                                            <td>{{ $order->total }} €</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td style="width: 5%;"><span class="label label-warning">Vykdoma</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                Užsakymų sąrašas yra tuščias
                            @endif
                        </div>
                        <div style="clear:both"></div>
                        <div class="col-lg-12 clearfix">
                            <ul class="pager">
                                <li class="previous pull-right"><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Grįžti į parduotuvę</a>
                                </li>
                                <li class="next pull-left"><a href="{{ route('profile.home') }}"> &larr; Grįžti į paskyrą</a></li>
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