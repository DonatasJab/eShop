@extends('template')

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <header>
                        <h1 class="section-title-inner"><span><i class="fa fa-map-marker"></i> Adreso pridėjimas</span></h1>
                    </header>
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <h2 class="block-title-2"> Norint pridėti adresą, prašom užpildyti žemiau esančią formą.</h2>

                            <p class="required"><sup>*</sup> Privalomi laukeliai</p>
                        </div>
                        <form action="{{ route('profile.add.address') }}" method="POST">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group required">
                                    <label for="first_name">Vardas <sup>*</sup> </label>
                                    <input required type="text" class="form-control" name="first_name" id="first_name" placeholder="Vardas" value="{{ old('first_name') }}">
                                </div>
                                <div class="form-group required">
                                    <label for="last_name">Pavardė <sup>*</sup> </label>
                                    <input required type="text" class="form-control" name="last_name" id="last_name" placeholder="Pavardė" value="{{ old('last_name') }}">
                                </div>
                                <div class="form-group required">
                                    <label for="address">Adresas <sup>*</sup> </label>
                                    <input required type="text" class="form-control" name="address" id="address" placeholder="Adresas" value="{{ old('address') }}">
                                </div>
                                <div class="form-group required">
                                    <label for="city">Miestas <sup>*</sup> </label>
                                    <input required type="text" class="form-control" name="city" id="city" placeholder="Vilnius" value="{{ old('city') }}">
                                </div>
                                <div class="form-group required">
                                    <label for="postal_code">Pašto kodas</label>
                                    <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Pašto kodas" value="{{ old('postal_code') }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="additional_info">Papildoma informacija</label>
                                    <textarea rows="3" cols="26" name="additional_info" id="additional_info" class="form-control">{{ old('additional_info') }}</textarea>
                                </div>
                                <div class="form-group required">
                                    <label for="phone_number">Telefono numeris <sup>*</sup></label>
                                    <input required type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') ?: 86 }}">
                                </div>
                                <div class="form-group required">
                                    <label for="title">Pavadinimas, kaip vadinsis ši forma. <sup>*</sup></label>
                                    <input required type="text" placeholder="Adresas #1" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12 clearfix">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-map-marker"></i> Išsaugoti adresą</button>
                            </div>
                            {{ csrf_field() }}
                        </form>
                        <div class="col-lg-12 col-xs-12  clearfix ">
                            <ul class="pager">
                                <li class="previous pull-right"><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Grįžti į parduotuvę</a></li>
                                <li class="next pull-left"><a href="{{ route('profile.home') }}">&larr; Grįžti į paskyrą</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-5">
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