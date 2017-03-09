@extends('template')

@section('content')
    <section>
        <div class="container main-container headerOffset">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <header>
                        <h1 class="section-title-inner" id="errors"><span><i class="fa fa-lock"></i> Prisijungimas</span></h1>
                    </header>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <h2 class="block-title-2"> Registracija</h2>
                            <form action="{{ route('auth.register') }}" method="POST" class="registeris" id="finish">
                                <div class="form-group reg-username{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <input type="text" name="username" class="form-control input" size="20" placeholder="Slapyvardis" value="{{ old('username') }}">
                                    @if($errors->has('username'))
                                        <span class="help-block">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group reg-email{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="text" name="email" class="form-control input" size="20" placeholder="El. paštas" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group reg-password{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" class="form-control input" size="20" placeholder="Slaptažodis">
                                    @if($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group reg-password{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password_confirmation" class="form-control input" size="20" placeholder="Pakartokit slaptažodį">
                                    @if($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Registruotis</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <h2 class="block-title-2"><span>Jau užsiregistravę?</span></h2>
                            <form action="{{ route('auth.login') }}" method="POST" class="loginas">
                                <div class="form-group login-username{{ $errors->has('login-username') ? ' has-error' : '' }}">
                                    <input type="text" name="login-username" class="form-control input" size="20" placeholder="Slapyvardis" value="{{ old('login-username') }}">
                                    @if($errors->has('login-username'))
                                        <span class="help-block">{{ $errors->first('login-username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group login-password{{ $errors->has('login-password') ? ' has-error' : '' }}">
                                    <input type="password" name="login-password" class="form-control input" size="20" placeholder="Slaptažodis">
                                    @if($errors->has('login-password'))
                                        <span class="help-block">{{ $errors->first('login-password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div>
                                        <div class="checkbox login-remember">
                                            <label>
                                                <input name="remember" value="forever" checked="checked" type="checkbox"> Prisiminti mane
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Prisijungti</button>
                                </div>
                                {{ csrf_field() }}
                            </form>
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