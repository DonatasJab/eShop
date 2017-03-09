@extends('template')

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row innerPage">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <header>
                                <h1 class="title-big text-center section-title-style2"><span>Apie mus</span></h1>
                            </header>
                            <p class="lead text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit
                                dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit
                                metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                inceptos himenaeos.
                            </p>
                            <hr class="hr hr30">
                            <div class="row animated">
                                <article>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
                                        <img class="img-responsive" src="{{ URL::asset('images/site/girl1.jpg') }}" alt="img">
                                        <header>
                                            <h3 class="block-title-3">Consectetur adipiscing</h3>
                                        </header>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat
                                            hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper
                                            metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos.
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
                                        <img class="img-responsive" src="{{ URL::asset('images/site/girl2.jpg') }}" alt="img">
                                        <header>
                                            <h3 class="block-title-3">Lorem ipsum dolor</h3>
                                        </header>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat
                                            hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper
                                            metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos.
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-6">
                                        <img class="img-responsive" src="{{ URL::asset('images/site/girl3.jpg') }}" alt="img">
                                        <header>
                                            <h3 class="block-title-3">Consectetur adipiscing</h3>
                                        </header>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat
                                            hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper
                                            metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora
                                            torquent per conubia nostra, per inceptos himenaeos.
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <hr>
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