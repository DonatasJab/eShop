<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3>Pagalba</h3>
                    <ul>
                        <li class="supportLi">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <h4><a class="inline" href="callto:+37063694594"> <strong> <i class="fa fa-phone"></i> +370-636-94594 </strong> </a></h4>
                            <h4><a class="inline" href="mailto:info@eshop.lt"> <i class="fa fa-envelope-o"></i> info@eshop.lt</a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Kategorijos</h3>
                    <ul>
                        @foreach($categories as $category)
                            <?php $i = 0; $i++; ?>
                            <li><a href="{{ route('category', ['category' => $category->slug]) }}">{{ $category->title }}</a></li>
                            @break(count($i) >= 4)
                        @endforeach
                    </ul>
                </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Informacija</h3>
                    <ul class="list-unstyled footer-nav">
                        <li><a href="#">D.U.K</a></li>
                        <li><a href="{{ route('terms') }}">Terminai ir sąlygos</a></li>
                        <li><a href="{{ route('aboutus') }}">Apie mus</a></li>
                        <li><a href="{{ route('contacts') }}">Kontaktai</a></li>

                    </ul>
                </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3>Paskyra</h3>
                        @if(Auth::check())
                            <ul>
                                <li><a href="{{ route('profile.home') }}">Mano profilis</a></li>
                                <li><a href="{{ route('profile.orders') }}">Užsakymų sąrašas</a></li>
                                <li><a href="{{ route('profile.addresses') }}">Mano adresai</a></li>
                                <li><a href="{{ route('profile.settings') }}">Nustatymai</a></li>
                            </ul>
                        @else
                            <p>Norint naudotis paskyra turit prisijungti</p>
                        @endif
                    </div>

                <div style="clear:both" class="hide visible-xs"></div>

                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3>Naujienlaiškis</h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="El. paštas">
                                <button class="btn bg-gray" type="button">Užsiprenumeruoti<i class="fa fa-long-arrow-right"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; eShop 2016. Visos teisės saugomos. </p>

            <div class="pull-right paymentMethodImg">
                <img height="30" class="pull-right" src="{{ URL::asset('images/site/payment/master_card.png') }}" alt="Master card"> 
                <img height="30" class="pull-right" src="{{ URL::asset('images/site/payment/visa_card.png') }}" alt="Visa card">
                <img height="30" class="pull-right" src="{{ URL::asset('images/site/payment/paypal.png') }}" alt="PayPal">
                <img height="30" class="pull-right" src="{{ URL::asset('images/site/payment/american_express_card.png') }}" alt="American express"> 
                <img height="30" class="pull-right" src="{{ URL::asset('images/site/payment/discover_network_card.png') }}" alt="Discover network">
                <img height="30" class="pull-right" src="{{ URL::asset('images/site/payment/google_wallet.png') }}" alt="Google wallet">
            </div>
        </div>
    </div>
</footer>
