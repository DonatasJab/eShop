@extends('template')

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <header>
                        <h1 class="section-title-inner"><span><i class="glyphicon glyphicon-user"></i> Jūsų asmeninė informacija</span></h1>
                    </header>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="block-title-2"> Jeigu pasikeitė jūsų asmeninė informacija, prašome ją atnaujinti.</h2>
                            <p class="required"><sup>*</sup> Privalomi laukeliai</p>
                        </div>
                        <form action="{{ route('profile.settings') }}" method="POST">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group required">
                                    <label for="first_name">Vardas <sup>*</sup> </label>
                                    <input required type="text" class="form-control" name="first_name" id="first_name" placeholder="Vardas" value="{{ $settings->first_name }}">
                                </div>
                                <div class="form-group required">
                                    <label for="last_name">Pavardė <sup>*</sup> </label>
                                    <input required type="text" class="form-control" name="last_name" id="last_name" placeholder="Pavardė" value="{{ $settings->last_name }}">
                                </div>
                                <div class="form-group required">
                                    <label for="email">El. paštas <sup>*</sup></label>
                                    <input required type="email" class="form-control" name="email" id="email" placeholder="el.pastas@mail.lt" value="{{ $settings->email }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group required">
                                    <label for="password">Dabartinis slaptažodis <sup>*</sup></label>
                                    <input type="password" value="123456" id="password" name="password" class="form-control">
                                </div>
                                <div class="form-group required">
                                    <label for="newpassword">Naujas slaptažodis </label>
                                    <input type="password" name="newpassword" id="newpassword" class="form-control">
                                </div>
                                <div class="form-group required">
                                    <label for="newpassword_confirmation">Pakartokit slaptažodį </label>
                                    <input type="password" name="newpassword_confirmation" id="newpassword_confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <p class=" clearfix">
                                        <input type="checkbox" value="1" name="newsletter" id="newsletter">
                                        <label for="newsletter">Užsiprenumeruoti naujienlaiškį</label>
                                    </p>

                                    <p class="clearfix">
                                        <input type="checkbox" value="1" id="optin" name="optin">
                                        <label for="optin">Gauti specialių pasiūlymų iš mūsų partnerių</label>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn   btn-primary"><i class="fa fa-save"></i> &nbsp; Atnaujinti</button>
                            </div>
                            {{ csrf_field() }}
                        </form>
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