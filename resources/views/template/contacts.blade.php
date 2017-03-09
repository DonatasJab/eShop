@extends('template')

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row innerPage">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <header>
                                <h1 class="title-big text-center section-title-style2"><span>Kontaktai</span></h1>
                            </header>
                            <p class="lead text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit
                                dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit
                                metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                inceptos himenaeos.
                            </p>
                            <hr>
                            <div class="row">
                                <article>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <header>
                                            <h3 class="block-title-5">Pagalbai</h3>
                                        </header>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit<br><br>
                                            <strong>Telefono numeris</strong>: +370-636-94594<br>
                                            <strong>El. paštas</strong>: info@eshop.lt
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <header>
                                            <h3 class="block-title-5">Nusiskundimams</h3>
                                        </header>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat
                                            hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper
                                            metus<br><br>
                                            <strong>Telefono numeris</strong>: +370-636-94594<br>
                                            <strong>El. paštas</strong>: info@eshop.lt
                                        </p>
                                    </div>
                                </article>
                                <div style="clear:both"></div>
                                <hr>
                                <div style="clear:both"></div>
                                <article>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <header>
                                            <h3 class="block-title-5">Atsiliepimams</h3>
                                        </header>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat
                                            hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper
                                            metus<br><br>
                                            <strong>El. paštas</strong>: info@eshop.lt
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <header>
                                            <h3 class="block-title-5">Kita</h3>
                                        </header>
                                        <p>
                                            <strong>Garantija</strong>: garantija@eshop.lt<br>
                                            <strong>Karjera</strong>: karjera@eshop.lt<br>
                                            <strong>Pasiūlymai</strong>: pasiulymai@eshop.lt<br>
                                        </p>
                                    </div>
                                </article>
                                <div style="clear:both"></div>
                                <hr>
                                <div style="clear:both"></div>
                                <div class="w100 map">
                                    <iframe
                                        src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=vilnius&amp;ie=UTF8&amp;hq=&amp;hnear=Vilnius,+Lithuania&amp;ll=54.6826011,25.2833289,15&amp;spn=54.6826011,25.2833289,15&amp;t=m&amp;z=14&amp;output=embed">
                                    </iframe>
                                    <br/>
                                    <small>
                                        <a href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=vilnius&amp;ie=UTF8&amp;hq=&amp;hnear=Vilnius,+Lithuania&amp;ll=54.6826011,25.2833289,15&amp;spn=54.6826011,25.2833289,15&amp;t=m&amp;z=14"
                                           style="color:#0000FF;text-align:left">
                                            Atidaryti didesnį žemėlapį
                                        </a>
                                    </small>
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